<!--cabeçalho-->
<div style="height:63vh; background-color:black">
    <div class="d-none d-lg-block logo_back"></div>
    <div class="elipse"></div>
    <div class="pe-4 ps-4 pe-lg-0 ps-lg-0 text-white text-center cabecalho">
        <h2><?php echo get_option('options_initial-phrase') ?></h2>
    </div>

</div>


<!--scroll auto produtos desktop-->
<div class="d-none d-xxl-block container-fluid" style="background-color:#000000">
    <div class="row">
        <div id="fixedNavHolder" class="col-lg-3 d-none d-lg-block">
            <div class="w-100 d-flex align-items-center" style="height:100vh;" id="fixedNav">
                <div id="navProducts" class="list-group w-100">
                    <?php
                    $terms = get_terms([
                        'taxonomy' => 'producttype',
                        'hide_empty' => false,
                    ]);
                    $i = 0;
                    foreach ($terms as $t) {
                    ?>

                        <?php
                        //$img = get_field('imagem', 'product_cat_'.$t->term_id);
                        /* <a href="<?php echo get_term_link($t); ?>"><img class="aniview" data-av-animation="animate__backInUp" title="<?php echo $img["title"]; ?>" alt="<?php echo $img["alt"]; ?>" src="<?php echo $img["url"]; ?>"></a> */

                        ?>

                        <a class="list-group-item list-group-item-action <?php if ($i == 0) {
                                                                                echo 'active';
                                                                            } ?>" href="#<?php echo $t->slug; ?>"><?php echo $t->name; ?></a>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-9 scrollspy" tabindex="0">

            <?php

            $terms = get_terms([
                'taxonomy' => 'producttype',
                'hide_empty' => false,
            ]);

            foreach ($terms as $t) {

                $test = get_field('phrase', 'producttype_' . $t->term_id);
                $gallery = get_field('galleryTax', 'producttype_' . $t->term_id);
                $button_text = get_field('button', 'producttype_' . $t->term_id);
                $link_url = get_field('link_url', 'producttype_' . $t->term_id);

                $car = 'cars';
                $arts = 'arts';
                $wines = 'wines';
                $spirits = 'spirits';

            ?>
                <div class="w-100 d-flex" style="height:90vh" id="<?php echo $t->slug; ?>">
                
                    <div class="text-white formata-texto-produtos">
                        <h1><?php echo $t->name; ?></h1>
                        <p><?php echo $test ?></p>
                        <a href="#bookVisit" data-bs-toggle="modal" data-bs-target="#BookVisit" class="btn mt-3 mb-3 text-uppercase"><?php echo $button_text ?></a> </br>
                        <a href="<?php echo $link_url ?>" class="link-produtos mt-4"><?php _e('See all '); ?> <i class="las la-arrow-right"></i></a>
                    </div>
                    <?php
                    //$images = get_field('photos');
                    $urls = [];

                    foreach ($gallery as $image_id) :

                        $urls[] = esc_url($image_id['sizes']['large']);
                    endforeach;
                    ?>
                    <?php if ($arts == $t->slug) { ?>
                        <div class="w-100 galeria-1">
                            <div class="row">

                                <!--row arts-->
                                <div class="col-lg-4">
                                    <img src="<?php echo $urls["0"]; ?>" alt="" class="w-100 shadow-1-strong  img-vertical-art-1" style=" margin-bottom:20px;" />
                                    <img src="<?php echo $urls["1"]; ?>" alt="" class="w-100 shadow-1-strong  img-vertical-art-2" />
                                </div>
                                <div class="col-lg-6 ">
                                    <img src="<?php echo $urls["2"]; ?>" alt="" class="w-100 mb-2 mb-md-4 shadow-1-strong  img-vertical-art-3" />
                                </div>

                            </div>
                        </div>
                    <?php }

                    ?>

                    <?php if ($car == $t->slug) { ?>
                        <div class="w-100 galeria-1">
                            <div class="row">


                                <!--row cars-->
                                <div class="col-lg-10 ">
                                    <img src="<?php echo $urls["0"]; ?>" alt="" class="w-100 mb-2 mb-md-4 shadow-1-strong img-horizontal-car" />

                                </div>
                                <div class="col-lg-5">
                                    <img src="<?php echo $urls["1"]; ?>" alt="" class="w-100 shadow-1-strong img-horizontal-sm-car" />
                                </div>
                                <div class="col-lg-5">
                                    <img src="<?php echo $urls["2"]; ?>" alt="" class="w-100 shadow-1-strong  img-horizontal-sm-car" />
                                </div>

                            </div>
                        </div>
                    <?php }

                    ?>

                    <?php if ($spirits == $t->slug) { ?>
                        <div class="w-100 galeria-1">
                            <div class="row">

                                <!--row spirits-->
                                <div class="col-lg-10 ">
                                    <img src="<?php echo $urls["0"]; ?>" alt="" class="w-100 mb-2 mb-md-4 shadow-1-strong img-horizontal-car" />
                                </div>
                                <div class="col-lg-4">
                                    <img src="<?php echo $urls["1"]; ?>" alt="" class="w-100 shadow-1-strong img-horizontal-sm-car" />
                                </div>
                                <div class="col-lg-6">
                                    <img src="<?php echo $urls["2"]; ?>" alt="" class="w-100 shadow-1-strong  img-horizontal-sm-car" />
                                </div>

                            </div>
                        </div>
                    <?php }

                    ?>

                    <?php if ($wines == $t->slug) { ?>
                        <div class="w-100 galeria-1">
                            <div class="row">

                                <!--row wines-->
                                <div class="col-lg-6 ">
                                    <img src="<?php echo $urls["0"]; ?>" alt="" class="w-100 mb-2 mb-md-4 shadow-1-strong  img-vertical-art-3" />
                                </div>
                                <div class="col-lg-4">
                                    <img src="<?php echo $urls["1"]; ?>" alt="" class="w-100 shadow-1-strong  img-vertical-art-1" style=" margin-bottom:20px;" />
                                    <img src="<?php echo $urls["2"]; ?>" alt="" class="w-100 shadow-1-strong  img-vertical-art-2" />
                                </div>



                            </div>
                        </div>
                    <?php }

                    ?>


                </div>
            <?php

            }
            wp_reset_postdata();
            ?>

        </div>
    </div>
</div>


<!--produtos mobile-->

<div class="d-xxl-none container-fluid" style="background-color:#000000; padding-bottom:10%;">
    <?php

    $terms = get_terms([
        'taxonomy' => 'producttype',
        'hide_empty' => false,
    ]);

    foreach ($terms as $t) {

        $test = get_field('phrase', 'producttype_' . $t->term_id);
        $gallery = get_field('galleryTax', 'producttype_' . $t->term_id);
        $button_text = get_field('button', 'producttype_' . $t->term_id);
        $link_url = get_field('link_url', 'producttype_' . $t->term_id);


    ?>
        <div class="row formata-texto-produtos-mobile mb-3">
            <div class="col-12">
                <h1><?php echo $t->slug; ?></h1>
                <p><?php echo $test ?></p>
                <a href="#bookVisit" data-bs-toggle="modal" data-bs-target="#BookVisit" class="btn mt-3 mb-3 text-uppercase"><?php echo $button_text ?></a> </br>
                        <a href="<?php echo $link_url ?>"  class="link-produtos-mobile mt-4"><?php _e('See all '); ?> <i class="las la-arrow-right"></i></a>
                <img src="<?php echo $urls["0"]; ?>" alt="" class="w-100 mt-4 shadow-1-strong " />
            </div>
        </div>

    <?php
        //$images = get_field('photos');
        $urls = [];

        foreach ($gallery as $image_id) :

            $urls[] = esc_url($image_id['sizes']['large']);

        endforeach;
    }
    wp_reset_postdata();
    ?>

</div>




<script>
    var elementPosition = $('#fixedNav').offset();

    $(window).scroll(function() {
        if ($('#section1').visible(true) || $('#section2').visible(true) || $('#section3').visible(true) || $('#section4').visible(true)) {
            $('#fixedNav').css('position', 'static').css('top', 'auto');
            $('#fixedNav').addClass('w-100');
            $('#fixedNavHolder').addClass('d-xl-flex align-items-end');

        } else {
            $('#fixedNav').removeClass('w-100');
            $('#fixedNavHolder').removeClass('d-xl-flex align-items-end');
            if ($(window).scrollTop() > elementPosition.top) {

                $('#fixedNav').css('position', 'fixed').css('top', '0').css('height', '90vh').css('width', '23.5%');

            } else {
                $('#fixedNav').css('position', 'static');
                $('#fixedNav').addClass('w-100');

            }
        }

    });

    $(document).on("ready", function() {

        function scrollToAnchor(aid) {
            const destination = $("a[name='" + aid + "']");
            $('html,body').animate({
                scrollTop: destination.offset().top
            }, 'slow');
        }

        $(document).on('click', '.smooth-link', function() {
            scrollToAnchor('demo');
        });
    });
</script>