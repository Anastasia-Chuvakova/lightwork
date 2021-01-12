<?php 
    get_header();
    //Template Name: Contact 

	
    ?>
    
<div class="container-fluid contact-page__container p-5 ">
   <h3 class="text-center contact-page__header pb-3 font-weight-bold">Contact</h3>
    
       <?php echo do_shortcode('[contact-form-7 id="70" title="Contact Form"]'); ?>
</div>  


        <?php 
    get_footer();
    ?>
