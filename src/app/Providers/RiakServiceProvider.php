<?php

namespace App\Providers;

use App\Contracts\Http\Hello;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       /* view()->composer('view', function () {
            //
        });*/
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Hello::class, function ($app) {
            return new Hello();
        });
    }
}
