<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscores' ); ?></a>

<?php if ( get_header_image() && is_front_page () ) { ?>

                <header id="masthead" class="site-header"  style="background-image: URL(<?php header_image(); ?>); height: 100vh"role="banner">

                <?php } else { ?>
                <header id="masthead" class="site-header" style="background-image: URL(<?php header_image(); ?>)"role="banner">
                <?php } ?>		<div class="site-branding">
			<?php
			if ( is_front_page()) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				   <img class="header-logo-image" src="http://normanfaucheux.com/wp-content/themes/underscores/persofiles/px.png" style="width:300px;height:300px;"> 
			<?php
			endif;
                                                
                                                if (is_front_page()) {
                                                
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview()  ) : ?>
                                <img class="header-logo-image" src="http://normanfaucheux.com/wp-content/themes/underscores/persofiles/px.png" style="width:300px;height:300px;"> 
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; 
                        
                                                }?>
                                
                                            
                                            
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'underscores' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
