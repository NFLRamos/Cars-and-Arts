<div class="elipse2"></div>
<div class="container-fluid " id="section2">

    <div class="row" style="margin-top: 10%; margin-bottom:5rem;">

        <div class="d-none d-lg-flex col-12 col-lg-4">
            <div class="linha"></div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="text-alinhamentos">
                <h1><?php echo get_field('title-brands', 'options') ?></h1>
                <p><?php echo get_field('text-brands', 'options') ?></p>
            </div>
        </div>

    </div>
    <div class="container-xxl" style="margin-bottom:5rem;">
        <div class="row row-cols-4 pe-3 ps-3 row-cols-lg-5 pe-lg-0 ps-lg-0 text-center">
            <?php while (have_rows('brands', 'options')) : the_row();
                $imagem = get_sub_field('brand_logo'); ?>
                <div class="col mb-4">
                    <img class="formata-logos" src="<?php echo $imagem['url'] ?>">
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>