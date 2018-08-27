<?php

Route::get('/', function () { return view('welcome');});

Auth::routes();

Route::group(['middleware'=>'auth'],function(){

  Route::get('/home', 'HomeController@index')->name('home');

  Route::resource('/product', 'ProductController');

  Route::resource('/categorie', 'CategorieController');

  Route::resource('/brand', 'BrandController');

  Route::resource('/customer', 'CustomerController');

  Route::resource('/supplier', 'SupplierController');

  Route::resource('/order', 'OrderController');

});
