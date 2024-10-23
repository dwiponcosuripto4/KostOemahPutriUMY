@extends('layout')

@section('content')
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
                        <div class="col-md-6 mb-3">
                            <a href="{{ URL::asset('/images/fasilitas/toilet.jpeg') }}" target="_blank">
                                <img src="{{ URL::asset('/images/fasilitas/toilet.jpeg') }}" alt="Extra Photo 1"
                                    class="img-fluid">
                            </a>
                        </div>
                        <!-- Foto 2 -->
                        <div class="col-md-6 mb-3">
                            <a href="{{ URL::asset('/images/fasilitas/dapur4.jpeg') }}" target="_blank">
                                <img src="{{ URL::asset('/images/fasilitas/dapur4.jpeg') }}" alt="Extra Photo 2"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{ URL::asset('/images/fasilitas/ac.jpeg') }}" target="_blank">
                                <img src="{{ URL::asset('/images/fasilitas/ac.jpeg') }}" alt="Extra Photo 2"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{ URL::asset('/images/fasilitas/cctv.jpeg') }}" target="_blank">
                                <img src="{{ URL::asset('/images/fasilitas/cctv.jpeg') }}" alt="Extra Photo 2"
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Title Section -->
    <div class="container">
        <h2 class="fw-bold">Kost Oemah Putri</h2>
        <p class="text-muted">Kasihan Bantul, DIY</p>
    </div>

    <!-- Facility Section -->
    <div class="container mt-5">
        <h4 class="fw-bold">Fasilitas Kost</h4>
        <div class="row mt-3">
            <div class="col-6 col-md-4 mb-4">
                <img src="{{ URL::asset('/icons/bed.png') }}" alt="Ukuran Kamar" class="facility-icon me-2"> Uk kamar
                3,5 X 4
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="{{ URL::asset('/icons/bathtub.png') }}" alt="Kamar Mandi Dalam" class="facility-icon me-2">
                Kamar mandi dalam
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="{{ URL::asset('/icons/wardrobe.png') }}" alt="Lemari" class="facility-icon me-2"> Lemari
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="{{ URL::asset('/icons/smart-tv.png') }}" alt="Tv 32" class="facility-icon me-2"> Tv 32"
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="{{ URL::asset('/icons/wifi.png') }}" alt="WiFi" class="facility-icon me-2"> Wifi
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="{{ URL::asset('/icons/desk.png') }}" alt="Meja Belajar" class="facility-icon me-2"> Meja
                Belajar
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="{{ URL::asset('/icons/ac.png') }}" alt="AC" class="facility-icon me-2"> AC
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="{{ URL::asset('/icons/bed.png') }}" alt="Bed" class="facility-icon me-2"> Bed
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="{{ URL::asset('/icons/dressing-table.png') }}" alt="Kaca Rias" class="facility-icon me-2">
                Kaca Rias
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('css/facility.css') }}">

    <script>
        const video = document.getElementById('video-facility');

        video.addEventListener('fullscreenchange', (e) => {
            if (document.fullscreenElement) {
                video.style.objectFit = 'contain'; // Sesuaikan saat fullscreen
                video.style.width = '100%';
                video.style.height = '100%';
            } else {
                video.style.objectFit = 'cover'; // Kembali ke pengaturan awal
                video.style.width = '100%';
                video.style.height = '340px';
            }
        });
    </script>
@endsection
