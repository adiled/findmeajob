<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view) {

            $user = NULL;
            $user_role = NULL;

            if(\Auth::check()) {
                $user = \Auth::user();
                $user_role = $user->userRole->name;
            }

            View::share('user', $user);
            View::share('user_role', $user_role);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
