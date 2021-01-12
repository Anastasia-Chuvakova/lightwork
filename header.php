<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<!-- adjusting how site is displayed on the device with the next line + some css make it responsive-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- FontAwesome CSS-->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
	<!-- Bootstrap CSS-->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   -->
	<!-- Theme CSS -->
	<!-- <link rel="stylesheet" href="css/style.css"> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- HEADER NAVBAR  -->
<div class="containter-fluid  ">
  <header class="d-flex flex-column  align-items-center flex-md-row  justify-content-lg-between header-container">	 
    <div>
                    <div class="mx-1" >
                      <a class="navbar-logo w-100 p-3 " href="<?php echo site_url('/home') ?>">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo.png" alt="logo"/></a>   
                    </div>

    
     </div>
     <nav class="navbar navbar-expand-md navbar-light m-2  p-0 p-md-4">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
              </button>

          <div class="collapse navbar-collapse " id="navbarNav">
                <?php	wp_nav_menu(array(
                      'theme_location' => 'header-menu',
                      'container_class' => 'navbar-nav'
                  )); ?>
          </div>

     </nav>
  </header>
 </div>