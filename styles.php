<?php

/*
 * Focus Theme addon for Bear CMS
 * https://github.com/bearcms/focus-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();
$context = $app->context->get(__FILE__);

return [
    [
        'media' => [
            [
                'filename' => $context->dir . '/assets/1.jpg',
                'width' => 1246,
                'height' => 968,
            ]
        ],
        'values' => require $context->dir . '/styles/1.php' 
    ],
    [
        'media' => [
            [
                'filename' => $context->dir . '/assets/2.jpg',
                'width' => 1246,
                'height' => 968,
            ]
        ],
        'values' => require $context->dir . '/styles/2.php'
    ],
    [
        'media' => [
            [
                'filename' => $context->dir . '/assets/3.jpg',
                'width' => 1246,
                'height' => 968,
            ]
        ],
        'values' => require $context->dir . '/styles/3.php'
    ],
    [
        'media' => [
            [
                'filename' => $context->dir . '/assets/4.jpg',
                'width' => 1246,
                'height' => 968,
            ]
        ],
        'values' => require $context->dir . '/styles/4.php'
    ]
];
