<div>
    <!-- Form Section -->
    <div class="wedding-wish-form">
        <form wire:submit.prevent="submitWishes">
            <div>
                <input type="hidden" wire:model="tamu.tamu_uniquecode">
            </div>

            <div class="form-group guest-name-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <input type="text" name="name" class="form-control guest-name" value="{{ $tamu->tamu_nama }} - {{ $tamu->tamu_organisasi }}" disabled>
            </div>

            <div class="form-group guest-comment-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                <textarea class="form-control" id="wishes" wire:model="wishes" rows="1" placeholder="Tulis ucapan anda"></textarea>
                @error('wishes') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="submit-comment-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                <button type="submit" class="btn btn-md btn-primary" id="submitComment" data-last>Kirim</button>
            </div>
        </form>
    </div>

    <!-- Comment Section -->
    <div class="comment-wrap">
        <ul>
            @foreach($weddingWishes as $wish)
                <li>
                    <strong>{{ $wish->ucapan_tamuuniquecode }}:</strong> {{ $wish->ucapan_isiucapan }} <br>
                    <em>{{ $wish->ucapan_date }}</em>
                </li>
            @endforeach
        </ul>
    </div>
</div>
