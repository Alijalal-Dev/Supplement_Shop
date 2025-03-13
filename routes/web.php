<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('LandingPage.index');
});



Route::get('/dashboard', function () {
    return view('Dashboard.index');
})->name('dashboard');

Route::get('/products',[ProductController::class, 'index'])->name('product');

Route::post('/products',[ProductController::class, 'store'])->name('product.store');
Route::put('/products/{products}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{products}', [ProductController::class, 'destroy'])->name('product.destroy');
