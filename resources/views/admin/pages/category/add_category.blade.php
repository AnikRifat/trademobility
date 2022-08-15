@extends('admin.layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

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
@endsection
