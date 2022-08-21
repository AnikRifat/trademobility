@extends('front.layouts.app')

@section('content')
    <div class="main-body">
        <!-- PAGE BANNER SECTION -->
        <div class="page-banner-section section">
            <div class="container">
                <div class="row">
                    <div class="page-banner-content col-xs-12">
                        <h2>Register</h2>
                        <ul class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li class="active">Register</li>
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
                    <div class="col-lg-8 col-12 m-auto">
                        <div class="login-reg-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-xs-12 mb-20">
                                        <label for="name"> Name <span class="required">*</span></label>
                                        <input id="name" name="name" type="text" />
                                    </div>

                                    <div class="col-md-6 col-xs-12 mb-20">
                                        <label for="email">Email Address <span class="required">*</span></label>
                                        <input id="email" name="email" type="email" />
                                    </div>

                                    <div class="col-xs-12 mb-20">
                                        <label class="" for="password">Account password<span
                                                class="required">*</span></label>
                                        <input id="password" name="password" type="password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-xs-12 mb-20">
                                        <label class="" for="password_confirmation">Confirm password<span
                                                class="required">*</span></label>
                                        <input id="password_confirmation" name="password_confirmation" type="password">
                                    </div>
                                    <div class="col-xs-12 mb-20">
                                        <input id="rememberme" type="checkbox">
                                        <label for="rememberme">I agree <a href="contact.html">Terms &amp;
                                                Condition</a></label>
                                    </div>
                                    <div class="col-xs-12">
                                        <input value="register" type="submit">
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
