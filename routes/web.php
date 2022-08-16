<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PublicController::class, 'index'])->name('index');
Route::get('home', [App\Http\Controllers\PublicController::class, 'index'])->name('home');
Route::get('cart', [App\Http\Controllers\PublicController::class, 'cart'])->name('cart');
Route::get('product.details/{product}', [App\Http\Controllers\ProductController::class, 'details'])->name('product.details');
Route::get('product.search', [App\Http\Controllers\ProductController::class, 'search'])->name('product.search');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('content', [App\Http\Controllers\WebsiteController::class, 'index'])->name('content');
    Route::put('contentedit/{content}', [App\Http\Controllers\WebsiteController::class, 'update'])->name('contentedit');
    Route::post('category.store', [App\Http\Controllers\CategoryController::class, 'store'])->name('createcategory');
    Route::delete('deleteCategory/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('deleteCategory');
    Route::get('category', [App\Http\Controllers\CategoryController::class, 'index'])->name('viewcategory');
    Route::post('storeproduct', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('addproduct', [App\Http\Controllers\ProductController::class, 'create'])->name('addproduct');
    Route::delete('product.delete/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
    Route::put('product.update/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::get('product.edit/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::get('product.index', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
});


Route::prefix('front')->group(function () {
    Route::get('shop', [App\Http\Controllers\PublicController::class, 'shop'])->name('shop');
});



Auth::routes();


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
