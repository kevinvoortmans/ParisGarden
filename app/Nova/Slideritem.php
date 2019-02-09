<?php

namespace App\Nova;

use App\Packages\NovaTranslatable\Translatable;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Illuminate\Support\Facades\Auth;
use Infinety\Filemanager\FilemanagerField;
use Insenseanalytics\LaravelNovaPermission\PermissionsBasedAuthTrait;
use Inspheric\Fields\Url;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Arsenaltech\NovaTab\Tabs;
use Arsenaltech\NovaTab\NovaTab;
use R64\NovaFields\Row;

class Slideritem extends Resource
{

    use Tabs;
    use PermissionsBasedAuthTrait;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Slideritem';

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
        'title'
    ];

    public static $permissionsForAbilities = [
        'all' => 'slideritem',
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

        $titleField = Text::make(__('fields.title'), 'title')->sortable();

        $textField = Textarea::make(__('fields.text'), 'text')->sortable()->hideFromIndex();

        $buttonLinkField = Url::make(__('fields.button_link'), 'button_link')->sortable();

        $buttontextField = Text::make(__('fields.button_text'), 'button_text')->sortable();

        $imageField = FilemanagerField::make(__('fields.image'), 'image')->sortable()->hideFromIndex();

        $counter = 0;
        foreach ($this->getLanguages() as $language) {
            $counter++;

            if($counter == 1) {
                $fields[] = new NovaTab(__('fields.tab_'.$language), [
                    $translatable->createTranslatedField($titleField, $language),
                    $translatable->createTranslatedField($textField, $language),
                    $translatable->createTranslatedField($buttontextField, $language),
                    $translatable->createTranslatedField($buttonLinkField, $language),
                    $translatable->createTranslatedField($imageField, $language),
                ]);
            } else {
                $fields[] = new NovaTab(__('fields.tab_'.$language), [
                    $translatable->createTranslatedField($titleField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($textField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($buttontextField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($buttonLinkField, $language)->hideFromIndex(),
                    $translatable->createTranslatedField($imageField, $language)->hideFromIndex(),

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
        return Auth::user()->can('slideritem');
    }

    /**
     * Get the displayable plural label of the resource.
     *
     * @return string
     */
    public static function label() {
        return __('general.slideritems');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('general.slideritem');
    }
}
