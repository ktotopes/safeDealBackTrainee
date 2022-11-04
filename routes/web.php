<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',fn() => view('welcome'));

Route::group([
    'prefix' => 'api/v1',
    'as'     => 'api.',
    'middleware' => 'throttle:limitApi'
], function () {
    Route::get('/delivery-price', [\App\Http\Controllers\Api\DeliveryController::class, 'deliveryPriceCalc'])->name('delivery-price-calc');
    Route::match(['get','post'],'/orders/store', [\App\Http\Controllers\Api\OrderController::class, 'store'])->name('orders.store');
    Route::resource('/orders', \App\Http\Controllers\Api\OrderController::class)->only( 'show', 'index');
});
