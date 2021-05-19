<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

//Laravel 8 (New)
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/about', [ProductsController::class, 'about']);

//Route params
// "where" validates our param
//Route::get('/products/{id}', [ProductsController::class, 'show'])
//    ->where('id', '[0-9]+');

Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])
    ->where([
        'name' => '[a-z]+',
        'id' => '[0-9]+'
    ]);
