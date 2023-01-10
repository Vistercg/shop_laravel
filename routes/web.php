<?php

use App\Http\Controllers\IndexController;
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

Route::group(['prefix' => 'catalog', 'namespace' => '\App\Http\Controllers'], function() {
    Route::get('/', 'CatalogController@index')->name('catalog.index');
    Route::get('/category/{slug}', 'CatalogController@category')->name('catalog.category');
    Route::get('/brand/{slug}', 'CatalogController@brand')->name('catalog.brand');
    Route::get('/product/{slug}', 'CatalogController@product')->name('catalog.product');
}) ;

Route::get('/', IndexController::class)->name('index');

