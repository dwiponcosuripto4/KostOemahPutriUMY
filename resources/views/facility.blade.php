@extends('layout')

@section('content')
    <meta name="turbolinks-cache-control" content="no-cache">
    @include('partials.gallery')

    <!-- Title Section -->
    <div class="container">
        <h2 class="fw-bold">Kost Oemah Putri</h2>
        <p class="text-muted">Kasihan Bantul, DIY</p>
    </div>

    <!-- Facility Section -->
    <div class="container mt-5">
        <h4 class="fw-bold">Fasilitas Kamar Kost</h4>
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
