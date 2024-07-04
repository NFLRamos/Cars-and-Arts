<?php

/**
 * Template Name: Brands
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package carsandarts
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header(); ?>

<?php $container = get_theme_mod('carsandarts_container_type'); ?>



<?php include __DIR__ . "/../header_sub.php";
?>

<div class="blur_cover_brand"></div>
<div class="cover_brand"></div>
<div class="d-none d-lg-flex row row-cols-5 ">
    <div class="format-col-brands col"></div>
    <div class="format-col-brands col"></div>
    <div class="format-col-brands col"></div>
    <div class="format-col-brands col"></div>
    <div class="format-col-brands col"></div>

</div>


<div class="container format-logos-brands">
    <div class="row row-cols-4 pe-3 ps-3 row-cols-lg-5 pe-xxl-0 ps-xxl-0 mb-5 text-center">
        <?php while (have_rows('brands', 'options')) : the_row();
            $imagem = get_sub_field('brand_logo'); ?>
            <div class="col mb-4">
                <img class="formata-logos" src="<?php echo $imagem['url'] ?>">
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php
get_footer();
