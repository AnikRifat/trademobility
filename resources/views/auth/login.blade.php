@extends('front.layouts.app')

@section('content')
    <div class="main-body">


        <!-- PAGE BANNER SECTION -->
        <div class="page-banner-section section">
            <div class="container">
                <div class="row">
                    <div class="page-banner-content col-xs-12">
                        <h2>login</h2>
                        <ul class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li class="active">login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE BANNER SECTION -->

        <!-- PAGE SECTION START -->
        <div class="page-section section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-12 m-auto">
                        <div class="login-reg-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-20">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input name="email" id="email" type="text" value="{{ old('email') }}">
                                    </div>
                                    <div class="col-12
                                            mb-20">
                                        <label for="password">Passwords <span class="required">*</span></label>
                                        <input name="password" id="password" type="password" required
                                            autocomplete="current-password">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <input value="Login" name="login" class="inline" type="submit">
                                    </div>
                                    <div class="col-12">
                                        <a href="{{ route('register') }}">Register Here!</a>
                                    </div>
                                    <div class="col-12">
                                        <a href="{{ url('password/reset') }}">Lost your password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE SECTION END -->

    </div>
@endsection
