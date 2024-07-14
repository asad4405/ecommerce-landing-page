@extends('layouts.backend_master')
@section('content')
    <div class="mt-5 row">
        <div class="m-auto col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Product</h3>
                </div>
                <div class="card-body">
                    @if (session('product_success'))
                        <div class="alert alert-success">{{ session('product_success') }}</div>
                    @endif
                    <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <select name="category_id" id="" class="form-select">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option {{ $category->id == $product->category_id ? 'selected' : '' }}
                                        value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('subcategory_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"> Sub Category</label>
                            <select name="subcategory_id" id="" class="form-select">
                                <option value="">Select Sub Category</option>
                                @foreach ($subcategories as $subcategory)
                                    <option {{ $subcategory->id == $product->subcategory_id ? 'selected' : '' }}
                                        value="{{ $subcategory->id }}">{{ $subcategory->sub_category_name }}</option>
                                @endforeach
                            </select>
                            @error('subcategory_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Product Name</label>
                            <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                                name="product_name" value="{{ $product->product_name }}">
                            @error('product_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Product Details</label>
                            <textarea rows="6" class="form-control @error('product_details') is-invalid @enderror" name="product_details">{{ $product->product_details }}</textarea>
                            @error('product_details')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-3 mb-3">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
