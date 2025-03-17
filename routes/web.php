<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Product Routes
    Route::get('/products', [ProductController::class, 'index'])->name('product');
    Route::post('/products', [ProductController::class, 'store'])->name('product.store');
    Route::put('/products/{products}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/products/{products}', [ProductController::class, 'destroy'])->name('product.destroy');

    //Employee Routes
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employee');
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employee.store');
    Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

    //Testimonial Routes
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('Review');
    Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');

    //Orders Routes
    Route::get('/orders', [OrderController::class, 'index'])->name('order');
    Route::post('/orders', [OrderController::class, 'store'])->name('order.store');
    Route::put('/orders/{order}', [OrderController::class, 'update'])->name('order.update');
    Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('order.destroy');
});

Route::get('/', function () {
    return view('LandingPage.index');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth','admin'])->name('dashboard');

Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('testimonial.store');

require __DIR__ . '/auth.php';
