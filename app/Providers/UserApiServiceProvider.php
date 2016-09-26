<?php

namespace AcademicDirectory\Providers;

use Illuminate\Support\ServiceProvider;
use AcademicDirectory\Domains\Services\UsersService;

class UserApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UsersService::class, function ($app) {
            return new UsersService($app->make('AcademicDirectory\Domains\Users\UserRepository'));
        });
    }
}
