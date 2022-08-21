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
                            <div class="col-md-6 col-12">

                                <form action="{{ route('createcategory') }}" method="post">
                                    @csrf
                                    <div class="hstack gap-3">
                                        <input class="form-control me-auto" name="name" type="text"
                                            placeholder="Add your Category here...">
                                        <button type="submit" class="btn btn-secondary">Add</button>
                                    </div>
                                </form>
                                {{-- <a href="{{ route('addcategory') }}" class="btn btn-primary btn-sm w-md">add category</a> --}}
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>


                                            <th>{{ $category->id }}</th>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <form action="{{ route('deleteCategory', $category->id) }}" method="post">
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
