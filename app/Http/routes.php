<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','PagesController@showLogin');
Route::get('/error','PagesController@showError');
Route::get('/error12','PagesController@showError');

Route::get('/login','PagesController@showLogin');
Route::post('/signin','SigningController@postSignin');
Route::get('/admindash','PagesController@showAdmindash');
Route::get('/home','PagesController@showHome');
Route::post('/access','SigningController@showAccess');
Route::get('/test','PagesController@showTest');
Route::get('/records','SigningController@showRecords');
Route::post('/solve','SigningController@getSolve');
Route::post('/subjects','SigningController@showSubjects');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);