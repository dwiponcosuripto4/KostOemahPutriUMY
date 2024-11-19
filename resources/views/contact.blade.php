@extends('layout')

@section('content')

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
            <div class="card p-5 text-center" style="border-radius: 15px; z-index: 0;">
                <h4 class="fw-bold">CONTACT INFO</h4>
                <p>Phone number: 081234054811</p>
                <p>Kasihan, Bantul, Daerah Istimewa Yogyakarta</p>
                <div class="mt-4">
                    <p><b>ERNI ES RIANTI</b></p>
                    <a href="https://wa.me/6281234054811" target="_blank">
                        <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
