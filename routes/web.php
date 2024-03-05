<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function(){ return redirect('/home'); });

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Front'],function(){
	Route::get('/home', 'HomeController@home');
	Route::get('/about', 'HomeController@about');
	Route::get('/packages', 'HomeController@packages');
	Route::get('/package/{id}', 'HomeController@package_detail');
	Route::get('/service', 'HomeController@service');
	Route::get('/service/{id}', 'HomeController@service_detail');
	Route::get('/package/{id}', 'HomeController@package');
	Route::get('/visa', 'HomeController@visa');
	Route::get('/visa/{id}', 'HomeController@visa_detail');
	Route::get('/country', 'HomeController@country');
	Route::get('/contact', 'HomeController@contact');
});



Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@index');

Route::get('/register', 'LoginController@register');
Route::post('/register', 'LoginController@register');


/*Admin Routes*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth' => 'Admin']],function(){

	Route::get('/dashboard/', 'AdminController@dashboard');
	Route::get('/profile/', 'AdminController@profile');
	Route::post('/profile/', 'AdminController@profile');
	Route::get('/logout/', 'AdminController@logout');

	Route::get('/password', 'PasswordController@password');
	Route::get('/check-pwd', 'PasswordController@check');
	Route::post('/update_password', 'PasswordController@update_password');





	/*User CRUD*/
	Route::get('user', 'UserController@index');
	Route::post('user/store', 'UserController@store');
	Route::post('user/update/{id}', 'UserController@update');
	Route::get('user/delete/{id}', 'UserController@delete');

	/*Category CRUD*/
	Route::get('category', 'CategoryController@index');
	Route::post('category/store', 'CategoryController@store');
	Route::post('category/update/{id}', 'CategoryController@update');
	Route::get('category/delete/{id}', 'CategoryController@delete');

	/*Destination CRUD*/
	Route::get('destination', 'DestinationController@index');
	Route::post('destination/store', 'DestinationController@store');
	Route::post('destination/update/{id}', 'DestinationController@update');
	Route::get('destination/delete/{id}', 'DestinationController@delete');

	/*Package CRUD*/
	Route::get('package', 'PackageController@index');
	Route::get('package/create', 'PackageController@create');
	Route::post('package/store', 'PackageController@store');
	Route::get('package/edit/{id}', 'PackageController@edit');
	Route::post('package/update/{id}', 'PackageController@update');
	Route::get('package/delete/{id}', 'PackageController@delete');

	/*Service CRUD*/
	Route::get('service', 'ServiceController@index');
	Route::post('service/store', 'ServiceController@store');
	Route::post('service/update/{id}', 'ServiceController@update');
	Route::get('service/delete/{id}', 'ServiceController@delete');

	/*Visa Requirment CRUD*/
	Route::get('visa-requirment', 'VisaRequirmentController@index');
	Route::get('visa-requirment/create', 'VisaRequirmentController@create');
	Route::post('visa-requirment/store', 'VisaRequirmentController@store');
	Route::get('visa-requirment/edit/{id}', 'VisaRequirmentController@edit');
	Route::post('visa-requirment/update/{id}', 'VisaRequirmentController@update');
	Route::get('visa-requirment/delete/{id}', 'VisaRequirmentController@delete');


	/*Application CRUD*/
	Route::get('application', 'ApplicationController@index');
	Route::post('application/store', 'ApplicationController@store');
	Route::post('application/update/{id}', 'ApplicationController@update');
	Route::get('application/delete/{id}', 'ApplicationController@delete');

});










/*User Routes*/
Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth' => 'User']],function(){

	Route::get('/dashboard/', 'UsersController@dashboard');
	Route::get('/profile/', 'UsersController@profile');
	Route::post('/profile/', 'UsersController@profile');
	Route::get('/logout/', 'UsersController@logout');

	Route::get('/password', 'PasswordController@password');
	Route::get('/check-pwd', 'PasswordController@check');
	Route::post('/update_password', 'PasswordController@update_password');


	/*Application CRUD*/
	Route::get('application', 'ApplicationController@index');
	Route::post('application/store', 'ApplicationController@store');
	Route::post('application/update/{id}', 'ApplicationController@update');
	Route::get('application/delete/{id}', 'ApplicationController@delete');


});



Route::get('cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    die("Cash Cleard");
});