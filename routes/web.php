<?php

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

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('content', [App\Http\Controllers\WebsiteController::class, 'index'])->name('content');
    Route::put('contentedit/{content}', [App\Http\Controllers\WebsiteController::class, 'update'])->name('contentedit');
});

Route::prefix('front')->middleware('auth')->group(function () {
    Route::get('shop', [App\Http\Controllers\PublicController::class, 'shop'])->name('shop');
});
Route::get('/', function () {
    return view('front.index');
});

Auth::routes();


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
