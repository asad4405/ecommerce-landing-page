@extends('layouts.frontend_master')
@section('content')
    <!-- product part start -->

    <div class="container mb-5">
            <div class="row">
                @forelse ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card product-item">
                            <img style="width: 80px"
                                src="{{ asset('uploads/product') }}/{{ App\Models\Product_photo::where('product_id', $product->id)->first()->product_photo }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="mb-2 card-subtitle text-muted fw-light">{{ $product->category->category_name }}
                                    ->
                                    <span>{{ $product->subcategory->sub_category_name }}</span>
                                </h6>
                                <h5 class="card-title">{{ $product->product_name }}</h5>
                                <p class="card-text">{{ $product->price }} Taka</p>
                                    <a href="{{ route('product.details',$product->id) }}" class="btn btn-dark w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
    </div>

    <!-- product part end -->
@endsection
