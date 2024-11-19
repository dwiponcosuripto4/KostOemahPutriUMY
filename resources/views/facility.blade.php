@extends('layout')

@section('content')
    <meta name="turbolinks-cache-control" content="no-cache">
    
    <!-- Section Wrapper -->
    <section class="facility-section">
        <!-- Gallery -->
        @include('partials.gallery')

        <!-- Title Section -->
        <div class="container">
            <h2 class="title-text">Kost Oemah Putri</h2>
            <p class="subtitle-text">Kasihan Bantul, DIY</p>
        </div>

        <!-- Facility Section -->
        <div class="container facility-container">
            <h4 class="section-title">Fasilitas Kamar Kost</h4>
            <div class="row g-3">
                <div class="facility-col">
                    <img src="{{ URL::asset('/icons/bed.png') }}" alt="Ukuran Kamar" class="facility-icon"> 
                    <span class="facility-text">Uk kamar 3,5 X 4</span>
                </div>
                <div class="facility-col">
                    <img src="{{ URL::asset('/icons/bathtub.png') }}" alt="Kamar Mandi Dalam" class="facility-icon"> 
                    <span class="facility-text">Kamar mandi dalam</span>
                </div>
                <div class="facility-col">
                    <img src="{{ URL::asset('/icons/wardrobe.png') }}" alt="Lemari" class="facility-icon"> 
                    <span class="facility-text">Lemari</span>
                </div>
                <div class="facility-col">
                    <img src="{{ URL::asset('/icons/smart-tv.png') }}" alt="Tv 32" class="facility-icon"> 
                    <span class="facility-text">Tv 32"</span>
                </div>
                <div class="facility-col">
                    <img src="{{ URL::asset('/icons/wifi.png') }}" alt="WiFi" class="facility-icon"> 
                    <span class="facility-text">Wifi</span>
                </div>
                <div class="facility-col">
                    <img src="{{ URL::asset('/icons/desk.png') }}" alt="Meja Belajar" class="facility-icon"> 
                    <span class="facility-text">Meja Belajar</span>
                </div>
                <div class="facility-col">
                    <img src="{{ URL::asset('/icons/ac.png') }}" alt="AC" class="facility-icon"> 
                    <span class="facility-text">AC</span>
                </div>
                <div class="facility-col">
                    <img src="{{ URL::asset('/icons/bed.png') }}" alt="Bed" class="facility-icon"> 
                    <span class="facility-text">Bed</span>
                </div>
                <div class="facility-col">
                    <img src="{{ URL::asset('/icons/dressing-table.png') }}" alt="Kaca Rias" class="facility-icon"> 
                    <span class="facility-text">Kaca Rias</span>
                </div>
                <div class="button-container mt-4">
                    <a href="/price" class="d-inline-flex align-items-center">
                        <button class="btn-view-facilities">
                            Cek Harga!
                        </button>
                        <i class="fas fa-arrow-right icon-arrow"></i> <!-- Ikon panah di luar tombol -->
                    </a>
                </div>
            </div>
        </div>
    </section>

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
