<?php

namespace Tural\SuperLeague;

use Illuminate\Support\ServiceProvider;

class SuperLeagueServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/public/images/' => public_path('vendor/superleague/logos/'),
        ], 'superlig');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['superleague'] = $this->app->share(function ()
        {
            return new SuperLeague();
        });
    }
}
