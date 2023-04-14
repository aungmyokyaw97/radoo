<?php

namespace Amk\Radoo\Providers;

use Amk\Radoo\Radoo;
use Illuminate\Support\ServiceProvider;

class RadooServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/tmh.php' => config_path('laradoo.php')
        ], 'radoo-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Radoo::class, function ($app) {
            return new Radoo();
        });
    }
}
