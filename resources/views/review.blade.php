@extends('layout')

@section('content')
    <!-- Review Summary Section -->
    <div class="container my-5">
        <div id="carouselExampleCaptions" class="carousel slide mb-5"><!-- Tambahkan mb-5 untuk margin bottom -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class=""
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"
                    class="active" aria-current="true"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555"
                            dy=".3em">First slide</text>
                    </svg>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444"
                            dy=".3em">Second slide</text>
                    </svg>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333"
                            dy=".3em">Third slide</text>
                    </svg>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <h2 class="fw-bold mb-4 text-center">Review Summary</h2>
        <div class="row">
            <!-- Average Rating with Card -->
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h1 class="display-1 fw-bold">5.0</h1>
                    <div class="d-flex justify-content-center mb-2">
                        <span class="text-warning fs-4 me-2">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                    <a href="#" class="text-primary">32 reviews</a>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Rating Bars with Cards -->
                <div class="card p-3 mb-3">
                    <div class="d-flex align-items-center mb-2">
                        <div class="fw-bold me-3">5</div>
                        <div class="progress flex-grow-1" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="fw-bold me-3">4</div>
                        <div class="progress flex-grow-1" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 1%;" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="fw-bold me-3">3</div>
                        <div class="progress flex-grow-1" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 1%;"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="fw-bold me-3">2</div>
                        <div class="progress flex-grow-1" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 1%;"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="fw-bold me-3">1</div>
                        <div class="progress flex-grow-1" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 1%;"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Review Section -->
        <div class="container my-5">
            <div class="row">
                <!-- Review 1 -->
                <div class="col-md-6 mb-4">
                    <div class="d-flex">
                        <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User">
                        <div>
                            <h6 class="mb-0">Melisa Mhrni</h6>
                            <small>5 ulasan</small>
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        <small class="text-muted">9 months ago</small>
                        <p>Tempatnya nyaman adem enak bersih😍 ibu kos nya baik banget👏 pokoknya ga bakalan nyesel kalo
                            ngekos di sini enak banget dan kalau untuk anak kuliahan lebih fokus belajar...</p>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="col-md-6 mb-4">
                    <div class="d-flex">
                        <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User">
                        <div>
                            <h6 class="mb-0">Melisa Mhrni</h6>
                            <small>5 ulasan</small>
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        <small class="text-muted">9 months ago</small>
                        <p>Tempatnya nyaman adem enak bersih😍 ibu kos nya baik banget👏 pokoknya ga bakalan nyesel kalo
                            ngekos di sini enak banget dan kalau untuk anak kuliahan lebih fokus belajar...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container title_holder">

            <h1 class="text-uppercase">Google Reviews</h1>
            <p><em>The following is a preview of your SociableKIT Google Reviews widget.</em></p>
        </div>
        <div class='sk-ww-google-reviews' data-embed-id='25476295'></div>
        <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
    @endsection
