<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

//THE HEADER FOR EVERYTHING BUT HOME AND ABOUT

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--<script src="https://use.fontawesome.com/e8d209e47b.js"></script>-->
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1 class="site-title screen-reader-text"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="home-link"></a>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form() ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

