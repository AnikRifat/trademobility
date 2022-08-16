<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $content->name }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/images/logo/{{ $content->logo }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- All CSS Files -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/bootstrap.min.css">
    <!-- Icon Font -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/pe-icon-7-stroke.css">
    <!-- Plugins css file -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/plugins.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/responsive.css">

    <!-- Modernizr JS -->
    <script src="{{ asset('/') }}assets/front/js/vendor/modernizr-3.11.2.min.js"></script>

</head>

<body>

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- START HEADER SECTION -->
        <header class="header-section section sticker header-transparent">
            <div class="container-fluid">
                <div class="row">
                    <!-- logo -->
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="header-logo">
                            <a href="index.php"><img src="{{ asset('/') }}assets/images/logo/{{ $content->logo }}"
                                    alt="main logo"></a>
                        </div>
                    </div>
                    <!-- primary-menu -->
                    <div class="col-lg-8 col-12 d-none d-lg-block">
                        <nav class="main-menu text-center">
                            <ul>
                                <li class="active"><a href="index.php">Categories</a>
                                    <ul class="sub-menu">
                                        @foreach ($categories as $category)
                                            <li><a href="#">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('shop') }}">shop</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- header-search & total-cart -->
                    <div class="col-lg-2 col-sm-8 col-6">
                        <div class="header-option-btns float-end">
                            <!-- header-search -->
                            <div class="header-search float-start">
                                <button class="search-toggle" data-bs-toggle="modal" data-bs-target="#myModal"><i
                                        class="pe-7s-search"></i></button>
                            </div>
                            <!-- header Account -->
                            <div class="header-account float-start">
                                <ul>
                                    <li><a class="dropdown-toggle" href="#" id="dropdownAccountBtn"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="pe-7s-config"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownAccountBtn">
                                            <li><a href="login.php">Log in</a></li>
                                            <li><a href="register.php">Register</a></li>
                                            <li><a href="#">My Account</a></li>
                                            <li><a href="wishlist.php">Wish list</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Header Cart -->
                            <div class="header-cart float-start">
                                <!-- Cart Toggle -->
                                <a class="cart-toggle dropdown-toggle" href="#" data-toggle="dropdown"
                                    id="dropdownCartBtn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="pe-7s-cart"></i>
                                    <span>2</span>
                                </a>
                                <!-- Mini Cart Brief -->
                                <div class="mini-cart-brief dropdown-menu" aria-labelledby="dropdownCartBtn">
                                    <div class="cart-items">
                                        <p>You have <span>2 items</span> in your shopping bag</p>
                                    </div>
                                    <!-- Cart Products -->
                                    <div class="all-cart-product cart clearfix">


                                    </div>
                                    <!-- Cart Total -->
                                    @csrf
                                    <div class="cart-totals">
                                        <h5>Total <span class="total"></span>
                                            <input class="totali" hidden name="totalprice">
                                        </h5>
                                    </div>
                                    <!-- Cart Button -->
                                    <div class="cart-bottom  clearfix">
                                        <a href="{{ route('cart') }}">Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Nav -->
                <div class="mobile-menu"></div>
            </div>
        </header>
        <!-- END HEADER SECTION -->

        <!-- Search Modal -->
        <div class="search-modal modal fade text-center" id="myModal" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <button type="button" class="btn-modal-close" data-bs-dismiss="modal"><i
                            class="pe-7s-close"></i></button>
                    <div class="header-search-form">
                        <form action="{{ route('product.search') }}">
                            <input type="text" name="query" placeholder="Search">
                            <button type="submit"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper">
