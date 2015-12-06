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

Route::post('/','MainController@showLogin');
Route::get('/login','MainController@showLogin');
Route::post('/signin','MainController@postSignin');
Route::get('/admindash','PagesController@showAdmindash');
Route::get('/home','PagesController@showHome');
Route::post('/access','MainController@showAccess');
Route::get('/test','PagesController@showTest');
Route::get('/records/{subject_id}/{user_name}','MainController@getRecords');
Route::post('/solve','MainController@getSolve');
Route::post('/subjects','MainController@showSubjects');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);