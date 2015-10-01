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


Route::get('/login','PagesController@showLogin');
Route::post('/signin','PagesController@postSignin');
Route::get('/admindash','PagesController@showAdmindash');
Route::get('/instructordash','PagesController@showInstructordash');
Route::get('/access','PagesController@showAccess');
Route::get('/test','PagesController@showTest');