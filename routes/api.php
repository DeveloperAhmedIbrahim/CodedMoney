<?php

use App\Http\Controllers\API\PaybisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('currency/pairs/buy-crypto', [PaybisController::class, "currpairsBuyCrypto"]);
Route::get('currency/pairs/sell-crypto', [PaybisController::class, "currpairsSellCrypto"]);
Route::get('widget-request', [PaybisController::class, "widgetRequest"]);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
