@extends('layouts.backend_master')
@section('content')
    <div class="mt-5 row">
        <div class="m-auto col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Add Inventory</h3>
                </div>
                <div class="card-body">
                    @if (session('inventory_success'))
                        <div class="alert alert-success">{{ session('inventory_success') }}</div>
                    @endif
                    <form action="{{ route('inventory.store',$product->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Product</label>
                            <input type="text" class="form-control" name="product_id" value="{{ $product->product_name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Quantity</label>
                            <input type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity">
                            @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Inventory</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
