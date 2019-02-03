<?php

namespace App\Providers;

use App\Packages\NovaTranslatable\Translatable;
use Illuminate\Support\ServiceProvider;;

class LanguageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //get languages from settings
        $settings = settings();

        $supportedLocales = [];

        $novaLocales = [];

        //get all available languages
        $availableLanguages = config('exception.availableLanguages');

        foreach ($availableLanguages as $key => $availableLanguage) {
            $value = $settings->get($key);

            if(isset($value) && $value) {
                //add locale to nova locales
                $novaLocales[$key] = $key;

                //add local to supported locales for urls
                $supportedLocales[$key] = $availableLanguage;
            }
        }

        //if no languages added then default nl
        if(sizeof($supportedLocales) == 0) {
            $supportedLocales['nl'] = $availableLanguages['nl'];
        }

        //if no languages added then default nl
        if(sizeof($novaLocales) == 0) {
            $novaLocales[] = 'nl';
        }

        //set url locales
        config([
            'laravellocalization.supportedLocales' => $supportedLocales,

            'laravellocalization.useAcceptLanguageHeader' => true,

            'laravellocalization.hideDefaultLocaleInURL' => true
        ]);

        //dd($novaLocales);
        //set nova model locales
        Translatable::defaultLocales($novaLocales);
    }
}
