
    <?php 
    get_header();
	//Template Name: Homepage
		//GET ACF FIELDS
	$banner = get_field('banner');
	$services = get_field('services');
	
    ?>
<div class="bg-banner hero-banner__container data-mdb-animation-show-on-load">
    <div class=" container-fluid  d-flex  justify-content-md-center mx-5  ">
        <div class="row my-5 ">
            <div class=" col-sm-6 p-3 ">
				<?php if($banner['body_text'] != ""): ?>
				<p class="mt-2 lead text-sm-left font-weight-bold"><?php echo $banner['body_text'] ?></p>
				<?php endif; ?>

				<div class="d-flex t m-0 justify-content-end">
				<?php if($banner['button_link'] != "" && $banner['button_text'] != ""):?>
				<a  href="<?php echo $banner['button_link'] ?>" class="btn btn-sample m-0 "><?php echo $banner['button_text']; ?></a>
				<?php endif; ?>
				</div>
			</div>
			
            <div class="col-xs-12 col-sm-5">
			<?php if($banner['image'] != "" ):?>
					<img class="align-self-center mr-3  hero-img__style " src="<?php echo $banner['image']['sizes']['medium'] ?>" alt="image">
				<?php endif; ?>
			</div>
        </div>
    </div>
</div>      

	
<section class="home-page__services-container">
	<div class="container">
      			<section class="home-page__services-text">
			  <div class="theme-bg-dark py-md-5 mt-2 text-center">
			  <?php if($services['title'] != "" && $services['body_text'] != "" ):?>
				<h3 class='font-weight-bold'><?php echo $services['title'] ?></h3>
				 <p class="mt-3 lead"><?php echo $services['body_text'] ?></p>
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
						<div class="card m-2 " style="background-image: url(<?php echo $card_image['sizes']['medium']; ?>);">
							<div class="card-body d-flex flex-column justify-content-center">
							<?php if($card_title != "" && $card_body != ""):?>
							<h5 class="card-title"><?php echo $card_title; ?></h5>
							<?php echo $card_body; ?>							<?php endif;?>
							</div>

						</div>
					</div>
					<?php endwhile; ?>
               
					</div>
					</div>
					</section>
								
					 <section class="home-page__contact-container p-5">
					 <h3 class=' font-weight-bold text-center pb-3'>Contact</h3>
					<div class="container  text-center rounded home-page__contact-section w-100 ">
						<div class="h-2">
							<h3>some info here...</h3>
							</div>
					</div>

</section> 



        
        <div>  <?php 
    get_footer();
    ?>
</div>
      
	    
