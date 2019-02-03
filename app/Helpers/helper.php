<?php

if (!function_exists('settings')) {

    function settings()
    {
        $settings = \Spatie\Valuestore\Valuestore::make(storage_path('app/settings.json'));

        return $settings;
    }

}