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
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg {{ request()->is('/') ? 'navbar-index' : '' }}">
        <div class="container-fluid">
            <!-- Navbar Brand di kiri -->
            <a class="navbar-brand" href="/" data-turbolinks="false">Kost Oemah Putri UMY</a>

            <!-- Hamburger untuk mobile -->
            <div id="nav-icon3" class="navbar-toggler" aria-controls="navbarText" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Navbar Links di kanan -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}" data-turbolinks="false">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('facility') ? 'active' : '' }}"
                            href="{{ url('/facility') }}" data-turbolinks="false">Fasilitas Kost</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('price') ? 'active' : '' }}" href="{{ url('/price') }}"
                            data-turbolinks="false">Informasi Harga dan Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ url('/contact') }}">Informasi Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('review') ? 'active' : '' }}" href="{{ url('/review') }}"
                            data-turbolinks="false">Ulasan dan Rating</a>
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
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="py-4">
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
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
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

        $(document).ready(function() {
            function initFancybox() {
                Fancybox.bind("[data-fancybox]", {
                    // Custom options
                    Thumbs: {
                        autoStart: true,
                    },
                    Toolbar: {
                        display: {
                            left: ["infobar"],
                            right: ["slideshow", "thumbs", "close"],
                        },
                    },
                });
            }

            // Handler untuk memuat gallery dan menginisialisasi Fancybox
            function loadGallery() {
                $.ajax({
                    url: '/load-gallery',
                    method: 'GET',
                    success: function(data) {
                        $('#gallery-section').html(data);
                        initFancybox(); // Inisialisasi Fancybox setelah konten dimuat
                    },
                    error: function(error) {
                        console.error("Gagal memuat gallery:", error);
                    }
                });
            }

            // Load gallery saat halaman pertama dimuat
            loadGallery();

            // Reinisialisasi saat Turbolinks selesai memuat halaman
            document.addEventListener("turbolinks:load", function() {
                loadGallery();
            });
        });
        document.addEventListener("turbolinks:load", function() {
            const video = document.getElementById('video-facility');
            if (video) {
                video.load(); // Force reload video
                video.addEventListener('fullscreenchange', (e) => {
                    if (document.fullscreenElement) {
                        video.style.objectFit = 'contain';
                        video.style.width = '100%';
                        video.style.height = '100%';
                    } else {
                        video.style.objectFit = 'cover';
                        video.style.width = '100%';
                        video.style.height = '340px';
                    }
                });
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.querySelector(".navbar-index");
            if (navbar) {
                window.addEventListener("scroll", function() {
                    if (window.scrollY > 50) {
                        navbar.classList.add("scrolled");
                    } else {
                        navbar.classList.remove("scrolled");
                    }
                });
            }
        });
    </script>
</body>

</html>
