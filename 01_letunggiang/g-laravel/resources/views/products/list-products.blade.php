@extends('pages.master')
@section('content')
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">List Table</h4>
                                <div class="g-style">
                                    <a href="" class="btn pull-right hidden-sm-down btn-success">Add Product</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name Product</th>
                                                <th>Images Product</th>
                                                <th>Price</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->tenSP }}</td>
                                                <td>{{ $product->hinhSP }}</td>
                                                <td>{{ $product->gia }}</td>
                                                <td><a href="" class="btn hidden-sm-down btn-success btn-g">Edit</a></td>
                                                <td><a href="" class="btn hidden-sm-down btn-danger">Delete</a></td>
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
@endsection