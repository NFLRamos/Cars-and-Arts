<?php

/**
 * Template Name: Gallery
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package carsandarts
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header(); ?>
<div style="background: rgb(0,0,0);
background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.8) 100%); color:white;">

  <?php $container = get_theme_mod('carsandarts_container_type');


  include __DIR__ . "/../header_sub.php";
  ?>
<div class="logo_back_gallery"></div>


<?php

$img1 = get_field('img-1');
$img2 = get_field('img-2');
$img3 = get_field('img-3');
$img4 = get_field('img-4');
$img5 = get_field('img-5');
$img6 = get_field('img-6');
$img7 = get_field('img-7');
$img8 = get_field('img-8');
?>


<div class="container-xxl">
<h1 class="titulo-gal pe-3 ps-3 pe-lg-0 ps-lg-0 "><?php the_title() ?></h1>
</div>
  <div class="container galeria">
    <div class="row ">

      <div class="col-6 text-end">
        <img class="img1" src="<?php echo $img1['url']; ?>" alt="">
        <img class="img2" src="<?php echo $img2['url']; ?>" alt="">
        <img class="img4" src="<?php echo $img4['url']; ?>" alt="">
      </div>
      <div class="col-6 text-start">
        <img class="img3" src="<?php echo $img3['url']; ?>" alt="">
        <div class="row" style="margin-top:30px;">
          <div class="col-12 col-lg-6">
            <img class="img-5" src="<?php echo $img5['url']; ?>" alt="">
          </div>
          <div class="col-12 col-lg-6 text-start">
            <img class="img-6" src="<?php echo $img6['url']; ?>" alt="">
          </div>
        </div>
        <img class="img7" src="<?php echo $img7['url']; ?>" alt="">
      </div>
      <div class="col-12 text-center">
        <img class="img8-fluid" src="<?php echo $img8['url']; ?>" alt="">
      </div>
    </div>
  </div>
  
  <div class="container-xxl">
    
    <div class="d-none d-xxl-flex row row-cols-5 grid">
      <div class="col" style="border-left:1px solid #ffffff21"></div>
      <div class="col" style="border-left:1px solid #ffffff40;"></div>
      <div class="col" style="border-left:1px solid #ffffff40;"></div>
      <div class="col" style="border-left:1px solid #ffffff40"></div>
      <div class="col" style="border-left:1px solid #ffffff40; border-right:1px solid #ffffff21;"></div>
    </div>
  </div>


  <?php

  get_footer();
