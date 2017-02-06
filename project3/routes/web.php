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

Route::post('admin_login' ,'Auth\LoginController@login');
Route::get('admin_login' ,'Auth\LoginController@showLoginForm');
Route::post('admin_logout' ,'Auth\LoginController@logout ');
Route::post('admin_password/email','Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('admin_password/reset','Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('admin_password/reset','Auth\ResetPasswordController@reset  ');
Route::get('admin_password/reset/{token}','Auth\ResetPasswordController@showResetForm ');
Route::post('admin_register ','Auth\RegisterController@register ');
Route::get('admin_register ','Auth\RegisterController@showRegistrationForm ');
Route::get('/home', 'HomeController@index');
Route::get('/admin_home', 'AdminHomeController@index');
