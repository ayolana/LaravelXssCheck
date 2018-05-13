<?php

namespace Ayolana\LaravelXssCheck;

use Illuminate\Support\ServiceProvider;

class LaravelXssCheckServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('xsscheck', \StaffStrength\XssCheck\Http\Middleware\XssCheck::class);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}