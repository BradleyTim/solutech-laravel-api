<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('orders', 'OrdersController@index');
Route::get('orders/{id}', 'OrdersController@show');
Route::post('orders', 'OrdersController@store');
Route::put('orders/{id}', 'OrdersController@update');
Route::delete('orders/{id}', 'OrdersController@destroy');

Route::get('suppliers', 'SuppliersController@index');
Route::get('suppliers/{id}', 'SuppliersController@show');
Route::post('suppliers', 'SuppliersController@store');
Route::put('suppliers/{id}', 'SuppliersController@update');
Route::delete('suppliers/{id}', 'SuppliersController@destroy');

Route::get('products', 'ProductsController@index');
Route::get('products/{id}', 'ProductsController@show');
Route::post('products', 'ProductsController@store');
Route::put('products/{id}', 'ProductsController@update');
Route::delete('products/{id}', 'ProductsController@destroy');
