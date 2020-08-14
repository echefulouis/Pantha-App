<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class BladeExtraServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         Blade::if('hasrole', function($expresson){
            if(Auth::guard()->user()){
                if(Auth::guard()->user()->hasRole($expresson)){
                    return true;
                }
            }
            return false;
        });
    }
}
