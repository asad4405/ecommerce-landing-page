@extends('layouts.frontend_master')
@section('content')
    <!-- cart part start -->

    <div class="container mb-5">
        <div class="flex-row d-flex align-items-start">
            <div class="m-2 col-8 d-flex flex-column">
                <div class="p-3 cart-item">
                    <div class="flex-row d-flex">
                        <img class="col-2 img-fluid" src="images/product-1-square.jpg" alt="" />
                        <div class="p-2 col-6">
                            <h5>Product Name</h5>
                            <h6>Brand</h6>
                            <p>$100</p>
                        </div>
                        <div class="p-2 col-2">
                            Quantity
                            <p>55</p>
                        </div>
                        <div data-bs-toggle="modal" data-bs-target="#removeItemModal"
                            class="col-2 d-flex justify-content-end align-items-start close">
                            <i class="bi bi-x-circle"></i>
                        </div>
                    </div>
                </div>
                <div class="p-3 cart-item">
                    <div class="flex-row d-flex">
                        <img class="col-2 img-fluid" src="images/product-1-square.jpg" alt="" />
                        <div class="p-2 col-6">
                            <h5>Product Name</h5>
                            <h6>Brand</h6>
                            <p>$100</p>
                        </div>
                        <div class="p-2 col-2">
                            Quatity
                            <select name="" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div data-bs-toggle="modal" data-bs-target="#removeItemModal"
                            class="col-2 d-flex justify-content-end align-items-start close">
                            <i class="bi bi-x-circle"></i>
                        </div>
                    </div>
                </div>
                <div class="p-3 cart-item">
                    <div class="flex-row d-flex">
                        <img class="col-2 img-fluid" src="images/product-1-square.jpg" alt="" />
                        <div class="p-2 col-6">
                            <h5>Product Name</h5>
                            <h6>Brand</h6>
                            <p>$100</p>
                        </div>
                        <div class="p-2 col-2">
                            Quatity
                            <select name="" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div data-bs-toggle="modal" data-bs-target="#removeItemModal"
                            class="col-2 d-flex justify-content-end align-items-start close">
                            <i class="bi bi-x-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 m-2 col-4 order">
                <h4>Order Total</h4>
                <div class="flex-row p-2 d-flex justify-content-between">
                    <span class="billing-item">items</span>
                    <span class="billing-cost">$100</span>
                </div>
                <div class="flex-row p-2 d-flex justify-content-between">
                    <span class="billing-item">Shipping</span>
                    <span class="billing-cost">$10</span>
                </div>
                <div class="flex-row p-2 d-flex justify-content-between">
                    <span class="billing-item">Discount</span>
                    <span class="billing-cost">-$10</span>
                </div>
                <div class="flex-row p-2 d-flex justify-content-between">
                    <span class="billing-item fs-5">Total</span>
                    <span class="billing-cost fs-5">$100</span>
                </div>

                <div class="mt-3 d-flex">
                    <a href="" class="btn btn-primary flex-grow-1">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- cart part end -->




@endsection
