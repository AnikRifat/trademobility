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
                                <input class="form-control" type="text" id="name" name="name" placeholder="product name"
                                  value="">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="details">Product details</label>
                                <textarea class="form-control" type="text" id="ckeditor1" name="details"
                                  placeholder="product details" value=""></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="price">Product price</label>
                                <input class="form-control" type="text" id="price" name="price"
                                  placeholder="product price" value="">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="unit">Product unit</label>
                                <input class="form-control" type="text" id="unit" name="unit" placeholder="product unit"
                                  value="">
                            </div>
                            <div class="mb-4">

                                <label class="form-label" for="iamge">Product Image</label>
                                <img src="#" alt="" height="200" width="200" hidden>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="category_id">Category Select</label>
                                <select class="form-select" id="category_id" name="category_id" onchange="genSubCat()">
                                    <option>Select</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="sub_category_id">Category Select</label>
                                <select class="form-select" id="sub_cat_id" name="sub_category_id">
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
<script>
    async function genSubCat() {
            const id = document.querySelector("#category_id").value;
            const url = `{{ url('findSubCat') }}/${id}`;

            document.getElementById('sub_cat_id').innerHTML = " ";

            const res = await fetch(`${url}`);
            let data = await res.json();

            data.forEach((res) => {
                document.getElementById('sub_cat_id').innerHTML +=
                    `<option value="${res.id}">${res.name}</option>`;
            });
        }
</script>
@endsection
{{-- ((res => {
    field.innerHTML = `
    <option value="${res.id}">${res.name}</option>
    `;
    //  += $content;
    // console.log($content); --}}