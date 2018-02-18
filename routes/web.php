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

Route::get('/', 'PagesController@getHome');
Route::get('/create', 'PagesController@getCreate');
Route::post('/create/submit', 'FlowersController@submit');


Auth::routes();

Route::get('/orders', 'HomeController@index')->name('orders');
