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

Route::get('/', [ProductController::class, 'index']);

Route::get('/admin', [ProductController::class, 'admin'])->name('products.admin');

Route::get('/products', function () {
    return view('products.add');
});

Route::post('/products', [ProductController::class, 'add'])->name('products.add');

Route::delete('/{product}', [ProductController::class, 'delete'])->name('products.delete');
