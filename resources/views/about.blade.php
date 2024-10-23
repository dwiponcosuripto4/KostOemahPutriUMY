@extends('layout')

@section('content')
    <!-- About Us Section -->
    <div class="container my-5">
        <h1 class="fw-bold">About us</h1>
        <div class="col-md-12">
            <div class="slider-hero">
                <div class="featured-carousel owl-carousel">
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center"
                                style="background-image: url(images/about1.jpeg);">
                                <div class="text text-center">
                                    <h2>Discover New Places</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center"
                                style="background-image: url(images/slider-2.jpg);">
                                <div class="text text-center">
                                    <h2>Dream Destination</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center"
                                style="background-image: url(images/slider-3.jpg);">
                                <div class="text text-center">
                                    <h2>Travel Exploration</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-5 text-center">
                    <ul class="thumbnail">
                        <li class="active img"><a href="#"><img src="images/thumb-1.jpg" alt="Image"
                                    class="img-fluid"></a></li>
                        <li><a href="#"><img src="images/thumb-2.jpg" alt="Image" class="img-fluid"></a></li>
                        <li><a href="#"><img src="images/thumb-3.jpg" alt="Image" class="img-fluid"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
