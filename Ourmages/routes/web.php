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
    return view('home');
});

Route::middleware(['auth.user'])->group(function () {
	Route::get('/images', 'ImageController@getImages');
	Route::get('/image/{id}', 'ImageController@showImage');
	Route::post('/image/add', 'ImageController@addImage');
	Route::post('/image/update', 'ImageController@updateImage');
	Route::post('/image/delete', 'ImageController@deleteImage');

	Route::get('/albums', 'ImageController@getAlbums');
	Route::get('/album/{album}', 'ImageController@getImagesInAlbum');
});

Route::get('/auth', 'AuthController@showAuth');
Route::post('/auth/login', 'AuthController@loginAuth');
Route::get('/auth/logout', 'AuthController@logoutAuth');
Route::post('/auth/register', 'AuthController@registerAuth');

Route::get('/joko', 'AuthController@joko');