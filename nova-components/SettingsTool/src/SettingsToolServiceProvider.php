<?php

namespace Exception\SettingsTool;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Exception\SettingsTool\Http\Middleware\Authorize;

class SettingsToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/settings.php' => config_path('settings.php'),
        ], 'settings-tool');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'settings-tool');

        $this->app->booted(function () {
            $this->routes();
        });
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
                ->prefix('nova-vendor/settings-tool')
                ->group(__DIR__.'/../routes/api.php');
    }
}
