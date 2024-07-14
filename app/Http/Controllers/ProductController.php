<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_photo;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.product.create', [
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product_id = Product::insertGetId([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'product_details' => $request->product_details,
            'created_at' => Carbon::now(),
        ]);

        $product_photos = $request->product_photo;

        foreach ($product_photos as $product_img) {
            $extension = $product_img->extension();
            $file_name = 'product-' . Str::random(5) . time() . '.' . $extension;

            Image::make($product_img)->save(public_path('uploads/product/' . $file_name));

            Product_photo::insert([
                'product_id' => $product_id,
                'product_photo' => $file_name,
                'created_at' => Carbon::now(),
            ]);
        }


        return back()->with('product_success', 'New Product Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }


    public function update(Request $request, Product $product)
    {
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->product_details = $request->product_details;
        $product->save();
        return back()->with('product_success', 'Product Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product_id = $product->id;

        // unlink(public_path('uploads/product/'. Product_photo::where('product_id',$product_id)->get()->product_photo));

        $product->delete();
        return back()->with('product_success', 'Product Deleted!');
    }
}
