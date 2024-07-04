<?php

/**
 * Template Name: Artists
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package carsandarts
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header(); ?>
<div style="background-color:black; color:white; padding-bottom:10rem">
    <?php $container = get_theme_mod('carsandarts_container_type');


    include __DIR__ . "/../header_sub.php";
    ?>
    <div class="logo_back_artists"></div>
    <div class="container format-artist">
        <div class="row">
            <?php

            while (have_rows('artists')) : the_row(); $i = get_row_index();

                $imagem = get_sub_field('image');
                $name = get_sub_field('name');
                $profession = get_sub_field('profession');
                $location = get_sub_field('location');
                $descripton = get_sub_field('description');
            ?>
                <div class="col-12 d-flex col-lg-3 d-lg-block mt-5" style="text-align: -webkit-center;">
                    <a href="#artists-<?php echo $i ?>" data-bs-toggle="modal" data-bs-target="#artists-<?php echo $i ?>">
                        <img class="imagem-artist text-center" src="<?php echo $imagem['url'] ?>"></a>
                    <div class="blur-artist">
                        <h2><?php echo $name; ?></h2>
                        <p><?php echo $profession; ?></p>
                        <p><?php echo $location; ?></p>
                    </div>
                </div>

                <div class="modal fade modal-artists" id="artists-<?php echo $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-xl  modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="container-fluid">
                                    <div class="row text-black">
                                        <div class="col-12 col-lg-5 ali">
                                            <img src="<?php echo $imagem['url'] ?>">
                                        </div>
                                        <div class="col-12 col-lg-7 order-first order-lg-last padding">
                                            <h2><?php echo $name; ?></h2>
                                            <p><?php echo $descripton; ?></p>
                                        </div>
                                        <div class="elipse-modal"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  endwhile; ?>
        </div>
    </div>
</div>
<?php
get_footer();
