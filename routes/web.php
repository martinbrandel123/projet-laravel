<?php

use App\Http\Controllers\BackOfficeController;
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




//display product
Route::get('/backoffice',[BackOfficeController::class, 'index']);
Route::get('/backoffice/product/{id}/show',[BackOfficeController::class, 'displayProduct']);

//display edit & update
Route::get('/backoffice/product/{id}/edit',[BackOfficeController::class, 'edit']);
Route::put('/backoffice/{id}',[BackOfficeController::class, 'update']);
//Route::put('/backoffice/{id}',[BackOfficeController::class, 'update']);

//create 
Route::get('/backoffice/product/create', [BackOfficeController::class, 'editCreate']);
Route::post('/backoffice',[BackOfficeController::class, 'create']);
Route::post('/backoffice', [BackOfficeController::class, 'create']);

//delete
Route::delete('/backoffice/product/{id}/delete', [BackOfficeController::class, 'destroy']);





