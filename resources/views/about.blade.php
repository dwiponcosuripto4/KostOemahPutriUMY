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
                                style="background-image: url(images/about/about2.jpeg);">
                                <div class="text text-center">
                                    <h2>Discover New Places</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center"
                                style="background-image: url(images/about/about1.jpeg);">
                                <div class="text text-center">
                                    <h2>Dream Destination</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide ke-3 dengan video -->
                    <div class="item" style="background-color:black">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center">
                                <video autoplay muted loop class="img-fluid" style="max-width: 100%; height: 100%;">
                                    <source src="images/about/about3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                    <!-- Slide ke-4 dengan video -->
                    <div class="item" style="background-color:black">
                        <div class="work">
                            <div class="img d-flex align-items-center justify-content-center">
                                <video autoplay muted loop class="img-fluid" style="object-fit: contain">
                                    <source src="images/about/about4.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-5 text-center">
                    <ul class="thumbnail">
                        <li class="active img"><a href="#"><img src="images/slider/about2-slider.jpeg" alt="Image"
                                    class="img-fluid"></a></li>
                        <li><a href="#"><img src="images/slider/about1-slider.jpeg" alt="Image" class="img-fluid"></a></li>
                        <li><a href="#"><img src="images/slider/about3-slider.png" alt="Image" class="img-fluid"></a></li>
                        <li><a href="#"><img src="images/slider/about4-slider.png" alt="Image" class="img-fluid"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
