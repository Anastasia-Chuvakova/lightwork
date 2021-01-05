
    <?php 
	get_header();
	//Template Name: About Us
	 
     $about_us = get_field('about_us_section');
	 $how_we_work = get_field('how_we_work_section');
	
    ?>
   
	    <div class='container'>
      			
			  <section class=" text-center">
			  <?php if($about_us['title'] != "" && $about_us['body_text'] != "" ):?>
				<h3 class='text-centre'><?php echo $about_us['title']; ?></h3>
				<?php echo $about_us['body_text']; ?>
				<?php endif; ?>
				</section>

			
				<div class='text-centre'>
				<?php if($how_we_work['title'] != "" && $how_we_work['body'] != "" ):?>
					<h3 class='text-center '><?php echo $how_we_work['title']; ?></h3>
					<?php echo $how_we_work['body']; ?>
				<?php endif; ?>
			</div>
		</div>


<!-- BIOGRAPHY SECTION -->
		<section class=" container text-center ">
		<h3 class="font-weight-bold d-none d-lg-block">Team</h3>
			<button  class="btn btn-sample mb-3 d-lg-none " type="button" data-toggle="collapse" data-target="#collapseItems" aria-expanded="false" aria-controls="collapseItems">Team</button>
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
		<div class="pb-3 r">
			<img src="<?php echo $bio_image['sizes']['medium']; ?>"  alt="<?php echo $bio_image['alt']; ?>">
			<p class="mt-3 lead font-weight-bold"><?php echo $bio_name; ?></p>
			<p class="mt-3 lead"><?php echo $bio_text; ?></p>

		</div>

	<?php endwhile; ?>
</div>
	</section>
        
        <?php 
    get_footer();
    ?>
	    
	