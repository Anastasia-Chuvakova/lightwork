<footer  class="page-footer font-small ">
        
<div class="container-fluid text-center ">
			 <div class="row my-4  ">
							<!-- Grid column -->
					<div class="col-md-5 col-lg-3 mt-md-0 mt-3  ">
						<a class="navbar-logo w-100 p-2 rounded" href="#">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo.png" alt="logo"/></a>
					</div>

				 <hr class="clearfix w-100 d-md-none pb-3">

  		
					<div class=" col-xs-5  col-md-3 col-lg-2  pr-md-0  footer-links__container">
					
					<!-- Links -->
						<h5 class="font-weight-bold">Quick Links</h5>
						<?php wp_nav_menu(array(
								'theme_location' => 'footer-menu',
								'container_class' => 'footer-menu'
							));?>
					</div>
			</div>
</div>

	
</footer>
    
    <!-- </div> -->
  
    
    <!-- Bootstrap Javascript -->          
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="<?php echo get_template_directory_uri() . '/assets/js/main.js' ?>"></script>
	<!-- <script>document.body.className += ' fade-out';</script> -->


</body>
</html> 
