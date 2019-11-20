<?php

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
Route::get('git', function () {
    return view('git');
})->name('git');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('insertar',function(){
    return view('/tiendas/create');
})->name('inserarTienda');

Route::get('tiendas/create','shopController@create')->name('tiendas.create');
Route::post('tiendas/store','shopController@store')->name('tiendas.store');
Route::get('productos/index','productController@index')->name('productos.index');
