<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;

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


Route::get('/', [HomeController::class, 'show']);

Route::get('/product', [ProductController::class, 'show']);

Route::get('/product/{id}/', [ProductController::class, 'show_id']);

Route::get('/cart', [CartController::class, 'show']);


Route::get('/test', [TestController::class, 'show_product_view']);
Route::get('/test/{id}', [TestController::class, 'show_selected_product_view']);


Route::get('/order_name', [TestController::class, 'show_product_order_by_name']);
Route::get('/order_price', [TestController::class, 'show_product_order_by_price']);
Route::get('/display_products', [TestController::class, 'display_products_price_name']);




