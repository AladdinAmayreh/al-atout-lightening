<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\HomePageContentController;

// Routes for authentication
Auth::routes(['register' => false]); // Disable registration

// Protect all admin routes with 'auth' and 'admin' middleware
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', ProductController::class)->except(['show']); // Product CRUD

    // Home page content management
    Route::get('home-page', [HomePageContentController::class, 'index'])->name('homePage.index');
    Route::get('home-page/edit', [HomePageContentController::class, 'edit'])->name('homePage.edit');
    Route::put('home-page/update', [HomePageContentController::class, 'update'])->name('homePage.update');
});

// Route for guests to view product details
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');

// Routes for the home page and other public pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Language switch route
Route::get('lang/{lang}', function ($lang) {
    session(['locale' => $lang]);
    return redirect()->back();
})->name('language.switch');

// Route for contact form submission
Route::post('/contact-submit', [HomeController::class, 'submitContact'])->name('contact.submit');
