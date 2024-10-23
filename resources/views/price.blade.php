@extends('layout')

@section('content')
    <meta name="turbolinks-cache-control" content="no-cache">
    <div id="gallery-section"></div>

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
                        <img src="{{ URL::asset('/icons/policeman.png') }}" alt="Penjaga Kost 24 Jam"
                            class="facility-icon me-2">
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
                        <img src="{{ URL::asset('/icons/security-camera.png') }}" alt="CCTV 24 Jam"
                            class="facility-icon me-2">
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
