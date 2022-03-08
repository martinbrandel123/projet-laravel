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

Route::get('/', function () {
    return 'homepage';
});

Route::get('/product', function () {
    return 'liste des produits';
});


Route::get('/product/0', function () {
    return 'Fiche du produit 0';
});

Route::get('/product/0/cart', function () {
    return 'panier';
});

