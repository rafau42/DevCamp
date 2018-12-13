<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
    <link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#fff">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/icons/favicon.ico" />
    <meta name="msapplication-config" content="icons/browserconfig.xml">
    <meta name="theme-color" content="#222">
    <meta name="msapplication-navbutton-color" content="#222">
    <meta name="apple-mobile-web-app-status-bar-style" content="#222">
    <meta itemprop="url" content="https://portfolio.freeko.pl/">
    <meta name="description" content="Devcamp">
    <meta name="dcterms.description" lang="eng" content="Devcamp">
    <meta name="keywords" content="Devcamp; ">
    <meta name="dcterms.subject" lang="eng" content="Devcamp">
    <meta name="application-name" content="Devcamp">
    <meta property="og:site_name" content="Devcamp">
    <meta property="og:url" content="https://portfolio.freeko.pl/">
    <meta property="og:title" content="Devcamp">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="container">

		<header class="header">
			<div class="navigation" id="main-navigation-wrap">
				<nav class="navigation__nav" id="main-navigation" role="navigation">

					<?php
						// Display Main Navigation.
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'navigation__list',
							'echo' => true,
							)
						);
					?>

				</nav>
			</div>
		</header>