@extends('layouts.backend_master')
@section('content')
    <div class="mt-5 row">
        <div class="m-auto col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Inventory List </h3>
                </div>
                <div class="card-body">
                    @if (session('inventory_delete'))
                        <div class="alert alert-success">{{ session('inventory_delete') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Quantity</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($inventories as $sl=> $inventory)
                            <tr>
                                <td>{{ $sl+1 }}</td>
                                <td>{{ $inventory->product->product_name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/product') }}/{{ App\Models\Product_photo::where('product_id', $inventory->product->id)->first()->product_photo }}"
                                        alt="" width="50">
                                </td>
                                <td>{{ $inventory->quantity }}</td>
                                <td>
                                    <a href="{{ route('inventory.delete',$inventory->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-danger">No Inventory Found!</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
