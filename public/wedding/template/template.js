

// ---------- Start Your Journey (Function) --------------------------------------------------
function startTheJourney() {
    $('.top-cover').eq(0).addClass('hide');
    $('body').eq(0).css('overflow', 'visible');

    if (typeof playMusicOnce === 'function') playMusicOnce();

    setTimeout(function() {
        // Looping the aos animate
        $('.aos-init').each(function(i, el){
            // If the parent is not 'Top Cover'
            if ($(el).closest('.top-cover').length == 0) {

                var duration = parseInt($(el).attr('data-aos-duration') || 0);
                var delay = parseInt($(el).attr('data-aos-delay') || 0);

                if ($(el).hasClass('aos-animate')) {
                    // Remove 'aos-animate' class
                    $(el).css({
                        opacity: 0,
                        "transition-duration": 0 + "ms"
                    }).removeClass('aos-animate');

                    // wait for delay
                    setTimeout(function(){
                        // Add 'aos-amimate' class
                        $(el).css({
                            opacity: 1,
                            "transition-duration": duration + "ms"
                        }).addClass('aos-animate');
                    }, delay);
                }
            }
        });
    }, 50);

    setTimeout(function(){
        $('.top-cover').eq(0).remove();
    }, 3000);
}

// ---------- ALERT --------------------------------------------------
var $alert = $('#alert');                           // alert
var $alertClose = $('#alert .alert-close');         // alert close
var $alertText = $('#alert .alert-text');           // Alert Text

// ---------- Hide Alert (Function) --------------------------------------------------
function hideAlert() {
    $alert.removeClass();           // Remove All Class
    $alert.addClass('alert hide');                                        // hiding alert
}

// ---------- Show Alert (Function) --------------------------------------------------
function showAlert(message, status) {
    if (status != '') {
        $alert.removeClass();     // Remove All Class
        $alert.addClass('alert show ' + status);
        $alertText.text(message);
        setTimeout(hideAlert, 3000);
    }
}

// ---------- Copy to  (Function) --------------------------------------------------
function copyToClipboard(text) {
    if (!navigator.clipboard) {
        // ExecCommand
        var dummy = document.createElement("textarea");

        // to avoid breaking orgain page when copying more words
        // cant copy when adding below this code
        // dummy.style.display = 'none'
        document.body.appendChild(dummy);

        //Be careful if you use texarea. setAttribute('value', value), which works with "input" does not work with "textarea". – Eduard
        dummy.value = text;
        dummy.select();

        document.execCommand("copy");
        document.body.removeChild(dummy);

        // Show Alert
        return showAlert('Berhasil di salin ke papan klip', 'success');
    } else {
        // Clipboard API
        return navigator.clipboard.writeText(text).then(() => {
            showAlert('Berhasil di salin ke papan klip', 'success');
        });
    }
}

// ---------- URLify  (Function) --------------------------------------------------
function urlify(text) {
    var lineBreak = '';
    var urlRegex = /(https?:\/\/[^\s]+)/g;
    return text.replace(urlRegex, function(url) {
        var finalURL = url;
        if (url.indexOf('<br>') > -1) {
            finalURL = url.replace(/<br>/g, '');
            lineBreak = '<br>';
        }
        return '<a href="' + finalURL + '" target="_blank">' + finalURL + '</a>' + lineBreak;
    });
    // or alternatively
    // return text.replace(urlRegex, '<a href="$1">$1</a>')
}

// ---------- Copy Account [ON CLICK] ---------------------------------------------------------------
$(document).on('click', '.copy-account', function(e){
    e.preventDefault();
    var book = $(this).closest('.book');
    var number = $(book).find('.account-number');
    copyToClipboard(number.html());
});

// ---------- Number Format (Variables) ---------------------------------------------------------------
var numberFormat = new Intl.NumberFormat('ID', {
    // style: 'currency',
    // currency: 'IDR',
});

// ---------- Disabled Dragging an image [ON DRAGSTART] -----------------------------------------------
$('img').on('dragstart', function(e){
    e.preventDefault();
});

// // ---------- Textarea [ON KEY, FOCUS] -----------------------------------------------------------------
// $(document).on('keyup focus', 'textarea', function(e){
//     e.preventDefault();
//     this.style.height = '1px';
//     this.style.height = (this.scrollHeight) + 'px';
// }).on('focusout', 'textarea', function(e){
//     e.preventDefault();
//     this.style.height = 24 + 'px';
// });




/*  ==============================
        CALLING
============================== */

// ---------- Sending Data (Only) By AJAX --------------------------------------------------
function ajaxCall(data, callback) {
    if (data) {
        $.ajax({
            type: 'post',
            dataType: 'json',
            data: data,
            success: function(result){
                if (result.error === false) {
                    callback(result);
                } else {
                    showAlert(result.message, 'error');
                }
            },
        });
    }
}

// ---------- Sending Data And Media BY AJAX --------------------------------------------------
function ajaxMultiPart(data, beforeSend, callback) {
    if (data) {
        $.ajax({
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            data: data,
            beforeSend: beforeSend,
            success: function(result){
                if (result.error === false) {
                    callback(result);
                } else {
                    showAlert(result.message, 'error');
                    $('.gift-next').prop('disabled', false);
                    $('.gift-submit').prop('disabled', false);
                    $('.gift-submit').html('Konfirmasi');
                }
            },
        });
    }
}



/*  ==============================
        COVERS
============================== */
// ---------- Slider Options (Function) --------------------------------------------------
function sliderOptions(options) {
    let configs = {
        centerMode: true,
        slidesToShow: 1,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        dots: false,
        arrows: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        draggable: false,
        touchMove: false
    }

    // combine options to configs
    if (typeof options === 'object') {
        configs = {...configs, ...options}
    }

    return configs;
};

// Is Cover Played
var isCoverPlayed = false;

// COVER CONFIGURATION
(function coverConfiguration() {

    var windowWidth = $(window).width(),                                // Window Width
        smallScreen = window.matchMedia( "(max-width: 1024px)" );       // Small screen

    // If width matched
    if (windowWidth > '1020' && windowWidth < '1030') {
        isCoverPlayed = false;      // cover is not played
    }

    // COVERS
    if (typeof window.COVERS != 'undefined') {
        // COVERS LOOP
        $(window.COVERS).each(function(i, cover){

            var position = cover.position,      // position
                details = cover.details,        // details
                element = cover.element,        // element
                coverInner = $(element).closest('.cover-inner'),        // Cover Inner
                options = cover.options || '';                          // options

            // If element does exist
            if ($(element).length > 0) {
                // if the position is MAIN
                if (position == 'MAIN') {
                    // COVERS
                    // If Cover Inner does exist
                    if (coverInner.length) {
                        $(coverInner).removeClass('covers');        // Remove class 'covers'
                        if (details.desktop != '' || details.mobile != '') {
                            $(coverInner).addClass('covers');       // Add Class to cover-inner
                        }
                    }
                }

                // if cover has been slicked
                if ($(element).hasClass('slick-initialized')) {
                    $(element).slick('unslick');      // stop the slider
                }
                $(element).html('');      // empty element

                // if the small screen does not match (DESKTOP SIZE)
                if (!smallScreen.matches) {
                    // if cover desktop is not empty
                    if (details.desktop != '') {
                        // if the position is MAIN and the cover is not played
                        if (position == 'MAIN' && !isCoverPlayed) {
                            isCoverPlayed = true;       // Played the cover
                        }

                        $(element).append(details.desktop);     // Append new cover elements into cover
                        $(element).slick(sliderOptions(options));            // Start the slider
                        if (coverInner.length) $(coverInner).removeClass('mobile').addClass('desktop');     // Add class desktop
                    }
                } else {
                    // the screen is small (MOBILE SIZE)
                    // if cover desktop is not empty
                    if (details.mobile != '') {
                        // if the position is MAIN and the cover is not played
                        if (position == 'MAIN' && !isCoverPlayed) {
                            isCoverPlayed = true;       // Played the cover
                        }

                        $(element).append(details.mobile);     // Append new cover elements into cover
                        $(element).slick(sliderOptions(options));            // Start the slider
                        if (coverInner.length) $(coverInner).removeClass('desktop').addClass('mobile');     // Add class desktop
                    }
                }
            }
        });
    }
}());



/*  ================================================
    SAVE THE DATE
============================================= */
// ----------- COUNTDOWN (Function) ------------------------------------------------------
(function countdown(){
    if (typeof window.EVENT != 'undefined') {
        var schedule = window.EVENT,
            event = new Date(schedule * 1000).getTime(),
            start = setInterval(rundown, 1000);

        // Rundown
        function rundown() {
            var now = new Date().getTime(),
                distance = event - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24)),                            // days
                hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),      // hours
                minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),              // minutes
                seconds = Math.floor((distance % (1000 * 60)) / 1000);                          // seconds

            if (distance < 0) {
                clearInterval(start);
                $('.count-day').text('0');
                $('.count-hour').text('0');
                $('.count-minute').text('0');
                $('.count-second').text('0');
            } else {
                $('.count-day').text(days);
                $('.count-hour').text(hours);
                $('.count-minute').text(minutes);
                $('.count-second').text(seconds);
            }
        }
    }
}());



/*  ==============================
        WEDDING GIFT
============================== */

// ---------- Choose Bank (Function) --------------------------------------------------
function chooseBank(value) {
    // Data Book
    $('[data-book]').each(function(i, book){
        // Hide
        $(book).hide();
        // if book is exist
        if ($(book).attr('data-book') == value) {
            $(book).fadeIn();
        }
    });
}

// ---------- Choose Bank [ON CHANGE] --------------------------------------------------
$(document).on('change', 'select[name="choose_bank"]', function(e){
    e.preventDefault();
    chooseBank($(this).val());
});

// ---------- Gift Picture [ON CLICK] --------------------------------------------------
$(document).on('click', 'div[data-upload="gift-picture"]', function(e){
    e.preventDefault();
    $('#gift-form input[name="picture"]').click();
});

// ---------- Picture insinde Gift [ON CHANGE] --------------------------------------------------
$(document).on('change', '#gift-form input[name="picture"]', function(e){
    e.preventDefault();
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function(er) {
            $('[data-image="uploaded-gift"]').fadeIn();
            $('[data-image="uploaded-gift"]').attr('src', er.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
});

// ---------- Gift Next [ON CLICK] --------------------------------------------------
$(document).on('click', '.gift-next', function(e){
    e.preventDefault();
    var form = $('#gift-form');

    if ($(form).find('[name="name"]').val() == '') {
        $(form).find('[name="name"]').focus();
        return;
    }
    if ($(form).find('[name="account_name"]').val() == '') {
        $(form).find('[name="account_name"]').focus();
        return;
    }
    if ($(form).find('[name="message"]').val() == '') {
        $(form).find('[name="message"]').focus();
        return;
    }
    if ($(form).find('[name="inserted_nominal"]').val() <= 0) {
        $('.insert-nominal').slideDown();
        $(form).find('[name="inserted_nominal"]').focus();
        return;
    }

    $('.gift-details').hide();
    $('.gift-picture').fadeIn();
});

// ---------- Gift Back [ON CLICK] --------------------------------------------------
$(document).on('click', '.gift-back', function(e){
    e.preventDefault();
    $('.gift-picture').hide();
    $('.gift-details').fadeIn();
});

// ---------- Gift Form [ON SUBMIT] --------------------------------------------------
$(document).on('submit', '#gift-form', function(e){
    var data = new FormData(this);
    ajaxMultiPart(data, function(){
        $('.gift-next').prop('disabled', true);
        $('.gift-submit').prop('disabled', true);
        $('.gift-submit').html('<i class="fas fa-spinner fa-spin"></i>');
    }, function(result){
        $(this).trigger('reset');
        showAlert(result.message, 'success');
        setTimeout(function(){
            window.location.reload(true);
        }, 1000);
    });
    return false;
});





// Select Bank
var select_bank = function(e) {
    e.preventDefault();
    var bankId = $(this).val();
    $('.bank-item').removeClass('show');
    $('#savingBook' + bankId).addClass('show');
}

$(document).on('change', 'select#selectBank', select_bank);

// Wedding Gift Upload File
var wgu_file = function(e) {
    e.preventDefault();
    var input = $(this).attr('data-wgu-file');
    $(input).trigger('click');
}

$(document).on('click', '[data-wgu-file]', wgu_file);

// Wedding Gift Picture
var wgu_handle_picture = function(e) {
    var preview = $(this).attr('data-wgu-preview');
    if (e.target.files.length > 0) {
        var src = URL.createObjectURL(e.target.files[0]);
        $(preview).attr('src', src);

        $('.wgu-description').removeClass('show');
        $('.wgu-img-wrap').addClass('show');
    }
}

$(document).on('change', 'input#weddingGiftPicture', wgu_handle_picture);

// Wedding Gift Next
var wedding_gift_next = function(e) {
    e.preventDefault();
    var width = $('#weddingGiftForm').width();
    var marginLeft = parseFloat($('.wedding-gift__first-slide').css('margin-left'));

    var newMarginLeft = marginLeft - width;

    $('.wedding-gift__first-slide').css('margin-left', newMarginLeft + "px");
}

$(document).on('click', '.wedding-gift__next', wedding_gift_next);

// Wedding Gift Prev
var weeding_gift_prev = function(e) {
    e.preventDefault();
    var width = $('#weddingGiftForm').width();
    var marginLeft = parseFloat($('.wedding-gift__first-slide').css('margin-left'));

    var newMarginLeft = marginLeft + width;
    if (newMarginLeft < 0) newMarginLeft = 0;

    $('.wedding-gift__first-slide').css('margin-left', newMarginLeft + "px");
}

$(document).on('click', '.wedding-gift__prev', weeding_gift_prev);




/*  ==============================
        MUSIC
============================== */
var isMusicAttemptingToPlay = false,
    isMusicPlayed           = false,
    playBoxAnimation,
    pauseBoxAnimation,
    pauseMusic,
    playMusic;

// Background Music
(function backgroundMusic() {
    if (typeof window.MUSIC != 'undefined') {
        var url = window.MUSIC.url,
            box = window.MUSIC.box;

        // if url is not empty and the box so
        if (url != '') {
            var backgroundMusic = document.createElement("audio");    // Background Music
            backgroundMusic.autoplay = true;
            backgroundMusic.muted = true;
            backgroundMusic.loop = true;
            backgroundMusic.load();
            backgroundMusic.src = url;

            // Playing Box Animation
            playBoxAnimation = function() {
                if (!$(box).hasClass('playing')) {
                    $(box).addClass('playing');
                }

                if ($(box).css('animationPlayState') != 'running') {
                    $(box).css('animationPlayState', 'running');
                }
            }

            // Pause Box Animation
            pauseBoxAnimation = function() {
                if ($(box).hasClass('playing')) {
                    if ($(box).css('animationPlayState') == 'running') {
                        $(box).css('animationPlayState', 'paused');
                    }
                }
            }

            // Pause Music
            pauseMusic = function() {
                backgroundMusic.pause();
                pauseBoxAnimation();

                isMusicAttemptingToPlay = true;
                isMusicPlayed = false;
            };

            // Play Music
            playMusic = function() {
                isMusicAttemptingToPlay = false;
                backgroundMusic.muted = false;
                var promise = backgroundMusic.play();

                if (promise !== undefined) {
                    promise.then(_ => {
                        isMusicPlayed = true;
                        // console.log('Audio berhasil diputar');
                        playBoxAnimation();
                    }).catch(error => {
                        isMusicPlayed = false;
                        // console.log('Tidak dapat memutar audio');
                        pauseBoxAnimation();
                        // console.log(error);
                    });
                }
            };

            // Music Box
            $(document).on('click', box, function(e) {
                e.preventDefault();

                if (isMusicPlayed) {
                    pauseMusic();
                } else {
                    playMusic();
                }
            });

            // Pause Audio When Click Video Button
            $(document).on('click', '.play-btn, .play-youtube-video', function(e){
                e.preventDefault();
                if (isMusicPlayed) return pauseMusic();
            });

            // Is Box Hidden?
            var prevScrollpos = window.pageYOffset;
            var isBoxHidden = false;
            var boxTimeout;

            // Show Music Box
            var showMusicBox = function() {
                // Show Music Box
                $(box).removeClass('hide');                     // Showing the box
                isBoxHidden = false;                            // Box is not hidden

                clearTimeout(boxTimeout);                       // Clear Timeout
            }

            // Hide Music Box
            var hideMusicBox = function() {
                // Hide Music Box
                $(box).addClass('hide');                        // Hiding the box
                isBoxHidden = true;                             // Box is hidden

                clearTimeout(boxTimeout);                       // Clear Timeout
                boxTimeout = setTimeout(showMusicBox, 5000);    // Set Timeout
            }

            // Window On Scroll
            $(window).on('scroll', function(){
                var currentScrollPos = window.pageYOffset;

                if (prevScrollpos > currentScrollPos) {
                    if (isBoxHidden) showMusicBox();
                } else {
                    if (!isBoxHidden) hideMusicBox();
                }

                prevScrollpos = currentScrollPos;
            });

        }
    }
}());

// ---------- Play Music Once --------------------------------------------------
function playMusicOnce() {
    // Play Music is defined
    if (typeof playMusic === 'function') {
        // Is music NOT attemp to play && Music NOT played yet
        if (!isMusicAttemptingToPlay && !isMusicPlayed) {
            setTimeout(playMusic, 500);
        }
    }
}

// Window On Load
$(window).on("load click scroll", function(e) {
    // Play Music Once
    playMusicOnce();
});

// Trigger Music to play when document is scroled or clicked
$(document).on("click scroll", function(e) {
    // Play Music Once
    playMusicOnce();
});

// Document is ready!
$(document).ready(function(){

    setTimeout(() => {
        $('body').trigger('click');
    }, 1000);

});



/*  ==============================
        BOOK CONFIGURATION
============================== */
// ---------- SELECTIZE --------------------------------------------------
(function bookConfiguration() {
    if (typeof window.BOOKS != 'undefined') {
        var books = window.BOOKS,
            template = '',
            allBank = [];

        // if books are not empty
        if (books != '') {
            // Looping
            for (var i = 0; i < books.length; i++) {
                template = {
                    'id': books[i]['id'],
                    'title': books[i]['title'],
                    'credential': books[i]['credential']
                }
                allBank.push(template);
            }

            // Options
            var options = {
                maxItems: 1,
                valueField: 'id',
                labelField: 'title',
                searchField: 'title',
                options: allBank,
                create: false,
                render: {
                    item: function(item, escape) {
                        return '<div>' +
                            (item.title ? '<p>' + escape(item.title) + '</p>' : '') +
                        '</div>';
                    },
                    option: function(item, escape) {
                        var label = item.title;
                        var desc = item.credential;
                        return '<div class="item">' +
                            '<p style="font-size: 14px;"><strong>' + escape(label) + '</strong></p>' +
                            '<p style="font-size: 12px;"><strong>' + escape(desc) + '</strong></p>' +
                        '</div>';
                    }
                },
                onInitialize: function() {
                    var instance = this;

                    // disabled input
                    instance.$control_input.attr('readonly', 'readonly');

                    // Document onClick
                    $(instance.$control).off('click').on('click', function(e){
                        e.stopPropagation();

                        // is focused
                        if (instance.isFocused) return false;
                    });
                }
            };

            // Choose Bank Default
            if ($('select[name="choose_bank"]').length > 0) {
                var select = $('select[name="choose_bank"]').selectize(options);
                var selectize = $(select)[0].selectize;
                if (allBank.length > 0) {
                    selectize.setValue(allBank[0]['id'], 1);
                }
                $(".selectize-input input").attr('readonly','readonly');
            }
        }
    }
}());


/*  ==============================
        PROTOCOL
============================== */
(function protocolConfiguration(){
    // if protocol is not undefined
    if (typeof window.PROTOCOL != 'undefined') {
        var protocolSlider = window.PROTOCOL.slider,
            protocolDots = window.PROTOCOL.dots;

        var protocolOptions = {
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
                variableWidth: true,
                slidesToScroll: 1,
                swipeToSlide: true,
                autoplay: true,
                autoplaySpeed: 3000,
                infinite: true,
                speed: 700,
                cssEase: 'ease-in-out',
                dots: false,
                arrows: false,
                asNavFor: protocolDots,
                pauseOnFocus: false,
                pauseOnHover: false,
                draggable: true,
                // touchMove: false,
                responsive: [
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
        }

        var protocolDotsOptions = {
                centerMode: true,
                variableWidth: true,
                slidesToScroll: 1,
                swipeToSlide: true,
                autoplay: true,
                autoplaySpeed: 3000,
                infinite: true,
                speed: 700,
                cssEase: 'ease-in-out',
                dots: false,
                arrows: false,
                asNavFor: protocolSlider,
                pauseOnFocus: false,
                pauseOnHover: false,
                draggable: true,
        }

        if ($(protocolSlider).hasClass('slick-initialized')) $(protocolSlider).slick('unslick');     // unslick the slider
        if ($(protocolDots).hasClass('slick-initialized')) $(protocolDots).slick('unslick');    // Unslick the dots

        $(protocolSlider).slick(protocolOptions);       // slick the slider
        $(protocolDots).slick(protocolDotsOptions);     // slick the dots

        // Before Change
        $(protocolSlider).on('beforeChange', function(event, slick, currentSlide, nextSlide){
            if ( nextSlide == 0 ) {
                var cls = 'slick-current slick-active' + ( protocolOptions.centerMode ? ' slick-center' : '' );

                setTimeout(function() {
                    $( '[data-slick-index="' + slick.$slides.length + '"]' ).addClass( cls ).siblings().removeClass( cls );
                    for (var i = slick.options.slidesToShow - slick.options.slidesToShow; i >= 0; i--) {
                        $( '[data-slick-index="' + i + '"]' ).addClass( cls );
                    }
                }, 10 );
            }
        });
    }
}());


/*  ==============================
        PERSON
============================== */
var hideInfoTimeout;                // Hide Timeout Out

// Toggle Person Info
function togglePersonInfo() {
    var person = $('#person'),
        greeting = $(person).find('.person-greeting'),
        info = $(person).find('.person-info');

    if ($(person).length) {

        var showGreeting = function() {
            $(greeting).addClass('show');
        }
        var hideGreeting = function() {
            $(greeting).removeClass('show');
        }
        var showInfo = function() {
            $(info).addClass('show');
            hideInfoTimeout = setTimeout(function(){
                hideInfo();         // Hide Info
                showGreeting();     // Show Greeting
            }, 10000);
        }
        var hideInfo = function() {
            $(info).removeClass('show');
            if (typeof hideInfoTimeout != 'undefined') {
                clearTimeout(hideInfoTimeout);           // Clear Timeout
            };
        }

        $(greeting).hasClass('show') ? hideGreeting() : showGreeting();            // Toggle Greeting
        $(info).hasClass('show') ? hideInfo() : showInfo();                        // Toggle Info

        if ($(greeting).hasClass('show') === false && $(info).hasClass('show') === false) showGreeting();       // Default Set
        if ($(greeting).hasClass('show') && $(info).hasClass('show')) hideInfo();                               // If both is showed
    }
}

$(function() {
    setTimeout(togglePersonInfo, 1000);
});



/*  ==============================
        GALLERY SLIDER SYNCING
============================== */
// SLIDER SYNCING
function startSliderSyncing() {
    if ($('.slider-syncing__preview').length && $('.slider-syncing__nav').length) {

        var sliderSyncingPreviewOptions = {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-syncing__nav'
            }
        var sliderSyncingNavOptions = {
                slidesToShow: 1,
                slidesToScroll: 1,
                asNavFor: '.slider-syncing__preview',
                arrows: false,
                dots: false,
                centerMode: true,
                focusOnSelect: true,
                speed: 750,
                variableWidth: true,
                infinite: true,
            }

        var sliderSyncingPreview = $('.slider-syncing__preview');
        var sliderSyncingNav = $('.slider-syncing__nav');

        if ($(sliderSyncingPreview).hasClass('slick-initialized')) $(sliderSyncingPreview).slick('unslick');
        if ($(sliderSyncingNav).hasClass('slick-initialized')) $(sliderSyncingNav).slick('unslick');

        $(sliderSyncingPreview).slick(sliderSyncingPreviewOptions);
        $(sliderSyncingNav).slick(sliderSyncingNavOptions);

    }
}

// SINGLE SLIDER
function gallerySingleSlider(configs) {
    if (typeof window.GALLERY_SINGLE_SLIDER != 'undefined' && window.GALLERY_SINGLE_SLIDER === true) {

        var singleSliderContainer = $('#singleSliderContainer');        // Single Slider Container

        // custom container
        if (typeof configs !== 'undefined' && configs.hasOwnProperty("container")) {
            singleSliderContainer = $(configs.container);
        }

        if (singleSliderContainer.length) {
            var singleSliderOptions = {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: false,
                    centerMode: true,
                    speed: 300,
                    variableWidth: true,
                    infinite: false,
                    touchThreshold: 5000,
                    swipeToSlide: false
            }

            // configs is an object
            if (typeof configs === 'object') singleSliderOptions = {...singleSliderOptions, ...configs};


            if ($(singleSliderContainer).hasClass('slick-initialized')) $(singleSliderContainer).slick('unslick');      //  Unslick if it has initialized
            var singleSlider = $(singleSliderContainer).slick(singleSliderOptions);            // Start new slider

            // Single Slider On Wheel
            singleSlider.on('wheel', (function(e) {
                e.preventDefault();

                if (e.originalEvent.deltaY > 0) {
                  $(this).slick('slickNext');
                } else {
                  $(this).slick('slickPrev');
                }
            }));

            // is Sliding
            var isSliding = false;

            // Before Change
            $(singleSliderContainer).on('beforeChange', function(event, slick, currentSlide, nextSlide){
                isSliding = true;

                if ( nextSlide == 0 ) {
                    var cls = 'slick-current slick-active' + ( singleSliderOptions.centerMode ? ' slick-center' : '' );

                    if (singleSliderOptions.infinite === true) {
                        setTimeout(function() {
                            $( '[data-slick-index="' + slick.$slides.length + '"]' ).addClass( cls ).siblings().removeClass( cls );
                            for (var i = slick.options.slidesToShow - slick.options.slidesToShow; i >= 0; i--) {
                                $( '[data-slick-index="' + i + '"]' ).addClass( cls );
                            }
                        }, 10 );
                    }
                }

            });

            // After Change
            $(singleSliderContainer).on('afterChange', function(event, slick, currentSlide){
                isSliding = false;
            });

            // Prevent Trigger Clicking While Swiping
            singleSlider.find('.singleSliderPicture > .anchor').click(function(e){
                if (isSliding) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                    return;
                }
            });

            // Single Slider Picture
            $(singleSliderContainer).find('.singleSliderPicture').each(function(i, picture){
                var width = $(this).width();
                var height = width + (width / 3);

                $(picture).css('--width', width + 'px');
                $(picture).css('--height', height + 'px');
            });

        }
    }
}


// KAT GALLERY MODERN
function galleryKatModern() {
    if (typeof window.GALLERY_MODERN != 'undefined' && window.GALLERY_MODERN === true) {
        var galleryModern = $('#katGalleryModern');
        if (galleryModern.length) {

            var imgWrap = $(galleryModern).find('.modern__img-wrap').get(0);
            var modernList = $(galleryModern).find('.modern__list').children();
            var modulus = modernList.length % 3;

            // Modern List
            if (modernList.length) {

                // Moder List
                $(modernList).each(function(i, list){
                    var margin = 2.5;
                    var width = $(list).width();
                    width = width - (margin * 2);
                    var height = width + (width / 3);

                    $(list).css('width', width + 'px');
                    $(list).css('height', height + 'px');
                    $(list).css('margin', margin + 'px');

                    if (modulus > 0 && (modernList.length - 1) == i) {
                        $(list).css('flex-grow', '1');
                    }
                });

                // Modern List On Click
                $(modernList).on('click', function(e){
                    e.preventDefault();
                    var me = this;
                    var src = $(me).attr('href');

                    if ($(me).hasClass('selected') === false) {
                        // Modern List
                        $(modernList).each(function(i, list){
                            $(list).removeClass('selected');
                        });
                        $(me).addClass('selected');             // Selected

                        if (typeof imgWrap != 'undefined') {
                            var img = $(imgWrap).children('img');
                            $(img).removeClass('show');

                            setTimeout(function(){
                                $(img).attr('src', src);

                                setTimeout(function(){
                                    $(img).addClass('show');
                                }, 375);

                            }, 350);
                        }
                    }
                });

                // Trigger first element
                $(modernList).eq(0).trigger('click');

            }

            // Img Wrap
            if (typeof imgWrap != 'undefined') {
                var margin = 2.5;
                var width = $(imgWrap).width();
                width = width - (margin * 2);
                var height = width + (width / 3);

                $(imgWrap).css('width', width + 'px');
                $(imgWrap).css('height', height + 'px');
                $(imgWrap).css('margin', margin + 'px auto');
            }
        }
    }
}



/*  ==============================
        OTHERS
============================== */
// ---------- Modal Video ---------------------------------------------------------------
var modal_video_options = {
        youtube: {
                autoplay: 1,
                cc_load_policy: 1,
                color: null,
                controls: 1,
                disableks: 0,
                enablejsapi: 0,
                end: null,
                fs: 1,
                h1: null,
                iv_load_policy: 1,
                // list: null,
                listType: null,
                loop: 0,
                modestbranding: null,
                mute: 0,
                origin: null,
                // playlist: null,
                playsinline: null,
                rel: 0,
                showinfo: 1,
                start: 0,
                wmode: 'transparent',
                theme: 'dark',
                nocookie: false,
            }
    };


$('.play-btn').modalVideo(modal_video_options);
$('.play-youtube-video').modalVideo(modal_video_options);


// ---------- AOS (Animation) ------------------------------------------------------
var AOSOptions = {
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 0, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 0, // the delay on throttle used while scrolling the page (advanced)

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 10, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
}

// Run AOS on Load
$(window).on('load', function () {
    AOS.refresh();
});

$(function() {
    AOS.init(AOSOptions);
});

$(window).on("scroll", function () {
    AOS.init(AOSOptions);
});


// ---------- LIGHT GALLERY --------------------------------------------------
$(function(){
    lightGallery(document.getElementById('lightGallery'), {
        download: false,
    });

    showGalleries();
});

// SHOW GALLERY
function showGalleries() {
    $('.lightgallery').each(function(i, gallery) {
        lightGallery(gallery, {
            download: false,
        });
    });
};



// Customization Template
function customizationTemplate(data) {

    var customFontsClass = '';

    // Selected Fonts
    if (data.selectedFonts) {
        Object.entries(data.selectedFonts).forEach(([key, field]) => {
            // css variable
            var cssvar = key.split(/(?=[A-Z])/).join('-').toLowerCase();

            // Reset values
            $('body').css({
                [`--${cssvar}-family`]: '',
                [`--${cssvar}-style`]: '',
                [`--${cssvar}-weight`]: '',
                [`--${cssvar}-size`]: '',
                [`--${cssvar}-lettercase`]: ''
            });

            // Priority font family
            if (field.family && field.category) {
                $('body')[0].style.setProperty(`--${cssvar}-family`, `"${field.family}", ${field.category}`, 'important');
                customFontsClass = 'custom-fonts';
            }

            // Priority font style
            if (field.style) {
                $('body')[0].style.setProperty(`--${cssvar}-style`, `${field.style}`, 'important');
            }

            // Priority font weight
            if (field.weight) {
                $('body')[0].style.setProperty(`--${cssvar}-weight`, `${field.weight}`, 'important');
            }

            // Priority font size
            if (field.size) {
                $('body')[0].style.setProperty(`--${cssvar}-size`, `${field.size}px`, 'important');
            }

            // Priority font lettercase
            if (field.lettercase) {
                $('body')[0].style.setProperty(`--${cssvar}-lettercase`, `${field.lettercase}`, 'important');
            }

            // URL
            if (field.url) {
                // check if url exist
                $('link.font-css').each(function(i, link){
                    if ($(link).attr('href') == field.url) $(link).addClass('stay');
                });

                // append link
                if ($(`link.font-css[href="${field.url}"]`).length == 0) {
                    $('head').append(`<link class="font-css stay" rel="stylesheet" href="${field.url}">`);
                }
            }
        });
    }

    // remove font-css
    $('link.font-css:not(.stay)').remove();
    $('link.font-css').removeClass('stay');


    // Selected Colors
    if (data.selectedColors) {
        Object.entries(data.selectedColors).forEach(([key, field]) => {
            // css variable
            var cssvar = key.split(/(?=[A-Z])/).slice(1).join('-').toLowerCase();

            // Reset values
            $('body').css({
                [`--${cssvar}`] : ''
            });

            // Priority Color
            if (field) {
                $('body')[0].style.setProperty(`--${cssvar}`, `${field}`, 'important');
            }
        });
    }

    // body has class
    if (typeof $('body').attr('class') !== 'undefined') {
        // Get preset classes
        var presetClasses = $('body').attr('class').split(' ').filter(x => x.indexOf('preset-') !== -1);

        // Remove preset classes
        presetClasses.map(x => $('body').removeClass(`${x.replace('preset-', '')} ${x}`));
    }

    // Add body class
    $('body').removeClass('custom-fonts').addClass(`${customFontsClass}`);

    // Preset class
    if (data.presetCode) $('body').addClass(`${data.presetCode} preset-${data.presetCode}`);

}


// Extract Main Domain
function extractMainDomain(url) {
    // Create an anchor element to parse the URL
    var parser = document.createElement('a');
    parser.href = url;

    // Extract the hostname, which includes the subdomain
    var hostname = parser.hostname;

    // Split the hostname by dots and take the last two parts
    var parts = hostname.split('.').slice(-2);

    // Join the last two parts to get the main domain
    var mainDomain = parts.join('.');

    return mainDomain;
}

// Window visualViewport
$(window.visualViewport).on('resize', function(){

    // body height
    $('body').css({'--body-height': `${window.visualViewport.height}px`});

});

// Before unload
$(window).on('beforeunload', function(){
    // Pause Music
    if (isMusicPlayed && typeof pauseMusic === 'function') return pauseMusic();
});


// Get Message
window.addEventListener('message', function(event){
    // verify origin
    if (extractMainDomain(event.origin) === extractMainDomain(this.window.location.origin)) {

        var action = event.data.action;

        // Customize Template
        if (action === "customizeTemplate" && event.data.customizeTemplate) {
            customizationTemplate(event.data.customizeTemplate);
        }

        // Load Content
        if (action === "loadContent" && typeof event.data.content !== 'undefined') {
            var iframeDoc = event.target.document;
            var content = event.data.content;

            // Replace the iframe's content
            iframeDoc.open();
            iframeDoc.write(content);
            iframeDoc.close();
        }

    }
});



/*  ================================================
        DOCUMENT [ON READY]
============================================= */
$(document).ready(function(){

    // body height
    $('body').css({'--body-height': `${window.visualViewport.height}px`});


    // ---------- URLify --------------------------------------------------
    $('p, label').each(function(i, el) {
        el.innerHTML = urlify(el.innerHTML);
    });

    // // ---------- Make Textarea getting small --------------------------------------------------
    // $.each($('textarea'), function(i, textarea){
    //     textarea.style.height = '1px';
    // });

    // ---------- Checking the Quantity Control value --------------------------------------------------
    $('[data-quantity="control"]').each(function(i, input){
        var max = $(input).attr('max');
        var value = $(input).val();

        // If value is greater than max
        if (value >= max) $(input).val(max);

        // If value lower than 0
        if (value <= 0) $(input).val(1);
    });

    // ---------- Check nominal (Wedding Gift) value --------------------------------------------------
    $('[name="nominal"]').each(function(i, el){
        if ($(el).is(':checked')) {
            if ($(this).val() <= 0) {
                $('.insert-nominal').slideDown();
                $('.insert-nominal').find('[name="inserted_nominal"]').focus();
            }
        }
    });

    // ---------- Show or Hide Saving Books --------------------------------------------------
    var select = $('select[name="choose_bank"]');
    if (select.length) {
        chooseBank($(select).val());
    }

    // ---------- Attendance Toggling --------------------------------------------------
    $.each($('input[name="attendance"]'), function(i, input){
        attendanceToggle(input);
    });


});


// Scroll to top
$(document).ready(function(){
    $(window).scrollTop(0);
});
