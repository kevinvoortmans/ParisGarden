<?php

namespace App\Providers;

use Exception\SettingsTool\SettingsTool;
use Illuminate\Support\Facades\Auth;
use Infinety\Filemanager\FilemanagerTool;
use Infinety\MenuBuilder\MenuBuilder;
use Insenseanalytics\LaravelNovaPermission\LaravelNovaPermission;
use Joedixon\NovaTranslation\NovaTranslation;
use Kristories\Inspire\Inspire;
use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return $user->can('nova');
        });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            (new \Richardkeep\NovaTimenow\NovaTimenow)->timezones([
                'Europe/Brussels',
            ])->defaultTimezone('Europe/Brussels'),

        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            LaravelNovaPermission::make()
                ->canSee(function ($request) {
                return $request->user()->can('permissions');
            }),


            FilemanagerTool::make()->canSee(function ($request) {
                return $request->user()->can('filemanager');
            }),

            MenuBuilder::make()->canSee(function ($request) {
                return $request->user()->can('menubuilder');
            }),

            NovaTranslation::make()->canSee(function ($request) {
                return $request->user()->can('translations');
            }),

            SettingsTool::make()->canSee(function ($request) {
                return $request->user()->can('settings');
            }),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
