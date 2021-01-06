<?php 
    get_header();
	//Template Name: Services 
    $services = get_field('services_section');
    $workshop = get_field('workshop_section');
    ?>
<div class="container-fluid  services-page__hero-container">

<?php if( $services['title']!="" && $services['body_text']!="" && $services['image'] !=""):?>
    <h1 class="text-center pt-3"><?php echo $services['title']; ?></h1>
     <div class="container d-flex m-3 py-5">
             <div class="services__body"><?php echo $services['body_text']; ?></div>
            <div class=" d-none d-lg-block"><?php echo '<img   src="' . $services['image']['sizes']['medium'] . '" alt="' . $services['image']['alt'] . '" />'; ?></div>
    </div> 
    <?php endif; ?>      
</div> 






<div class="container">
    <h1 class="text-center">Workshops</h1>

    <?php
    $args = array(  
        'post_type' => 'workshop',
        'post_status' => 'publish',
        'posts_per_page' => 99, 
        'orderby' => 'date', 
        'order' => 'DESC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
        $workshop_title = get_field('title');
        $workshop_desc = get_field('description');
        $learning_outcomes = get_field('learning_outcomes');
        $workshop_image = get_field('image');

?>

    <div class="contianer  pb-5 services-page__info-section">
        <p><?php echo $workshop_title; ?></p>
        <div class="workshop-description " <?php if(!empty($workshop_image)): echo 'workshop-content--has-img'; endif; ?>>
        <p class=""><?php echo $workshop_desc; ?></p>
        </div>
        <div class=" d-flex m-5 p-2  p-sm-4 workshop-learningOutcomes__container">
        <div class="  workshop-learning-outcomes" <?php if(!empty($workshop_image)): echo 'workshop-content--has-img'; endif; ?>>
            <?php echo $learning_outcomes; ?>
        </div>
        <div class="row text-center workshop-image d-none d-lg-block">
            <img src="<?php echo $workshop_image['sizes']['medium']; ?>" alt="<?php echo $workshop_image['alt'] ?>">
        </div>
        </div>
    </div>

    <?php endwhile;

    wp_reset_postdata(); 

    ?>


</div>    
	   
        <?php 
    get_footer();
    ?>
