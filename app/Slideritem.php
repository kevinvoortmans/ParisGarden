<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slideritem extends Model
{
    use HasTranslations;

    public $translatable = ['title', 'text', 'button_text', 'button_link', 'image'];

}
