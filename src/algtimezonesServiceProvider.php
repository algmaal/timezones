<?php

namespace Algmaal\Timezones;

use Illuminate\Support\ServiceProvider;

class algtimezonesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
       //include __DIR__.'/routes/routes.php';
        $this->app->make('algmaal\timezones\AlgTimezonesController');
    }
}