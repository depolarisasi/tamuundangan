
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
<meta name="format-detection" content="telephone=no">

<meta name="title" content="{{config('settings.wedding_name')}}">
<meta name="description" content="Anda diundang pada acara pesta {{config('settings.wedding_name')}} - {{config('settings.resepsi_day')}}, {{config('settings.resepsi_date')}}">

<meta property="og:type" content="website" />
<meta property="og:site_name" content="unitedby.love">
<meta property="og:url" content="https://edwardnindita.unitedby.love" />
<meta property="og:title" content="Nindita & Edward Wedding" />
<meta property="og:description" content="Anda diundang pada acara pesta {{config('settings.wedding_name')}} - {{config('settings.resepsi_day')}}, {{config('settings.resepsi_date')}}" />
<meta property="og:image" content="http://edwardnindita.unitedby.love/images/og-image.png" />
<meta property="og:image:secure_url" content="https://edwardnindita.unitedby.love/images/og-image.png" />
<meta property="og:locale" content="in_ID">
<meta property="og:logo" content="https://edwardnindita.unitedby.love/images/og-image.png" />



<meta property="twitter:card" content="images/og-image.png')}}">
<meta property="twitter:url" content="https://edwardnindita.unitedby.love">
<meta property="twitter:title" content="Nindita & Edward Wedding">
<meta property="twitter:description" content="Anda diundang pada acara pesta {{config('settings.wedding_name')}} - {{config('settings.resepsi_day')}}, {{config('settings.resepsi_date')}}">
<meta property="twitter:image" content="https://edwardnindita.unitedby.love/images/og-image.png">
@if($tamu)
<meta name="csrf-token" content="{{ csrf_token() }}">
@endif

<title>{{config('settings.wedding_name')}} | United By Love</title>
<link rel="icon" href="{{asset('media/kat/favicon.png')}}">
<script src="https://unpkg.com/@phosphor-icons/web"></script>
<link rel="stylesheet" href="{{asset('wedding/style.css')}}">
<link rel="stylesheet" href="{{asset('wedding/plugin.css')}}">
<script src="{{asset('wedding/jquery.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="helga original preset-original custom-fonts" data-template="helga">
<section class="kat-page__side-to-side">

<section class="primary-pane">
<div class="inner">
<div class="ornaments-wrapper">
<div class="fall-tree left">
<div class="image-wrap" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="800">
<img src="images/orn-tree.png" alt>
</div>
</div>
<div class="fall-tree right">
<div class="image-wrap" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="850">
<img src="images/orn-tree.png" alt>
</div>
</div>
<div class="flower-left-1">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="900">
<img src="images/orn-flower-11.png" alt>
</div>
</div>
<div class="flower-left-2">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
<img src="images/orn-flower-7.png" alt>
</div>
</div>
<div class="flower-right-1">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="900">
<img src="images/ornament-flower-12.png" alt>
</div>
</div>
<div class="flower-right-2">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
<img src="images/orn-flower-9.png" alt>
</div>
</div>
</div>
<div class="details">
<h1 data-aos="zoom-out" data-aos-duration="1200">{{config('settings.wedding_name')}}</h1>
@if($tamu)
<p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Teruntuk<br>{{$tamu->tamu_nama}} - {{$tamu->tamu_organisasi}}</p>
@endif
</div>
<div class="highlight" data-aos="zoom-out" data-aos-duration="1000">
<div class="preview-container cover-show" id="cover-pane">
</div>
</div>
</div>
</section>

<section class="secondary-pane">

<section class="top-cover">
<div class="inner">
<div class="ornaments-wrapper">
<div class="fall-tree left">
<div class="image-wrap" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="800">
<img src="images/orn-tree.png" alt>
</div>
</div>
<div class="fall-tree right">
<div class="image-wrap" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="850">
<img src="images/orn-tree.png" alt>
</div>
</div>
<div class="flower-left-1">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="900">
<img src="images/orn-flower-11.png" alt>
</div>
</div>
<div class="flower-left-2">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
<img src="images/orn-flower-7.png" alt>
</div>
</div>
<div class="flower-right-1">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="900">
<img src="images/ornament-flower-12.png" alt>
</div>
</div>
<div class="flower-right-2">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
<img src="images/orn-flower-9.png" alt>
</div>
</div>
</div>
<div class="wrap-inner">
<div class="details">
<div class="logo-wrap" data-aos="zoom-out" data-aos-duration="1200">
<h1 class="title-cover" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">{{config('settings.wedding_name')}}</h1>
</div>
</div>
<div class="highlight" data-aos="zoom-out" data-aos-duration="1000">
<div class="preview-container cover-show" id="cover-opening" style="--bg-top-cover: url(images/bg-top-cover.png); --bg-top-cover: url(images/bg-top-cover.png);">
</div>
</div>

<div class="bottom-item">
@if($tamu)
<p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">Teruntuk<br>{{$tamu->tamu_nama}}- {{$tamu->tamu_organisasi}}</p>
@endif
<div class="btn-open" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1200">
<a href="javascript:;" onclick="startTheJourney()" class="link" id="startToExplore">Buka Undangan</a>
</div>
</div>
</div>
</div>
</section>

<section class="cover">
<div class="inner">
<div class="head">
</div>
<div class="body highlight" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="500">
<div class="orn-cover-frame">
<div class="cover-frame" id="coverFrame">
<div class="cover-picture cover-show" id="cover-main">
<div class="picture desktop">
<img src="foto-prewedd/1.jpg" alt>
</div><div class="picture desktop">
<img src="foto-prewedd/2.jpg" alt>
</div><div class="picture mobile">
<img src="foto-prewedd/3.jpg" alt>
</div><div class="picture mobile">
<img src="foto-prewedd/4.jpg" alt>
</div><div class="picture mobile">
<img src="foto-prewedd/5.jpg" alt>
</div><div class="picture mobile">
<img src="foto-prewedd/6.jpg" alt>
</div>
</div>
</div>
<div class="image-wrap">
<img src="images/frame-photo.png" alt="Frame Photo">
</div>
<div class="flower-frame-1">
<div class="image-wrap" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="800">
<img src="images/ornament-flower-22.png" alt>
</div>
</div>
<div class="flower-frame-2">
<div class="image-wrap" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="850">
<img src="images/ornament-flower-19.png" alt>
</div>
</div>
<div class="flower-frame-5">
<div class="image-wrap" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="900">
<img src="images/ornament-flower-4.png" alt>
</div>
</div>
<div class="flower-frame-6">
<div class="image-wrap" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="900">
<img src="images/ornament-flower-18.png" alt>
</div>
</div>
<div class="flower-frame-3">
<div class="image-wrap" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="1000">
<img src="images/ornament-flower-20.png" alt>
</div>
</div>
<div class="flower-frame-4">
<div class="image-wrap" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="1000">
<img src="images/ornament-flower-21.png" alt>
</div>
</div>
</div>
</div>
<div class="foot">
<p class="top-text" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150">The Wedding of</p> <h1 class="prime-title" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">Nindita & Edward</h1> <p class="bottom-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">#{{config('settings.mempelai_wanita_short')}}And{{config('settings.mempelai_pria_short')}}</p>
</div>
</div>
</section>

<div class="quote-wrap">
<p class="quote-caption" data-aos="fade-up" data-aos-duration="1200">QS. Ar-Rum: 21 <br/>
<br/>
"Dan di antara tanda-tanda kebesaran-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir,"</p>
</div>

<section class="couple-wrap">
<div class="couple">
<div class="couple-head">
<h1 class="couple-title" data-aos="zoom-in" data-aos-duration="1000">Assalamu&#039;alaikum Warahmatullahi Wabarakatuh</h1>
<p class="couple-description" data-aos="fade-up" data-aos-duration="1000">Maha Suci Allah yang telah menciptakan Mahluk-Nya berpasang-pasangan.
    Ya Allah, dengan Rahmat dan Ridho-Mu perkenankanlah tautan cinta buah hati kami</p> </div>
<div class="couple-body  bride-first   show-picture  ">
<div class="couple-info groom">
<div class="couple-preview-wrap">
<div class="couple-preview lightgallery" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="false">
<a class="img-wrap" href="foto-mempelai/pria.jpg" target="_blank">
<div class="ornaments-wrapper">
<div class="orn-couple">
<div class="image-wrap" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="800">
<img src="images/ornament-flower-4.png" alt="Orn couple">
</div>
</div>
</div>
<img class="img" src="foto-mempelai/pria.jpg" alt>
</a>
</div>
</div>
<div class="couple-details">
<h2 class="couple-name" data-aos="fade-up" data-aos-duration="1000">{{config('settings.mempelai_pria_long')}}</h1> <div class="couple-link-wrap" data-aos="fade-up" data-aos-duration="1000">
<a href="https://www.instagram.com/{{config('settings.username_ig_pria')}}" target="_blank" class="couple-link"><i class="fab fa-instagram"></i> @ {{config('settings.username_ig_pria')}}</a>
</div> </div>
</div>
<div class="separator-wrap">
<div class="separator" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
<h2 class="couple-separator">&amp;</h2>
</div>
</div>
<div class="couple-info bride">
<div class="couple-preview-wrap">
<div class="couple-preview lightgallery" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="false">
<a class="img-wrap" href="foto-mempelai/wanita.jpg" target="_blank">
<div class="ornaments-wrapper">
<div class="orn-couple">
<div class="image-wrap" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="800">
<img src="images/ornament-flower-4.png" alt="Orn couple">
</div>
</div>
</div>
<img class="img" src="foto-mempelai/wanita.jpg" alt>
</a>
</div>
</div>
<div class="couple-details">
<h2 class="couple-name" data-aos="fade-up" data-aos-duration="1000">{{config('settings.mempelai_wanita_long')}}</h2> <div class="couple-link-wrap" data-aos="fade-up" data-aos-duration="1000">
<a href="https://www.instagram.com/{{config('settings.username_ig_wanita')}}" target="_blank" class="couple-link"><i class="fab fa-instagram"></i> @ {{config('settings.username_ig_wanita')}}</a>
</div>
</div>
</div>

    </div>
</div>
</div>
<div class="texture-outer bottom" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="200">
<div class="couple-leaves"></div>
</div>

<div class="couple-details">
        <p class="couple-description" style="margin: 20px !important;" data-aos="fade-up" data-aos-duration="1000">Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada putra-putri kami. Atas kehadiran dan doa restunya kami ucapkan terima kasih.
        </p>
    </br>
        <p class="couple-description" data-aos="fade-up" data-aos-duration="1000">Kami yang berbahagia,</p>
        <div class="container">
            <div class="column">
                <p class="couple-description" >Kel. Bapak Nono Sudiono. S.H</p>
                <p class="couple-description" >Ibu Dra Vini Noviani</p>
            </div>
            <div class="column">
                <p class="couple-description" >Kel. Bapak Dadang Supriyadi</p>
                <p class="couple-description" >Ibu Imas Masunah</p>
            </div>
        </div>
    </div>
</section>

<section class="save-date-wrap">
<div class="save-date" data-aos="zoom-out" data-aos-duration="1200">
<div class="pict-head" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="500">
<div class="pict-frame">
<div class="preview-container cover-show" id="savedate-main">
</div>
</div>
</div>
<div class="save-date-head">
<p class="save-date-title" data-aos="zoom-in" data-aos-duration="1000">Hari Yang Ditunggu</p>
<p class="save-date-event" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">{{config('settings.resepsi_date')}}</p>
</div>
<div class="save-date-body">
<div class="countdown">
<div class="count-item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
<h2 class="count-num count-day">12</h2>
<small class="count-text">Hari</small>
</div>
<div class="count-item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
<h2 class="count-num count-hour">7</h2>
<small class="count-text">Jam</small>
</div>
<div class="count-item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="500">
<h2 class="count-num count-minute">3</h2>
<small class="count-text">Menit</small>
</div>
<div class="count-item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="700">
<h2 class="count-num count-second">42</h2>
<small class="count-text">Detik</small>
</div>
</div>
</div>
<div class="add-to-calendar-wrap" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1100">
<a class="add-to-calendar" href="https://www.google.com/calendar/render?action=TEMPLATE&amp;text={{config('settings.mempelai_wanita_short')}}+%26+{{config('settings.mempelai_pria_short')}}+Wedding&amp;dates=20241109T110000/20241109T140000&amp;location=Hotel+Sari+Ater+Kamboti+%7C+Jl.+Lemahnendeut+No.7%2C+Sukawarna%2C+Kec.+Sukajadi%2C+Kota+Bandung%2C+Jawa+Barat+40164%2C+Indonesia+%7C+Kota+Bandung&amp;details=Anda+diundang+pada+acara+pesta+pernikahan+kami+%7C+Pernikahan+{{config('settings.mempelai_wanita_short')}}+%26+{{config('settings.mempelai_pria_short')}}+{{config('settings.resepsi_day')}}%2C+09+November+2024" target="_blank" rel="nofollow" id="addToCalendar">
Tambah ke Kalender </a>
</div>
</div>
</section>

<section class="agenda-wrap">
<div class="agenda-inner">
<div class="agenda-head">
<h1 class="agenda-title" data-aos="zoom-in" data-aos-duration="1500">Pelaksanaan Hari Bahagia</h1>
<p class="agenda-description" data-aos="fade-up" data-aos-duration="1200">#{{config('settings.mempelai_wanita_short')}}And{{config('settings.mempelai_pria_short')}}</p> </div>
<div class="agenda-body">
<div class="event-item" data-aos="fade-up" data-aos-duration="1200">
<div class="event-head">
{{-- <h1 class="event-day" data-aos="fade-up" data-aos-duration="1000">{{config('settings.resepsi_day')}}, {{config('settings.resepsi_date')}}</h1> --}}
{{-- <p class="event-date" data-aos="fade-up" data-aos-duration="1000">{{config('settings.resepsi_day')}}, {{config('settings.resepsi_place')}}</p> --}}
</div>
<div class="event-content"><div class="activity-wrap "><div class="activity-item">
<div class="activity-head">
<svg class="activity-icon 1" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M322.656 180C318.656 180 314.736 180.24 310.896 180.48C316.684 187.936 321.848 195.856 326.336 204.16C359.969 205.08 391.885 219.212 415.174 243.494C438.464 267.776 451.251 300.254 450.767 333.896C450.283 367.538 436.567 399.635 412.589 423.238C388.611 446.84 356.301 460.047 322.656 460C288.719 459.964 256.183 446.467 232.186 422.47C208.189 398.473 194.692 365.937 194.656 332C194.763 307.79 201.686 284.099 214.632 263.641C227.578 243.182 246.023 226.783 267.856 216.32C262.787 209.693 256.99 203.655 250.576 198.32C215.726 217.068 189.57 248.678 177.676 286.421C165.783 324.164 169.09 365.059 186.896 400.4C199.641 425.478 219.059 446.552 243.013 461.302C266.966 476.052 294.525 483.907 322.656 484C362.969 484 401.63 467.986 430.136 439.48C458.642 410.975 474.656 372.313 474.656 332C474.656 291.687 458.642 253.025 430.136 224.52C401.63 196.014 362.969 180 322.656 180Z" fill="black" />
<path d="M326.336 204.16C321.848 195.856 316.684 187.936 310.896 180.48C301.929 180.427 277.311 183.92 250.576 198.32C256.99 203.655 262.787 209.693 267.856 216.32C291.656 204.914 295.656 204.16 326.336 204.16Z" fill="black" />
<path fill-rule="evenodd" clip-rule="evenodd" d="M88.1948 193.539C64.1998 217.534 50.6999 250.066 50.6554 284C50.7034 317.286 63.7079 349.246 86.9137 373.108C110.12 396.971 141.704 410.863 174.975 411.84C179.463 420.144 190.415 435.52 190.415 435.52C190.415 435.52 182.655 436 178.655 436C139.887 435.912 102.618 421.014 74.4718 394.354C46.3258 367.693 29.4305 331.286 27.2425 292.579C25.0544 253.873 37.739 215.793 62.7011 186.13C87.6632 156.468 123.016 137.465 161.527 133.008C168.656 132.183 188.156 132.141 195.791 133C231.547 137.024 264.698 153.659 289.295 179.92C299.376 190.515 307.84 202.537 314.415 215.6C332.221 250.941 335.529 291.836 323.635 329.579C311.741 367.322 285.585 398.932 250.735 417.68C244.321 412.345 238.525 406.307 233.455 399.68C255.288 389.217 273.734 372.818 286.679 352.359C299.625 331.901 306.548 308.21 306.655 284C306.619 250.063 293.122 217.527 269.125 193.53C245.128 169.533 212.592 156.036 178.655 156C144.721 156.044 112.19 169.544 88.1948 193.539Z" fill="black" />
<path d="M250.735 417.68C244.321 412.345 238.525 406.307 233.455 399.68C224.735 404.513 200.831 413.712 174.975 411.84C179.463 420.144 190.415 435.52 190.415 435.52C223.656 432.5 228.156 429.827 250.735 417.68Z" fill="black" />
<path fill-rule="evenodd" clip-rule="evenodd" d="M333.641 182.592L352.093 184.446L368.016 189.279L368.501 147.421L393.841 155.379L370.306 189.998L386.134 195.137L402.333 204.165L456.302 172.229C457.596 171.479 458.653 170.379 459.35 169.056C460.048 167.732 460.358 166.239 460.245 164.747L456.965 121.791C456.846 120.193 456.249 118.668 455.253 117.413C454.257 116.158 452.906 115.231 451.377 114.753L344.523 81.1935C342.995 80.7119 341.358 80.7003 339.823 81.1602C338.288 81.62 336.927 82.5301 335.915 83.7726L308.665 117.141C307.719 118.3 307.119 119.702 306.935 121.187C306.75 122.672 306.989 124.178 307.622 125.534L333.641 182.592ZM386.134 195.137L409.716 160.365L432.766 167.605L386.134 195.137ZM352.093 184.446L329.576 135.196L352.625 142.435L352.093 184.446ZM441.393 128.388L436.508 126.854L420.158 146.874L443.361 154.161L441.393 128.388ZM403.672 141.697L420.022 121.676L366.29 104.8L368.258 130.574L403.672 141.697ZM349.804 99.6225L344.919 98.0884L328.569 118.109L351.772 125.396L349.804 99.6225Z" fill="black" />
<path d="M418.763 71.8016L424.765 46.9105C426.059 41.5418 422.755 36.1381 417.389 34.8458C412.019 33.5515 406.618 36.8545 405.324 42.2227L399.322 67.1138C398.238 71.6104 400.378 76.1293 404.256 78.2398C405.008 78.649 405.826 78.9683 406.698 79.1785C412.068 80.4728 417.469 77.1711 418.763 71.8016Z" fill="black" />
<path d="M369.406 67.3112L362.091 39.0568C360.708 33.7114 355.251 30.498 349.905 31.8827C344.559 33.2666 341.347 38.7229 342.731 44.0688L350.046 72.3232C350.769 75.1142 352.601 77.3236 354.949 78.6014C357.097 79.7706 359.678 80.1589 362.233 79.4978C367.578 78.1143 370.789 72.6566 369.406 67.3112Z" fill="black" />
<path d="M477.463 66.9405C473.293 63.3221 466.976 63.7665 463.357 67.9378L444.67 89.467C441.049 93.6374 441.497 99.9527 445.667 103.573C446.227 104.059 446.824 104.47 447.45 104.81C451.484 107.006 456.639 106.186 459.773 102.576L478.46 81.0463C482.081 76.8759 481.633 70.5602 477.463 66.9405Z" fill="black" />
</svg>
<h1 class="activity-title" data-aos="fade-up" data-aos-duration="1000">Resepsi Pernikahan</h1>
<p class="activity-time" data-aos="fade-up" data-aos-duration="1000">{{config('settings.resepsi_day')}}, {{config('settings.resepsi_date')}} - {{config('settings.resepsi_time')}}</p>
</div><div class="activity-details">
<p class="activity-hall" data-aos="fade-up" data-aos-duration="1000">{{config('settings.resepsi_place')}}</p>
<p class="activity-address" data-aos="fade-up" data-aos-duration="1000">{{config('settings.resepsi_address')}}</p>
<p class="activity-city" data-aos="fade-up" data-aos-duration="1000">{{config('settings.resepsi_city')}}</p>
<div class="activity-link-wrap" data-aos="fade-up" data-aos-duration="1000"><a href="{{config('settings.resepsi_gmaps')}}" class="activity-link" target="_blank">Lihat Peta</a></div>
</div></div></div><div class="ornaments-wrapper">
<div class="orn-event-2">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="850" data-aos-anchor="[data-anchor-id='bottom-0']">
<img src="images/orn-ranting.png">
</div>
</div>
<div class="orn-event-1">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="800" data-aos-anchor="[data-anchor-id='bottom-0']">
<img src="images/ornament-flower-14.png">
</div>
</div>
<div class="orn-event-5">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1050" data-aos-anchor="[data-anchor-id='bottom-0']">
<img src="images/orn-flower-15.png">
</div>
</div>
<div class="orn-event-6">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1000" data-aos-anchor="[data-anchor-id='bottom-0']">
<img src="images/orn-flower-17.png">
</div>
</div>
<div class="orn-event-4">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="950" data-aos-anchor="[data-anchor-id='bottom-0']">
<img src="images/orn-flower-16.png">
</div>
</div>
<div class="orn-event-3">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="900" data-aos-anchor="[data-anchor-id='bottom-0']">
<img src="images/orn-flower-13.png">
</div>
</div>
</div></div>
</div>
</div>
</div>
</section>

@if($tamu)
<section class="rsvp-wrap" id="rsvp">
<div class="rsvp-inner">
<div class="rsvp-head">
<h1 class="rsvp-title" data-aos="zoom-in" data-aos-duration="1500">Konfirmasi Kehadiran</h1>
<div class="rsvp-info">
<p class="info-text">Harap konfirmasikan kehadiran Anda sebelum,</p>
<p class="info-date" data-aos="fade-up" data-aos-duration="1000">{{config('settings.resepsi_confirmation')}}</p> </div>
</div>
<section class="einvitation-wrap">
    <div class="einvitation" data-aos="zoom-out" data-aos-duration="1200">
    <div class="einvitation-head">
    <p class="einvitation-title" data-aos="zoom-in" data-aos-duration="1000">E-Invitation</p>
    <p class="einvitation-event" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">{{$tamu->tamu_nama}}</p>
    </div>
    <div class="einvitation-body" style="text-align: center;">
        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(150)->generate(url('undangan/'.$tamu->tamu_uniquecode))) !!}" alt="QR Code">
    </div>
    <div class="add-to-calendar-wrap" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1100">
    <a class="add-to-calendar" href="{{url('undangan/'.$tamu->tamu_uniquecode)}}" target="_blank" >
    Download E-Invitation </a>
    </div>
    </div>
    </section>
<div class="rsvp-body">
    <form id="confirmationForm">
    <input type="hidden" name="guestId" id="guestId" value="{{$tamu->tamu_uniquecode}}">
    <select id="kehadiran" name="kehadiran" class="form-control">
        <option value="Ya akan hadir">Saya akan hadir</option>
        <option value="Tidak akan hadir">Saya tidak akan hadir</option>
        <option value="Belum menentukan">Saya Belum menentukan</option>
      </select>

    <button type="submit" class="btn-submit btn btn-md btn-primary" style="margin-top: 10px !important;" id="submitButton">Konfirmasi</button>
    <span id="loadingAnimation" style="display:none;" class="loading"></span>
    </form>
</div>
</div>
</section>


@endif

<section class="gallery-wrap">
<div class="ornaments-wrapper">
<div class="orn-gallery">
<div class="image-wrap" data-aos="fade-right" data-aos-duration="1200">
<img src="images/orn-flower-13.png" alt="orn-footnote-left-1">
</div>
</div>
</div>
<div class="gallery-inner">
<div class="gallery-head">
<h1 class="gallery-title" data-aos="fade-up" data-aos-duration="1000">{{config('settings.mempelai_wanita_short')}} &amp; {{config('settings.mempelai_pria_short')}}&#039;s Gallery</h1> </div>
<div class="gallery-body">

<div class="galleries lightgallery">
<a href="foto-prewedd/7.jpg" class data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="100">
<img src="foto-prewedd/7.jpg">
</a>
<a href="foto-prewedd/10.jpg" class data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="400">
<img src="foto-prewedd/10.jpg">
</a>
<a href="foto-prewedd/11.jpg" class data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="500">
<img src="foto-prewedd/11.jpg">
</a>
<a href="foto-prewedd/12.jpg" class data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="600">
<img src="foto-prewedd/12.jpg">
</a>
<a href="foto-prewedd/13.jpg" class data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="700">
<img src="foto-prewedd/13.jpg">
</a>
<a href="foto-prewedd/14.jpg" class data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="800">
<img src="foto-prewedd/14.jpg">
</a>
<a href="foto-prewedd/3.jpg" class data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="1100">
<img src="foto-prewedd/3.jpg">
</a>
<a href="foto-prewedd/4.jpg" class data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="1200">
<img src="foto-prewedd/4.jpg">
</a>
<a href="foto-prewedd/6.jpg" class data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="1300">
<img src="foto-prewedd/6.jpg">
</a>
<a href="foto-prewedd/5.jpg" class data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="1300">
    <img src="foto-prewedd/5.jpg">
    </a>
</div>
</div>
</div>
</section>


<section class="love-story-wrap">
<div class="ornaments-wrapper">
<div class="orn-story-1">
<div class="image-wrap" data-aos="fade-down-right" data-aos-duration="1200" data-aos-delay="1150">
<img src="images/orn-flower-15.png" alt="orn-footnote-left-1">
</div>
</div>
<div class="orn-story-2">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="1100">
<img src="images/orn-flower-17.png" alt="orn-footnote-left-1">
</div>
</div>
<div class="orn-footnote-4">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="900">
<img src="images/orn-flower-16.png" alt="orn-footnote-left-5">
</div>
</div>
<div class="orn-footnote-2">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="950">
<img src="images/orn-flower-9.png" alt="orn-footnote-left-2">
</div>
</div>
<div class="orn-footnote-3">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="1050">
<img src="images/orn-ranting.png" alt="orn-footnote-left-3">
</div>
</div>
<div class="orn-footnote-5">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="850">
<img src="images/orn-flower-13.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-footnote-6">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="800">
<img src="images/orn-flower-14.png" alt="orn-footnote-left-4">
</div>
</div>
</div>
<div class="love-story-inner">
<div class="love-story-head">
<h1 class="love-story-title" data-aos="fade-up" data-aos-duration="1200">Our Story</h1>
</div>
<div class="love-story-body">

<div class="story__slider-wrap">

<div class="story__slider-for" data-aos="fade-up" data-aos-duration="1200">
<div class="story__slider-for__item " data-aos="fade-up" data-aos-duration="1200" style="--story-background: url('{{asset("foto-prewedd/2.jpg")}}')">
<div class="story__content">
<h2 class="story__title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">♡o｡.✿ฺ｡First Sight♡o｡.✿ฺ｡</h2>
<p class="story__caption" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">{{config('settings.firstsight_story')}}.</p>
</div>
</div><div class="story__slider-for__item " data-aos="fade-up" data-aos-duration="1200" style="--story-background: url('{{asset("foto-prewedd/3.jpg")}}')">
<div class="story__content">
<h2 class="story__title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">Be Dating♡´･ᴗ･`♡</h2>
<p class="story__caption" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">{{config('settings.dating_story')}}</p>
</div>
</div><div class="story__slider-for__item " data-aos="fade-up" data-aos-duration="1200" style="--story-background: url('{{asset("foto-prewedd/4.jpg")}}')">
<div class="story__content">
<h2 class="story__title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">Our Engagement♡o｡.(✿ฺ｡ ✿ฺ)</h2>
<p class="story__caption" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">{{config('settings.engagement_story')}}</p>
</div>
</div> </div>

<div class="story__slider-nav" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
<div class="story__slider-nav__item__manual" data-slick-index="0"></div><div class="story__slider-nav__item__manual" data-slick-index="1"></div><div class="story__slider-nav__item__manual" data-slick-index="2"></div> </div>
</div>
</div>
</div>
</section>


<section class="wedding-gift-wrap  no-form ">
<div class="wedding-gift-inner">
<div class="wedding-gift-head">
<h1 class="wedding-gift-title" data-aos="zoom-in" data-aos-duration="1500">Hadiah Pernikahan</h1>
<p class="wedding-gift-description" data-aos="fade-up" data-aos-duration="1000">Do&#039;a dan kehadiran Anda sangat berarti untuk kami. Namun, jika Anda hendak memberikan hadiah pernikahan, kami menyediakan amplop digital untuk memudahkan Anda.</p>
</div>
<div class="wedding-gift-body">
<div class="wedding-gift-form">
<div class="wedding-gift-details wedding-gift__first-slide wedding-gift-slide">

<div class="wedding-gift-select-bank-wrap">
<div class="bank-item">
    <div class="bank-detail">
    <small class="bank-account-name-label">Nama Bank</small>
    <h3 class="bank-name">{{config('settings.hadiah_bank1')}}</h3>
    <div>
    <small class="bank-account-number-label">No. Rekening</small>
    <h4 class="bank-account-number">{{config('settings.hadiah_norek1')}}</h4>
    </div>
    <div>
    <small class="bank-account-name-label">Pemilik Rekening</small>
    <h4 class="bank-account-name">{{config('settings.hadiah_rek1')}}</h4>
    </div>
    </div>
    </div>
    <hr>
    <div class="bank-item">
    <div class="bank-detail">
        <small class="bank-account-name-label">Nama Bank</small>
    <h3 class="bank-name">{{config('settings.hadiah_bank2')}}</h3>
    <div>
    <small class="bank-account-number-label">No. Rekening</small>
    <h4 class="bank-account-number">{{config('settings.hadiah_norek2')}}</h4>
    </div>
    <div>
    <small class="bank-account-name-label">Pemilik Rekening</small>
    <h4 class="bank-account-name">{{config('settings.hadiah_rek2')}}</h4>
    </div>
    </div>
    </div>
</div>

</div>
</div>
</div>
</div>
<div class="ornaments-wrapper">
<div class="orn-gift-2">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1050">
<img src="images/ornament-flower-4.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-gift-3">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
<img src="images/orn-flower-2.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-gift-4">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="950">
<img src="images/orn-flower-5.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-gift-1">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="900">
<img src="images/orn-peacock-1.png" alt="orn-footnote-left-5">
</div>
</div>
<div class="orn-gift-5">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="900">
<img src="images/orn-flower-6.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-gift-6">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="850">
<img src="images/orn-flower-8.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-gift-7">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
<img src="images/orn-flower-3.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-gift-9">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="700">
<img src="images/orn-peacock-2.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-gift-8">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="750">
<img src="images/orn-flower-1.png" alt="orn-footnote-left-4">
</div>
</div>
</div>
</section>


@if($tamu)

<section class="wedding-wish-wrap" data-template>
<div class="wedding-wish-inner">
<div class="wedding-wish-head">
<h1 class="wedding-wish-title" data-aos="fade-up" data-aos-duration="1200">Ucapan &amp; Harapan</h1>
<p class="wedding-wish-description" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">Ucapan &amp; Doa dari Anda akan sangat berarti bagi kami</p>
</div>
<div class="wedding-wish-body">


    <!-- Form Section -->
    <div class="wedding-wish-form">
        <form id="weddingWishesForm">
            <div>
                <input type="hidden" name="tamu_uniquecode" id="tamu_uniquecode" value="{{ $tamu->tamu_uniquecode }}">
            </div>

            <div class="form-group guest-name-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <input type="text" name="name" class="form-control guest-name" value="{{ $tamu->tamu_nama }} - {{ $tamu->tamu_organisasi }}" disabled>
            </div>

            <div class="form-group guest-comment-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                <textarea class="form-control" id="wishes" name="wishes" rows="1" placeholder="Tulis ucapan anda"></textarea>
            </div>

            <div class="submit-comment-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                <button type="submit" class="btn btn-md btn-primary" id="submitComment" data-last>Kirim</button>
            </div>
        </form>
    </div>

   <!-- Section to display the list of wishes -->
   <div class="comment-wrap">
    <h3>Ucapan Pernikahan</h3>
    <ul id="weddingWishesList">
        <!-- Wishes will be dynamically inserted here -->
    </ul>
</div>
</div>
</div>
</section>
@endif

<section class="footnote-wrap">
<div class="ornaments-wrapper">
<div class="orn-footnote-4">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="900">
<img src="images/orn-flower-16.png" alt="orn-footnote-left-5">
</div>
</div>
<div class="orn-footnote-2">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="950">
<img src="images/orn-flower-9.png" alt="orn-footnote-left-2">
</div>
</div>
<div class="orn-footnote-1">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="1000">
<img src="images/orn-peacock-2.png" alt="orn-footnote-left-1">
</div>
</div>
<div class="orn-footnote-3">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="1050">
<img src="images/orn-ranting.png" alt="orn-footnote-left-3">
</div>
</div>
<div class="orn-footnote-5">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="850">
<img src="images/orn-flower-13.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-footnote-6">
<div class="image-wrap" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="800">
<img src="images/orn-flower-14.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-footnote-bottom-1">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1100">
<img src="images/orn-flower-7.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-footnote-bottom-2">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1050">
<img src="images/ornament-flower-4.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-footnote-bottom-4">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
<img src="images/orn-flower-2.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-footnote-bottom-3">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="950">
<img src="images/orn-flower-5.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-footnote-bottom-5">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="900">
<img src="images/orn-flower-6.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-footnote-bottom-6">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="850">
<img src="images/orn-flower-8.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-footnote-bottom-7">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
<img src="images/orn-flower-3.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-footnote-bottom-9">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="700">
<img src="images/orn-flower-7.png" alt="orn-footnote-left-4">
</div>
</div>
<div class="orn-footnote-bottom-8">
<div class="image-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="750">
<img src="images/orn-flower-1.png" alt="orn-footnote-left-4">
</div>
</div>
</div>
<div class="footnote">
<p class="top-text" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">The Wedding of</p>
<h2 class="footnote-title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">Nindita & Edward</h2>
<p class="date" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">{{config('settings.resepsi_date')}}</p>
<p class="bottom-text" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">#{{config('settings.mempelai_wanita_short')}}And{{config('settings.mempelai_pria_short')}}</p> </div>
</section>

</section>
</section>

@if($tamu)
<section class="person" id="person">
<div class="person-greeting" onclick="togglePersonInfo()">
<div>
<svg width="22" height="15" viewBox="0 0 22 15" xmlns="http://www.w3.org/2000/svg" class="person-envelope-icon">
<rect class="cls-1" x="0.5" y="0.5" width="21" height="14" rx="1.38571"></rect><path class="cls-1" d="M21.3713 0.628529L12.109 7.36475C11.4477 7.84564 10.5519 7.84564 9.89072 7.36475L0.628418 0.628529"></path>
</svg>
</div>
<div>
<p>Kepada Yth.</p>
<h3 class="person-name small">{{$tamu->tamu_nama}} - {{$tamu->tamu_organisasi}}</h3>
</div>
</div>
<div class="person-info">
<div class="person-details">
<h3 class="person-name large">{{$tamu->tamu_nama}} - {{$tamu->tamu_organisasi}}</h3>
<p>Anda diundang pada pesta pernikahan kami</p>
<p> </p>
<a href="{{url('undangan/'.$tamu->tamu_uniquecode)}}">Unduh E-Invitation Anda Disini</a>
</div>
<div>
<svg width="267" height="122" viewBox="0 0 267 122" xmlns="http://www.w3.org/2000/svg" class="person-envelope-open">
<path class="cls-1" d="M267 0L160.707 73.524L142.911 61.2137C136.065 56.4782 127.001 56.4782 120.155 61.2137L104.326 72.1634L0 1.03964e-05V121H267V0Z"></path><path class="cls-2" d="M103.785 72.3087L49.5469 109.279L35.9873 118.522L32.5974 120.833"></path><path class="cls-2" d="M161.309 73.9404L215.324 110.467L228.828 119.599L230.516 120.741"></path>
</svg>
</div>
<button class="person-close" type="button" onclick="togglePersonInfo()">
<svg width="25" height="25" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" class="person-close-icon">
<rect class="cls-1" width="48" height="48" /><path class="cls-2" d="M14 14L34 34" /><path class="cls-2" d="M14 34L34 14" />
</svg>
</button>
</div>
</section>
@endif

<section class="music-outer" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
<div class="music-box auto" id="music-box"></div>
</section>

</body>
<script>

    // Music
    var MUSIC = {
        'url': "{{asset('wedding/lagu-wedding.mp3')}}",
        'box': '#music-box'
    };

    // Event
    var EVENT = 1731150000;


    // Covers
    var COVERS = [
        {
            'position': 'MAIN',
            'details': {
                'desktop': "<div class=\"picture desktop\">\n                                                        <img src=\"{{asset('foto-prewedd/4.jpg')}}\" alt=\"\">\n                                                    </div><div class=\"picture desktop\">\n                                                        <img src=\"{{asset('foto-prewedd/13.jpg')}}\" alt=\"\">\n                                                    </div>",
                'mobile': "<div class=\"picture mobile\">\n                                                        <img src=\"{{asset('foto-prewedd/11.jpg')}}\" alt=\"\">\n                                                    </div><div class=\"picture mobile\">\n                                                        <img src=\"{{asset('foto-prewedd/13.jpg')}}\" alt=\"\">\n                                                    </div><div class=\"picture mobile\">\n                                                        <img src=\"{{asset('foto-prewedd/7.jpg')}}\" alt=\"\">\n                                                    </div><div class=\"picture mobile\">\n                                                        <img src=\"{{asset('foto-prewedd/3.jpg')}}\" alt=\"\">\n                                                    </div>"            },
            'element': '#cover-main'
        },
        {
            'position': 'OPENING',
            'details': {
                'desktop': "<div class=\"picture desktop\">\n                                        <img src=\"{{asset('foto-prewedd/6.jpg')}}\" alt=\"\" class=\"picture\">\n                                    </div>",
                'mobile': "<div class=\"picture mobile\">\n                                        <img src=\"{{asset('foto-prewedd/4.jpg')}}\" alt=\"\" class=\"picture\">\n                                    </div><div class=\"picture mobile\">\n                                        <img src=\"{{asset('foto-prewedd/13.jpg')}}\" alt=\"\" class=\"picture\">\n                                    </div>"            },
            'element': '#cover-opening'
        },
        {
            'position': 'PANE',
            'details': {
                'desktop': "<div class=\"picture desktop\">\n                                    <img src=\"{{asset('foto-prewedd/5.jpg')}}\" alt=\"\" class=\"picture\">\n                                </div>",
                'mobile': "<div class=\"picture mobile\">\n                                    <img src=\"{{asset('foto-prewedd/5.jpg')}}\" alt=\"\" class=\"picture\">\n                                </div><div class=\"picture mobile\">\n                                    <img src=\"{{asset('foto-prewedd/8.jpg')}}\" alt=\"\" class=\"picture\">\n                                </div>"            },
            'element': '#cover-pane'
        },
        {
            'position': 'SAVEDATE',
            'details': {
                'desktop': "<div class=\"picture desktop\">\n                                    <img src=\"{{asset('foto-prewedd/4.jpg')}}\" alt=\"\" class=\"picture\">\n                                </div>",
                'mobile': "<div class=\"picture mobile\">\n                                    <img src=\"{{asset('foto-prewedd/4.jpg')}}\" alt=\"\" class=\"picture\">\n                                </div><div class=\"picture mobile\">\n                                    <img src=\"{{asset('foto-prewedd/3.jpg')}}\" alt=\"\" class=\"picture\">\n                                </div>"            },
            'element': '#savedate-main'
        }
    ];

    // Protocol
    var PROTOCOL = {
        'slider': '#protocol-slider',
        'dots': '#protocol-dots'
    };


</script>

<script>
    // JavaScript Code

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

    $(document).ready(function() {
      $('#confirmationForm').on('submit', function(e) {
        e.preventDefault(); // Prevent form from submitting the traditional way

        var kehadiran = $('#kehadiran').val(); // Get the selected option
        var guestId = $('#guestId').val(); // Get the selected option
        var submitButton = $('#submitButton');
        var loadingAnimation = $('#loadingAnimation');

        // Disable the button and show the loading animation
        submitButton.prop('disabled', true);
        loadingAnimation.show();

        // AJAX POST request

        $.ajax({
          type: 'POST',
          url: '/konfirmasi-kehadiran',
          data: { guestId: guestId,
             kehadiran: kehadiran },
          success: function(response) {
            // Check if the response is a success
            swal("Terima Kasih", "Terima kasih telah mengkonfirmasi kehadiran anda!", "success");
          },
          error: function(xhr, status, error) {
            // Handle error if the request fails
            swal("Mohon Maaf", "Mohon maaf, terjadi kesalahan silahkan coba lagi nanti", "success");
          },
          complete: function() {
            // Enable the button and hide the loading animation after the request completes
            submitButton.prop('disabled', false);
            loadingAnimation.hide();
          }
        });
      });
    });
  </script>
<script>
$(document).ready(function() {
    // Load all existing wedding wishes when the page loads
    loadWishes();

    // AJAX form submission
    $('#weddingWishesForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting the traditional way

        var tamu_uniquecode = $('#tamu_uniquecode').val();
        var wishes = $('#wishes').val();

        $.ajax({
            type: 'POST',
            url: '/submit-wedding-wish', // Laravel route to handle the form submission
            data: {
                tamu_uniquecode: tamu_uniquecode,
                wishes: wishes,
                _token: '{{ csrf_token() }}' // CSRF token for security
            },
            success: function(response) {
                // If the wish is successfully saved, reload the wishes
                $('#wishes').val(''); // Clear the textarea
                loadWishes(); // Reload the list of wishes
                alert(response.message);
            },
            error: function(xhr, status, error) {
                alert('Terjadi kesalahan saat mengirim ucapan.');
            }
        });
    });

    // Function to load the existing wedding wishes
    function loadWishes() {
        $.ajax({
            type: 'GET',
            url: '/get-wedding-wishes', // Laravel route to get the wishes
            success: function(response) {
                var wishesList = $('#weddingWishesList');
                wishesList.empty(); // Clear the list before appending new data

                // Loop through the response data and append each wish to the list
                response.wishes.forEach(function(wish, index) {
                    var commentHtml = `
                    <div class="comment-item aos-init aos-animate" id="comment${index}" data-aos="fade-up" data-aos-duration="1200">
                        <div class="comment-head">
                            <h3 class="comment-name">${wish.tamu_nama} - ${wish.tamu_organisasi} <small class="comment-date">${wish.ucapan_date}</small></h3>
                        </div>
                        <div class="comment-body">
                            <p class="comment-caption">${wish.ucapan_isiucapan}</p>
                        </div>
                    </div>`;

                    wishesList.append(commentHtml);
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to load wishes:', error);
            }
        });
    }
});

</script>
<div class="alert" id="alert">
<div class="alert-text"></div>
<div class="alert-close fas fa-times"></div>
</div>

<div id="modal" class="modal modal-center"></div>
<script src="{{asset('wedding/plugin.js')}}"></script>
<script src="{{asset('wedding/wedding.js')}}"></script>
</html>
