<?php

namespace App\Nova;

use App\Packages\NovaTranslatable\Translatable;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Illuminate\Support\Facades\Auth;
use Infinety\Filemanager\FilemanagerField;
use Insenseanalytics\LaravelNovaPermission\PermissionsBasedAuthTrait;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Arsenaltech\NovaTab\Tabs;
use Arsenaltech\NovaTab\NovaTab;
use R64\NovaFields\Row;

class Service extends Resource
{
    use Tabs;
    use PermissionsBasedAuthTrait;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Service';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'body'
    ];

    public static $permissionsForAbilities = [
        'all' => 'testimonial',
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

        $nameField = TextWithSlug::make(__('fields.name'), 'name')->sortable()->slug('Slug');

        $descriptionField = Text::make(__('fields.description'), 'description')->sortable();

        $imageField = FilemanagerField::make(__('fields.image'), 'image')->sortable()->hideFromIndex();

        $imageField2 = FilemanagerField::make(__('fields.image'), 'image')->sortable()->hideFromIndex();

        $bodyField = Trix::make(__('fields.body'), 'body')->sortable()->hideFromIndex();

        $slugField = Slug::make('Slug');

        $headerImageField = FilemanagerField::make(__('fields.header_image'), 'header_image')->displayAsImage()->hideFromIndex();

        $sellingTextField = Textarea::make(__('fields.selling_text'), 'selling_text')->sortable()->hideFromIndex();

        $seoTitleField = Text::make(__('fields.seo_title'), 'seo_title')->sortable()->hideFromIndex();


        $seoDescriptionField = Text::make(__('fields.seo_description'), 'seo_description')->sortable()->hideFromIndex();

        $seoImageField = FilemanagerField::make(__('fields.seo_image'), 'seo_image')->displayAsImage()->hideFromIndex();

        $counter = 0;
        foreach ($this->getLanguages() as $language) {
            $counter++;

            if($counter == 1) {
                $fields[] = new NovaTab(__('fields.tab_'.$language), [
                    $translatable->createTranslatedField($nameField, $language),
                    $translatable->createTranslatedField($descriptionField, $language),
                    $translatable->createTranslatedField($slugField, $language),
                    $translatable->createTranslatedField($headerImageField, $language),
                    $translatable->createTranslatedField($imageField, $language),
                    $translatable->createTranslatedField($bodyField, $language),
                    $translatable->createTranslatedField($sellingTextField, $language),

                    Row::make(__('fields.images'), [
                        $imageField2,
                    ], 'images'),

                    $translatable->createTranslatedField($seoTitleField, $language),
                    $translatable->createTranslatedField($seoDescriptionField, $language),
                    $translatable->createTranslatedField($seoImageField, $language),
                ]);
            } else {
                $fields[] = new NovaTab(__('fields.tab_'.$language), [
                    $translatable->createTranslatedField($nameField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($descriptionField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($slugField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($headerImageField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($imageField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($bodyField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($sellingTextField, $language)->hideFromIndex(),

                    Row::make(__('fields.images'), [
                        $imageField2,
                    ], 'images'),

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

    /**
     * Determine if this resource is available for navigation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    public static function availableForNavigation(Request $request)
    {
        return Auth::user()->can('testimonial');
    }

    /**
     * Get the displayable plural label of the resource.
     *
     * @return string
     */
    public static function label() {
        return __('general.services');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('general.service');
    }
}
