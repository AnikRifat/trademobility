@extends('front.layouts.app')
@section('content')
<div class="main-body">
    <!-- content starts here -->


    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>{{ Auth::user()->name }} Dashboard</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER SECTION -->

    <!-- PAGE SECTION START -->
    {{-- <div class="page-section section pt-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12 order-lg-1 order-1">
                    <div class="shop-bar mb-30">
                        <ul class="shop-tablist nav">
                            <li><a class="active" href="#history" data-bs-toggle="tab"><i class="fa fa-th"></i></a></li>
                            <li><a href="#info" data-bs-toggle="tab"><i class="fa fa-list"></i></a>
                            <li><a href="#password" data-bs-toggle="tab"><i class="fa fa-list"></i></a>
                            </li>
                        </ul>>
                    </div>
                    <div class="tab-content section">
                        <div class="tab-pane active" id="history">

                        </div>
                        <div class="tab-pane " id="info">

                        </div>
                        <div class="tab-pane " id="password">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- PAGE SECTION END -->
</div>
@endsection