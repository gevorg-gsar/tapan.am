<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title> <?php wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.0.2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>

    <?php wp_head(); ?>
</head>
<body>
<div class="page_wrapper">
    <div class="header_wrapper">

        <div class="header_lang">
            <img src="<?php bloginfo('template_directory'); ?>/images/flag_am.png" width="24" />
            <img src="<?php bloginfo('template_directory'); ?>/images/flag_ru.png" width="24" />
            <img src="<?php bloginfo('template_directory'); ?>/images/flag_eng.png" />
        </div>

        <div class="header_logo">
            <img src="<?php bloginfo('template_directory'); ?>/images/logo_eng.png" />
        </div>

        <div class="header_social_icons">
            <img src="<?php bloginfo('template_directory'); ?>/images/facebook_icon.png" />
            <img src="<?php bloginfo('template_directory'); ?>/images/twitter_icon.png" />
        </div>

        <div class="header_join_us">
            <img src="<?php bloginfo('template_directory'); ?>/images/join_us_eng.png" />
        </div>

    </div>