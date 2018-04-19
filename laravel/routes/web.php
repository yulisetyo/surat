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

Route::get('/home', 'HomeController@index');
Route::get('/profil', 'ProfilController@index');
Route::get('/inbox', 'HomeController@inbox');
Route::get('/outbox', 'HomeController@outbox');
Route::get('/archive', 'HomeController@archived');
Route::get('/ng', 'TesController@ng');
Route::get('/indeks', 'SuratmasukController@index');
Route::group(['prefix'=>'dropdown'], function(){
	Route::get('uker', 'DropdownController@UkerByUsername');
	//~ Route::get('uker', 'DropdownController@tes');
});

Route::get('/login', 'AuthenticationController@login');
Route::post('/login', 'AuthenticationController@postLogin');
Route::group(['middleware'], function(){
	
	// routing utnuk user yang telah di otentifikasi
});
