<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group([
        'prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function() {

        Route::get('/', 'HomeController@index')->name('home');
        Route::post('contact', 'ContactController@store')->name('contact.store');

        Route::get('services/{slug}', 'ServiceController@detail')->name('service.detail');

        foreach(\App\Page::get() as $page)
        {
            Route::get($page->getUrl(), 'RouteController@router')
                ->name($page->id);
        }
    }
);
