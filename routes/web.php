<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'listings' => App\Models\Listing::orderBy('last_activated_at', 'DESC')->get()
      ]);
});

Auth::routes();


// User

Route::put('/user/{id}', [
  'as' => 'user.update',
  'uses' => 'UserController@update'
  ]);

Route::get('/logout', function(){
  if(Auth::check()) 
    Auth::logout();
  
  return Redirect::to('/');
});


// Dashboard

Route::get('/dashboard', 'DashboardController@index');

Route::get('/dashboard/profile', 'DashboardController@showProfile');

Route::get('/dashboard/profile/edit', 'DashboardController@showProfileEdit');


// Listing

Route::get('/listing/{id}', 'ListingController@show');

Route::get('/listing/new', 'ListingController@create');

Route::get('/listing/{id}/edit', [
  'as' => 'listing.edit',
  'uses' => 'ListingController@edit'
  ]);


Route::post('/listing', [
  'as' => 'listing.store',
  'uses' => 'ListingController@store'
  ]);

Route::patch('/listing/{id}', [
  'as' => 'listing.update',
  'uses' => 'ListingController@update'
  ]);


// Application

Route::get('/job-application/{id}', [
  'as' => 'application.show',
  'uses' => 'JobApplicationController@show'
  ]);

Route::get('/job-application/new', [
  'as' => 'application.create',
  'uses' => 'JobApplicationController@create'
  ]);

Route::post('/job-application', [
  'as' => 'application.update',
  'uses' => 'JobApplicationController@update'
  ]);
