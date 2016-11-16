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
Route::get('/shop/mensbike', 'PageController@mensbike');
Route::get('/product-detail', 'PageController@productDetail');

Route::get('list', 'ImageController@showPictureList');
Route::get('pic/{id}', 'ImageController@showPicture');
Route::get('add', 'ImageController@addPicture');
Route::post('add', 'ImageController@savePicture');