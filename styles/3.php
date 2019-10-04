<?php

/*
 * Focus Theme addon for Bear CMS
 * https://github.com/bearcms/focus-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#ffffff","font-family":"googlefonts:Noto Serif","font-size":"28px","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$h2 = '"color":"#ffffff","font-family":"googlefonts:Noto Serif","font-size":"22px","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$h3 = '"color":"#ffffff","font-family":"googlefonts:Noto Serif","font-size":"18px","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$text = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"180%"';
$input = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"180%","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top":"","border-bottom":"","border-left":"","border-right":"","border-top:hover":"","border-bottom:hover":"","border-left:hover":"","border-right:hover":"","border-top:active":"","border-bottom:active":"","border-left:active":"","border-right:active":"","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","background-color":"#ffffff"';
$link = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"180%","text-decoration":"underline"';
$button = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#000000","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","margin-top":"10px"';
$date = '"color":"#ffffff","font-family":"Arial","font-size":"12px","line-height":"180%"';
$image = '"border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$userImage = '"width":"50px","height":"50px","margin-right":"8px",' . $image;
$separator = '"background-color":"#333333","height":"1px","margin-top":"30px","margin-bottom":"30px"';

$getElementsStyles = function ($prefix) use ($text, $h1, $h2, $h3, $input, $link, $button, $date, $userImage, $image, $separator) {
    if ($prefix === 'homePageContentElements') {
        $h1 .= ',"color":"#000000"';
        $h2 .= ',"color":"#000000"';
        $h3 .= ',"color":"#000000"';
        $text .= ',"color":"#000000"';
        $link .= ',"color":"#000000"';
        $date .= ',"color":"#000000"';
    }
    return [
        $prefix . 'HeadingLargeCSS' => '{' . $h1 . '}',
        $prefix . 'HeadingMediumCSS' => '{' . $h2 . '}',
        $prefix . 'HeadingSmallCSS' => '{' . $h3 . '}',
        $prefix . 'TextCSS' => '{' . $text . '}',
        $prefix . 'TextLinkCSS' => '{' . $link . '}',
        $prefix . 'LinkCSS' => '{' . $link . '}',
        $prefix . 'NavigationItemLinkContainerCSS' => '{}',
        $prefix . 'NavigationItemLinkCSS' => '{' . $link . '}',
        $prefix . 'ImageCSS' => '{' . $image . '}',
        $prefix . 'ImageGalleryImageCSS' => '{' . $image . '}',
        $prefix . 'VideoCSS' => '{' . $image . '}',
        $prefix . 'CommentsCommentCSS' => '{"margin-bottom":"10px"}',
        $prefix . 'CommentsAuthorNameCSS' => '{' . $text . '}',
        $prefix . 'CommentsAuthorImageCSS' => '{' . $userImage . '}',
        $prefix . 'CommentsDateCSS' => '{' . $date . '}',
        $prefix . 'CommentsTextCSS' => '{' . $text . '}',
        $prefix . 'CommentsTextLinksCSS' => '{' . $link . '}',
        $prefix . 'CommentsTextInputCSS' => '{' . $input . ',"height":"80px"}',
        $prefix . 'CommentsSendButtonCSS' => '{' . $button . ',"margin-top":"10px"}',
        $prefix . 'CommentsShowMoreButtonCSS' => '{' . $link . ',"margin-bottom":"5px"}',
        $prefix . 'HtmlCSS' => '{' . $text . '}',
        $prefix . 'HtmlLinkCSS' => '{' . $link . '}',
        $prefix . 'BlogPostsPostTitleCSS' => '{' . $link . ',"font-family":"googlefonts:Open Sans","font-size":"22px"}',
        $prefix . 'BlogPostsPostDateContainerCSS' => '{' . $date . ',"margin-top":"5px"}',
        $prefix . 'BlogPostsPostDateCSS' => '{' . $date . '}',
        $prefix . 'BlogPostsPostContentCSS' => '{"margin-top":"7px"}',
        $prefix . 'BlogPostsShowMoreButtonCSS' => '{' . $link . ',"margin-top":"5px"}',
        $prefix . 'ForumPostsTitleCSS' => '{' . $link . '}',
        $prefix . 'ForumPostsRepliesCountCSS' => '{' . $date . '}',
        $prefix . 'ForumPostsShowMoreButtonCSS' => '{' . $link . '}',
        $prefix . 'ForumPostsNewPostButtonCSS' => '{' . $link . '}',
        $prefix . 'ShareButtonCSS' => '{' . $button . '}',
        $prefix . 'SeparatorLargeCSS' => '{' . $separator . ',"width":"80%"}',
        $prefix . 'SeparatorMediumCSS' => '{' . $separator . ',"width":"60%"}',
        $prefix . 'SeparatorSmallCSS' => '{' . $separator . ',"width":"40%"}',
    ];
};

$result = [
    'homePageLogoImageCSS' => '{"max-width":"300px"}',
    'homePageLogoImageContainerCSS' => '{"margin-bottom":"20px"}',
    'homePageTitleVisibility' => '1',
    'homePageTitleCSS' => '{"font-family":"googlefonts:Noto Serif","font-size":"40px","font-weight":"bold","color":"#000000"}',
    'homePageTitleContainerCSS' => '{"margin-bottom":"20px"}',
    'homePageDescriptionVisibility' => '1',
    'homePageDescriptionCSS' => '{"color":"#000000","font-family":"googlefonts:Noto Serif","font-size":"15px"}',
    'homePageDescriptionContainerCSS' => '{"margin-bottom":"20px"}',
    'homePageContainerCSS' => '{"max-width":"800px","width":"100%","padding-top":"30px","padding-bottom":"30px","padding-left":"15px","padding-right":"15px","margin-left":"auto","margin-right":"auto"}',
    'pageBackToHomeButtonCSS' => '{"background-image":"url(addon:bearcms\/focus-theme-addon:assets\/s3\/home-button.svg)","width":"42px","height":"42px","margin-top":"15px","margin-bottom":"15px","margin-left":"auto","margin-right":"auto","background-position":"center center","background-size":"contain"}',
    'pageBackToHomeButtonContainerCSS' => '{"background-color":"rgba(0,0,0,0.8)","max-width":"800px","width":"100%","margin-left":"auto","margin-right":"auto"}',
    'pageContentElementsContainerCSS' => '{"background-color":"rgba(0,0,0,0.8)","max-width":"800px","min-height":"100vh","width":"100%","padding-top":"20px","padding-bottom":"20px","padding-left":"20px","padding-right":"20px","margin-left":"auto","margin-right":"auto","margin-bottom":"30px","border-bottom-left-radius":"10px","border-bottom-right-radius":"10px"}',
    'windowCSS' => '{"background-color":"#000000","background-image":"url(addon:bearcms\/focus-theme-addon:assets\/s3\/1.jpg)","background-position":"top center","background-repeat":"no-repeat","background-attachment":"fixed","background-size":"cover"}',
    'blogPostPageTitleCSS' => '{' . $h1 . '}',
    'blogPostPageDateContainerCSS' => '{"padding-top":"10px"}',
    'blogPostPageDateCSS' => '{' . $date . '}',
    'blogPostPageContentCSS' => '{"padding-top":"15px"}',
    'newForumPostPageTitleCSS' => '{' . $h1 . '}',
    'newForumPostPageContentCSS' => '{"padding-top":"15px"}',
    'newForumPostPageTitleLabelCSS' => '{' . $text . '}',
    'newForumPostPageTitleInputCSS' => '{' . $input . '}',
    'newForumPostPageTextLabelCSS' => '{' . $text . ',"margin-top":"10px"}',
    'newForumPostPageTextInputCSS' => '{' . $input . ',"height":"200px"}',
    'newForumPostPageSendButtonCSS' => '{' . $button . ',"margin-top":"10px"}',
    'forumPostPageTitleCSS' => '{' . $h1 . '}',
    'forumPostPageContentCSS' => '{"padding-top":"15px"}',
    'forumPostPageReplyCSS' => '{"margin-bottom":"10px"}',
    'forumPostPageReplyAuthorNameCSS' => '{' . $text . '}',
    'forumPostPageReplyAuthorImageCSS' => '{' . $userImage . '}',
    'forumPostPageReplyDateCSS' => '{' . $date . '}',
    'forumPostPageReplyTextCSS' => '{' . $text . '}',
    'forumPostPageReplyTextLinksCSS' => '{' . $link . '}',
    'forumPostPageTextInputCSS' => '{' . $input . ',"height":"200px"}',
    'forumPostPageSendButtonCSS' => '{' . $button . ',"margin-top":"10px"}',
];
$result = array_merge($result, $getElementsStyles('homePageContentElements'));
$result = array_merge($result, $getElementsStyles('pageContentElements'));
return $result;
