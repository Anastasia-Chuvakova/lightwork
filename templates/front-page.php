
    <?php 
    get_header();
	//Template Name: Homepage
		//GET ACF FIELDS
	$banner = get_field('banner');
	$services = get_field('services');
    ?>
<div class="bg-banner">
    <div class=" container d-flex flex-row  ">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
				<?php if($banner['body_text'] != ""): ?>
				<p class="mt-2 lead text-sm-left font-weight-bold"><?php echo $banner['body_text'] ?></p>
				<?php endif; ?>
				<?php if($banner['button_link'] != "" && $banner['button_text'] != ""):?>
				<a href="<?php echo $banner['button_link'] ?>" class="btn btn-sample"><?php echo $banner['button_text']; ?></a>
				<?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-6">
			<?php if($banner['image'] != "" ):?>
				
				<img class="align-self-center mr-3" src="<?php echo $banner['image']['sizes']['large'] ?>" alt="image">
				<?php endif; ?>
			</div>
        </div>
    </div>
</div>      
	    <div class='container'>
      			
			  <section class="theme-bg-dark py-5 mt-2 text-center">
			  <?php if($services['title'] != "" && $services['body_text'] != "" ):?>
				<h3 class='font-weight-bold'><?php echo $services['title'] ?></h3>
			     <p class="mt-3 lead"><?php echo $services['body_text'] ?></p>
				<?php endif; ?>
				</section>
			<div class="row ">
				<div class="col-xs-12 col-sm-6 mb-4">
				  <div class="card">
					<div class="card-body">
					<?php if($services['services']['service_1']['title'] != "" && $services['services']['service_1']['body_text'] != ""):?>
					  <h5 class="card-title"><?php echo $services['services']['service_1']['title']; ?></h5>
					  <p class="card-text"><?php echo $services['services']['service_1']['body_text']; ?></p>
					<?php endif;?>
					</div>
				  </div>
				</div>
				<div class="col-xs-12 col-sm-6  mb-4">
				  <div class="card">
					<div class="card-body">
					<?php if($services['services']['service_2']['title'] != "" && $services['services']['service_2']['body_text'] != ""):?>
					  <h5 class="card-title"><?php echo $services['services']['service_2']['title']; ?></h5>
					  <p class="card-text"><?php echo $services['services']['service_2']['body_text']; ?></p>
					  <?php endif;?>

					</div>
				  </div>
                </div>
                <div class="col-xs-12 col-sm-6  mb-4">
				  <div class="card">
					<div class="card-body">
					<?php if($services['services']['service_3']['title'] != "" && $services['services']['service_3']['body_text'] != ""):?>
					  <h5 class="card-title"><?php echo $services['services']['service_3']['title']; ?></h5>
					  <p class="card-text"><?php echo $services['services']['service_3']['body_text']; ?></p>
					  <?php endif;?>

					</div>
				  </div>
				</div>
		</div>
        <section class="container text-center">
        <h3 class=' font-weight-bold'>Contact</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
        
        <?php 
    get_footer();
    ?>

	    
