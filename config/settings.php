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

            'name' => 'exception.general',

            'settings' => [

                [
                    'key' => 'website_name',
                    'name' => 'exception.website_name',
                    'type' => 'text',
                    'description' => '',
                ],

                [
                    'key' => 'gtm',
                    'name' => 'exception.gtm',
                    'type' => 'text',
                    'description' => '',
                ],

                [
                    'key' => 'contact_mailto',
                    'name' => 'exception.contact_mailto',
                    'type' => 'text',
                    'description' => 'exception.contact_mailto_description',
                ],

                [
                    'key' => 'contact_phone',
                    'name' => 'exception.contact_phone',
                    'type' => 'text',
                    'description' => '',
                ],

                [
                    'key' => 'contact_street',
                    'name' => 'exception.contact_street',
                    'type' => 'text',
                    'description' => '',
                ],

                [
                    'key' => 'contact_city',
                    'name' => 'exception.contact_city',
                    'type' => 'text',
                    'description' => '',
                ],

            ]

        ],

        [

            'name' => 'exception.social_media',

            'settings' => [

                [
                    'key' => 'facebook_url',
                    'name' => 'exception.facebook',
                    'type' => 'text',
                    'description' => 'exception.facebook_description',
                ],

                [
                    'key' => 'twitter_url',
                    'name' => 'exception.twitter',
                    'type' => 'text',
                    'description' => 'exception.twitter_description',
                ],

                [
                    'key' => 'instagram_url',
                    'name' => 'exception.instagram',
                    'type' => 'text',
                    'description' => 'exception.instagram_description',
                ],

            ]

        ],

        [

            'name' => 'exception.languages',

            'settings' => [

                [
                    'key' => 'nl',
                    'name' => 'exception.nl',
                    'type' => 'toggle',
                    'description' => '',
                ],

                [
                    'key' => 'fr',
                    'name' => 'exception.fr',
                    'type' => 'toggle',
                    'description' => '',
                ],
                [

                    'key' => 'en',
                    'name' => 'exception.en',
                    'type' => 'toggle',
                    'description' => '',
                ],

                [
                    'key' => 'de',
                    'name' => 'exception.de',
                    'type' => 'toggle',
                    'description' => '',
                ],

            ],

        ],

    ],

];
