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
        'listings' => App\Models\Listing::all()
      ]);
});

Auth::routes();

Route::get('/logout', function(){
  if(Auth::check()) 
    Auth::logout();
  
  return Redirect::to('/');
});

Route::get('/dashboard', 'DashboardController@index');
