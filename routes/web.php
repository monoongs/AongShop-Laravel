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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/backend','BackendController@getBack');
    Route::get('/backend/home','BackendController@getHome');
    Route::get('/backend/category','BackendController@getCate');
    Route::get('/backend/product','BackendController@getProduct');
    Route::get('/backend/order','BackendController@getOrder');
    Route::get('/backend/shopconfig','BackendController@getShopconfig');
    Route::get('/backend/userconfig','BackendController@getUserconfig');


