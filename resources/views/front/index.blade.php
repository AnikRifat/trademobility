@extends('front.layouts.app')
@section('content')
    <div class="main-body">
        <!-- START SLIDER SECTION -->
        <div class="home-slider-section section">
            <img src="{{ asset('/') }}assets/front/img/slider/1.jpg" alt="Image">
            <!-- Caption 1 -->
            <div class="hero-static-caption">
                <div class="container">
                    <div class="row">
                        <div class="hero-slider-content col-lg-6 offset-lg-6 col-md-7 offset-md-5 col-12">
                            <h4>welcome to our</h4>
                            <h1 class="tlt">
                                <span class="texts">
                                    <span>furniture gallery</span>
                                    <span>furniture fair</span>
                                    <span>furniture Store</span>
                                </span>
                            </h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form.</p>
                            <a href="product-details.html">Buy now</a>
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
                            <a href="shop.html"><img src="{{ asset('/') }}assets/front/img/banner/1.jpg"
                                    alt="Image"></a>
                        </div>
                    </div>
                    <!-- Banner Item End -->
                    <!-- Banner Item Start -->
                    <div class="col-md-6 col-12 mb-6">
                        <div class="single-banner">
                            <a href="shop.html"><img src="{{ asset('/') }}assets/front/img/banner/2.jpg"
                                    alt="Image"></a>
                        </div>
                    </div>
                    <!-- Banner Item End -->
                </div>
            </div>
        </div>
        <!-- BANNER-SECTION END -->

        <!-- PRODUCT SECTION START -->
        <div class="product-section section pb-60">
            <div class="container">
                <div class="section-title text-center mb-70">
                    <!-- <h4>our products</h4> -->
                    <h2>Our Leatest Products</h2>
                </div>
                <div class="row">
                    <!-- product-item start -->
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                            <div class="product-item text-center">
                                <div class="product-img">
                                    <a class="image" href="product-details.php"><img
                                            src="{{ asset('/') }}assets/images/product/{{ $product->image }}"
                                            alt="" /></a>
                                    <button type="button" class="add-to-cart"
                                        onclick="cartLS.add({id: {{ $product->id }}, name: '{{ $product->name }}', price: {{ $product->price }}})">add
                                        to
                                        cart</button>
                                    <div class="action-btn fix">
                                        <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                        <a href="#" title="Quickview"><i class="pe-7s-look"></i></a>
                                        <!-- <a href="product-details.php" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="title"><a href="product-details.php">{{ $product->name }}</a></h5>
                                    <span class="price"><span class="new">$ {{ $product->price }}</span></span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- product-item end -->


                </div>
            </div>
        </div>
        <!-- PRODUCT SECTION END -->

        <!-- TESTIMONIAL SECTION START -->
        <div class="testimonial-section section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10  col-12 m-auto">
                        <!-- Testimonial Slider -->
                        <div class="testimonial-slider text-center">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <img src="{{ asset('/') }}assets/front/img/testimonial/1.png" alt="Image">
                                <p>“ Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                    lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.
                                    ”</p>
                                <i class="pe-7s-way"></i>
                                <h5>Grace Kelly</h5>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <img src="{{ asset('/') }}assets/front/img/testimonial/2.png" alt="Image">
                                <p>“ Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                    lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.
                                    ”</p>
                                <i class="pe-7s-way"></i>
                                <h5>Diane Stevens</h5>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <img src="{{ asset('/') }}assets/front/img/testimonial/3.png" alt="Image">
                                <p>“ Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                    lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.
                                    ”</p>
                                <i class="pe-7s-way"></i>
                                <h5>Mary Harper</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TESTIMONIAL SECTION END -->


    </div>
@endsection
