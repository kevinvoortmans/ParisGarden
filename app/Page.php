<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'url', 'body', 'seo_title', 'seo_description', 'seo_image', 'header_image'];

    protected $casts = [
        'images' => 'array'
    ];

    public function template() {
        return $this->belongsTo('App\Template', 'template_id', 'id');
    }

    public function getUrl() {
        $url = $this->url;
        if ($url) {
            return $url;
        }

        return $this->getTranslation('url', 'nl');
    }

    public function getSeo() {
        return [
            'title' => $this->seo_title,
            'description' => $this->seo_description,
            'image' => $this->seo_image
        ];
    }
}