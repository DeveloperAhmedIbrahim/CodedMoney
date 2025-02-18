<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'home');
Route::get('home', [HomeController::class, "home"]);
Route::get('about', [HomeController::class, "about"]);
Route::get('contact', [HomeController::class, "contact"]);
Route::get('faq', [HomeController::class, "faq"]);
Route::get('privacy-policy', [HomeController::class, "privacyPolicy"]);
Route::get('terms-of-use', [HomeController::class, "termsOfUse"]);
Route::get('disclaimer', [HomeController::class, "disclaimer"]);
Route::get('exchange', [HomeController::class, "exchange"]);
