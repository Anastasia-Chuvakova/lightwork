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
            <div><?php echo '<img src="' . $services['image']['sizes']['large'] . '" alt="' . $services['image']['alt'] . '" />'; ?></div>
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
        <div class="workshop-description <?php if(!empty($workshop_image)): echo 'workshop-content--has-img'; endif; ?>">
            <?php echo $workshop_desc; ?>
        </div>
        <div class=" d-flex m-5  p-4 workshop-learningOutcomes__container">
        <div class="  workshop-learning-outcomes <?php if(!empty($workshop_image)): echo 'workshop-content--has-img'; endif; ?>">
            <?php echo $learning_outcomes; ?>
        </div>
        <div class="row text-center workshop-image">
            <img src="<?php echo $workshop_image['sizes']['large']; ?>" alt="<?php echo $workshop_image['alt'] ?>">
        </div>
        </div>
    </div>

    <?php endwhile;

    wp_reset_postdata(); 

    ?>

    <!-- <div class="container pb-5 services-page__info-section ">
          <div>
        <p>Religious Inclusivity</p>
        <p>Whether someone is a person of faith or not, there is ample evidence to support 
            that religious diversity in the workplace is a value-adding condition. 
            Because faith plays an integral role in the lives of many, religion is 
            actually an important part of the workplace. This workshop demonstrates 
            how managers and management can be appropriately inclusive of religion in the workplace.
        </p>
        </div>

        <div class="d-flex p-5 services-page__outcomes-section">
            <ul>Learning Outcomes:
                <li class="w-50">Understanding the history and context of religious intolerance</li>
                <li class="w-50">Legal requirements around religious inclusivity and accommodations</li>
                <li class="w-50">Understanding and working with the complexity of religious identities</li>
                <li class="w-50">Examining specific scenarios that can create belonging</li>
                <li class="w-50">How to care for colleagues who hold different religious identities</li>
            </ul>
            <div><img src="../assets/images/6.png" alt="picture"></div>
        </div>       
   </div>
    </div>
        


            <div class="container pb-5  services-page__info-section">
        <div>
        <p>Systemic/Institutional Racism</p>
        <p>Racism that is embedded within society leading to dramatically different outcomes in 
            criminal justice, employment, housing, health care, political power, and education, 
            among other issues. 
            At the organizational 
            Race is one of the biggest factors in people feeling a sense of welcome in their workplaces. 
            By learning how unconscious bias and racism shows up in the workplace we can create.</p>
           </div>      
        <div class="d-flex p-5 services-page__outcomes-section">
        <ul>Learning Outcomes:
                <li class="w-50">Understanding the history and context of racial intolerance</li>
                <li class="w-50">Legal requirements around racial inclusivity</li>
                <li class="w-50">Understanding and working with the complexity of racial identities</li>
                <li class="w-50">Examining specific scenarios that can create belonging</li>
                <li class="w-50">How to care for colleagues who hold different racial identities</li>
            </ul>
        </div>
        


        <div class="container pb-5  services-page__info-section">
        <div>
        <p>Refugee Solidarity</p>
        <p>Defined by UNHCR Executive Committee programme:
            Solidarity has a key role to play in the allocation of responsibility for refugee protection. 
            Refugee Solidarity Network protects the rights of people uprooted from their homes and 
            strengthens the communities where they seek safety.
            https://refugeesolidaritynetwork.org (might be worth reading and learning more about what 
            they do and what tools they use)</p>
        </div>
       
        <div class="d-flex p-5 services-page__outcomes-section">
        <ul>Learning Outcomes:
                <li class="w-50">Understanding the context of refugee and forced migration experiences</li>
                <li class="w-50">Legal requirements around work and citizenship</li>
                <li class="w-50">Understanding and working with refugee claimants</li>
                <li class="w-50">Examining specific scenarios that can create belonging</li>
                <li class="w-50">How to care for colleagues with refugee and forced migration</li>
            </ul>
        </div>
                </div>
      
        
    </div>





    </div> -->
    

</div>    
	   
        <?php 
    get_footer();
    ?>
