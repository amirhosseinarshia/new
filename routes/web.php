<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

// Route::get('/products', [ProductController::class, 'showAll']);

Route::controller(ProductController::class)->group(function () {
    Route::get('/product/create/{name}/{description}', 'create');
    Route::get('/product/show/{id}', 'showProduct'); 
    Route::get('/product/all', 'showAll'); 
});
