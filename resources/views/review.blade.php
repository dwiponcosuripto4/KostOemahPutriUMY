@extends('layout')

@section('content')
    <!-- Review Summary Section -->
    <section class="review-summary-section">
        <div class="container">
            <!-- summary -->
            <div class="summary-background">
                <h2 class="fw-bold mb-4 text-center">Review Summary</h2>
                <div class="row">
                    <!-- Average Rating with Card -->
                    <div class="col-md-4">
                        <div class="card p-3 text-center">
                            <h1 id="rating" class="display-1 fw-bold">0.0</h1>
                            <div class="d-flex justify-content-center mb-2">
                                <span class="text-warning fs-4 me-2">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            </div>
                            <a href="https://www.google.com/maps/search/?api=1&query=Google&query_place_id=ChIJQcz4I1L5ei4RueJ_5NHcOm0" class="text-primary">32 reviews</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- Rating Bars with Cards -->
                        <div class="card p-3 mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <div class="fw-bold me-3">5</div>
                                <div class="progress flex-grow-1 progress-bar-container">
                                    <div class="progress-bar bg-warning animated-bar" style="width: 90%;" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="fw-bold me-3">4</div>
                                <div class="progress flex-grow-1 progress-bar-container">
                                    <div class="progress-bar bg-warning animated-bar" style="width: 1%;" aria-valuenow="1"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="fw-bold me-3">3</div>
                                <div class="progress flex-grow-1 progress-bar-container">
                                    <div class="progress-bar bg-warning animated-bar" style="width: 1%;" aria-valuenow="1"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="fw-bold me-3">2</div>
                                <div class="progress flex-grow-1 progress-bar-container">
                                    <div class="progress-bar bg-warning animated-bar" style="width: 1%;" aria-valuenow="1"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="fw-bold me-3">1</div>
                                <div class="progress flex-grow-1 progress-bar-container">
                                    <div class="progress-bar bg-warning animated-bar" style="width: 1%;" aria-valuenow="1"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end summary -->

            <h1 class="text-uppercase">Google Reviews</h1>
            <p><em>"Tinjau langsung kepuasan penghuni kami melalui ulasan Google berikut dan temukan kenyamanan Kost Oemah Putri
                    yang sudah dipercaya."</em></p>
            <div class='sk-ww-google-reviews' data-embed-id='25476295'></div>
        </div>
    </section>
    
    <script src="{{ asset('js/review.js') }}"></script>
    <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer data-turbolinks-eval="always"></script>
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endsection
