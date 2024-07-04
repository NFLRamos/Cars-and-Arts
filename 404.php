<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package carsandarts
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'carsandarts_container_type' );
?>

<div class="wrapper tema-404" id="error-404-wrapper">
<div class="d-none d-xxl-flex elipse-404"></div>
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		
	<div class="col-12" style="color:white; ">
		<h1>404</h1>
		<p><?php _e('Reload this page or try again later. The adress may no longer be available') ?></p>
	</div>
	<div style="display:flex; justify-content:center;">
		<a href="<?php echo get_bloginfo('url') ?>" class="btn"><?php _e('Go to Home') ?></a>	
	</div>
	
	

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php
get_footer();
