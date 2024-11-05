@extends('layout')

@section('content')

    <!-- Carousel Section -->
    <section id="carousel" class="carousel section">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade mb-4" style="width: 100vw; margin-left: calc(50% - 50vw);">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-overlay">
                        <img src="{{ asset('images/fasilitas/home.jpeg') }}" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                        <h2 class="fadeInDown">Welcome to Kost Oemah Putri</h2>
                        <p class="fadeInDown-delay">Kost Oemah Putri adalah hunian nyaman dan aman bagi mahasiswi dekat UMY, dengan lokasi strategis dan suasana tenang.</p>
                        <a href="#description" class="btn btn-primary mt-3 fadeInUp">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-overlay">
                        <img src="{{ asset('images/fasilitas/viewkost.jpeg') }}" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                        <h2 class="fadeInDown">Kost Oemah Putri</h2>
                        <p class="fadeInDown-delay">Fasilitas lengkap disediakan, seperti kamar ber-AC, kamar mandi dalam, Wi-Fi cepat, dapur bersama, dan area parkir. Kost ini menawarkan suasana homey yang nyaman dan aman.</p>
                        <a href="#description" class="btn btn-primary mt-3 fadeInUp">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-overlay">
                        <img src="{{ asset('images/fasilitas/viewkost2.jpeg') }}" class="d-block w-100" alt="Image 3">
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                        <h2 class="fadeInDown">Kost Oemah Putri</h2>
                        <p class="fadeInDown-delay">Dengan harga terjangkau, Kost Oemah Putri menjadi solusi hunian praktis dekat kampus. Rasakan kenyamanan tinggal di Kost Oemah Putri UMY!</p>
                        <a href="#description" class="btn btn-primary mt-3 fadeInUp">Read More</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Description Section -->
    <section id="description" class="description section">
        <div class="description">
            <p>
                Kost Oemah Putri adalah tempat penginapan yang nyaman dan aman, terletak dekat Universitas Muhammadiyah
                Yogyakarta (UMY). Kost ini menawarkan fasilitas lengkap seperti kamar ber-AC, kamar mandi dalam, Wi-Fi, dapur
                bersama, dan area parkir. Dengan lingkungan yang tenang dan lokasi strategis, Kost Oemah Putri menjadi pilihan
                ideal bagi mahasiswi yang mencari tempat tinggal nyaman dan terjangkau di sekitar UMY.
            </p>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="location section">
        <div class="location">
            <h2>Location</h2>
            <p>Ngebel, Tamantirto, Kec. Kasihan, Bantul, DIY</p>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.762312988712!2d110.31550527476631!3d-7.814965892205623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af95223f8cc41%3A0x6d3adcd1e47fe2b9!2sKost%20Oemah%20Puteri%20UMY!5e0!3m2!1sid!2sid!4v1728827021118!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const readMoreButton = document.querySelector(".btn-primary[href='#description']");
            readMoreButton.addEventListener("click", function (event) {
                event.preventDefault();
                const descriptionSection = document.getElementById("description");
                const offset = descriptionSection.getBoundingClientRect().top + window.scrollY - 100; // Adjust offset if necessary
                window.scrollTo({ top: offset, behavior: "smooth" });
            });
        });
    </script>
    

@endsection
