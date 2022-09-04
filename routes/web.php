<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SubCategoryController;
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
// Route::get('login', [App\Http\Controllers\PublicController::class, 'index'])->name('login');
Route::get('cart', [App\Http\Controllers\PublicController::class, 'cart'])->name('cart');
Route::get('checkout', [App\Http\Controllers\PublicController::class, 'checkout'])->name('checkout');
Route::get('product.details/{product}', [App\Http\Controllers\ProductController::class, 'details'])->name('product.details');
Route::get('product.search', [App\Http\Controllers\ProductController::class, 'search'])->name('product.search');
Route::get('category/{category_id}', [App\Http\Controllers\PublicController::class, 'categoryProduct'])->name('category');


Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('content', [App\Http\Controllers\WebsiteController::class, 'index'])->name('content');
    Route::put('contentedit/{content}', [App\Http\Controllers\WebsiteController::class, 'update'])->name('contentedit');
    Route::post('category.store', [App\Http\Controllers\CategoryController::class, 'store'])->name('createcategory');
    Route::delete('deleteCategory/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('deleteCategory');
    Route::get('category', [App\Http\Controllers\CategoryController::class, 'index'])->name('viewcategory');
    Route::get('editcategory/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('edit.category');
    Route::put('updatecategory/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('update.category');


    Route::get('subcategory', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('viewsubcategory');
    Route::get('editsubcategory/{subcategory}', [App\Http\Controllers\SubCategoryController::class, 'edit'])->name('edit.subcategory');
    Route::put('updatesubcategory/{subcategory}', [App\Http\Controllers\SubCategoryController::class, 'update'])->name('update.subcategory');
    Route::post('subcategory.store', [App\Http\Controllers\SubCategoryController::class, 'store'])->name('createsubcategory');
    Route::delete('deleteSubCategory/{subcategory}', [App\Http\Controllers\SubCategoryController::class, 'destroy'])->name('deleteSubCategory');
    Route::get('subcategory', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('viewsubcategory');
    Route::post('storeproduct', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('addproduct', [App\Http\Controllers\ProductController::class, 'create'])->name('addproduct');
    Route::delete('product.delete/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
    Route::put('product.update/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::get('product.edit/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::get('product.index', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
    Route::post('review.store', [App\Http\Controllers\ReviewController::class, 'store'])->name('createreview');
    Route::delete('deletereview/{review}', [App\Http\Controllers\ReviewController::class, 'destroy'])->name('deletereview');
    Route::get('review', [App\Http\Controllers\ReviewController::class, 'index'])->name('viewreview');
});

Route::prefix('user')->middleware('auth', 'isUser')->group(function () {
    Route::get('index', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
});

Route::get('findSubCat/{subcategory}', [App\Http\Controllers\SubCategoryController::class, 'show'])->name('findSubCat');

Route::prefix('front')->group(function () {
    Route::get('shop', [App\Http\Controllers\PublicController::class, 'shop'])->name('shop');
});



Auth::routes();


Route::get('/redirectTo', [App\Http\Controllers\HomeController::class, 'redirectTo'])->name('redirectTo');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
