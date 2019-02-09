<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'description', 'body', 'image', 'slug', 'seo_title', 'seo_description', 'seo_image', 'header_image', 'selling_text'];

    protected $casts = [
        'images' => 'array'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSeo() {
        return [
            'title' => $this->seo_title,
            'description' => $this->seo_description,
            'image' => $this->seo_image
        ];
    }
}
