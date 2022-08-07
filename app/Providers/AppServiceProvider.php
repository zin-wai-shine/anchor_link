<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Nette\Schema\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Blade::if('adminOrEditorOrViewer',function (){
            return Auth::user()->role == 0 || Auth::user()->role == 1 || Auth::user()->role == 2;
        });

        Blade::if('adminOrEditor',function (){
            return Auth::user()->role == 0 || Auth::user()->role == 1 ;
        });

    }
}
