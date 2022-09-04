@extends('front.layouts.app')
@section('content')
<div class="main-body">
    <!-- START SLIDER SECTION -->
    <div class="home-slider-section section">
        <img src="{{ asset('/') }}assets/images/{{ $content->slider }}" alt="Image">
        <!-- Caption 1 -->
        <div class="hero-static-caption">
            <div class="container">
                <div class="row">
                    <div class="hero-slider-content col-lg-6 offset-lg-6 col-md-7 offset-md-5 col-12">
                        <h4>welcome to</h4>
                        <h1 class="tlt">
                            <span class="texts">
                                <span>{{ $content->name }}</span>

                            </span>
                        </h1>
                        <p>{{ $content->slider_text }}</p>
                        {{-- <a href="product-details.html">Buy now</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SLIDER SECTION -->

    <!-- BANNER-SECTION START -->
    <div class="banner-section section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <!-- Banner Item Start -->
                <div class="col-md-6 col-12 mb-6">
                    <div class="single-banner">
                        <a href="shop.html"><img src="{{ asset('/') }}assets/images/{{ $content->tvc1 }}"
                              alt="Image"></a>
                    </div>
                </div>
                <!-- Banner Item End -->
                <!-- Banner Item Start -->
                <div class="col-md-6 col-12 mb-6">
                    <div class="single-banner">
                        <a href="shop.html"><img src="{{ asset('/') }}assets/images/{{ $content->tvc2 }}"
                              alt="Image"></a>
                    </div>
                </div>
                <!-- Banner Item End -->
            </div>
        </div>
    </div>
    <!-- BANNER-SECTION END -->

    <!-- PRODUCT SECTION START -->
    <div class="product-section section pb-60" id="shop">
        <div class="container">
            <div class="section-title text-center mb-70">
                <!-- <h4>our products</h4> -->
                <h2>Our Products</h2>
            </div>
            <div class="row">
                @include('front.inc.details_modal')
                <!-- product-item start -->

                @foreach ($products as $product)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                    @include('front.inc.product')
                </div>

                @endforeach

                <!-- product-item end -->


            </div>
        </div>
    </div>
    <!-- PRODUCT SECTION END -->

    <!-- TESTIMONIAL SECTION START -->
    @if($reviews)
    <div class="testimonial-section section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-10  col-12 m-auto">
                    <!-- Testimonial Slider -->
                    <div class="testimonial-slider text-center">
                        <!-- Single Testimonial -->
                        @foreach ($reviews as $review)
                        <div class="single-testimonial">
                            <p>“ {{ $review->comment }} ”</p>
                            <i class="pe-7s-way"></i>
                            <h5>{{ $review->name }}</h5>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- TESTIMONIAL SECTION END -->


</div>
@endsection
