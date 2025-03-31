<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Dashboard Routes
Route::prefix("admin")->group(function () {
    // Product Routes
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('products/edit/{id}', [ProductController::class, 'edit']);
    Route::get('products/delete/{id}', [ProductController::class, 'destroy']);
    Route::patch('products/update/{id}', [ProductController::class, 'update']);

    // Category Routes
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/edit/{id}', [CategoryController::class, 'edit']);
    Route::get('categories/delete/{id}', [CategoryController::class, 'destroy']);
    Route::patch('categories/update/{id}', [CategoryController::class, 'update']);
});

// Front Page Routes
Route::get('/', [FrontController::class, 'index']);

Route::get('/welcome', function () {
    return view('welcome');
});


// admin@admin.com
// Haytham420

Auth::routes();

Route::get('/home', [FrontController::class, 'index'])->name('home');
