@extends('admin.layouts.app')

@section('content')
    {{-- {{ dd($product) }} --}}
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
                            <form action="{{ route('product.update', $product->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label class="form-label" for="name">Product Name</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        placeholder="product name" value="{{ $product->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="details">Product details</label>
                                    <textarea class="form-control" type="text" id="details" name="details" placeholder="product details">{{ $product->name }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="price">Product price</label>
                                    <input class="form-control" type="text" id="price" name="price"
                                        placeholder="product price" value="{{ $product->price }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="unit">Product unit</label>
                                    <input class="form-control" type="text" id="unit" name="unit"
                                        placeholder="product unit" value="{{ $product->unit }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="iamge">Product Image</label>
                                    <img src="{{ asset('/') }}/assets/products/{{ $product->image }}" alt=""
                                        height="200" width="200" hidden>
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="category_id">Category Select</label>
                                    <select class="form-select" id="category_id" name="category_id">
                                        <option>Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($category->id == $product->category_id) selected @endif>
                                                {{ $category->name }}</option>
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
