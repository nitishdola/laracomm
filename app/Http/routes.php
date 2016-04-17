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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'web'], function () {
	Route::get('admin/login', function () {
	    $admin = auth()->guard('admins');
	    return view('auth.adminlogin');
	});

	Route::post('admin/home', function() {
		$admin = auth()->guard('admins');
		return view('admin.home');
	});

	Route::get('admin/home', function() {
		$admin = auth()->guard('admins');
		return view('admin.home');
	});

    Route::group(['middleware' => 'admin'], function() {
    	Route::get('admin', function() {
    		return view('admin.home');
    	});
    	Route::group(['prefix'=>'categories'], function() {
			Route::get('/add', [
			    'as' => 'category.create',
			    'uses' => 'CategoriesController@create'
			]);
	    });
    });
});



Route::get('/home', 'HomeController@index');
