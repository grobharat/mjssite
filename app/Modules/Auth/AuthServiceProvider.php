<?php
// app/Modules/Auth/AuthServiceProvider.php

namespace App\Modules\Auth;

use Illuminate\Support\ServiceProvider;
use App\Modules\Auth\Repositories\AuthRepository;
use App\Modules\Auth\Services\AuthService;

class AuthServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Modules\Auth\Repositories\AuthRepository', function ($app) {
            return new AuthRepository();
        });

        $this->app->bind('App\Modules\Auth\Services\AuthService', function ($app) {
            return new AuthService($app->make('App\Modules\Auth\Repositories\AuthRepository'));
        });
    }

    public function boot()
    {
        //
    }
}
