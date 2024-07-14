<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// Dashboard
Route::get('/dashboard',[HomeController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// user
Route::get('/user/list',[UserController::class, 'user_list'])->name('user.list');
Route::get('/user/delete/{user_id}',[UserController::class, 'user_delete'])->name('user.delete');

// Category
Route::resource('category',CategoryController::class);

// SubCategory
Route::resource('/subcategory',SubcategoryController::class);

// Role Manager
Route::get('/role/manager',[RoleController::class, 'role_manage'])->name('role.manage');



