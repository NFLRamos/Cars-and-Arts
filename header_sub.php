
<div class="pt-xxl-5 wrapper" id="full-width-page-wrapper">

<?php if(is_page(184) || is_page(178) || is_page(787) || is_page(791) ){ ?>
    <div id="subNavFixedW" class="container-fluid subNavFixed">
        <div class="container-xxl produtos-subnav">
        <div class="row">

            
                <div class="col-12 sub-nav-light" style="margin-bottom:3rem;">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'aboutNav',
                        'container_class' => 'aboutNav',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'nav  d-flex current-link',
                        'fallback_cb'     => '',
                        'container_aria_label' => 'page',
                        'menu_id'         => 'aboutNav',
                        'depth'           => 2,
                        'walker'          => new carsandarts_WP_Bootstrap_Navwalker(),
                    )
                );
            
                ?>
                

            </div>




        </div><!-- .row end -->
    </div>
</div>
<?php } ?>

<?php if(is_page(83) || is_page(173) || is_page(785) || is_page(789)){ ?>
    <div id="subNavFixedD" class="container-fluid subNavFixed">
        <div class="container-xxl produtos-subnav">
        <div class="row">

            
                <div class="col-12 sub-nav-dark" style="margin-bottom:3rem;">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'aboutNav',
                        'container_class' => 'aboutNav',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'nav  d-flex current-link',
                        'fallback_cb'     => '',
                        'container_aria_label' => 'page',
                        'menu_id'         => 'aboutNav',
                        'depth'           => 2,
                        'walker'          => new carsandarts_WP_Bootstrap_Navwalker(),
                    )
                );
            
                ?>
                

            </div>




        </div><!-- .row end -->
    </div>
</div>
<?php } ?>
    
    <div class="<?php echo esc_attr($container); ?>  produtos-subnav" id="content">

        <div class="content-area row" id="primary">

            <main class="site-main col-12" id="main" role="main">

                <?php
                while (have_posts()) {
                    the_post();
                    //the_title();
                    $cnt = get_the_content();
                    
                    $cnt = str_replace('<p>startDiv</p>','</div></div></div><div class="container-fluid" style="background: rgb(0,0,0);
                    background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.8) 100%);"><div class="container"><div class="row"><div class="col-12 text-white">',$cnt);
                    $cnt = str_replace('<p>endDiv</p>','</div></div>',$cnt);
                    echo $cnt;
                }
                ?>

            </main><!-- #main -->

        </div><!-- #primary -->

    </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
