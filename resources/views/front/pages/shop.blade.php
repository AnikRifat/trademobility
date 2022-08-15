@extends('front.layouts.app')
@section('content')
    <div class="main-body">
        <!-- content starts here -->

        <!-- PAGE BANNER SECTION -->
        <div class="page-banner-section section">
            <div class="container">
                <div class="row">
                    <div class="page-banner-content col-xs-12">
                        <h2>Shop</h2>
                        <ul class="breadcrumb">
                            <li><a href="index-2#">Home</a></li>
                            <li class="active">shop</li>
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
                    <div class="col-xl-12 col-lg-12 col-12 order-lg-1 order-0">
                        <div class="shop-bar mb-6">
                            <!-- <ul class="shop-tablist nav">
                                                        <li><a class="active" href="#product-grid" data-bs-toggle="tab"><i class="fa fa-th"></i></a></li>
                                                        <li><a href="#product-list" data-bs-toggle="tab"><i class="fa fa-list"></i></a></li>
                                                    </ul> -->
                            <div class="item-per-page">
                                <select>
                                    <option value="1">9 items/pages</option>
                                    <option value="2">12 items/pages</option>
                                    <option value="3">15 items/pages</option>
                                    <option value="4">18 items/pages</option>
                                </select>
                            </div>
                            <p>show item 1-9 of 36</p>
                        </div>
                        <div class="tab-content section">
                            <div class="tab-pane active" id="product-grid">
                                <div class="row">
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <button type="button" class="add-to-cart"
                                                    onclick="cartLS.add({id: 1, name: 'Nike Air', price: 100})">add to
                                                    cart</button>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a></h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a></h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->
                                    <!-- product-item start -->
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a class="image" href="product-details#"><img
                                                        src="{{ asset('/') }}assets/front/img/product/1.jpg"
                                                        alt="" /></a>
                                                <a href="cart#" class="add-to-cart">add to cart</a>
                                                <div class="action-btn fix">
                                                    <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                    <a href="product-details#" title="Quickview"><i
                                                            class="pe-7s-look"></i></a>
                                                    <!-- <a href="product-details#" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h5 class="title"><a href="product-details#">Le Parc Minotti Chair</a>
                                                </h5>
                                                <span class="price"><span class="new">$169.00</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-item end -->

                                    <div class="page-pagination text-center col-xs-12 fix mb-40">
                                        <ul>
                                            <li><a href="shop#"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="active"><a href="shop#">1</a></li>
                                            <li><a href="shop#">2</a></li>
                                            <li><a href="shop#">3</a></li>
                                            <li><a href="shop#">4</a></li>
                                            <li><a href="shop#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="col-xl-3 col-lg-4 col-12 order-lg-0 order-1">

                                                <div class="single-sidebar mb-8">
                                                    <form action="#" class="sidebar-search">
                                                        <input type="text" placeholder="Search here...">
                                                        <button class="submit"><i class="pe-7s-search"></i></button>
                                                    </form>
                                                </div>

                                                <div class="single-sidebar mb-8">
                                                    <h3 class="sidebar-title">Category</h3>
                                                    <ul class="category-sidebar">
                                                        <li><a href="shop#">Chairs</a></li>
                                                        <li><a href="shop#">Tables</a></li>
                                                        <li><a href="shop#">Sofas</a></li>
                                                        <li><a href="shop#">Lights & Lamps</a></li>
                                                        <li><a href="shop#">Decorations</a></li>
                                                        <li><a href="shop#">Others</a></li>
                                                    </ul>
                                                </div>

                                                <div class="single-sidebar mb-8">
                                                    <h3 class="sidebar-title">Category</h3>
                                                    <div id="price-range"></div>
                                                </div>

                                                <div class="single-sidebar mb-8">
                                                    <h3 class="sidebar-title">Color</h3>
                                                    <ul class="color-sidebar">
                                                        <li><a href="shop#"><i style="background-color: #0000FF;"></i><span>blue</span></a></li>
                                                        <li><a href="shop#"><i style="background-color: #DCDCDA;"></i><span>gray</span></a></li>
                                                        <li><a href="shop#"><i style="background-color: #855439;"></i><span>brown</span></a></li>
                                                        <li><a href="shop#"><i style="background-color: #50B948;"></i><span>green</span></a></li>
                                                        <li><a href="shop#"><i style="background-color: #FF0000;"></i><span>red</span></a></li>
                                                        <li><a href="shop#"><i style="background-color: #FF6801;"></i><span>orange</span></a></li>
                                                        <li><a href="shop#"><i style="background-color: #000000;"></i><span>black</span></a></li>
                                                    </ul>
                                                </div>

                                                <div class="single-sidebar mb-8">
                                                    <h3 class="sidebar-title">Popular Tags</h3>
                                                    <div class="tag-cloud">
                                                        <a href="shop#">Chairs</a>
                                                        <a href="shop#">Tables</a>
                                                        <a href="shop#">Sofas</a>
                                                        <a href="shop#">Lights</a>
                                                        <a href="shop#">Lamps</a>
                                                        <a href="shop#">curtains</a>
                                                        <a href="shop#">cabinets</a>
                                                    </div>
                                                </div>

                                            </div> -->
                </div>
            </div>
        </div>
        <!-- PAGE SECTION END -->

        <!-- content Ends here -->
    </div>
@endsection
