<?php $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => -1 ) );?>
<?php $terms = get_terms([
										'taxonomy' => 'producttype',
										'hide_empty' => false,
									]); ?>
<div id="sliderHome" class="sliderHome carousel slide carousel-fade" data-bs-ride="carousel">

	<div class="carousel-indicators">
		<?php
		$i = 0;
		
		while ( $loop->have_posts() ) : $loop->the_post();

		?>
		<button type="button" data-bs-target="#sliderHome" data-bs-slide-to="<?php echo $i  ?>" <?php if($i==0) echo 'class="active"'; ?> aria-current="true" aria-label="Slide <?php echo $i  ?>"></button>
		<?php
		$i++;
	endwhile;
	//wp_reset_query();
	?>
	</div>
	
	<?php	foreach ($terms as $t) { ?>
	<div class="carousel-inner">

								


		<?php
		  $i = 0;
		  $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => -1 ) );
		  while ( $loop->have_posts() ) : $loop->the_post();
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
				$thumb_url = $thumb_url_array["0"];
		?>


		<div class="carousel-item <?php if($i==0){ echo 'active'; } ?> ">
			<div class="slideIn w-100 " style="background-image: linear-gradient(122deg, rgba(0,0,0,1) 0%, rgba(38,41,47,0) 100%), url(<?php echo $thumb_url; ?>)">
				<div class="container">
					<div class="row">
					
						<div class="col-12 altura-slide d-flex align-items-center">
						
							<div class="w-100 w-lg-50 formata-texto p-0">						
									<h1 ><?php echo get_field('title') ?>.</h1>
									<h2 class="w-75"><?php echo get_field('phrase') ?></h2>
									
									
									<div class="slider-butoes mt-3 mt-lg-5">
									
										<a href="#BookVisit" data-bs-toggle="modal" data-bs-target="#BookVisit" class="btn"><?php _e('Book a Visit') ?></a>
										<a href="<?php echo get_bloginfo('url') ?>/producttype/<?php echo $t->slug; ?>" class="mt-3 mt-lg-0 ms-1 ms-lg-4 link-produtos"><?php _e('See all products') ?> <i class="las la-arrow-right"></i></a>
										
									</div>
																	
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<?php
			$i++;
			endwhile;
		//wp_reset_query();
		 ?>
	</div>
	<?php } ?>
	<button class="carousel-control-prev" type="button" data-bs-target="#sliderHome" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#sliderHome" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>
