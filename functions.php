<?php
/**
 * carsandarts functions and definitions
 *
 * @package carsandarts
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// carsandarts's includes directory.
$carsandarts_inc_dir = 'inc';

// Array of files to include.
$carsandarts_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/types.php',                  			// CTP
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/carsandarts/carsandarts/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/acf.php',                      // Load deprecated functions.

);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$carsandarts_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$carsandarts_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $carsandarts_includes as $file ) {
	require_once get_theme_file_path( $carsandarts_inc_dir . $file );
}
$updateToken="LRwCAHnquJAFTbmjtWVcIplDKq5s6iCcOoyfirTfj0tVHL9Is3";
	require 'inc/plugin-update-checker/plugin-update-checker.php';
	$myUpdateChecker2 = Puc_v4_Factory::buildUpdateChecker(
		'http://plugins.contagio.pt/cars-and-arts/' . $updateToken . '/details.json',
		__FILE__
	);