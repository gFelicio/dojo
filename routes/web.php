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

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/add', 'ProductController@add')->name('products');

Route::post('products/store', 'ProductController@store')->name('products/store');

Route::get('products/{id}', 'ProductController@detail')->name('products/detail');

Route::get('/buy', 'ProductController@list')->name('buy');

