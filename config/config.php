<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Analytics
    |--------------------------------------------------------------------------
    |
    | Determine the display of analytics tags.
    |
    */

    'google' => [
        'enabled' => env('GOOGLE_ANALYTICS_ENABLED', false),
        'id' => env('GOOGLE_ANALYTICS_ID', '')
    ],

    /*
    |--------------------------------------------------------------------------
    | Cookies enabled
    |--------------------------------------------------------------------------
    |
    | Determine whether or not the activation of the cookie compliance.
    |
    */

    'cookies' => [
        'enabled' => env('COOKIES_ENABLED', false),
        'content' => [
            'palette' => [
                'popup' => [
                    'background' => '#1f9d55',
                    'text' => '#ffffff'
                ],
                'button' => [
                    "background" => '#F2D024',
                    "text" => '#000000'
                ]
            ],
            'position' => 'bottom-right',
            'content' => [
                'message' => "This site uses cookies to ensure you get the best experience on our website.",
                'dismiss' => "Understood!",
                'link' => "See more"
            ]
        ]
    ],
];
