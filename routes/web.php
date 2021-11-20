<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

Route::redirect('/', '/login');
Route::get('/home', [CustomerController::class,'profile'])->name('home');
Route::get('/product/{p_id}', [ProductController::class,'showproduct'])->name('product');
Route::post('/wishlistitem',[ProductController::class,"wishlistitem"])->name("wishlistitem");
Route::get('/wishlist',[CustomerController::class,'wishlist'])->name('wishlist');
Route::get('/order/{id}', [ProductController::class,'order'])->name('order');
Route::post('/order/store',[ProductController::class,"orderstore"])->name("orderstore");
Route::get('/myorder',[CustomerController::class,'myorder'])->name('myorder');







Route::prefix("admin")->group(function(){
    Route::get('/dashboard',[AdminController::class,"dashboard"])->name('admin.dashboard');
    Route::get('/product',[ProductController::class,"product"])->name('admin.product');
    Route::post('/product/store',[ProductController::class,"store"])->name("store");
    Route::get('/allorder',[AdminController::class,"allorder"])->name('admin.order');

});







Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
