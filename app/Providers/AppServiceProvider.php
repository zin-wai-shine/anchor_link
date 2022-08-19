<?php

namespace App\Providers;

use App\Models\Active;
use App\Models\Category;
use App\Models\Client;
use App\Models\Item;
use App\Models\Type;
use App\Models\User;
use App\Models\Web;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
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

        /*DB::listen(fn($q)=>logger($q->sql));*/

        Blade::if('adminOrEditorOrViewer',function (){
            return Auth::user()->role == 0 || Auth::user()->role == 1 || Auth::user()->role == 2;
        });

        Blade::if('adminOrEditor',function (){
            return Auth::user()->role == 0 || Auth::user()->role == 1 ;
        });

        View::share('shareCategory',Category::all());
        View::share('shareType',Type::all());
        View::share('shareItems',Item::all());
        View::share('shareWebs',Web::all());
        View::share('shareUsers',User::all());
        View::share('shareClients',Client::all());
        View::share('shareActives',Active::all());
    }
}
