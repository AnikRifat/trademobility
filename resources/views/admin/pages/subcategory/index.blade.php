@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <h4 class="card-title">Category</h4>
                        </div>
                        <div class="col-md-8 col-12">

                            <form action="{{ route('createsubcategory') }}" method="post">
                                @csrf
                                <div class="">
                                    <div class="row mb-4">
                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"
                                          for="name">Sub Category</label>
                                        <div class="col-sm-9">

                                            <input class="form-control" id="horizontal-firstname-input" name="name"
                                              type="text" placeholder="Add your Sub Category here...">
                                        </div>

                                    </div>
                                    <div class="row mb-4">
                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"
                                          for="category_id">Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" id="category_id" name="category_id">
                                                <option>Select</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">

                                        <button type="submit" class="btn btn-secondary">Add</button>
                                    </div>



                                </div>
                            </form>
                            {{-- <a href="{{ route('addcategory') }}" class="btn btn-primary btn-sm w-md">add
                            category</a> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subcategories as $subcategory)
                                <tr>


                                    <th>{{ $subcategory->id }}</th>
                                    <td>{{ $subcategory->name }}</td>
                                    <td>{{ $subcategory->category->name }}</td>
                                    <td>
                                        <form action="{{ route('deleteSubCategory', $subcategory->id) }}" method="post">
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end card body -->
            </div>

        </div>
    </div>
</div>
@endsection