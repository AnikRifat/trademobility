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
                                <li><a href="#product-grid" data-bs-toggle="tab"><i class="fa fa-th"></i></a></li>
                                <li><a class="active" href="#product-list" data-bs-toggle="tab"><i
                                            class="fa fa-list"></i></a></li>
                            </ul>
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
                            <div class="tab-pane" id="product-grid">
                                <div class="row">
                                    <!-- product-item start -->
                                    @foreach ($products as $product)
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                            <div class="product-item text-center">
                                                <div class="product-img">
                                                    <a class="image" href="product-details.php"><img
                                                            src="{{ asset('/') }}assets/images/product/{{ $product->image }}"
                                                            alt="" /></a>
                                                    <button type="button" class="add-to-cart"
                                                        onclick="cartLS.add({id: {{ $product->id }}, name: '{{ $product->name }}',image:'{{ $product->image }}', price: {{ $product->price }}})">add
                                                        to
                                                        cart</button>
                                                    <div class="action-btn fix">
                                                        <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                        <a href="{{ route('product.details', $product->id) }}"
                                                            title="Quickview"><i class="pe-7s-look"></i></a>
                                                        <!-- <a href="product-details.php" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="title"><a
                                                            href="product-details.php">{{ $product->name }}</a>
                                                    </h5>
                                                    <span class="price"><span class="new">$
                                                            {{ $product->price }}</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

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
                            <div class="tab-pane active" id="product-list">
                                <div class="row">
                                    <!-- list product-item start -->
                                    @foreach ($products as $product)
                                        <div class="col-xs-12 mb-40">
                                            <div class="list-product-item">
                                                <div class="list-product-img">
                                                    <a class="image" href="product-details.html"><img
                                                            src="img/product/1.jpg" alt="Image" /></a>
                                                </div>
                                                <div class="list-product-info fix">
                                                    <h2 class="title"><a href="product-details.html">Le Parc Minotti
                                                            Chair</a></h2>
                                                    <span class="price"><span class="new">$169.00</span></span>
                                                    <p>Investigationes demonstraverunt lectores legere me lius quod ii
                                                        legunt saepius. Claritas est etiam processus dynamicus, qui sequitur
                                                        mutationem consuetudium lectorum. Mirum est notare quam littera
                                                        gothica, quam nunc putamus parum claram.</p>
                                                    <div class="list-action-btn fix">
                                                        <a href="cart.html" class="add-to-cart">add to cart</a>
                                                        <a href="wishlist.html" title="Wishlist"><i
                                                                class="pe-7s-like"></i></a>
                                                        <a href="product-details.html" data-bs-toggle="modal"
                                                            data-bs-target="#productModal" title="Quickview"><i
                                                                class="pe-7s-look"></i></a>
                                                        <a href="product-details.html" title="Compare"><i
                                                                class="pe-7s-repeat"></i></a>
                                                    </div>
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
                            <form action="#" class="sidebar-search">
                                <input type="text" placeholder="Search here...">
                                <button class="submit"><i class="pe-7s-search"></i></button>
                            </form>
                        </div>

                        <div class="single-sidebar mb-8">
                            <h3 class="sidebar-title">Category</h3>
                            <ul class="category-sidebar">
                                <li><a href="shop.html">Chairs</a></li>
                                <li><a href="shop.html">Tables</a></li>
                                <li><a href="shop.html">Sofas</a></li>
                                <li><a href="shop.html">Lights & Lamps</a></li>
                                <li><a href="shop.html">Decorations</a></li>
                                <li><a href="shop.html">Others</a></li>
                            </ul>
                        </div>

                        <div class="single-sidebar mb-8">
                            <h3 class="sidebar-title">Category</h3>
                            <div id="price-range"></div>
                        </div>

                        <div class="single-sidebar mb-8">
                            <h3 class="sidebar-title">Color</h3>
                            <ul class="color-sidebar">
                                <li><a href="shop.html"><i style="background-color: #0000FF;"></i><span>blue</span></a>
                                </li>
                                <li><a href="shop.html"><i style="background-color: #DCDCDA;"></i><span>gray</span></a>
                                </li>
                                <li><a href="shop.html"><i style="background-color: #855439;"></i><span>brown</span></a>
                                </li>
                                <li><a href="shop.html"><i style="background-color: #50B948;"></i><span>green</span></a>
                                </li>
                                <li><a href="shop.html"><i style="background-color: #FF0000;"></i><span>red</span></a>
                                </li>
                                <li><a href="shop.html"><i style="background-color: #FF6801;"></i><span>orange</span></a>
                                </li>
                                <li><a href="shop.html"><i style="background-color: #000000;"></i><span>black</span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="single-sidebar mb-8">
                            <h3 class="sidebar-title">Popular Tags</h3>
                            <div class="tag-cloud">
                                <a href="shop.html">Chairs</a>
                                <a href="shop.html">Tables</a>
                                <a href="shop.html">Sofas</a>
                                <a href="shop.html">Lights</a>
                                <a href="shop.html">Lamps</a>
                                <a href="shop.html">curtains</a>
                                <a href="shop.html">cabinets</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE SECTION END -->




















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
                    <div class="col-xl-3 col-lg-4 col-12 order-lg-0 order-1">

                        <div class="single-sidebar mb-8">
                            <h3 class="sidebar-title">Category</h3>
                            <ul class="category-sidebar">
                                <li><a href="shop.html">Chairs</a></li>
                                <li><a href="shop.html">Tables</a></li>
                                <li><a href="shop.html">Sofas</a></li>
                                <li><a href="shop.html">Lights &amp; Lamps</a></li>
                                <li><a href="shop.html">Decorations</a></li>
                                <li><a href="shop.html">Others</a></li>
                            </ul>
                        </div>


                    </div>
                    <div class="col-xl-9 col-lg-8 col-12 order-lg-1 order-0">
                        <div class="shop-bar mb-6">
                        </div>
                        <div class="tab-content section">
                            <div class="tab-pane active" id="product-grid">
                                <div class="row">
                                    <!-- product-item start -->
                                    @foreach ($products as $product)
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                            <div class="product-item text-center">
                                                <div class="product-img">
                                                    <a class="image" href="product-details.php"><img
                                                            src="{{ asset('/') }}assets/images/product/{{ $product->image }}"
                                                            alt="" /></a>
                                                    <button type="button" class="add-to-cart"
                                                        onclick="cartLS.add({id: {{ $product->id }}, name: '{{ $product->name }}',image:'{{ $product->image }}', price: {{ $product->price }}})">add
                                                        to
                                                        cart</button>
                                                    <div class="action-btn fix">
                                                        <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
                                                        <a href="{{ route('product.details', $product->id) }}"
                                                            title="Quickview"><i class="pe-7s-look"></i></a>
                                                        <!-- <a href="product-details.php" title="Compare"><i class="pe-7s-repeat"></i></a> -->
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="title"><a
                                                            href="product-details.php">{{ $product->name }}</a>
                                                    </h5>
                                                    <span class="price"><span class="new">$
                                                            {{ $product->price }}</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

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
                </div>
            </div>
        </div>
        <!-- PAGE SECTION END -->

        <!-- content Ends here -->
    </div>
@endsection
