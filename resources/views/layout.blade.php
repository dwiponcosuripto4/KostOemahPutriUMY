<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Kost Oemah Putri UMY</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> 
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hamburger.css') }}">
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Navbar Brand di sebelah kanan -->
            <a class="navbar-brand ms-auto" href="/">Kost Oemah Putri UMY</a>
            <!-- Hamburger tetap di sebelah kanan untuk mobile -->
            <div id="nav-icon3" class="navbar-toggler" aria-controls="navbarText" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('facility') ? 'active' : '' }}"
                            href="{{ url('/facility') }}">Fasilitas Kost</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('price') ? 'active' : '' }}"
                            href="{{ url('/price') }}">Informasi Harga dan Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ url('/contact') }}">Informasi Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('review') ? 'active' : '' }}"
                            href="{{ url('/review') }}">Ulasan dan Rating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ url('/about') }}">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Area -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">© 2024 Kost Oemah Putri UMY. All Rights Reserved.</p>
            <p>
                <a href="#" class="text-decoration-none me-3">Privacy Policy</a>
                <a href="#" class="text-decoration-none">Terms of Service</a>
            </p>
        </div>
    </footer>
    <!-- Bootstrap 5.3.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js"></script>
    <script>
        $(document).ready(function() {
            $('#nav-icon3').click(function() {
                $(this).toggleClass('open');
                $('#navbarText').toggleClass('show');
            });
        });

        $(document).ready(function() {
            // Cek apakah galeri sudah ada di localStorage
            if (localStorage.getItem('galleryContent')) {
                // Tampilkan galeri dari localStorage
                $('#gallery-section').html(localStorage.getItem('galleryContent'));
            } else {
                // Jika belum ada, lakukan request AJAX ke server untuk memuat galeri
                $.ajax({
                    url: '/load-gallery',
                    method: 'GET',
                    success: function(data) {
                        $('#gallery-section').html(data); // Tampilkan galeri
                        localStorage.setItem('galleryContent', data); // Simpan galeri di localStorage
                    },
                    error: function(error) {
                        console.error("Gagal memuat gallery:", error);
                    }
                });
            }
        });
    </script>
</body>

</html>
