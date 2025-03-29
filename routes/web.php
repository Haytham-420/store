<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


// Dashboard Routes
Route::prefix("admin")->group(function () {
// Product Routes
Route::get('products', [ProductController::class, 'index']);
Route::get('products/create', [ProductController::class, 'create']);
Route::post('products/store', [ProductController::class, 'store']);
Route::get('products/edit/{id}', [ProductController::class, 'edit']);
Route::get('products/delete/{id}', [ProductController::class, 'destroy']);
Route::patch('products/update/{id}', [ProductController::class, 'update']);
// Category Routes
Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/create', [CategoryController::class, 'create']);
Route::post('categories/store', [CategoryController::class, 'store']);
Route::get('categories/edit/{id}', [CategoryController::class, 'edit']);
Route::get('categories/delete/{id}', [CategoryController::class, 'destroy']);
Route::patch('categories/update/{id}', [CategoryController::class, 'update']);
});

// Front Page Routes
Route::get('/', [FrontController::class, 'index']);

Route::get('/welcome', function () {
    return view('welcome');
});
