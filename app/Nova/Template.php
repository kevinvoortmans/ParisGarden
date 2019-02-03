<?php

namespace App\Nova;

use App\Packages\NovaTranslatable\Translatable;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Arsenaltech\NovaTab\Tabs;
use Arsenaltech\NovaTab\NovaTab;

class Template extends Resource
{

    use Tabs;
    use \Insenseanalytics\LaravelNovaPermission\PermissionsBasedAuthTrait;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Template';

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
    ];

    public static $permissionsForAbilities = [
        'all' => 'attribute template',
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

        $nameField = Text::make('Name')->sortable();

        $fields[] =  new NovaTab(__('fields.tab_general'), [
            ID::make()->sortable()->hideFromIndex(),
            Text::make('Controller')->sortable(),
        ]);

        $counter = 0;
        foreach ($this->getLanguages() as $language) {
            $counter++;

            if($counter == 1) {
                $fields[] = new NovaTab(__('fields.tab_'.$language), [
                    $translatable->createTranslatedField($nameField, $language),
                ]);
            } else {
                $fields[] = new NovaTab(__('fields.tab_'.$language), [
                    $translatable->createTranslatedField($nameField, $language)->hideFromIndex(),
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
        return Auth::user()->can('template');
    }
}
