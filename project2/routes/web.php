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


// 
Route::get('/logout','Auth\LoginController(logout');
Route::group(['prefix' => 'admin', 'middleware'=>['auth','admin']],function(){
	Route::get('/', function () {
        return view('/admin');
    })->name('admin');

});



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/user', 'HomeController@user');
Route::get('/admin', 'HomeController@admin');