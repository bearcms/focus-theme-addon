<?php

/*
 * Focus Theme addon for Bear CMS
 * https://github.com/bearcms/focus-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();

$app->bearCMS->themes
    ->register('bearcms/focus', function (\BearCMS\Themes\Theme $theme) use ($app) {
        $context = $app->contexts->get(__DIR__);

        $app->localization
            ->addDictionary('en', function () use ($context) {
                return include $context->dir . '/locales/en.php';
            })
            ->addDictionary('bg', function () use ($context) {
                return include $context->dir . '/locales/bg.php';
            });

        $context->assets
            ->addDir('assets');

        $theme->version = '1.5';

        $theme->get = function (\BearCMS\Themes\Theme\Customizations $customizations) use ($context) {
            $templateFilename = $context->dir . '/components/template.php';
            return (static function ($__filename, $customizations) { // used inside
                ob_start();
                include $__filename;
                return ob_get_clean();
            })($templateFilename, $customizations);
        };

        $theme->manifest = function () use ($context, $theme) {
            $manifest = $theme->makeManifest();
            $manifest->name = __('bearcms.themes.focus.name');
            $manifest->description = __('bearcms.themes.focus.description');
            $manifest->author = [
                'name' => 'BearCMS Team',
                'url' => 'https://bearcms.com/addons/',
                'email' => 'addons@bearcms.com',
            ];
            $manifest->media = [
                [
                    'filename' => $context->dir . '/assets/1.jpg',
                    'width' => 1246,
                    'height' => 968,
                ]
            ];
            return $manifest;
        };

        $theme->options = function () use ($context, $theme) {
            $options = $theme->makeOptions(); // used inside
            require $context->dir . '/options.php';
            $values = require $context->dir . '/styles/1.php';
            $options->setValues($values);
            return $options;
        };

        $theme->styles = function () use ($context, $theme) {
            $styles = [];
            for ($i = 1; $i <= 4; $i++) {
                $style = $theme->makeStyle();
                $style->media = [
                    [
                        'filename' => $context->dir . '/assets/' . $i . '.jpg',
                        'width' => 1246,
                        'height' => 968,
                    ]
                ];
                $style->values = require $context->dir . '/styles/' . $i . '.php';
                $styles[] = $style;
            }
            return $styles;
        };
    });
