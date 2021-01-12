<?php 
    get_header();
	//Template Name: Services 
    $services = get_field('services_section');
    // $services_body = get_field('services_body');
    $workshop_section_title = get_field('workshop_section_title');
        ?>

   <!-- SERVICES SECTION  -->
 <div class="container-fluid services-page__hero-container pt-5"> 
    <div class="container  ">
    <!-- <div class="bg-svg-container "></div>  -->
    

    
        <div class="text-center   "><?php if( $services['title']!="" ):?>
            <h3 class=""><?php echo $services['title']; ?></h3>
            <?php endif; ?>
        </div>
            <div class="container d-flex m-3 py-5 ">
                <div class="services__body"><?php if( $services['services_body']['body_title']!="" && 
                $services['services_body']['body_description']!="" && $services['services_body']['body_text'] !=""):?>
                    <p class=" "><?php echo $services['services_body']['body_title']; ?></p>
                    <p class="mt-3  "><?php echo $services['services_body']['body_description']; ?></p>
                    <p class=" mt-3 "><?php echo $services['services_body']['body_text']; ?></p>
                    <?php endif; ?>
                </div>
                <div class=" d-none d-lg-block"><?php echo '<img   src="' . $services['services_body']['body_image']['sizes']['medium'] . '" alt="' . $services['image']['alt'] . '" />'; ?></div>
            </div> 

    
         
    </div>
</div>
<!-- <div class='container-fluid wave p-0 m-0'></div>   -->


<!-- WORKSHOP SECTION -->

<div class="container">
<h3 class="text-center pt-3"><?php echo $workshop_section_title; ?></h3>

    <?php  $args = array(  
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
        $outcomes_title =  get_field('outcomes_title');
        $learning_outcomes = get_field('learning_outcomes');
        $workshop_image = get_field('image');
        

?>

 <!-- WORKSOP BODY -->
 <?php if( $workshop_title !="" &&  $workshop_desc !=""  && $outcomes_title !=""  &&  $learning_outcomes!="" ):?>
    <div class="contianer pb-3 services-page__info-section">

        <div class="mt-3 font-italic"><p class=""><?php echo $workshop_title; ?></p></div>
            <div class="workshop-description " <?php if(!empty($workshop_image)): echo 'workshop-content--has-img'; endif; ?>>
            <div class="mt-3 "><p  class=""><?php echo $workshop_desc; ?></p></div>
        </div>

      <!-- LEARNING OUTCOMES   -->
        <div class=" d-flex m-0 m-lg-4 p-0  p-xl-4 workshop-learningOutcomes__container">
                <div class=" workshop-learning-outcomes font-italic" <?php if(!empty($workshop_image)): echo 'workshop-content--has-img'; endif; ?>>
                    <div class="pl-4  mt-3 "><p class=""><?php echo $outcomes_title; ?></p></div>    
                    <div class="mt-3 "><p class=""><?php echo $learning_outcomes; ?></p></div>
                </div>
                <div class="row  text-right workshop-image d-none d-lg-block">
                    <div class=""><img src="<?php echo $workshop_image['sizes']['medium']; ?>" alt=""></div>
                </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile;

    wp_reset_postdata(); 

    ?>


</div>    
	   
        <?php 
    get_footer();
    ?>
