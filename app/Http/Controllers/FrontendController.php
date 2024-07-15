<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $products = Product::all();
        return view('index',[
            'categories' => $categories,
            'subcategories' => $subcategories,
            'products' => $products,
        ]);
    }

    function product_details($product_id)
    {
        $product = Product::find($product_id);
        return view('product_details',compact('product'));
    }

    // function cart_post(Request $request)
    // {
    //     return $request;
    // }

    function cart()
    {
        return view('cart');
    }

    function checkout()
    {
        return view('checkout');
    }
}
