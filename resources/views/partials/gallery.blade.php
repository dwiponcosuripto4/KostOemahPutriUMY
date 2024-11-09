<!-- Gallery Section -->
<div class="container my-3 gallery-container">
    <div class="row gx-3 gy-2 gallery-row gallery-grid-mobile">
        <!-- Overlay warna -->
        <div class="overlay"></div>

        <!-- Video di Sisi Kiri -->
        <div class="col-lg-6">
            <video id="video-facility" controls class="video-facility">
                <source src="{{ URL::asset('/videos/kamar.mp4') }}" type="video/mp4">
                Browser Anda tidak mendukung video tag.
            </video>
        </div>

        <!-- Gambar Galeri yang akan tampil 2x2 di mobile -->
        <div class="col-lg-3 gallery-col">
            <a href="{{ URL::asset('/images/fasilitas/kasur.jpeg') }}" data-fancybox="gallery"
                class="gallery-item">
                <img src="{{ URL::asset('/images/fasilitas/kasur.jpeg') }}" alt="Fasilitas Kost"
                    class="img-fluid gallery-image">
            </a>
            <a href="{{ URL::asset('/images/fasilitas/mejakamar.jpeg') }}" data-fancybox="gallery"
                class="gallery-item">
                <img src="{{ URL::asset('/images/fasilitas/mejakamar.jpeg') }}" alt="Fasilitas Kost"
                    class="img-fluid gallery-image">
            </a>
        </div>
        <div class="col-lg-3 gallery-col">
            <a href="{{ URL::asset('/images/fasilitas/lemari.jpeg') }}" data-fancybox="gallery"
                class="gallery-item">
                <img src="{{ URL::asset('/images/fasilitas/lemari.jpeg') }}" alt="Fasilitas Kost"
                    class="img-fluid gallery-image">
            </a>
            <a href="{{ URL::asset('/images/fasilitas/dapur2.jpeg') }}" data-fancybox="gallery"
                class="gallery-item position-relative gallery-last-item">
                <img src="{{ URL::asset('/images/fasilitas/dapur2.jpeg') }}" alt="Fasilitas Kost"
                    class="img-fluid gallery-image">
                <!-- Overlay dengan angka dan ikon -->
                <div class="overlay-text">
                    <span><i class="fas fa-camera"></i> +8 Photos</span>
                </div>
            </a>

            <!-- Tambahan foto dari modal sebelumnya ke dalam fancybox gallery -->
            <a href="{{ URL::asset('/images/fasilitas/toilet.jpeg') }}" data-fancybox="gallery" style="display: none;">
                <img src="{{ URL::asset('/images/fasilitas/toilet.jpeg') }}" alt="Extra Photo">
            </a>
            <a href="{{ URL::asset('/images/fasilitas/dapur4.jpeg') }}" data-fancybox="gallery" style="display: none;">
                <img src="{{ URL::asset('/images/fasilitas/dapur4.jpeg') }}" alt="Extra Photo">
            </a>
            <a href="{{ URL::asset('/images/fasilitas/ac.jpeg') }}" data-fancybox="gallery" style="display: none;">
                <img src="{{ URL::asset('/images/fasilitas/ac.jpeg') }}" alt="Extra Photo">
            </a>
            <a href="{{ URL::asset('/images/fasilitas/cctv.jpeg') }}" data-fancybox="gallery" style="display: none;">
                <img src="{{ URL::asset('/images/fasilitas/cctv.jpeg') }}" alt="Extra Photo">
            </a>
        </div>
    </div>
</div>
