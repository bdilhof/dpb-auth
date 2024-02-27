<?php

namespace Dpb\Auth;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        /*
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'auth');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'auth');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/ldap.php' => config_path('ldap.php'),
                __DIR__.'/../config/hrms.php' => config_path('hrms.php'),
            ], 'config');

            // Publishing the translation files.
            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/auth'),
            ], 'lang');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/auth'),
            ], 'views');

            // Publishing the migrations.
            $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations')
            ], 'migrations');

        }
        */
    }

    /**
     * Register the application services.
     */
    public function register()
    {

    }
}
