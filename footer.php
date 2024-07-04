<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package carsandarts
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('carsandarts_container_type');
include('theme-parts/modals.php');
include('theme-parts/modal_bookVisit.php');
?>

<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); 
?>

<div class="wrapper tema-footer text-white pb-3" id="wrapper-footer">

	<div class="<?php echo esc_attr($container); ?> mt-5 mb-5 footer-cols">

		<div class="row ">
			<div class="col-12 col-sm-4 col-md">
				<?php dynamic_sidebar('footer1'); ?>
			</div>
			<div class="col-12 col-sm-4 col-md">
				<?php dynamic_sidebar('footer2'); ?>
			</div>
			<div class="col-12 col-sm-4 col-md">
				<?php dynamic_sidebar('footer3'); ?>
			</div>
			<div class="col-12 col-sm-4 col-md">
				<?php dynamic_sidebar('footer4'); ?>
			</div>
			<div class="col-12 col-sm-4 col-md">
				<?php dynamic_sidebar('footer5'); ?>
			</div>



		</div><!-- row end -->
	</div><!-- container end -->
	<div class="w-100" style="height:1px; background-color: #ffffff26"></div>
	<div class="container" >
		<div class="row">
		<div class="d-sm-flex mt-3" style="color:#ffffff4d; padding-left:unset;">
				<div class="ps-3 ps-sm-0 mt-3 mb-3 mb-lg-0 text-left col-12 col-sm-6">
					<?php dynamic_sidebar('footer6'); ?>
				</div>
				<div class="ps-3 ps-sm-0 last-row mt-3 mb-3 mb-lg-0 text-lg-end col-12 col-sm-6">
					<?php dynamic_sidebar('footer7'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
<script>
	$(document).scroll(function () {
  
	var y = $(document).scrollTop(),
	headerw = $("#subNavFixedW");
	headerd = $("#subNavFixedD");
		if (y > 250) {
			headerw.addClass('position-fixed bg-escuro w-100 shadow subNavFixedW');
			headerd.addClass('position-fixed bg-claro w-100 shadow subNavFixedD');

		} else {
			headerw.removeClass('position-fixed bg-escuro w-100 shadow subNavFixedW');
			headerd.removeClass('position-fixed bg-claro w-100 shadow subNavFixedD');
		}
	});

	jQuery(document).ready(function(jQuery){
    jQuery("#menu-item-89").click(function(e){
        jQuery("#BookVisit").modal('show');
e.preventDefault();
    })});

	jQuery(document).ready(function(jQuery){
    jQuery("#menu-item-801").click(function(e){
        jQuery("#BookVisit").modal('show');
e.preventDefault();
    })});

	
</script>
<?php wp_footer(); ?>

</body>

</html>