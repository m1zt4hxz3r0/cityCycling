<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'ImageController@index');
Route::get('/shop', 'PageController@shop');
Route::get('/product-detail', 'PageController@productDetail');
Route::get('/product-by-category', 'PageController@productCategory');
Route::get('/cart', 'PageController@cart');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');



Route::get('list', 'ImageController@showPictureList');
Route::get('pic/{id}', 'ImageController@showPicture');
Route::get('add', 'ImageController@addPicture');
Route::post('add', 'ImageController@savePicture');