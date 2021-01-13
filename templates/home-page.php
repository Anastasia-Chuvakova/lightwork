
    <?php 
    get_header();
	//Template Name: Homepage
		//GET ACF FIELDS
	$banner = get_field('banner');
	$services = get_field('services');
	$workshop_section = get_field('section_title');
	?>
	
	<!-- BANNER SECTION -->
<div class="bg-banner hero-banner__container data-mdb-animation-show-on-load">
    <div class=" container-fluid d-flex  justify-content-center">
        <div class="row my-5 container">
            <!-- <div class=" col-xs-12 col-sm-6 p-3 text-center"> -->
			<div class=" col-xs-12 col-md-6 p-3 text-center">
				<?php if($banner['body_text'] != ""): ?>
				<p class="mt-2  text-sm-left font-weight-bold"><?php echo $banner['body_text'] ?></p>
				<?php endif; ?>

				<div class="d-flex t m-0 justify-content-start">
				<?php if($banner['button_link'] != "" && $banner['button_text'] != ""):?>
				<a  href="<?php echo $banner['button_link'] ?>" class="btn btn-sample m-0 "><?php echo $banner['button_text']; ?></a>
				<?php endif; ?>
				</div>
			</div>
			
            <!-- <div class="col-xs-12 col-sm-5 text-md-center"> -->
				<div class="d-none d-md-block">
			<?php if($banner['image'] != "" ):?>
					<img class="align-self-center mr-3  hero-img__style " src="<?php echo $banner['image']['sizes']['medium'] ?>" alt="image">
				<?php endif; ?>
			</div>
        </div>
    </div>
</div>      

	<!-- SERVICES SECTION -->
<section class="home-page__services-container">
	<div class="container">
      			<section class="home-page__services-text">
			  <div class="theme-bg-dark py-md-5 mt-2 text-center">
			 
			  <?php if( $services['title_link'] != "" && $services['title'] != ""  ):?>
				<a class="button" href="<?php echo esc_url( $services['title_link'] ); ?>">
					<h3 ><?php echo $services['title'] ?></h3>
				</a>

				<?php endif; ?>
				<?php if( $services['body_text'] != ""  ):?>
				 <p class="mt-3 "><?php echo $services['body_text'] ?></p>
				<?php endif; ?>
			  </div>
			  
		
			  </div>
				<div class="row justify-content-center  mb-2 mb-md-5  ">
					<?php
						$args = array(  
						'post_type' => 'servicescard',
						'post_status' => 'publish',
						'posts_per_page' => 99, 
						'orderby' => 'date', 
						'order' => 'DESC', 
						);
						$loop = new WP_Query( $args ); 
							
						while ( $loop->have_posts() ) : $loop->the_post(); 
							$card_title = get_field('title');
							$card_body = get_field('body_text');
							$card_image = get_field('background_image');
							$card_link = get_field('link');

					?>
					<div class="col-xs-12 mx-0 mx-lg-3 mx-xl-5 " >
					<?php if($card_title != "" && $card_body != "" && $card_image != "" ):?>

						<a class="button" href="<?php echo esc_url( $card_link ); ?>">
						<div class="card m-2 " style="background-image: url(<?php echo $card_image['sizes']['medium']; ?>);">
							<div class="card-body d-flex flex-column justify-content-center">
							<h5 class="card-title font-weight-bold"><?php echo $card_title; ?></h5>
							<?php echo $card_body; ?>							
							</div>
						</div>
						</a>

						<?php endif;?>
					</div>
					<?php endwhile; ?>
               
					</div>
					</div>
					</section>
								
					 <section class=" cotainer-fluid home-page__contact-container p-5 w-100">


					 <!-- <div class="container-fluid home-page__container-section p-5 "> -->
						 <div><?php if($workshop_section['section_title'] != "" ):?>
							 <h3 class="text-center home-page__header pb-3 "><?php echo $workshop_section; ?></h3>
							 <?php endif;?>
						 </div>
  						 
           						<?php echo do_shortcode('[contact-form-7 id="70" title="Contact Form"]'); ?>
						<!-- </div>   -->

				
					
					</div>

</section> 



        
        <div>  <?php 
    get_footer();
    ?>
</div>
      
	    
