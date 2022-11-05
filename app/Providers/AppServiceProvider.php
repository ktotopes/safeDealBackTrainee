<?php

namespace App\Providers;

use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;

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
        RateLimiter::for('limitApi', function (Request $request) {
            return Limit::perMinute(10)->response(function () {
               return new \Illuminate\Http\Response('boop beep a lot of requests ');
            });
        });
    }
}
