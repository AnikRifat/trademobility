@extends('front.layouts.app')
@section('content')
<div class="main-body">
    <!-- content starts here -->


    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>Shop list</h2>
                    <ul class="breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">shop list</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER SECTION -->

    <!-- PAGE SECTION START -->
    <div class="page-section section pt-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12 order-lg-1 order-0">
                    <div class="shop-bar mb-30">
                        <ul class="shop-tablist nav">
                            <li><a class="active" href="#product-grid" data-bs-toggle="tab"><i class="fa fa-th"></i></a>
                            </li>
                            <li><a href="#product-list" data-bs-toggle="tab"><i class="fa fa-list"></i></a></li>
                        </ul>
                    </div>
                    <div class="tab-content section">
                        <div class="tab-pane active" id="product-grid">
                            <div class="row">
                                <!-- product-item start -->
                                @foreach ($products as $product)
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                    @include('front.inc.product')
                                </div>
                                @endforeach

                                <!-- product-item end -->

                            </div>
                        </div>
                        <div class="tab-pane " id="product-list">
                            <div class="row">
                                <!-- list product-item start -->
                                @foreach ($products as $product)
                                <div class="col-xs-12 mb-40">
                                    <div class="list-product-item">
                                        <div class="list-product-img">
                                            <a class="image" href="{{ route('product.details', $product->id) }}"><img
                                                  src="{{ asset('/') }}assets/images/product/{{ $product->image }}"
                                                  alt="Image" /></a>
                                        </div>
                                        <div class="list-product-info fix">
                                            <h2 class="title"><a class="word-wrap"
                                                  href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                            </h2>
                                            <span class="price"><span class="new">{{ $product->price }} $</span></span>
                                            <p>{!! $product->details !!}</p>
                                            {{-- <div class="list-action-btn fix">
                                                <button type="button" class="add-to-cart"
                                                  onclick="cartLS.add({id: {{ $product->id }}, name: '{{ $product->name
                                            }}',image:'{{ $product->image }}', price: {{ $product->price }}})">add
                                            to
                                            cart</button>
                                            <a href="{{ route('product.details', $product->id) }}"><i
                                                  class="pe-7s-look"></i></a>

                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- list product-item end -->
                            <div class="page-pagination text-center col-xs-12 fix mb-8">
                                <ul>
                                    <li><a href="shop.html"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="shop.html">1</a></li>
                                    <li><a href="shop.html">2</a></li>
                                    <li><a href="shop.html">3</a></li>
                                    <li><a href="shop.html">4</a></li>
                                    <li><a href="shop.html"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-12 order-lg-0 order-1">


                <div class="single-sidebar mb-8">
                    <h3 class="sidebar-title">Category</h3>
                    <ul class="category-sidebar">
                        @foreach ($categories as $category)
                        <li><a href="{{ route('category',$category->id) }}">{{ $category->name }}</a>
                        </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE SECTION END -->
</div>
@endsection