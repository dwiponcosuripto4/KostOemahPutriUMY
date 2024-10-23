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
    <div class="container mt-4">
        <h4 class="fw-bold">Fasilitas Kost</h4>
        <div class="row">
            <div class="col-md-9">
                <div class="d-flex flex-wrap mb-4">
                    <div class="p-2">
                        <img src="{{ URL::asset('/icons/policeman.png') }}" alt="Penjaga Kost 24 Jam" class="facility-icon me-2">
                        Penjaga Kost 24 Jam
                    </div>
                    <div class="p-2">
                        <img src="{{ URL::asset('/icons/kitchen-table.png') }}" alt="Dapur Umum" class="facility-icon me-2">
                        Dapur Umum/Kantin Dalam
                    </div>
                    <div class="p-2">
                        <img src="{{ URL::asset('/icons/bicycle.png') }}" alt="Parkir" class="facility-icon me-2">
                        Parkir
                    </div>
                    <div class="p-2">
                        <img src="{{ URL::asset('/icons/security-camera.png') }}" alt="CCTV 24 Jam" class="facility-icon me-2">
                        CCTV 24 Jam
                    </div>
                </div>

                <!-- Description Section -->
                <h4 class="fw-bold">Deskripsi Kost</h4>
                <div class="bg-light" style="width:100%; height: 150px;"></div>
            </div>

            <!-- Price Section -->
            <div class="col-md-3">
                <div class="card p-3 shadow">
                    <h4>Rp 1.450.000</h4>
                    <ul class="list-unstyled">
                        <li>Per Bulan: Rp 1.450.000</li>
                        <li>6 Bulan: Rp 8.400.000</li>
                        <li>12 Bulan: Rp 15.600.000</li>
                    </ul>
                    <button class="btn btn-dark w-100">Booking Now</button>
                    <div class="d-flex align-items-center mt-3">
                        <i class="fas fa-phone me-2"></i> Contact Kost
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Section -->
    <div class="container mt-5">
        <h4 class="fw-bold">Pembayaran</h4>
        <p>Semua bank</p>

        <div class="list-group">
            <div class="list-group-item bg-light">
                <h5 class="mb-1 fw-bold">Mandiri</h5>
                <p class="mb-1">1234567890098765 an. naswa</p>
            </div>
            <div class="list-group-item bg-light">
                <h5 class="mb-1 fw-bold">BRI</h5>
                <p class="mb-1">1234567890098765 an. naswa</p>
            </div>
            <div class="list-group-item bg-light">
                <h5 class="mb-1 fw-bold">BCA</h5>
                <p class="mb-1">1234567890098765 an. naswa</p>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('css/price.css') }}">
@endsection
