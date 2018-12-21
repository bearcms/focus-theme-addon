<?php
/*
 * Focus Theme addon for Bear CMS
 * https://github.com/bearcms/focus-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();

$settings = $app->bearCMS->data->settings->get();
$isHomePage = (string) $app->request->path === '/';

$homePageLogoImage = $options->getValue('homePageLogoImage');
$homePageTitleVisibility = $options->getValue('homePageTitleVisibility');
$homePageDescriptionVisibility = $options->getValue('homePageDescriptionVisibility');
?><html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,minimal-ui">
        <style>
            html, body{
                padding: 0;
                margin: 0;
                min-height: 100%;
            }
            *{outline:none;-webkit-tap-highlight-color:rgba(0,0,0,0);}
            ul,ol,li{list-style-position:inside;}
            img{border:0;}
            a{text-decoration:none;}
            .template-content-container{min-height:100vh;display:flex;justify-content:center;flex-direction:column;}
            .template-content-container > *{width:100%;}
        </style>
    </head>
    <body><?php
        echo '<div class="template-content-container">';
        if ($isHomePage) {
            echo '<section class="template-home-page-container">';
            if (!empty($homePageLogoImage)) {
                $imageHTML = '<component src="bearcms-image-element" class="template-home-page-logo" onClick="openUrl" url="' . htmlentities($app->request->base) . '/" filename="' . htmlentities($homePageLogoImage) . '"/>';
                echo '<div><div class="template-home-page-logo-container">' . $imageHTML . '</div></div>';
            }
            if ($homePageTitleVisibility === '1') {
                echo '<div><div class="template-home-page-title-container"><span class="template-home-page-title">' . htmlspecialchars($settings->title) . '</span></div></div>';
            }
            if ($homePageDescriptionVisibility === '1') {
                echo '<div><div class="template-home-page-description-container"><div class="template-home-page-description">' . htmlspecialchars($settings->description) . '</div></div></div>';
            }
            //<component src="bearcms-elements" id="test1" editable="true"/>
            echo '<div><div class="template-home-page-content-container"><div class="template-home-page-content">{{body}}</div></div></div>';
            echo '</section>';
        } else {
            echo '<div class="template-page-back-to-home-button-container">';
            echo '<a href="' . htmlentities($app->request->base) . '/" class="template-page-back-to-home-button"></a>';
            echo '</div>';
            echo '<div style="flex:1 1 auto;display:flex;align-items:center;">';
            echo '<section class="template-page-content-container">';
            echo '<div class="template-page-content">{{body}}</div>';
            echo '</section>';
            echo '</div>';
        }
        echo '</div>';
        ?></body>
</html>