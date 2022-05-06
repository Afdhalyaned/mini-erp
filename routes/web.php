<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\PriceBuyingController;
use App\Http\Controllers\PriceSellingController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientAddressController;
use App\Http\Controllers\ClientPicController;

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

Route::resource('products', ProductController::class);
Route::resource('product-categories', ProductCategoriesController::class);
Route::resource('price-buying', PriceBuyingController::class);
Route::resource('price-selling', PriceSellingController::class);
Route::resource('clients', ClientController::class);
Route::resource('client-addresses', ClientAddressController::class);
Route::resource('client-pic', ClientPicController::class);

Route::controller(OfferController::class)->group(function () {
    Route::get('offer', 'index');
    Route::get('offer-detail', 'show');
});

