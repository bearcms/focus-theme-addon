<?php

/*
 * Focus Theme addon for Bear CMS
 * https://github.com/bearcms/focus-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$homePageGroup = $options->addGroup(__("bearcms.themes.focus.options.Home page"));

$homePageLogoGroup = $homePageGroup->addGroup(__("bearcms.themes.focus.options.Logo"));
$homePageLogoGroup
    ->addOption("homePageLogoImage", "image", __("bearcms.themes.focus.options.Logo image"))
    ->addOption("homePageLogoImageCSS", "css", "", [
        "cssTypes" => ["cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-home-page-logo", "box-sizing:border-box;overflow:hidden;font-size:0;"],
            ["selector", ".template-home-page-logo"]
        ]
    ]);
$homePageLogoContainerGroup = $homePageLogoGroup->addGroup(__("bearcms.themes.focus.options.Container"));
$homePageLogoContainerGroup
    ->addOption("homePageLogoImageContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOutput" => [
            ["rule", ".template-home-page-logo-container", "box-sizing:border-box;"],
            ["selector", ".template-home-page-logo-container"]
        ]
    ]);

$homePageTitleGroup = $homePageGroup->addGroup(__("bearcms.themes.focus.options.Title"));
$homePageTitleGroup
    ->addOption("homePageTitleVisibility", "list", __("bearcms.themes.focus.options.Visibility"), [
        "values" => [
            [
                "value" => "1",
                "name" => __("bearcms.themes.focus.options.Visible")
            ],
            [
                "value" => "0",
                "name" => __("bearcms.themes.focus.options.Hidden")
            ]
        ]
    ])
    ->addOption("homePageTitleCSS", "css", "", [
        "cssOutput" => [
            ["rule", ".template-home-page-title", "box-sizing:border-box;display:inline-block;text-decoration:none;word-break:break-all;"],
            ["selector", ".template-home-page-title"]
        ]
    ]);
$homePageTitleContainerGroup = $homePageTitleGroup->addGroup(__("bearcms.themes.focus.options.Container"));
$homePageTitleContainerGroup
    ->addOption("homePageTitleContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOutput" => [
            ["rule", ".template-home-page-title-container", "box-sizing:border-box;"],
            ["selector", ".template-home-page-title-container"]
        ]
    ]);

$homePageDescriptionGroup = $homePageGroup->addGroup(__("bearcms.themes.focus.options.Description"));
$homePageDescriptionGroup
    ->addOption("homePageDescriptionVisibility", "list", __("bearcms.themes.focus.options.Visibility"), [
        "values" => [
            [
                "value" => "1",
                "name" => __("bearcms.themes.focus.options.Visible")
            ],
            [
                "value" => "0",
                "name" => __("bearcms.themes.focus.options.Hidden")
            ]
        ]
    ])
    ->addOption("homePageDescriptionCSS", "css", "", [
        "cssTypes" => ["cssText", "cssTextShadow", "cssBackground", "cssPadding", "cssBorder", "cssRadius", "cssShadow", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-home-page-description", "box-sizing:border-box;display:inline-block;word-break:break-all;"],
            ["selector", ".template-home-page-description"]
        ]
    ]);
$homePageDescriptionContainerGroup = $homePageDescriptionGroup->addGroup(__("bearcms.themes.focus.options.Container"));
$homePageDescriptionContainerGroup
    ->addOption("homePageDescriptionContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOutput" => [
            ["rule", ".template-home-page-description-container", "box-sizing:border-box;"],
            ["selector", ".template-home-page-description-container"]
        ]
    ]);


$homePageContentGroup = $homePageGroup->addGroup(__("bearcms.themes.focus.options.Content"));
$homePageContentGroup
    ->addOption("homePageContentCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-home-page-content", "box-sizing:border-box;"],
            ["selector", ".template-home-page-content"]
        ]
    ]);
$homePageContentGroup->addElementsGroup('homePageContentElements', '.template-home-page-content');
$homePageContentElementsContainerGroup = $homePageContentGroup->addGroup(__("bearcms.themes.focus.options.Container"));
$homePageContentElementsContainerGroup
    ->addOption("homePageContentElementsContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOutput" => [
            ["rule", ".template-home-page-content-container", "box-sizing:border-box;"],
            ["selector", ".template-home-page-content-container"]
        ]
    ]);

$homePageContainerGroup = $homePageGroup->addGroup(__("bearcms.themes.focus.options.Container"));
$homePageContainerGroup
    ->addOption("homePageContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-home-page-container", "box-sizing:border-box;"],
            ["selector", ".template-home-page-container"]
        ]
    ]);

$pagesGroup = $options->addGroup(__("bearcms.themes.focus.options.Other pages"));

$pageBackToHomeGroup = $pagesGroup->addGroup(__("bearcms.themes.focus.options.Back to home button"));
$pageBackToHomeGroup
    ->addOption("pageBackToHomeButtonCSS", "css", "", [
        "cssTypes" => ["cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-page-back-to-home-button", "display:block;box-sizing:border-box;"],
            ["selector", ".template-page-back-to-home-button"]
        ]
    ]);

$pageBackToHomeContainerGroup = $pageBackToHomeGroup->addGroup(__("bearcms.themes.focus.options.Container"));
$pageBackToHomeContainerGroup
    ->addOption("pageBackToHomeButtonContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOutput" => [
            ["rule", ".template-page-back-to-home-button-container", "box-sizing:border-box;"],
            ["selector", ".template-page-back-to-home-button-container"]
        ]
    ]);

$pagesGroup
    ->addOption("pageContentCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-page-content", "box-sizing:border-box;"],
            ["selector", ".template-page-content"]
        ]
    ]);

$pagesContentGroup = $pagesGroup->addGroup(__("bearcms.themes.focus.options.Content"));

$pagesContentGroup->addElementsGroup('pageContentElements', '.template-page-content');
$pagesContentGroup->addPages();

$pageContentElementsContainerGroup = $pagesGroup->addGroup(__("bearcms.themes.focus.options.Container"));
$pageContentElementsContainerGroup
    ->addOption("pageContentElementsContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOutput" => [
            ["rule", ".template-page-content-container", "box-sizing:border-box;"],
            ["selector", ".template-page-content-container"]
        ]
    ]);

$windowGroup = $options->addGroup(__("bearcms.themes.focus.options.Window"));
$windowGroup
    ->addOption("windowCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssBorder", "cssRadius", "cssShadow", "cssBackground"],
        "cssOutput" => [
            ["selector", ".template-content-container"]
        ]
    ]);
