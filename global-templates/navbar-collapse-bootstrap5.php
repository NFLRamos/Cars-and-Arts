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

<nav id="main-nav" class="navbar navbar-expand-lg 
<?php if (is_home() || is_front_page()) {
	echo 'navbar-dark navbar_home';
} else {
	if (is_page(85) || is_page(184) || is_page(178) || is_404() || is_page(675) || is_page(787) || is_page(791)) {
		echo 'navbar-dark navbar_bg_dark';
	} else {
		echo 'navbar-light navbar_bg_white';
	} ?>">
<?php } ?>
<h2 id="main-nav-label" class="screen-reader-text">
	<?php esc_html_e('', 'carsandarts'); ?>
</h2>


<div class="<?php echo esc_attr($container); ?>">

	<!-- Your site title as branding in the menu -->
	<?php if (!has_custom_logo()) { ?>

		<?php if (is_front_page() && is_home()) : ?>

			<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo get_bloginfo('url'); ?>" itemprop="url"></a></h1>

		<?php else : ?>

			<a class="navbar-brand" rel="home" href="<?php echo get_bloginfo('url'); ?>" itemprop="url"></a>

		<?php endif; ?>

		<?php
	} else {

		if (is_page(85) || is_page(184) || is_page(178) || is_front_page() || is_home() || is_page(675) || is_404() || is_page(787) || is_page(791)) {
			$link_imagem = get_template_directory_uri() . "/assets/logo_white.svg"; ?>
			<a href="<?php echo get_bloginfo('url');  ?>" class="navbar-brand custom-logo-link">
				<img width="100" height="17" src="<?php echo $link_imagem; ?>" alt="cars&arts">
			</a>
	<?php } else {
			the_custom_logo();
		}
	}
	?>
	<!-- end custom logo -->

	<button class="navbar-toggler navbar-expand-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-label="<?php esc_attr_e('Toggle navigation', 'carsandarts'); ?>">
		<span class="navbar-toggler-icon"></span>
	</button>


	<div class="d-lg-none off-canvas-linda offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header">
			<a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_template_directory_uri() ?>/assets/logo_white.svg" id="offcanvasRightLabel"></a>
			<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<div class="lang_select">
			<?php
			wp_nav_menu(
				array(
					//'theme_location'  => 'primary',
					'menu'         	  => '81',

					'depth'           => 2,
					'walker'          => new carsandarts_WP_Bootstrap_Navwalker(),
				)
			);
			?>
			</div>
			<?php
			$lang = get_bloginfo("language");
			if($lang == 'fr-FR') {
				wp_nav_menu(
				array(
					//'theme_location'  => 'primary',
					'menu'         	  => '23',

					'depth'           => 2,
					'walker'          => new carsandarts_WP_Bootstrap_Navwalker(),
				)
			);
			}
			if($lang == 'en-GB'){
				wp_nav_menu(
					array(
						//'theme_location'  => 'primary',
						'menu'         	  => '77',
	
						'depth'           => 2,
						'walker'          => new carsandarts_WP_Bootstrap_Navwalker(),
					)
				);
			}

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