<div class=" container shadow container-back" >
<div class="row">
    <div class="col-12 col-xl-6 padding-col-left">
        <h2><?php echo get_field('title-news', 'options') ?></h2>
        <p class="w-75"><?php echo get_field('text-news', 'options') ?></p>
    </div>
    <div class="col-12 col-xl-6 form padd">
        
        <?php
                                    $lang = get_bloginfo("language");
                                    if($lang == 'fr-FR'){ echo do_shortcode('[contact-form-7 id="871" title="Newsletter Form FR"]'); }
                                    if($lang == 'en-GB'){ echo do_shortcode('[contact-form-7 id="76" title="Newsletter Form EN"]');  }      
        
        ?>
    </div>
</div>
</div>