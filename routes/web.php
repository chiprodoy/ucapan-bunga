<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('public.home');

Route::get('/order/{productslug?}',[OrderController::class,'index'])->name('public.order');

Route::post('/order/{productslug?}',[OrderController::class,'store'])->name('public.order.store');

Route::get('/cari/{keyword}',[SearchController::class,'show'])->name('public.search.result');

Route::get('/produk',[ProductController::class,'index'])->name('public.product');

Route::get('/produk/{productslug}',[ProductController::class,'show'])->name('public.product.show');

Route::get('/blog',[BlogController::class,'index'])->name('public.blog');
Route::get('/blog/{slug}',[BlogController::class,'show'])->name('public.blog.show');

Route::get('/admin/generate-sitemap',[AdminController::class,'generateSiteMap']);
