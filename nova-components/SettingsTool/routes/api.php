<?php

use Illuminate\Support\Facades\Route;
use Exception\SettingsTool\Http\Controllers\SettingsToolController;

Route::get('/', [SettingsToolController::class, 'read']);

Route::post('/', [SettingsToolController::class, 'write']);
