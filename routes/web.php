<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Authentication;
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'home');
Route::get('home', [HomeController::class, "home"])->name('home');
Route::get('about', [HomeController::class, "about"])->name('about');
Route::get('contact', [HomeController::class, "contact"])->name('contact');
Route::get('faq', [HomeController::class, "faq"])->name('faq');
Route::get('privacy-policy', [HomeController::class, "privacyPolicy"])->name('privacy-policy');
Route::get('terms-of-use', [HomeController::class, "termsOfUse"])->name('terms-of-use');
Route::get('disclaimer', [HomeController::class, "disclaimer"])->name('disclaimer');

Route::match(['GET', 'POST'], 'login', [AuthController::class, "login"])->name('login');
Route::match(['GET', 'POST'], 'sign-up', [AuthController::class, "signUp"])->name('signUp');

Route::middleware(Authentication::class)->group(function() {
    Route::get('exchange', [HomeController::class, "exchange"])->name('exchange');
});


