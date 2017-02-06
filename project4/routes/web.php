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

Route::group(['middleware' =>'auth'],function(){

	Route::get('/', function () {
	    return view('frontpage');
	});


	Route::resource('notes','NotesController');
	Route::resource('notebooks','NotebooksController');

	Route::get('notes/{notebookId}/createNote','NotesController@createNote')->name('notes.createNote');

});



Auth::routes();
