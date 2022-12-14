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
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/intlTelInput.css">
        <!-- Modernizr JS -->
        <script src="{{ asset('/') }}assets/front/js/vendor/modernizr-3.11.2.min.js"></script>

    </head>
    <style>
        .iti__flag {
            background-image: url("=" {
                        {
                        asset('/')
                    }
                }

                assets/front/img/flags.png");

            }

            @media (-webkit-min-device-pixel-ratio: 2),
            (min-resolution: 192dpi) {
                .iti__flag {
                    background-image: url("=" {
                                {
                                asset('/')
                            }
                        }

                        assets/front/img/flags@2x.png");

                    }
                }
    </style>

    <body>

        <!-- Body main wrapper start -->
        <div class="wrapper">

            <!-- START HEADER SECTION -->
            <header class="header-section section sticker header-transparent">
                <div class="container-fluid">
                    <div class="row">
                        <!-- logo -->

                        <div class="col-lg-2 col-sm-4 col-4">
                            <div class="header-logo">
                                <a href="{{ route('index') }}"><img
                                      src="{{ asset('/') }}assets/images/logo/{{ $content->logo }}" alt="main logo"></a>
                            </div>
                        </div>
                        <!-- primary-menu -->
                        <div class="col-lg-8 col-12 d-none d-lg-block">
                            <nav class="main-menu text-center">
                                <ul>
                                    <li class="active"><a href="index.php">Categories</a>
                                        <ul class="sub-menu">
                                            @foreach ($categories as $category)
                                            <li><a
                                                  href="{{ route('category',$category->id) }}">{{ $category->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    {{-- <li><a href="{{ route('shop') }}">shop</a></li> --}}
                                    <li><a href="#shop">Our Products</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#footer">Contact Us</a></li>
                                    @auth

                                    <li><a class="d-block d-md-none" href="{{ route('user.index') }}">Dashboard</a>
                                    </li>
                                    <li>
                                        <form id="logout" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>

                                        <a class="d-block d-md-none" onclick="logout()">Log
                                            Out</a>
                                    </li> @else
                                    <li><a class="d-block d-md-none" href="{{ route('login') }}">Log in</a></li>
                                    <li><a class="d-block d-md-none" href="{{ route('register') }}">Register</a>
                                    </li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class="col-lg-2 col-sm-8 col-4">
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
                                                  class="pe-7s-user"></i></a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownAccountBtn">


                                                @auth
                                                <li>
                                                    <form id="logout" action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                    </form>

                                                    <a onclick="logout()">Log
                                                        Out</a>
                                                </li>
                                                <li><a href="{{ route('redirectTo') }}">Dashboard</a></li>
                                                @else
                                                <li><a href="{{ route('login') }}">Log in</a></li>
                                                <li><a href="{{ route('register') }}">Register</a></li>
                                                @endauth
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Header Cart -->

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
            @if (request()->is('cart*'))
            @else
            {{-- <div class="cart-item-box">
                <button class="btn btn-rounded-0 btn-warning text-light cart-icon" onclick="openNav()"><i
                      class="pe-7s-cart"></i></button>
                <span class="itemstotal cart-item-count">2</span>
            </div> --}}
            @endif



            <div class="wrapper">
                <div id="mySidepanel" class="sidepanel">

                    @include('front.inc.cart')
                </div>
                <script>
                    function logout(){
                    document.getElementById("logout").submit();

                }
                </script>
