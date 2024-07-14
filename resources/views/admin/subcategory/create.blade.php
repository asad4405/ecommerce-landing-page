@extends('layouts.backend_master')
@section('content')
    <div class="mt-5 row">
        <div class="m-auto col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Add Sub Category</h3>
                </div>
                <div class="card-body">
                    @if (session('subcategory_success'))
                        <div class="alert alert-success">{{ session('subcategory_success') }}</div>
                    @endif
                    <form action="{{ route('subcategory.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <select name="category_id" id="" class="form-select">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <input type="text" class="form-control @error('sub_category_name') is-invalid @enderror"
                                name="sub_category_name" placeholder="Sub Category Name">
                            @error('sub_category_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Sub Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
