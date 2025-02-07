@extends('layouts.layout')

@section('title', 'Product List')

@section('content')
<div class="px-3">
    <div class="container-fluid">
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Product List</h4>

                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Sale Ratio</th>
                                            <th>Purchase Ratio</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Product A</td>
                                            <td>Category 1</td>
                                            <td>$100</td>
                                            <td>50</td>
                                            <td>70%</td>
                                            <td>60%</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Product B</td>
                                            <td>Category 2</td>
                                            <td>$150</td>
                                            <td>30</td>
                                            <td>80%</td>
                                            <td>50%</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Product C</td>
                                            <td>Category 3</td>
                                            <td>$200</td>
                                            <td>20</td>
                                            <td>90%</td>
                                            <td>40%</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive -->
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

