<?php

namespace NGiraud\CookiesAnalytics;

use Illuminate\Support\ServiceProvider;

class CookiesAnalyticsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('analytics.php'),
        ], 'analytics-config');

        $this->loadViewsFrom(__DIR__ . '/../views', 'analytics');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'analytics');
    }
}
