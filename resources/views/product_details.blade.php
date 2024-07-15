@extends('layouts.frontend_master')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="p-3 breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item">{{ $product->category->category_name }}</li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->subcategory->sub_category_name }}</li>
        </ol>
    </nav>
    <div class="container mb-5">
        <div class="flex-row row d-flex">
            <div class="col-md-5 product-image">
                <img class="img-fluid"
                    src="{{ asset('uploads/product/') }}/{{ App\Models\Product_photo::where('product_id', $product->id)->first()->product_photo }}"
                    alt="" />
            </div>

            <div class="col-md-5">
                <h2 class="fs-3">{{ $product->product_name }}</h2>
                <h5 class="text-secondary fs-6 fw-bold">{{ $product->price }} Taka</h5>
                <div class="text-secondary text-small">
                    <p>Stock:
                    </p>
                </div>
                <div class="text-secondary text-small">
                    <h5>Quantity :</h5>
                    <input type="text" class="form-control" placeholder="Quantity Amount" id="user_input" required>
                </div>

                <a class="my-5 btn btn-dark w-100 " id="add_to_cart">
                    Add to Cart </a>
                <div>
                    <span class="text-secondary text-small">Details :</span>

                    <p>{{ $product->product_details }}</p>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('footer_script')
    <script>
        
    </script>
@endsection
