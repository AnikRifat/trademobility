@extends('admin.layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title mb-4">Products</h5>
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label" for="name">Product Name</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        placeholder="product name" value="">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="details">Product details</label>
                                    <input class="form-control" type="text" id="details" name="details"
                                        placeholder="product details" value="">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="price">Product price</label>
                                    <input class="form-control" type="text" id="price" name="price"
                                        placeholder="product price" value="">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="unit">Product unit</label>
                                    <input class="form-control" type="text" id="unit" name="unit"
                                        placeholder="product unit" value="">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="iamge">Product Image</label>
                                    <img src="#" alt="" height="200" width="200" hidden>
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="category_id">Category Select</label>
                                    <select class="form-select" id="category_id" name="category_id">
                                        <option>Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
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
    </div>
@endsection
