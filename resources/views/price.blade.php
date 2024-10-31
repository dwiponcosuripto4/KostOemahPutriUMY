@extends('layout')

@section('content')
    <meta name="turbolinks-cache-control" content="no-cache">
    <div id="gallery-section"></div>

    <div class="container mt-4">
        <div class="row">
            <!-- Left Column: Title, Facility, Description, and Payment Section -->
            <div class="col-md-8">
                <!-- Title Section -->
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="fw-bold">Kost Oemah Putri</h2>
                        <p class="text-muted">Kasihan Bantul, DIY</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <!-- Love icon with animation only -->
                        <i class="fas fa-heart me-1" id="love-icon"
                            style="color: #e42127; font-size: 1.5rem; cursor: pointer; transition: transform 0.2s;"></i>

                        <!-- Share icon with animation -->
                        <i class="fas fa-share-alt ms-3" id="share-icon"
                            style="font-size: 1.5rem; color: #333; cursor: pointer; transition: transform 0.2s;"></i>
                    </div>
                </div>

                <!-- Facility Section -->
                <div class="container mt-4">
                    <h4 class="fw-bold">Fasilitas Kost</h4>
                    <div class="d-flex justify-content-between flex-wrap gap-2">
                        <div class="card text-center"
                            style="width: 150px; height: 150px; background-color: #f8f9fa; border: none;">
                            <div class="d-flex align-items-center justify-content-center" style="height: 80px;">
                                <img src="{{ URL::asset('/icons/policeman.png') }}" alt="Penjaga Kost 24 Jam"
                                    style="width: 40px;">
                            </div>
                            <p class="mt-2">Penjaga Kost 24 Jam</p>
                        </div>
                        <div class="card text-center"
                            style="width: 150px; height: 150px; background-color: #f8f9fa; border: none;">
                            <div class="d-flex align-items-center justify-content-center" style="height: 80px;">
                                <img src="{{ URL::asset('/icons/kitchen-table.png') }}" alt="Dapur Umum"
                                    style="width: 40px;">
                            </div>
                            <p class="mt-2">Dapur Umum/Kantin Dalam</p>
                        </div>
                        <div class="card text-center"
                            style="width: 150px; height: 150px; background-color: #f8f9fa; border: none;">
                            <div class="d-flex align-items-center justify-content-center" style="height: 80px;">
                                <img src="{{ URL::asset('/icons/bicycle.png') }}" alt="Parkir" style="width: 40px;">
                            </div>
                            <p class="mt-2">Parkir</p>
                        </div>
                        <div class="card text-center"
                            style="width: 150px; height: 150px; background-color: #f8f9fa; border: none;">
                            <div class="d-flex align-items-center justify-content-center" style="height: 80px;">
                                <img src="{{ URL::asset('/icons/security-camera.png') }}" alt="CCTV 24 Jam"
                                    style="width: 40px;">
                            </div>
                            <p class="mt-2">CCTV 24 Jam</p>
                        </div>
                    </div>

                    <!-- Description Section -->
                    <h4 class="fw-bold mt-4">Deskripsi Kost</h4>
                    <div class="bg-light" style="width:100%; height: 150px;"></div>
                </div>


            </div>

            <!-- Right Column: Price Section -->
            <div class="col-md-4">
                <div class="card p-4 shadow" style="width: 100%; border-radius: 12px; background-color: #f8f9fa;">
                    <h4 style="font-weight: bold; color: #333;">Rp 1.450.000</h4>
                    <hr style="width: 100%; border: 0.5px solid #ddd;">
                    <ul class="list-unstyled mt-3 mb-4" style="color: #777; padding-left: 0;">
                        <li>Per Bulan: Rp 1.450.000</li>
                        <li>6 Bulan: Rp 8.400.000</li>
                        <li>12 Bulan: Rp 15.600.000</li>
                    </ul>
                    <div class="text-center">
                        <a href="https://wa.me/6281234054811" target="_blank" style="text-decoration: none;">
                            <button class="btn w-100 mb-3" style="background-color: #444; color: white; border-radius: 20px; font-weight: bold;">
                                Booking Now
                            </button>
                        </a>
                        <a href="/contact" class="d-flex align-items-center justify-content-center"
                            style="text-decoration: none; color: inherit;">
                            <i class="fas fa-phone-alt me-2" style="color: #444;"></i>
                            <span style="font-weight: bold; color: #444;">Contact Kost</span>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Payment Section -->
    <div class="container mt-5">
        <h4 class="fw-bold">Pembayaran</h4>
        <p>Semua bank</p>

        <!-- Bank List -->
        <div class="mb-2 p-3" style="background-color: #e0e0e0; border-radius: 8px;">
            <h5 class="mb-1 fw-bold">Mandiri</h5>
            <p class="mb-0">1234567890098765 an. naswa</p>
        </div>
        <div class="mb-2 p-3" style="background-color: #e0e0e0; border-radius: 8px;">
            <h5 class="mb-1 fw-bold">BRI</h5>
            <p class="mb-0">1234567890098765 an. naswa</p>
        </div>
        <div class="mb-2 p-3" style="background-color: #e0e0e0; border-radius: 8px;">
            <h5 class="mb-1 fw-bold">BCA</h5>
            <p class="mb-0">1234567890098765 an. naswa</p>
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('css/price.css') }}">
    <script>
        // Event listener untuk ikon "love" yang akan menambahkan animasi saat diklik
        document.getElementById('love-icon').addEventListener('click', function() {
            // Menambahkan animasi dengan efek scale
            this.style.transform = 'scale(1.2)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200);
        });

        // Event listener untuk ikon "share" yang akan menambahkan animasi saat diklik
        document.getElementById('share-icon').addEventListener('click', function() {
            // Menambahkan animasi dengan efek scale
            this.style.transform = 'scale(1.2)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200);
        });
    </script>
@endsection
