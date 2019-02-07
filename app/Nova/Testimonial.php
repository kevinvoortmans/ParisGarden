<?php

namespace App\Nova;

use App\Packages\NovaTranslatable\Translatable;
use Illuminate\Support\Facades\Auth;
use Insenseanalytics\LaravelNovaPermission\PermissionsBasedAuthTrait;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Arsenaltech\NovaTab\Tabs;
use Arsenaltech\NovaTab\NovaTab;

class Testimonial extends Resource
{
    use Tabs;
    use PermissionsBasedAuthTrait;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Testimonial';

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
        'function',
        'company',
        'text'
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

        $nameField = Text::make(__('fields.name'), 'name')->sortable();
        $functionField = Text::make(__('fields.function'), 'function')->sortable();
        $companyField = Text::make(__('fields.company'), 'company')->sortable();
        $testimonialField = Textarea::make(__('fields.testimonial'), 'text')->sortable()->hideFromIndex();

        $counter = 0;
        foreach ($this->getLanguages() as $language) {
            $counter++;

            if($counter == 1) {
                $fields[] = new NovaTab(__('fields.tab_'.$language), [
                    $translatable->createTranslatedField($nameField, $language),
                    $translatable->createTranslatedField($functionField, $language),
                    $translatable->createTranslatedField($companyField, $language),
                    $translatable->createTranslatedField($testimonialField, $language),
                ]);
            } else {
                $fields[] = new NovaTab(__('fields.tab_'.$language), [
                    $translatable->createTranslatedField($nameField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($functionField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($companyField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($testimonialField, $language)->hideFromIndex(),
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
        return __('general.testimonials');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('general.testimonial');
    }
}
