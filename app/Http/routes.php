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


Route::get('welcome', function () {
    //return view('welcome');
     //return view('admin.layout.master');
	return view('pages.registerStore');
});
Route::get('user', function () {
    return view('user.user');
});



Route::group(['prefix' => 'home'], function () {
   Route::controller('/','StoreController'); 
});



Route::auth();

Route::get('/home', 'HomeController@index');



