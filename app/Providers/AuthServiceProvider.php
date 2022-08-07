<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\User;
use App\Policies\CategoryPolicy;
use App\Policies\UserPlicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPlicy::class,
        Category::class => CategoryPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('controller',function(User $user){
            return $user->role == 0 || $user->role == 1;
        });

        Gate::define('showUser',function (User $user){
           return $user->role == 0;
        });


        $this->registerPolicies();

        //
    }
}
