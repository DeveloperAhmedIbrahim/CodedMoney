<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaybisController;
use App\Http\Middleware\Authentication;
use Illuminate\Support\Facades\Route;



Route::redirect('/', 'home');
Route::get('home', [HomeController::class, "home"])->name('home');
Route::get('about', [HomeController::class, "about"])->name('about');
Route::match(['GET', 'POST'], 'contact', [HomeController::class, "contact"])->name('contact');
Route::get('faq', [HomeController::class, "faq"])->name('faq');
Route::get('privacy-policy', [HomeController::class, "privacyPolicy"])->name('privacy-policy');
Route::get('terms-of-use', [HomeController::class, "termsOfUse"])->name('terms-of-use');
Route::get('disclaimer', [HomeController::class, "disclaimer"])->name('disclaimer');

Route::match(['GET', 'POST'], 'login', [AuthController::class, "login"])->name('login');
Route::match(['GET', 'POST'], 'sign-up', [AuthController::class, "signUp"])->name('signUp');
Route::get('logout', [AuthController::class, "logout"])->name('logout');
Route::match(['GET', 'POST'], 'forgot-password', [AuthController::class, "forgotPassword"])->name('forgotPassword');
Route::match(['GET', 'POST'], 'varify-code/{id}', [AuthController::class, "verifyCode"])->name('verifyCode');
Route::match(['GET', 'POST'], 'reset-password/{id}', [AuthController::class, "resetPassword"])->name('resetPassword');

Route::get('exchange', [HomeController::class, "exchange"])->name('exchange');
Route::get('widget-request', [PaybisController::class, "widgetRequest"])->name('widgetRequest');
Route::get('rsa-signature', [PaybisController::class, "rsaSignature"])->name('rsaSignature');

// Route::middleware(Authentication::class)->group(function() {
//     Route::get('exchange', [HomeController::class, "exchange"])->name('exchange');
//     Route::get('widget-request', [PaybisController::class, "widgetRequest"])->name('widgetRequest');
//     Route::get('rsa-signature', [PaybisController::class, "rsaSignature"])->name('rsaSignature');
//     Route::match(['get', 'post'], 'profile', [PaybisController::class, "profile"])->name('profile');
//     Route::get('orders', [PaybisController::class, "orders"])->name('orders');
// });


