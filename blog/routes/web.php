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

Route::get('/', 'PagesController@getIndex');

Route::get('about', 'PagesController@about');


Route::get('blog', ['uses'=>'BlogController@getIndex','as'=>'blog.index']);
Route::get('contact', 'PagesController@contact');


Route::group(['middleware'=>'auth'],function(){

	//categories routes
	Route::resource('categories','CategoryController',['except'=>['create']]);

	//posts routes
	Route::resource('posts','PostController');

	//authentication logout routes
	Route::get('/logout', 'Auth\LoginController@logout');

	//slug routes
	Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');


});