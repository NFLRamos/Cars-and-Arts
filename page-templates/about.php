<?php

/**
 * Template Name: about us
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package carsandarts
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header(); ?>
<style>
    #more {
        display: none;
    }
    #more2 {
        display: none;
    }
</style>
<?php
$container = get_theme_mod('carsandarts_container_type');


include __DIR__ . "/../header_sub.php";
?>



<?php
get_footer();
?>


<script>
    function readMore() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("link");
        

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "block";
        }
    }
    function readMore2() {
        var dots2 = document.getElementById("dots2");
        var moreText2 = document.getElementById("more2");
        var btnText2 = document.getElementById("link2");
        

        if (dots2.style.display === "none") {
            dots2.style.display = "inline";
            btnText2.innerHTML = "Read more";
            moreText2.style.display = "none";
        } else {
            dots2.style.display = "none";
            btnText2.innerHTML = "Read less";
            moreText2.style.display = "block";
        }
    }
</script>