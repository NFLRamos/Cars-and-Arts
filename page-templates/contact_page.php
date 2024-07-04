<?php
/**
 * Template Name: Contact page
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package carsandarts
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="form-contact-page pt-lg-5" style="background: rgb(0,0,0);
background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.8) 100%);">
<div class="logo_back_contact"></div>
<div class="container-xxl text-white contact-back">

    <?php the_content(); ?> 
</div>



<?php get_footer(); ?>

<script>
//ids: 10 11 12 13

const input10 = document.getElementById('10');
input10.addEventListener('input', event => {
  if (input10.value === '') {
    input10.style.backgroundColor = '#292929';
    input10.style.border = 'unset';
  } else {
    input10.style.backgroundColor = 'transparent';
    input10.style.border = '1px solid white';
  }
});

const input11 = document.getElementById('11');
input11.addEventListener('input', event => {
  if (input11.value === '') {
    input11.style.backgroundColor = '#292929';
    input11.style.border = 'unset';
  } else {
    input11.style.backgroundColor = 'transparent';
    input11.style.border = '1px solid white';
  }
});

const input12 = document.getElementById('12');
input12.addEventListener('input', event => {
  if (input12.value === '') {
    input12.style.backgroundColor = '#292929';
    input12.style.border = 'unset';
  } else {
    input12.style.backgroundColor = 'transparent';
    input12.style.border = '1px solid white';
  }
});

const input13 = document.getElementById('13');
input13.addEventListener('input', event => {
  if (input13.value === '') {
    input13.style.backgroundColor = '#292929';
    input13.style.border = 'unset';
  } else {
    input13.style.backgroundColor = 'transparent';
    input13.style.border = '1px solid white';
  }
});



</script>
