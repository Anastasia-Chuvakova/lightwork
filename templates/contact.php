<?php 
    get_header();
    //Template Name: Contact 
    $contact_title = get_field('contact_title');
	
    ?>
    
<div class="container-fluid contact-page__container p-5 ">
    <?php if($contact_title != "" ):?>
   <h3 class="text-center contact-page__header pb-3 font-weight-bold"><?php echo $contact_title?></h3>
   <?php endif; ?>
       <?php echo do_shortcode('[contact-form-7 id="70" title="Contact Form"]'); ?>
</div>  


        <?php 
    get_footer();
    ?>
