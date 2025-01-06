<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



// Existing Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/pages', [PageController::class, 'pages'])->name('pages');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// New Routes
Route::get('/booking', [PageController::class, 'booking'])->name('booking');
Route::get('/technicians', [PageController::class, 'technicians'])->name('technicians');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');