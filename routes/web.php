<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TestimonialController;

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

//Employee Routes
Route::get('/employees',[EmployeeController::class, 'index'])->name('employee');
Route::post('/employees',[EmployeeController::class, 'store'])->name('employee.store');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

//Testimonial section
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('Review');
Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
