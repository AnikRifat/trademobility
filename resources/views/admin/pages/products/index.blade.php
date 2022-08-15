@extends('admin.layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="card">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Products</h4>
                            </div>
                            <div class="card-body">

                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>details</th>
                                            <th>price</th>
                                            <th>unit</th>
                                            <th>image</th>
                                            <th>category</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($products as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->details }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->unit }}</td>
                                                <td> <img height="100"
                                                        src="{{ asset('/') }}assets/images/product/{{ $item->image }}"
                                                        alt=""> </td>
                                                <td>{{ $item->category }}</td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
