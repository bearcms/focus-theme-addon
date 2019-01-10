<?php

/*
 * Focus Theme addon for Bear CMS
 * https://github.com/bearcms/focus-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */


$h1 = '"color":"#000000","font-family":"googlefonts:Vollkorn SC","font-size":"38px","line-height":"140%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$h2 = '"color":"#000000","font-family":"googlefonts:Vollkorn SC","font-size":"32px","line-height":"140%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$h3 = '"color":"#000000","font-family":"googlefonts:Vollkorn SC","font-size":"24px","line-height":"140%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$text = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"180%"';
$input = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"180%","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top":"","border-bottom":"","border-left":"","border-right":"","border-top:hover":"","border-bottom:hover":"","border-left:hover":"","border-right:hover":"","border-top:active":"","border-bottom:active":"","border-left:active":"","border-right:active":"","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","border-top":"1px solid #000000","border-bottom":"1px solid #000000","border-left":"1px solid #000000","border-right":"1px solid #000000"';
$link = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"180%","text-decoration":"underline"';
$button = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color:hover":"#000000","background-color:active":"#000000","color:hover":"#ffffff","color:active":"#ffffff","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","margin-top":"10px","border-top":"1px solid #000000","border-bottom":"1px solid #000000","border-left":"1px solid #000000","border-right":"1px solid #000000"';
$date = '"color":"#000000","font-family":"Arial","font-size":"12px","line-height":"180%"';
$image = '"border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$userImage = '"width":"50px","height":"50px","margin-right":"8px",' . $image;

$getElementsStyles = function($prefix) use ($text, $h1, $h2, $h3, $input, $link, $button, $date, $userImage, $image) {
    $center = $prefix === 'homePageContentElements';
    return [
        $prefix . 'HeadingLargeCSS' => '{' . $h1 . ($center ? ',"text-align":"center"' : '') . '}',
        $prefix . 'HeadingMediumCSS' => '{' . $h2 . ($center ? ',"text-align":"center"' : '') . '}',
        $prefix . 'HeadingSmallCSS' => '{' . $h3 . ($center ? ',"text-align":"center"' : '') . '}',
        $prefix . 'TextCSS' => '{' . $text . '}',
        $prefix . 'TextLinkCSS' => '{' . $link . '}',
        $prefix . 'LinkCSS' => '{' . $link . '}',
        $prefix . 'NavigationItemLinkContainerCSS' => ($center ? '{"text-align":"center"}' : '{}'),
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
    ];
};

$result = [
    'homePageLogoImageCSS' => '{"max-width":"300px"}',
    'homePageLogoImageContainerCSS' => '{"margin-bottom":"20px","text-align":"center"}',
    'homePageTitleVisibility' => '1',
    'homePageTitleCSS' => '{"font-family":"googlefonts:Vollkorn SC","font-size":"50px","font-weight":"bold","color":"#000"}',
    'homePageTitleContainerCSS' => '{"margin-bottom":"20px","text-align":"center"}',
    'homePageDescriptionVisibility' => '1',
    'homePageDescriptionCSS' => '{"color":"#000","font-family":"googlefonts:Vollkorn SC","font-size":"20px"}',
    'homePageDescriptionContainerCSS' => '{"margin-bottom":"20px","text-align":"center"}',
    'homePageContainerCSS' => '{"max-width":"800px","width":"100%","padding-top":"30px","padding-bottom":"30px","padding-left":"15px","padding-right":"15px","margin-left":"auto","margin-right":"auto"}',
    'pageBackToHomeButtonCSS' => '{"background-image":"url(addon:bearcms\/focus-theme-addon:assets\/s2\/home-button.svg)","width":"42px","height":"42px","margin-top":"15px","margin-bottom":"15px","margin-left":"auto","margin-right":"auto","background-position":"center center","background-size":"contain","background-repeat":"no-repeat","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","background-color:hover":"#111111","background-color:active":"#000000"}',
    'pageContentElementsContainerCSS' => '{"background-color":"#f5f5f5","max-width":"800px","width":"100%","padding-top":"20px","padding-bottom":"20px","padding-left":"20px","padding-right":"20px","margin-left":"auto","margin-right":"auto","margin-top":"30px","margin-bottom":"30px","border-top-left-radius":"10px","border-top-right-radius":"10px","border-bottom-left-radius":"10px","border-bottom-right-radius":"10px","box-shadow":"0 0 5px 0 rgba(0,0,0,0.5)"}',
    'windowCSS' => '{"background-color":"#000000","background-image":"url(addon:bearcms\/focus-theme-addon:assets\/s2\/1.jpg)","background-position":"top center","background-repeat":"no-repeat","background-attachment":"fixed","background-size":"cover"}',
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
