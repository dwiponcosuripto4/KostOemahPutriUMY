@extends('layout')

@section('content')
    <div class="container" style="padding-top: 80px;"> <!-- Tambahkan container di sini -->
        <h2 class="fw-bold mb-4 text-center">Review Summary</h2>
        <div class="row">
            <!-- Average Rating with Card -->
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h1 id="rating" class="display-1 fw-bold">0.0</h1>
                    <div class="d-flex justify-content-center mb-2">
                        <span class="text-warning fs-4 me-2">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                    <a href="#" class="text-primary">32 reviews</a>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Rating Bars with Cards -->
                <div class="card p-3 mb-3">
                    <!-- Animasi pada Progress Bar menggunakan CSS -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="fw-bold me-3">5</div>
                        <div class="progress flex-grow-1" style="height: 10px;">
                            <div class="progress-bar bg-warning animated-bar" style="width: 90%;" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="fw-bold me-3">4</div>
                        <div class="progress flex-grow-1" style="height: 10px;">
                            <div class="progress-bar bg-warning animated-bar" style="width: 1%;" aria-valuenow="1"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="fw-bold me-3">3</div>
                        <div class="progress flex-grow-1" style="height: 10px;">
                            <div class="progress-bar bg-warning animated-bar" style="width: 1%;" aria-valuenow="1"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="fw-bold me-3">2</div>
                        <div class="progress flex-grow-1" style="height: 10px;">
                            <div class="progress-bar bg-warning animated-bar" style="width: 1%;" aria-valuenow="1"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="fw-bold me-3">1</div>
                        <div class="progress flex-grow-1" style="height: 10px;">
                            <div class="progress-bar bg-warning animated-bar" style="width: 1%;" aria-valuenow="1"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-uppercase">Google Reviews</h1>
        <p><em>"Tinjau langsung kepuasan penghuni kami melalui ulasan Google berikut dan temukan kenyamanan Kost Oemah Putri
                yang
                sudah dipercaya."</em></p>
        <div class='sk-ww-google-reviews' data-embed-id='25476295'></div>
    </div> <!-- Tutup container di sini -->

    <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer data-turbolinks-eval="always"></script>


    <script>
        document.addEventListener('turbolinks:load', function() {
            // Hapus skrip widget Google Reviews jika sudah ada untuk menghindari duplikasi
            const existingScript = document.querySelector(
                "script[src='https://widgets.sociablekit.com/google-reviews/widget.js']");
            if (existingScript) {
                existingScript.remove();
            }

            // Memuat ulang widget Google Reviews
            const script = document.createElement('script');
            script.src = 'https://widgets.sociablekit.com/google-reviews/widget.js';
            script.async = true;
            script.defer = true;
            script.setAttribute("data-turbolinks-eval", "always");
            document.body.appendChild(script);

            script.onload = function() {
                // Menjalankan animasi rating setelah widget dimuat
                animateRating('rating', 0.0, 5.0, 2000);
            };
        });

        function animateRating(elementId, start, end, duration) {
            const element = document.getElementById(elementId);
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.innerText = (progress * (end - start) + start).toFixed(1);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }
    </script>

    <style>
        /* Animation for Progress Bars */
        @keyframes growProgressBar {
            from {
                width: 0;
            }
        }

        /* Apply animation to all progress bars with .animated-bar */
        .animated-bar {
            animation: growProgressBar 4s ease forwards;
        }
    </style>
@endsection
