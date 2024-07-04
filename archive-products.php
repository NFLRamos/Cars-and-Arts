<?php include __DIR__ . "/header_archive.php"; ?>


<div class="tema-archive" style="background: rgb(0,0,0); background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.8) 90%);">
    <div class="container-xxl pb-5">


        <!-- ROW EM DESKTOP -->
        <div class="w-100 row d-none d-lg-flex">
            <?php
            $terms = get_terms([
                'taxonomy' => 'producttype',
                'hide_empty' => false,
            ]);
            foreach ($terms as $t) {
                $test = get_field('phrase', 'producttype_' . $t->term_id);
            ?>
                <div class="mt-3 mb-3 col-lg-3 mt-5 text-white formata-texto-archive">
                    <h1><?php echo $t->name ?></h1>
                    <p><?php echo $test ?></p>
                    <a href="<?php echo get_bloginfo('url') ?>/producttype/<?php echo $t->slug; ?>" <?php echo $t->name; ?> class="btn mt-3 mb-3 text-uppercase"><?php _e('See all ');
                                                                                                                                                                    echo $t->name ?></a>
                </div>
                <?php

                $fill = new WP_Query(
                    array(
                        'post_type' => 'products',
                        'posts_per_page' => 3,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'producttype',
                                'field' => 'term_id',
                                'terms' =>  $t->term_id
                            )
                        ),
                    )
                );

                while ($fill->have_posts()) : $fill->the_post();
                    $image = wp_get_attachment_url(get_post_thumbnail_id(), 'full');
                ?>
                    <div class="mt-3 mb-3 col-lg-3 mt-5 ">
                        <img src="<?php echo $image; ?>" alt="" class="shadow-1-strong ms-3 me-3" />
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            }
            ?>

        </div>







        <!-- ROW EM MOBILE -->
        <div class="row w-100 d-lg-none">
            <?php
            $terms = get_terms([
                'taxonomy' => 'producttype',
                'hide_empty' => false,
            ]);
            foreach ($terms as $t) {
                $test = get_field('phrase', 'producttype_' . $t->term_id);
            ?>
            
                <div class="col-12 mt-5 text-white formata-texto-archive">
                    <h1><?php echo $t->name ?></h1>
                    <p><?php echo $test ?></p>
                    <a href="<?php echo get_bloginfo('url') ?>/producttype/<?php echo $t->slug; ?>" <?php echo $t->name; ?> class="btn mt-3 mb-3 text-uppercase"><?php _e('See all ');
                                                                                                                                                                    echo $t->name ?></a>
                </div>

                <div class="slider_imgs">
                
                    <?php

                    $fill = new WP_Query(
                        array(
                            'post_type' => 'products',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'producttype',
                                    'field' => 'term_id',
                                    'terms' =>  $t->term_id
                                )
                            ),
                        )
                    );

                    while ($fill->have_posts()) : $fill->the_post();
                        $image = wp_get_attachment_url(get_post_thumbnail_id(), 'full');
                    ?>

                        <div class="col-12 mt-5 ">
                            <img src="<?php echo $image; ?>" alt="" class="shadow-1-strong" />
                        </div>


                <?php endwhile;
                    wp_reset_postdata(); ?>
                    </div>
                <?php }
                ?>
                
        </div>
    </div>
</div>
<?php get_footer(); ?>

<script>
    jQuery(document).ready(function($) {
        $('.slider_imgs').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            //centerMode: true,
            arrows: false,
            dots: true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    //centerMode: true,
                }
            }, {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    //centerMode: true,
                }
            }, ]
        });
    });
</script>