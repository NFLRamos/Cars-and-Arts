<div class="elipse1"></div>
<div class="container-fluid" id="section1" style="background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(218,218,218,1) 100%); z-index:-9">

    <div class="row" style="margin-top: 10%; margin-bottom: 5%;">

        <div class="d-none d-lg-flex col-12 col-lg-4">
            <div class="linha"></div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="text-alinhamentos">
                <h1><?php echo get_field('title-why', 'options') ?></h1>
                <p><?php echo get_field('text-why', 'options') ?></p>
            </div>
        </div>

    </div>



    <div class="row d-none d-lg-flex" style="z-index:-1;">
        <?php while (have_rows('columns_content', 'options')) : the_row();
            $imagem = get_sub_field('image');
            $title = get_sub_field('title');
            $text = get_sub_field('text');
        ?>
            <div class="col-3 format-col">
                <img src="<?php echo $imagem['url'] ?>">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $text; ?></p>
            </div>
        <?php endwhile; ?>
    </div>


    <div class="w-100 row d-lg-none slick-format" style="z-index:-1;">
    <div class="slider_cols">
    
        <?php while (have_rows('columns_content', 'options')) : the_row();
            $imagem = get_sub_field('image');
            $title = get_sub_field('title');
            $text = get_sub_field('text');
        ?>
            <div class="format-col">
                <img src="<?php echo $imagem['url'] ?>">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $text; ?></p>
            </div>
        <?php endwhile; ?>
    </div>

    </div>


</div>

<script>
    jQuery(document).ready(function($) {
        $('.slider_cols').slick({
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