<?php

Route::group([
        'prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function() {

        Route::get('/', 'HomeController@index')->name('home');
        Route::post('contact', 'ContactController@store')->name('contact.store');
        Route::post('reference', 'ReferenceController@store')->name('reference.store');

        Route::get('diensten/{slug}', 'ServiceController@detail')->name('service.detail');

        foreach(\App\Page::get() as $page)
        {
            if ($page->getUrl()) {
                Route::get($page->getUrl(), 'RouteController@router')
                    ->name($page->id);
            }
        }
    }
);
