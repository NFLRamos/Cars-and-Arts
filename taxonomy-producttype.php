<?php get_header(); ?>
<div class="pt-xxl-5">
    <?php
    //get current taxonomy term
    //return array with all tax. Info
    $att = get_queried_object();
    $att->slug;
    ?>
    <?php
    //start Inner nav with TAX
    $terms = get_terms([
        'taxonomy' => 'producttype',
        'hide_empty' => false,
    ]);
    ?>
    <div id="subNavFixedD" class="container-fluid ">
        <div class="container-xxl produtos-nav">
            <div class="row">
                <div class="col-12">
                    <nav class="nav d-flex">
                        <?php
                        foreach ($terms as $t) {
                        ?>
                            <li class="col text-center">
                                <a class="nav-link <?php echo ($att->slug == $t->slug ? 'taxactive' : '');  ?>" aria-current="page" href="<?php echo get_term_link($t->term_id); ?>"><?php echo $t->name ?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </nav>

                </div>

            </div>
        </div>
    </div>
    <?php
    //load taxonomy content ACF
    //the_field('', 'producttype_'. $att->term_id);
    ?>
</div>

<div class="container-xxl pt-5 ">
    <div class="row d-none d-lg-flex">
        <div class="col-xl-6 texto-formatacao">
            <h1><?php the_field('innerTitle', 'producttype_' . $att->term_id); ?></h1>
            <div class="w-100">
                <?php the_field('innerContent', 'producttype_' . $att->term_id); ?>
                <p><?php the_field('phrase', 'producttype_' . $att->term_id); ?></p>
            </div>
        </div>
        <div class="col-xxl-6 imagem-formatacao">
            <div class="img-blur"></div>
            <img src="<?php the_field('innerPic', 'producttype_' . $att->term_id); ?>">
        </div>
    </div>

    <div class="row d-lg-none">
        <div class="col-12 texto-formatacao">
            <h1><?php the_field('innerTitle', 'producttype_' . $att->term_id); ?></h1>
        </div>

        <div class="col-12 imagem-formatacao">
            <img src="<?php the_field('innerPic', 'producttype_' . $att->term_id); ?>">
        </div>

        <div class="pe-4 ps-4 col-12 texto-formatacao">
            <div class="w-100">
                <?php the_field('innerContent', 'producttype_' . $att->term_id); ?>
                <p><?php the_field('phrase', 'producttype_' . $att->term_id); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-lg-5" style="background: rgb(0,0,0);
background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.8) 100%);">
    <div class="container-xxl pb-3 pt-5">

        <?php
        //Filter Query by active term 
        $i = 0;
        $loop = new WP_Query(
            array(
                'post_type' => 'products',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'producttype',
                        'field' => 'slug',
                        'terms' => $att->slug,
                    )
                ),
            )
        );

        while ($loop->have_posts()) : $loop->the_post();
            $slug = get_post_field('post_name', get_post());

        ?>
            <div class="row pb-5 pt-5 slider-produtos">
                <div class="col-xxl-4 text-white">
                    <div class="w-100">
                        <h2><?php echo the_title(); ?></h2>
                        <h2><?php the_field('car_model'); ?></h2>
                        <p class="fw-bold">CHT <?php the_field('price'); ?></p>
                        <p class="mb-3"><?php the_field('description'); ?></p>

                        <div class="d-flex d-xxl-block mb-5 mb-xxl-0">
                            <a href="#" class="btn"><?php _e('Book a Visit') ?></a>
                            <a href="#contacto" data-bs-toggle="modal" data-bs-target="#contacto" class="btn btn-white"><?php _e('Request a contact') ?></a>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-8 ">
                    <?php

                    $images = get_field('photos');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($images) : ?>
                        <div id="<?php echo $slug ?>" class="carousel slide carousel-fade" data-bs-ride="carousel" style="height:65vh;">

                            <div class="carousel-indicators">
                                <?php $i = 0;
                                foreach ($images as $image_id) : ?>
                                    <button type="button" data-bs-target="#<?php echo $slug ?>" data-bs-slide-to="<?php echo $i  ?>" <?php if ($i == 0) echo 'class="active"'; ?> aria-current="true" aria-label="Slide <?php echo $i  ?>"></button>
                                <?php $i++;
                                endforeach; ?>
                            </div>

                            <div class="carousel-inner">
                                <?php $i = 0;
                                foreach ($images as $image_id) : ?>
                                    <div class="carousel-item <?php if ($i == 0) {
                                                                    echo 'active';
                                                                } ?> ">
                                        <img style="width:100%; height:65vh; object-fit:cover" src="<?php echo  esc_url($image_id['sizes']['large']); ?>">

                                    </div>
                                <?php $i++;
                                endforeach; ?>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $slug ?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $slug ?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    <?php endif; ?>

                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>




<div class="elipse3"></div>

<div class="container-fluid fundo-img-looking" id="section4">

    <div class="row">

        <div class="d-none d-xxl-flex col-xxl-4">
            <div class="linha"></div>
        </div>
        <?php
        $taxonomy = get_query_var('taxonomy');
        $termId = get_queried_object()->term_id;
        $titulo = get_field('title_l', $taxonomy . '_' . $termId);
        $sub_titulo = get_field('sub-title', $taxonomy . '_' . $termId);
        ?>

        <div class="col-12 col-xxl-6">
            <div class="text-alinhamentos-branco">
                <h1><?php echo $titulo; ?></h1>
                <h2><?php echo $sub_titulo; ?></h2>
                <div class="d-flex mt-5">
                    <a href="#" class="btn"><?php _e('Book a Visit') ?></a>
                    <a href="#contacto" data-bs-toggle="modal" data-bs-target="#contacto" class="btn btn-white"><?php _e('Request a contact') ?></a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>