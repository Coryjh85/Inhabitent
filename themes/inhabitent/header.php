<?php
/**
 * The header for our theme.
 *
 * @package inhabitent_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text">
					 
					</h1>
				<p class="site-description"> <?php bloginfo( 'description' ); ?>
			</p>
				</div> 					
								
			 <nav id="site-navigation" class="main-navigation" role="navigation">
				 <section class="nav-width">
				   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					   <img class="tent" src="<?php echo get_template_directory_uri(). "./assets/images/logos/inhabitent-logo-tent.svg" ?>"  alt="Home Button" ?>
				   </a>
						  <div class="nav-with-mag">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?>
				  	</button>
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); get_search_form($echo = true )?>
						</div>  				      
          </section>
			  </nav>	 
		</header>