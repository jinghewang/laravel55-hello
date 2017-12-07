<?php

namespace App\Providers;

use DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema::defaultStringLength(120);

        View::share('xo','wjh');

        View::composer(
            'greeting', 'App\Composers\ProfileComposer'
        );

        // 使用基于闭包的 composers...
        View::composer('greeting2', function ($view) {
            return $view->with('count',1222);
        });

        //查询事件的监听
        DB::listen(function ($query) {
            //Log::warning( $query->sql);
            //Log::warning($query->bindings);
            //Log::warning($query->time);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        }
    }
}
