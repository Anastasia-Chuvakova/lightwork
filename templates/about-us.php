
    <?php 
	get_header();
	//Template Name: About Us
	 
     $about_us = get_field('about_us_section');
	 $how_we_work = get_field('how_we_work_section');
	 $team_section_title = get_field('team_section_title');
	
	?>
	
   <!-- ABOUT US -->
	    <div class='container'>
      			
			  <section class="   w-80">
			  <?php if($about_us['title'] != "" && $about_us['body_text'] != "" ):?>
				<div  class='pt-5 about-us__hero-title'><h3 class='text-centre'><?php echo $about_us['title']; ?></h3></div>
				<div class='about-us__hero-text'><p class=""><?php echo $about_us['body_text']; ?></p></div>	
				<?php endif; ?>
				</section>

	<!-- HOW WE WORK SECTION-->
			<div class='text-centre mt-3 '>
				<?php if($how_we_work['title'] != ""  && $how_we_work['text_description'] != "" && $how_we_work['upper_text'] != "" && $how_we_work['upper_image'] != "" && $how_we_work['lower_text'] != "" && $how_we_work['lower_image'] != ""):?>
					<div class="">
						<h3 class='text-center '><?php echo $how_we_work['title']; ?></h3>
						<p class="mt-3 "><?php echo $how_we_work['text_description']; ?></p>
					</div>

					<div class="d-flex flex-column-reverse d-md-flex flex-md-row mt-3 ">
						<div class=""><p class=""><?php echo $how_we_work['upper_text']; ?></p></div>
						<div class="text-center ml-md-3"><?php echo '<img   src="' .$how_we_work['upper_image']['sizes']['medium'] . '" alt="' . $how_we_work['image']['alt'] . '" />'; ?></div>
					</div>

					<div class="d-md-flex mt-3 ">
						<div class="text-center mr-md-5"><?php echo '<img   src="' .$how_we_work['lower_image']['sizes']['medium'] . '" alt="' . $how_we_work['image']['alt'] . '" />'; ?></div>
						<div class=""><p class="mt-3 "><?php echo $how_we_work['lower_text']; ?></p></div>
					</div>
				<?php endif; ?>
			</div>
		</div>


<!-- BIOGRAPHY SECTION -->

	<section class=" container py-5   ">
		<div><?php if($team_section_title!= ""):?>
					<h3 class="font-weight-bold d-none d-lg-block text-center pb-5"><?php echo $team_section_title; ?></h3>
					<div class="text-center ">
					<button  class="btn btn-sample mb-3 d-lg-none  " type="button" data-toggle="collapse"
					data-target="#collapseItems" aria-expanded="false" 
					aria-controls="collapseItems"><?php echo $team_section_title; ?></button>
					</div>
			<?php endif; ?>
		</div>

		<div class="collapse d-lg-block" id="collapseItems">
				<?php
				$args = array(  
					'post_type' => 'biography',
					'post_status' => 'publish',
					'posts_per_page' => 99, 
					'orderby' => 'date', 
					'order' => 'DESC', 
				);

					$loop = new WP_Query( $args ); 
						
					while ( $loop->have_posts() ) : $loop->the_post(); 
						$bio_image = get_field('image');
						$bio_name = get_field('name');
						$bio_text = get_field('bio');


					?>
				<div class="pb-3 mt-3   d-flex  flex-column flex-lg-row ">
					<div class=" text-center text-lg-right"><img class="rounded" src="<?php echo $bio_image['sizes']['medium']; ?>"  
					alt="<?php echo $bio_image['alt']; ?>">
					</div>
					<div class="ml-3">
					<p class="mt-3 mt-lg-0 font-weight-bold"><?php echo $bio_name; ?></p>
					<p class="mt-3 "><?php echo $bio_text; ?></p>
					</div>
				</div>

			<?php endwhile; ?>
		</div>
		
	</section>
	<div class="container  about-us__positions-link">
			<div class="text-center py-5 ">
				<div class="pb-4"><h3 class="">Come work with us!</h3>
				<p class="mt-3">some text here (too small to see from jpeg file, ask Itzel)</p>
				</div>	
				
				<button class=" btn btn-sample ">See open positions</button>
			</div>
		</div>
        <?php 
    get_footer();
    ?>
	    
	