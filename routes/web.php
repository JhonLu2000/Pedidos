<?php


Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show'); 

Route::post('/cart', 'CartDetailController@store'); 
Route::delete('/cart', 'CartDetailController@destroy');

Route::post('/order', 'CartController@update'); 




Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function(){


Route::get('/products', 'ProductController@index'); // listado
Route::get('/products/create', 'ProductController@create'); //formulario
Route::post('/products', 'ProductController@store'); //registrar producto
Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario edicion
Route::post('/products/{id}/edit', 'ProductController@update'); //actualizar
Route::post('/products/{id}/delete', 'ProductController@destroy'); //form eliminar

Route::get('/products/{id}/images', 'ImageController@index'); // listado de imagenes
Route::post('/products/{id}/images', 'ImageController@store');
Route::delete('/products/{id}/images', 'ImageController@destroy'); //form eliminar
Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); // destacar imagen



});




