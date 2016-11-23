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

Route::get('/logout', function(){
  if(Auth::check()) 
    Auth::logout();
  
  return Redirect::to('/');
});

Route::get('/dashboard', 'DashboardController@index');

Route::get('/dashboard/profile', 'DashboardController@showProfile');

Route::get('/dashboard/profile/edit', 'DashboardController@showProfileEdit');


Route::put('/user/{id}', [
  'as' => 'user.update',
  'uses' => 'UserController@update'
  ]);