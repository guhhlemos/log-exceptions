<?php

namespace Guhhlemos\LogExceptions;

use Illuminate\Support\ServiceProvider;

class LogExceptionsServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->make('Guhhlemos\LogExceptions\Models\ExceptionModel');

        $this->app->singleton('LogExceptions', function () {
            return new LogExceptionsService();
        });
    }

    /**
     * @return array
     */
    // public function provides()
    // {
    //     return array('LogExceptions');
    // }
}