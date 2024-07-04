<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package carsandarts
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'carsandarts_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'carsandarts_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600&family=Cormorant+Garamond:wght@300;400;500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php carsandarts_body_attributes(); ?> data-bs-spy="scroll" data-bs-target="#navProducts" data-bs-offset="100">
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page" >

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar" <?php if(is_home()) { echo 'style="position:absolute; top:0; width:100%;z-index:99; background-color:transparent; color:white;"' ;  }?> >

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'carsandarts' ); ?></a>

		<?php

/**
 * Header Navbar (bootstrap5)
 *
 * @package carsandarts
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('carsandarts_container_type');
?>

<nav id="main-nav" class="pb-5 navbar navbar-expand-md navbar-dark navbar_bg_dark">

<h2 id="main-nav-label" class="screen-reader-text">
	<?php esc_html_e('', 'carsandarts'); ?>
</h2>


<div class="<?php echo esc_attr($container); ?>">

	<!-- Your site title as branding in the menu -->
	<?php if (!has_custom_logo()) { ?>

		<?php if (is_front_page() && is_home()) : ?>

			<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

		<?php else : ?>

			<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

		<?php endif; ?>

		<?php
	} 
		 else { 
			$link_imagem = get_template_directory_uri() . "/assets/logo_white.svg";?>
			<a href="<?php echo esc_url(home_url('/'));  ?>" class="navbar-brand custom-logo-link">
				<img width="100" height="17" src="<?php echo $link_imagem; ?>" alt="cars&arts">
			</a>
		<?php }
	
	?>
	<!-- end custom logo -->

	<button class="navbar-toggler navbar-expand-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-label="<?php esc_attr_e('Toggle navigation', 'carsandarts'); ?>">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="d-lg-none off-canvas-linda offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header">
			<a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_template_directory_uri() ?>../assets/logo_white.svg" id="offcanvasRightLabel"></a>
			<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<?php
			wp_nav_menu(
				array(
					//'theme_location'  => 'primary',
					'menu'         	  => '23',

					'depth'           => 2,
					'walker'          => new carsandarts_WP_Bootstrap_Navwalker(),
				)
			);
			?>
			<div style="height:1px; width:100%; background-color:#e9ecef38; position:relative;"></div>
			<div class="d-flex icons_socials">
				<?php dynamic_sidebar('canvas_socials'); ?>
			</div>
			<div style="color:#e9ecef38" class="ps-5">
				<?php dynamic_sidebar('footer6'); ?>
			</div>
			
			<div class="row last-links w-100">
				<?php dynamic_sidebar('footer7'); ?>
			</div>
		
			
			
		</div>
	</div>

	<!-- The WordPress Menu goes here -->
	<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ms-auto text-uppercase',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new carsandarts_WP_Bootstrap_Navwalker(),
			)
		);
	?>

</div><!-- .container(-fluid) -->

</nav><!-- .site-navigation -->

	</header><!-- #wrapper-navbar end -->
