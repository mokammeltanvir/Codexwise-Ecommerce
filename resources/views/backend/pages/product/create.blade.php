@extends('backend.layouts.master')

@section('title')
    Product Create
@endsection

@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
        integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('admin_content')
    <div class="row">
        <h1>Product Create Form</h1>
        <div class="col-12">
            <div class="d-flex justify-content-start">
                <a href="{{ route('products.index') }}" class="btn btn-primary">
                    <i class="fas fa-backward"></i>
                    Back to Products
                </a>
            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Category Section -->
                            <div class="col-12 mb-3">
                                <label for="category-name" class="form-label">Select Category</label>
                                <select name="category_id" class="form-select">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Category Section -->

                            <!-- Product Name Section -->
                            <div class="col-12 mb-3">
                                <label for="product-name" class="form-label">Product Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="enter product name">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Name Section -->


                            <!-- Product Price and Code Section -->
                            <div class="col-6 mb-3">
                                <label for="product-price" class="form-label">Product Price</label>
                                <input type="number" name="product_price" min="0"
                                    class="form-control @error('product_price') is-invalid @enderror" id="product_price">
                                @error('product_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="product_code" class="form-label">Product Code</label>
                                <input type="text" name="product_code"
                                    class="form-control @error('product_code') is-invalid @enderror"
                                    placeholder="enter a unique product code">
                                @error('product_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Price and Code Section -->

                            <!-- Product Stock and Alert Quantity Section -->
                            <div class="col-6 mb-3">
                                <label for="product-stock" class="form-label">Initial Stock</label>
                                <input type="number" name="product_stock" min="1"
                                    class="form-control @error('product_stock') is-invalid @enderror" id="product_stock">
                                @error('product_stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="alert_quantity" class="form-label">Alert Quantity</label>
                                <input type="number" name="alert_quantity" min="1"
                                    class="form-control @error('alert_quantity') is-invalid @enderror" id="alert_quantity">
                                @error('alert_quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Stock and Alert Quantity Section -->

                            <!-- Product Short Description -->
                            <div class="col-12 mb-3">
                                <label for="short_description" class="form-label">Short Description</label>
                                <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror"
                                    id="short_description" id="" cols="30" rows="5"></textarea>
                                @error('short_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Short Description -->
                            <!-- Product long Description -->
                            <div class="col-12 mb-3">
                                <label for="long_description" class="form-label">Long Description</label>
                                <textarea name="long_description" class="form-control @error('long_description') is-invalid @enderror"
                                    id="long_description" id="" cols="30" rows="5"></textarea>
                                @error('long_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product long Description -->
                            <!-- Product Additional Info Description -->
                            <div class="col-12 mb-3">
                                <label for="additional_info" class="form-label">Additional Info</label>
                                <textarea name="additional_info" class="form-control @error('additional_info') is-invalid @enderror"
                                    id="additional_info" id="" cols="30" rows="5"></textarea>
                                @error('additional_info')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Additional info Description -->



                            <!-- Product Image Section -->
                            <div class="col-12 mb-3">
                                <label for="product-image" class="form-label">Product Image</label>
                                <input type="file" class="form-control dropify" name="product_image" id="">
                                @error('product_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Image Section -->

                            <!-- Product Multiple Image Section -->
                            <div class="col-12 mb-3">
                                <label for="product-image" class="form-label">Product Multiple Image</label>
                                <input type="file" class="form-control" multiple name="product_multiple_image[]">
                                @error('product_multiple_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Product Multiple Image Section -->

                            <div class="col-6 mb-3 form-check form-switch">
                                <input class="form-check-input" name="is_active" type="checkbox" role="switch"
                                    id="activeStatus" checked>
                                <label class="form-check-label" for="activeStatus">Active or Inactive</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mt-5">
                                <button type="submit" class="btn btn-success">Add Product</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('admin_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();
    </script>
@endpush
