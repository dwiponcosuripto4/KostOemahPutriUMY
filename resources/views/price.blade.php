@extends('layout')

@section('content')
    <!-- Harga Section -->
    <section class="harga-section">
        <div class="container mt-4">
            <div class="row-background">
                <div class="row">
                    <!-- Left Column: Title, Facility, Description, and Payment Section -->
                    <div class="col-md-8 order-1 order-md-1">
                        <!-- Title Section -->
                        <div class="title-section">
                            <div>
                                <h2 class="fw-bold">Kost Oemah Putri</h2>
                                <p class="text-muted">Kasihan Bantul, DIY</p>
                            </div>
                            <div class="icon-section">
                                <i class="fas fa-heart me-1" id="love-icon"></i>
                                <i class="fas fa-share-alt ms-3" id="share-icon"></i>
                            </div>
                        </div>

                        <!-- Facility Section -->
                        <div class="container">
                            <div class="facility-container">
                                <div class="facility-card">
                                    <div class="icon-container">
                                        <img src="{{ URL::asset('/icons/policeman.png') }}" alt="Penjaga Kost 24 Jam"
                                            class="facility-icon">
                                    </div>
                                    <p class="mt-2">Penjaga Kost 24 Jam</p>
                                </div>
                                <div class="facility-card">
                                    <div class="icon-container">
                                        <img src="{{ URL::asset('/icons/kitchen-table.png') }}"
                                            alt="Dapur Umum/Kantin Dalam" class="facility-icon">
                                    </div>
                                    <p class="mt-2">Dapur Umum/ Kantin Dalam</p>
                                </div>
                                <div class="facility-card">
                                    <div class="icon-container">
                                        <img src="{{ URL::asset('/icons/bicycle.png') }}" alt="Parkir"
                                            class="facility-icon">
                                    </div>
                                    <p class="mt-2">Parkir</p>
                                </div>
                                <div class="facility-card">
                                    <div class="icon-container">
                                        <img src="{{ URL::asset('/icons/security-camera.png') }}" alt="CCTV 24 Jam"
                                            class="facility-icon">
                                    </div>
                                    <p class="mt-2">CCTV 24 Jam</p>
                                </div>
                            </div>
                        </div>

                        <!-- Description Section -->
                        <h4 class="fw-bold mt-5">Deskripsi Kost</h4>
                        <div class="description-container">
                            <p>Kost Oemah Putri menawarkan suasana hunian yang nyaman dan aman untuk mahasiswi dekat Universitas Muhammadiyah Yogyakarta. Dengan fasilitas lengkap dan lingkungan yang tenang,
                                kost ini ideal untuk belajar dan beristirahat.</p>
                        </div>
                    </div>

                    <!-- Right Column: Price Section -->
                    <div class="col-md-4 order-2 order-md-2 mb-3">
                        <div class="price-container card p-4 shadow">
                            <h4>Rp 1.450.000</h4>
                            <hr>
                            <ul class="price-list">
                                <li><span class="duration">1 Bulan</span><span class="price">Rp 1.450.000</span></li>
                                <li><span class="duration">6 Bulan</span><span class="price">Rp 8.400.000</span></li>
                                <li><span class="duration">12 Bulan</span><span class="price">Rp 15.600.000</span></li>
                            </ul>

                            <div class="text-center">
                                <a href="https://wa.me/6281234054811" target="_blank">
                                    <button class="btn-booking">Booking Now</button>
                                </a>
                                <a href="/contact" class="contact-link">
                                    <i class="fas fa-phone-alt me-2"></i>
                                    Contact Kost
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .row-background -->
        </div>
    </section>

    <!-- Payment Section -->
    <section class="payment-section">
        <div class="container mt-4">
            <h4 class="fw-bold">Pembayaran</h4>
            <p>Semua bank</p>

            <!-- Bank List -->
            <div class="bank-card">
                <div>
                    <h5 class="mb-1 fw-bold">Mandiri</h5>
                    <p class="mb-0">1234567890098765 an. naswa</p>
                </div>
                <div class="bank-logo">
                    <img src="{{ URL::asset('/icons/mandiri.png') }}" alt="Mandiri Logo">
                </div>
            </div>

            <div class="bank-card">
                <div>
                    <h5 class="mb-1 fw-bold">BRI</h5>
                    <p class="mb-0">1234567890098765 an. naswa</p>
                </div>
                <div class="bank-logo">
                    <img src="{{ URL::asset('/icons/bri.png') }}" alt="BRI Logo">
                </div>
            </div>

            <div class="bank-card">
                <div>
                    <h5 class="mb-1 fw-bold">BCA</h5>
                    <p class="mb-0">1234567890098765 an. naswa</p>
                </div>
                <div class="bank-logo">
                    <img src="{{ URL::asset('/icons/bca.png') }}" alt="BCA Logo">
                </div>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="{{ asset('css/price.css') }}">
    <script src="{{ asset('js/price.js') }}"></script>
@endsection
