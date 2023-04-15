<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
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

Route::get('/', fn() => redirect()->route('login'));

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/category/data', [CategoriesController::class, 'data']);
    Route::resource('/category', CategoriesController::class);

    Route::get('/product/data', [ProductController::class, 'data']);
    Route::resource('/product', ProductController::class);

    Route::get('/supplier/data', [SupplierController::class, 'data']);
    Route::resource('/supplier', SupplierController::class);

    Route::get('/pengeluaran/data', [PengeluaranController::class, 'data']);
    Route::resource('/pengeluaran', PengeluaranController::class);

});
