@extends('layouts.backend_master')
@section('content')
    <div class="mt-5 row">
        <div class="m-auto col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Add Product</h3>
                </div>
                <div class="card-body">
                    @if (session('product_success'))
                        <div class="alert alert-success">{{ session('product_success') }}</div>
                    @endif
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <select name="category_id" id="" class="form-select">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
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
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->sub_category_name }}</option>
                                @endforeach
                            </select>
                            @error('subcategory_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Product Name</label>
                            <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                                name="product_name">
                            @error('product_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Product Details</label>
                            <textarea rows="6" class="form-control @error('product_details') is-invalid @enderror" name="product_details"></textarea>
                            @error('product_details')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Product Photo</label>
                            <input type="file" class="form-control @error('product_photo') is-invalid @enderror"
                                name="product_photo[]" multiple>
                            @error('product_photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
