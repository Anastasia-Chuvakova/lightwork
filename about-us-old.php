
    <?php 
	get_header();
	//Template Name: About Us -- old
	 
    // $services = get_field('services_section');
    // $workshop = get_field('workshop_section');
    ?>
   
	    <div class='container'>
      			
			  <section class=" text-center">
				<h3 class='text-centre'>About us</h3>
                <p class="mt-3 lead">LightWork is a workers co-op focused on fostering 
					justice and belonging through safer, inclusive, and more diverse work 
					environments. We work with organizations to conduct long-term demographic 
					research, manage organizational change processes, provide career support 
					for marginalized employees, and offer workshops to create an environment 
					where differences are valued through a culture of care.</p>
				</section>
				<div class="text-center">
				
				<h3 class='text-centre'>How we work</h3>
                <p class="mt-3 lead">Many hands make light work - we seek 
					to unlock the potential of every team member to contribute 
					their fullest, understanding that this lightens everyone’s load.</p>
				</div>
			</div>
	   
		<section class="container ">
			<div class = "d-flex">
				<div>
			<p class="mt-3 lead">Value diversity - we recognize that long-term success 
			comes when we listen to ideas from those who are often not heard, 
			as this is where creativity and innovation are fostered.</p>
			<p class="mt-3 lead">Meeting people where they are at - the journey of learning and 
				unlearning is a lifelong one. We are humble in our own knowledge 
				and seek to walk alongside people in their journeys, meeting them where they are at.</p>
				</div>
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/trio.png"  alt="image">
</div>
		<div class="d-flex">
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/11.png"  alt="image">
			<div>
    		<p class="mt-3 lead">Care over guilt - we believe that each of us has the 
				potential to tap into our deep care for others. Care is a powerful 
				motivator to act against self-interest and short-term gains to create 
				inclusive workplaces where people can show up with their full selves.
			</p>
			<p class="mt-3 lead" >Measurements and stories matter - we can’t change 
				what we don’t know. We use multiple approaches grounded in research a
				nd learning to answer equitable workplace questions.
			</p>
			<p class="mt-3 lead">Consensual emotional labour - those on the margins 
				are often asked to do a disproportionate amount of work to share and 
				create change in their workplaces. Valuing the work done by those 
				working for organizational change and respecting their right to participate 
				to the extent they feel capable is core to how we work.</p>
			</div>
		</div>
		</section>


		<section class=" container text-center">
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
		<div>
			<img src="<?php echo $bio_image['sizes']['large']; ?>"  alt="<?php echo $bio_image['alt']; ?>">
			<h3><?php echo $bio_name; ?></h3>
			<p class="mt-3 lead"><?php echo $bio_text; ?></p>

		</div>

	<?php endwhile; ?>

	</section>
        
        <?php 
    get_footer();
    ?>
	    
