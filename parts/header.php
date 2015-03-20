<!DOCTYPE HTML>
<html>
    <head>
        <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<meta name="keywords" content="#"/>
		<meta name="description" content="#"/>

        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/_ui/img/icon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

		<meta property="og:title" content="Mixby"/>
		<meta property="og:description" content="Artifact Technologies is a pioneer in content-rich beacon programming, building world-class location-based experiences on its Mixby platform."/>
		<meta property="og:url" content="http://mixby.me"/>
		<meta property="og:site_name" content="Mixby"/>
		<meta property="og:type" content="company"/>
		<meta property="og:image" content="http://mixby.me/_ui/img/mixby-share.png"/>

		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@meetmixby">
		<meta name="twitter:title" content="Mixby">
		<meta name="twitter:description" content="Artifact Technologies is a pioneer in content-rich beacon programming, building world-class location-based experiences on its Mixby platform.">
		<meta name="twitter:image:src" content="http://mixby.me/_ui/img/mixby-share.png">
		<meta name="twitter:domain" content="mixby.me">

        <?php
            // Figure out what our server name is
            $host = $_SERVER['HTTP_HOST'];

            // If it's the dev environment...
            if ($host == 'wordpress-boilerplate.dev') {
        ?>
                <!-- Then provide the regular compiled CSS file. -->
                <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_ui/compiled/main-dev.css" type="text/css" media="all">
        <?php
                // And the headers scripts individually
                include 'header-scripts.php';
            } else {
        ?>
                <!-- Otherwise, provide the compiled and minified CSS file. -->
                <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_ui/compiled/main.min.css" type="text/css" media="all">
            
                <!-- And the header scripts compiled and uglified -->
                <script src="<?php echo get_template_directory_uri(); ?>/_ui/compiled/header-scripts.min.js"></script>
        <?php } ?>
    </head>
    <body <?php body_class(); ?>>

		<header>
		<!--
			<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php bloginfo( 'description' ); ?>
			<?php get_search_form(); ?>
		 -->
		 </header>
