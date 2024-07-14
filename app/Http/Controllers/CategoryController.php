<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $icon = $request->icon;
        $extension = $icon->extension();
        $file_name = 'category-' . Str::random(5) . time() . '.' . $extension;

        Image::make($icon)->save(public_path('uploads/category/' . $file_name));

        Category::insert([
            'category_name' => $request->category_name,
            'icon' => $file_name,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('category_success', 'Category Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        if ($request->icon == '') {
            $category->category_name = $request->category_name;
            $category->save();
            return back()->with('category_success','Category Updated!');
        } else {
            // unlink photo
            unlink(public_path('uploads/category/') . $category->icon);

            // insert photo
            $icon =  $request->icon;
            $extension = $icon->extension();
            $file_name =
            'category-' . Str::random(5) . time() . '.' . $extension;

            Image::make($icon)->save(public_path('uploads/category/' . $file_name));

            // update photo
            $category->category_name = $request->category_name;
            $category->icon = $file_name;
            $category->save();
            return back()->with('category_success','Category Updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        unlink(public_path('uploads/category/') . $category->icon);

        $category->delete();
        return back()->with('category_delete', 'Category Deleted!');
    }
}
