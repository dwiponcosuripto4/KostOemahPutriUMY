@extends('layout')

@section('content')

    <img src="{{ asset('images/fasilitas/home.jpeg') }}" class="img-fluid" alt="...">

    <!-- Description -->
    <div class="description">
        <p>
            Kost Oemah Putri adalah tempat penginapan yang nyaman dan aman, terletak dekat Universitas Muhammadiyah
            Yogyakarta (UMY). Kost ini menawarkan fasilitas lengkap seperti kamar ber-AC, kamar mandi dalam, Wi-Fi, dapur
            bersama,
            dan area parkir. Dengan lingkungan yang tenang dan lokasi strategis, Kost Oemah Putri menjadi pilihan ideal bagi
            mahasiswi yang mencari tempat tinggal nyaman dan terjangkau di sekitar UMY.
        </p>
    </div>

    <!-- Location Section -->
    <div class="location">
        <h5>Location</h5>
        <p>Ngebel, Tamantirto, Kec. Kasihan, Bantul, DIY</p>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.762312988712!2d110.31550527476631!3d-7.814965892205623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af95223f8cc41%3A0x6d3adcd1e47fe2b9!2sKost%20Oemah%20Puteri%20UMY!5e0!3m2!1sid!2sid!4v1728827021118!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
