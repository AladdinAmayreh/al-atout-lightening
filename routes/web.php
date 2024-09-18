<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\HomePageContentController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\AboutUsController;

// Routes for authentication
Auth::routes(['register' => false]); // Disable registration

// Protect all admin routes with 'auth' and 'admin' middleware
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', ProductController::class)->except(['show']); // Product CRUD

    // Home page content management
    Route::get('home-page', [HomePageContentController::class, 'index'])->name('homePage.index');
    Route::get('home-page/edit', [HomePageContentController::class, 'edit'])->name('homePage.edit');
    Route::put('home-page/update', [HomePageContentController::class, 'update'])->name('homePage.update');
    Route::get('contact', [ContactUsController::class, 'index'])->name('contact.index');
    Route::get('contact/{id}/edit', [ContactUsController::class, 'edit'])->name('contact.edit');
    Route::put('contact/{id}', [ContactUsController::class, 'update'])->name('contact.update');
    Route::get('about', [AboutUsController::class, 'index'])->name('about.index');
    Route::get('about/{id}/edit', [AboutUsController::class, 'edit'])->name('about.edit');
    Route::put('about/{id}', [AboutUsController::class, 'update'])->name('about.update');
});

// Route for guests to view product details
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');

// Routes for the home page and other public pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutUsController::class, 'show'])->name('about');
Route::get('/contact', [ContactUsController::class, 'show'])->name('contact');

// Language switch route
Route::get('lang/{lang}', function ($lang) {
    session(['locale' => $lang]);
    return redirect()->back();
})->name('language.switch');

// Route for contact form submission
Route::post('/contact-submit', [HomeController::class, 'submitContact'])->name('contact.submit');
