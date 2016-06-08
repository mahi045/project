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
use App\Http\Controllers\Controller;
Route::resource('course','CourseController');
Route::resource('image','imageController');
Route::resource('room','roomController');
Route::resource('feedback','feedbackController');
Route::get('/', function () {
    return view('welcome');
    
});


Route::get('/home', 'HomeController@index');
Route::group(['middlewire' => 'web'] , function(){

	Route::auth();
	

});


