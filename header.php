<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header">
	<div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
	<ul id="nav-mobile" class="side-nav fixed" style="width: 240px;">
		<li class="logo">
			<a id="logo-container" href="<?php echo site_url( '/' ); ?>" class="brand-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo" class="logo-image" />
			</a>
		</li>
		<?php wp_nav_menu( array( 'theme_location' => 'left-menu', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
	<?php get_sidebar( 'left-sidebar' ); ?>
</header>
<main id="main">
	<div id="content" class="site-content container">
	
