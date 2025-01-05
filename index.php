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
    ->register('bearcms/focus', function (\BearCMS\Themes\Theme $theme) use ($app): void {
        $context = $app->contexts->get(__DIR__);

        $app->localization
            ->addDictionary('en', function () use ($context) {
                return include $context->dir . '/locales/en.php';
            })
            ->addDictionary('bg', function () use ($context) {
                return include $context->dir . '/locales/bg.php';
            });

        $context->assets
            ->addDir('assets')
            ->addDir('values/files');

        $theme->version = '1.7';

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

        $updateValues = function (?array $values = null) {
            // Get old assets from the CMS server
            $oldAssets = array(
                'addon:bearcms/focus-theme-addon:assets/s4/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/focus/assets/s4/1.jpg',
                'addon:bearcms/focus-theme-addon:assets/s4/home-button.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/focus/assets/s4/home-button.svg',
                'addon:bearcms/focus-theme-addon:assets/s3/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/focus/assets/s3/1.jpg',
                'addon:bearcms/focus-theme-addon:assets/s3/home-button.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/focus/assets/s3/home-button.svg',
                'addon:bearcms/focus-theme-addon:assets/s2/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/focus/assets/s2/1.jpg',
                'addon:bearcms/focus-theme-addon:assets/s2/home-button.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/focus/assets/s2/home-button.svg',
                'addon:bearcms/focus-theme-addon:assets/s1/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/focus/assets/s1/1.jpg',
                'addon:bearcms/focus-theme-addon:assets/s1/home-button.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/focus/assets/s1/home-button.svg',
            );
            $valuesJSON = json_encode($values, true);
            if (strpos($valuesJSON, ':') !== false) {
                foreach ($oldAssets as $oldKey => $newKey) {
                    $search[] = 'url(' . $oldKey . ')';
                    $replace[] = 'url(' . $newKey . ')';
                    $search[] = trim(json_encode('url(' . $oldKey . ')', JSON_THROW_ON_ERROR), '"');
                    $replace[] = trim(json_encode('url(' . $newKey . ')', JSON_THROW_ON_ERROR), '"');
                    $search[] = trim(json_encode(trim(json_encode('url(' . $oldKey . ')', JSON_THROW_ON_ERROR), '"'), JSON_THROW_ON_ERROR), '"');
                    $replace[] = trim(json_encode(trim(json_encode('url(' . $newKey . ')', JSON_THROW_ON_ERROR), '"'), JSON_THROW_ON_ERROR), '"');
                }
                $valuesJSON = str_replace($search, $replace, $valuesJSON);
                $values = json_decode($valuesJSON, true);
            }
            return $values;
        };

        $theme->updateValues = $updateValues;

        $theme->options = function () use ($context, $theme) {
            $options = $theme->makeOptions(); // used inside
            require $context->dir . '/options.php';
            $values = json_decode(file_get_contents($context->dir . '/values/values.json'), true);
            $options->setValues($values, true);
            return $options;
        };
    });
