@extends('admin.layouts.app')
@section('title')
    add products
@endsection
<?php $menu = 'Products';
$submenu = ''; ?>
@section('content')
    <div class="container">
        <button type="button" class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#staticBackdrop">
            <i class="fas fa-plus"></i> Add Product
        </button>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Products') }}</div>

                    <div class="card-group m-auto">
                        @foreach ($products as $product)
                            <div class="card m-3" style="width: 18rem;">
                                <img class="card-img-top" src="{{ url('storage/' . $product->image) }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">{{ $product->name }}</p>
                                    <form action="{{ route('show_product', $product) }}" method="get">
                                        <button type="submit" class="btn btn-primary">Show detail</button>
                                    </form>
                                    
                                        <form action="{{ route('delete_product', $product) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger mt-2">Delete product</button>
                                        </form>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for add notice -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-default text-dark rounded">
                    <h5 class="modal-title" id="staticBackdropLabel">Create New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('store_product') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                name="name" value="{{ old('name') }}" placeholder="Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input class="form-control @error('description') is-invalid @enderror" type="text"
                                name="description" value="{{ old('description') }}" placeholder="Description">
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input class="form-control @error('price') is-invalid @enderror" type="number"
                                name="price" value="{{ old('price') }}" placeholder="Price">
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input class="form-control @error('stock') is-invalid @enderror" type="number"
                                name="stock" value="{{ old('stock') }}" placeholder="Stock">
                            @error('stock')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                
                        <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    </div>
@endsection
