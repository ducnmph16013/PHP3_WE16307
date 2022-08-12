<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'detail'])->name('product.detail');

Route::get('/shop', [ShopController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::prefix('/category')->name('category.')->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name('list');
        Route::get('/add', [CategoryController::class, 'create'])->name('add');
        Route::post('/add', [CategoryController::class, 'store'])->name('store');
        Route::get('/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('{id}', [CategoryController::class, 'destroy'])->name('delete');
    });

    Route::prefix('/product')->name('product.')->group(function(){
        Route::get('/', [AdminProductController::class, 'index'])->name('list');
        Route::get('/add', [AdminProductController::class, 'create'])->name('store');
        Route::post('/add', [AdminProductController::class, 'store'])->name('store');
        Route::get('{id}', [AdminProductController::class, 'edit'])->name('edit');
        Route::put('{id}', [AdminProductController::class, 'update'])->name('update');
        Route::delete('{id}', [AdminProductController::class, 'destroy'])->name('delete');
    });
});