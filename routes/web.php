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

Route::get('/listing/{id}', 'ListingController@show')->where('id', '[0-9]+');

Route::get('/listing/new', [
    'as' => 'listing.create',
    'uses' => 'ListingController@create'
  ]);

Route::get('/listing/{id}/edit', [
  'as' => 'listing.edit',
  'uses' => 'ListingController@edit'
  ])->middleware('auth');


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
  ])->middleware('auth')->where('id', '[0-9]+');;

Route::get('/job-application/new/{listing_id}', [
  'as' => 'application.create',
  'uses' => 'JobApplicationController@create'
  ])->middleware('auth');

Route::post('/job-application', [
  'as' => 'application.store',
  'uses' => 'JobApplicationController@store'
  ])->middleware('auth');
