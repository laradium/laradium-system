<?php

namespace Laradium\Laradium\System\Providers;

use Illuminate\Support\ServiceProvider;

class LaradiumSystemServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../../config/laradium-system.php';
        $assetPath = __DIR__ . '/../../public/laradium';
        $this->mergeConfigFrom($configPath, 'laradium-system');

        $this->publishes([
            $configPath => config_path('laradium-content.php'),
            $assetPath  => public_path('laradium')
        ], 'laradium-system');

        $this->publishes([
            $assetPath  => public_path('laradium')
        ], 'laradium');

        $this->publishes([
            $assetPath  => public_path('laradium')
        ], 'laradium-assets');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laradium-system');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Global helpers
        require_once __DIR__ . '/../Helpers/Global.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
}
