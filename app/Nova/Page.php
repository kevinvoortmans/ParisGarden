<?php

namespace App\Nova;

use App\Packages\NovaTranslatable\Translatable;
use Guillaumeferron\PostContent\PostContent;
use Infinety\Filemanager\FilemanagerField;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Arsenaltech\NovaTab\Tabs;
use Arsenaltech\NovaTab\NovaTab;

class Page extends Resource
{
    use Tabs;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Page';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'url'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        $fields = [];

        $translatable = Translatable::make([]);

        $nameField = Text::make(__('fields.name'), 'name')->sortable();

        $urlField = Text::make(__('fields.url'), 'url')->sortable();

        $bodyField = PostContent::make(__('fields.body'), 'body')->withFileManager('/admin/nova-filemanager')->hideFromIndex();

        $seoTitleField = Text::make(__('fields.seo_title'), 'seo_title')->sortable()->hideFromIndex();

        $seoDescriptionField = Text::make(__('fields.seo_description'), 'seo_description')->sortable()->hideFromIndex();

        $seoImageField = FilemanagerField::make(__('fields.seo_image'), 'seo_image')->displayAsImage()->hideFromIndex();

        $headerImageField = FilemanagerField::make(__('fields.header_image'), 'header_image')->displayAsImage()->hideFromIndex();

        $templateField = BelongsTo::make(__('fields.template'), 'template', 'App\Nova\Template')->hideFromIndex();

        $fields[] =  new NovaTab(__('fields.tab_general'), [
            ID::make()->sortable()->hideFromIndex(),
            $templateField,
        ]);

        $counter = 0;
        foreach ($this->getLanguages() as $language) {
            $counter++;

            if($counter == 1) {
                $fields[] = new NovaTab(__('fields.tab_'.$language), [
                    $translatable->createTranslatedField($nameField, $language),
                    $translatable->createTranslatedField($urlField, $language),
                    $translatable->createTranslatedField($headerImageField, $language),
                    $translatable->createTranslatedField($bodyField, $language),
                    $translatable->createTranslatedField($seoTitleField, $language),
                    $translatable->createTranslatedField($seoDescriptionField, $language),
                    $translatable->createTranslatedField($seoImageField, $language),
                ]);
            } else {
                $fields[] = new NovaTab(__('fields.tab_'.$language), [
                    $translatable->createTranslatedField($nameField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($urlField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($headerImageField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($bodyField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($seoTitleField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($seoDescriptionField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($seoImageField, $language)->hideFromIndex(),
                ]);
            }

        }

        return $fields;
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    public static function label() {
        return __('exception.pages');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('exception.page');
    }
}
