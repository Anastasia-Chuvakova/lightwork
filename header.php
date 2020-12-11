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
<div class="containter-fluid  ">
    <header class="d-flex justify-content-between header-container">	 
    <a class="navbar-logo w-50 p-3" href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="logo"/></a>   
    <nav class="navbar navbar-expand-lg navbar-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('/about-us') ?>">About Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">Public Workshops</a>
      </li>
     
    </ul>
  </div>
</nav>
    </header>