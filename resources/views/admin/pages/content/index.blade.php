@extends('admin.layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        <div class="page-content">
            <div class="container-fluid">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Basic Elements</h4>


                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('contentedit', $content->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-4">
                                <label class="form-label" for="name">Website Name</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    placeholder="Website name" value="{{ $content->name }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="logo">Website logo</label>
                                <img src="{{ asset('/') }}assets/images/logo/{{ $content->logo }}" alt=""
                                    height="200" width="200">
                                <input class="form-control" type="file" id="logo" name="logo">
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
