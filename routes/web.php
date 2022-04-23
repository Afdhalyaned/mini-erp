<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceBuyingController;
use App\Http\Controllers\PriceSellingController;
use App\Http\Controllers\OfferController;

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

Route::get('/', function(){
    return view('dashboard',['title' => 'dashboard']);
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'index');
    Route::get('/product-detail', 'show');
    Route::get('/product-edit', 'edit');
    Route::post('product-update', 'update');
    Route::get('/product-delete', 'destroy');
});

Route::controller(PriceBuyingController::class)->group(function () {
    Route::get('/price-buying', 'index');
    Route::get('/price-buying-create','store');
    Route::get('/price-buying-edit', 'edit');
    Route::post('/price-buying-update', 'update');
    Route::get('/price-buying-delete', 'destroy');
});

Route::controller(PriceSellingController::class)->group(function () {
    Route::get('/price-selling', 'index');
});

Route::controller(OfferController::class)->group(function () {
    Route::get('offer', 'index');
    Route::get('offer-detail', 'show');
});