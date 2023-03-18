<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mega_Store
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="wrapper site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mega-store' ); ?></a>

	<header id="masthead" class="site-header header-transparent nav-down">
		<div class="header-bottom">
        	<div class="container">
	            <div class="row">
            		<div class="col-md-3 col-sm-3 site-logo">
	                    <div class="site-branding">
							<?php
								if ( function_exists( 'the_custom_logo' ) && function_exists( 'has_custom_logo' ) && has_custom_logo()) :
									
									if ( is_front_page() ) : ?>
										<h1 class="site-title"><?php the_custom_logo();?></h1>
									<?php else : ?>
										<p class="site-title"><?php the_custom_logo();?></p>
									<?php
									endif;
								else :
									if ( is_front_page() ) : ?>
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php else : ?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php
									endif;
									$description = get_bloginfo( 'description', 'display' );
									if ( $description || is_customize_preview() ) : ?>
										<p class="site-description"><?php echo $description; ?></p>
									<?php
									endif; 
								endif;
							?>	
						</div><!-- .site-branding -->
	                </div>
	                <div class="col-md-9 col-sm-9 menu-bar">
	                    <nav id="site-navigation" class="main-navigation navbar navbar-default ms-menu">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#TF-Navbar">
									<span class="menu-label"><?php esc_html_e('Menu', 'mega-store'); ?></span> <i class="fa fa-bars"></i>                     
								</button>				
							</div>			
							<?php 
								$args = array(
												'theme_location'    => 'primary',
												'depth'             =>  0,
												'container'         => 'div',
												'container_class'   => 'collapse navbar-collapse',
												'container_id'      => 'TF-Navbar',
												'menu_class'        => 'nav navbar-nav',
												'menu_id'           => 'primary-menu',
												'fallback_cb'       => 'mega_store_fallback_page_menu',
												'walker'            => new mega_store_nav_walker()
									  );
								wp_nav_menu($args);
							?>
						</nav><!-- #site-navigation -->
	                </div>
	            </div>
            </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
