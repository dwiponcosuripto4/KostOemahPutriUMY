<!-- Gallery Section -->
<div class="container my-5">
    <div class="row gx-3 gy-3"> <!-- Gunakan gx-3 dan gy-3 untuk jarak antar kolom -->
        <!-- Video di Sisi Kiri -->
        <div class="col-lg-6">
            <video id="video-facility" controls style="width: 100%; height: 340px; object-fit: cover; border-radius: 10px;">
                <source src="{{ URL::asset('/videos/kamar.mp4') }}" type="video/mp4">
                Browser Anda tidak mendukung video tag.
            </video>
        </div>
        <!-- Dua Gambar di Sisi Tengah -->
        <div class="col-lg-3">
            <img src="{{ URL::asset('/images/fasilitas/kasur.jpeg') }}" alt="Fasilitas Kost" class="img-fluid mb-2"
                 style="width: 100%; height: 165px; object-fit: cover; border-radius: 10px; cursor: pointer;"
                 onclick="window.open(this.src, '_blank')">
            <img src="{{ URL::asset('/images/fasilitas/mejakamar.jpeg') }}" alt="Fasilitas Kost" class="img-fluid"
                 style="width: 100%; height: 165px; object-fit: cover; border-radius: 10px; cursor: pointer;"
                 onclick="window.open(this.src, '_blank')">
        </div>
        <!-- Dua Gambar di Sisi Kanan -->
        <div class="col-lg-3">
            <img src="{{ URL::asset('/images/fasilitas/lemari.jpeg') }}" alt="Fasilitas Kost" class="img-fluid mb-2"
                 style="width: 100%; height: 165px; object-fit: cover; border-radius: 10px; cursor: pointer;"
                 onclick="window.open(this.src, '_blank')">
            <div class="position-relative" style="border-radius: 10px; overflow: hidden;">
                <img src="{{ URL::asset('/images/fasilitas/dapur2.jpeg') }}" alt="Fasilitas Kost" class="img-fluid"
                     style="width: 100%; height: 165px; object-fit: cover; border-radius: 10px; cursor: pointer;"
                     onclick="window.open(this.src, '_blank')">
                <div class="position-absolute bottom-0 end-0 p-3 bg-dark text-light">
                    <span class="fs-4 fw-bold">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#morePhotosModal"
                           style="color: white; text-decoration: none;">+More Photos</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk More Photos -->
<div class="modal fade" id="morePhotosModal" tabindex="-1" aria-labelledby="morePhotosModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="morePhotosModalLabel">More Photos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Foto 1 -->
                    @php
                        $photos = [
                            '/images/fasilitas/toilet.jpeg',
                            '/images/fasilitas/dapur4.jpeg',
                            '/images/fasilitas/ac.jpeg',
                            '/images/fasilitas/cctv.jpeg'
                        ];
                    @endphp

                    @foreach($photos as $photo)
                        <div class="col-md-6 mb-3">
                            <a href="{{ URL::asset($photo) }}" target="_blank">
                                <img src="{{ URL::asset($photo) }}" alt="Extra Photo" class="img-fluid">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

