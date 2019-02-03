<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings Path
    |--------------------------------------------------------------------------
    |
    | This is where your settings are stored on disk within your application's
    | `storage` directory. Note: any subdirectories must already exist.
    |
    | Defaults to 'app/settings.json' if not specified here.
    |
    */

    'path' => 'app/settings.json',

    /*
    |--------------------------------------------------------------------------
    | Navigation Title
    |--------------------------------------------------------------------------
    |
    | This is the text Nova's navigation sidebar will display for this tool.
    |
    | Defaults to 'Settings' if not specified here.
    |
    */

    'navigation' => 'exception.settings',

    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    |
    | This is the good stuff :). Each 'panel' will be shown grouped together
    | under its 'title'. Each 'setting' in a panel will display a row in Nova,
    | and you can specify the key used to store its value on disk, its display
    | name in Nova, a description, its type (only boolean or text for now),
    | and a link for more information.
    |
    | Each setting must include at least a key, name, and type.
    |
    */

    'panels' => [

        [

            'name' => 'Settings',

            'settings' => [

                [
                    'key' => 'facebook_url',
                    'name' => 'Facebook',
                    'type' => 'text',
                    'description' => 'App Facebook page URL.',
                    'link' => [
                        'text' => 'More.',
                        'url' => '/documentation#facebook_url'
                    ],
                ],

                [
                    'key' => 'twitter_url',
                    'name' => 'Twitter',
                    'type' => 'text',
                    'description' => 'App Twitter page URL.',
                    'link' => [
                        'text' => 'More.',
                        'url' => '/documentation#twitter_url'
                    ],
                ],

            ]

        ],

        [

            'name' => 'Features',

            'settings' => [

                [
                    'key' => 'new_feature',
                    'name' => 'New Feature',
                    'type' => 'toggle',
                    'description' => 'Top secret new app feature.',
                    'link' => [
                        'text' => 'Documentation',
                        'url' => '/documentation#new_feature'
                    ],
                ],

            ],

        ],

    ],

];
