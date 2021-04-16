<?php

namespace Uccello\EmailDesigner\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * App Service Provider
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        // Views
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'email-designer');

        // Translations
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'email-designer');

        // Migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Routes
        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');

        // Publish assets
        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/uccello/email-designer'),
        ], 'email-designer-assets');

        // Config
        // $this->publishes([
        //     __DIR__ . '/../../config/email-designer.php' => config_path('email-designer.php'),
        // ], 'email-designer-config');
    }

    public function register()
    {
        // Config
        // $this->mergeConfigFrom(
        //     __DIR__ . '/../../config/email-designer.php',
        //     'email-designer'
        // );
    }
}
