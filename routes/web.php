<?php

Route::get('/', function () { return view('welcome');});

Auth::routes();
Route::group(['middleware'=>'auth'],function(){
  Route::get('/home', 'HomeController@index')->name('home');
  
  Route::resource('/product', 'ProductController');

  Route::resource('/categorie', 'CategorieController');

  Route::resource('/brand', 'BrandController');

});
