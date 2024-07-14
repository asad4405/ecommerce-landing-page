@extends('layouts.backend_master')
@section('content')
    <div class="mt-5 row">
        <div class="m-auto col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Product List</h3>
                </div>
                <div class="card-body">
                    @if (session('category_delete'))
                        <div class="alert alert-success">{{ session('category_delete') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $product->product_name }}</td>

                                <td><img src="{{ asset('uploads/product') }}/{{ App\Models\Product_photo::where('product_id',$product->id)->first()->product_photo }}" alt=""
                                        width="50">
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="{{ route('add.inventory',$product->id) }}" class="btn btn-success">Add Stock</a>

                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info">Edit</a>

                                    <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-danger">No Product Found!</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
