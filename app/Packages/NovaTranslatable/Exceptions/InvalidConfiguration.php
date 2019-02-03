<?php

namespace App\Packages\NovaTranslatable\Exceptions;

use Exception;

class InvalidConfiguration extends Exception
{
    public static function defaultLocalesNotSet()
    {
        return new static("There are no default locales set. Make sure you call `App\Packages\Translatable::defaultLocales` in a service provider and pass it an array of locales.");
    }
}
