<?php

namespace AcademicDirectory\Providers;

use Illuminate\Support\ServiceProvider;
use AcademicDirectory\Domains\Services\EventsService;

class InstituitionEventServiceProvider extends ServiceProvider
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
        $this->app->bind(EventsService::class, function ($app) {
            return new EventsService($app->make('AcademicDirectory\Domains\Events\EventsRepository'));
        });
    }
}
