@extends('layouts.backend_master')
@section('content')
    <div class="mt-5 row">
        <div class="m-auto col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Add Category</h3>
                </div>
                <div class="card-body">
                    @if (session('category_success'))
                        <div class="alert alert-success">{{ session('category_success') }}</div>
                    @endif
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <input type="text" class="form-control @error ('category_name') is-invalid @enderror" name="category_name" placeholder="Category">
                            @error('category_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"></label>
                            <input type="file" class="form-control @error ('icon') is-invalid @enderror" name="icon">
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
