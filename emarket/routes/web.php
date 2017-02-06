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

Route::get('/', 'FrontController@index')->name('home');
Route::get('/shirts', 'FrontController@shirts')->name('shirts');

Route::get('/shirt', 'FrontController@shirt')->name('shirt');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::get('/',function(){
		return view('admin.index');
	})->name('admin.index');

	Route::resource('category','CategoriesController'); 
	Route::resource('product','ProductsController'); 
});
