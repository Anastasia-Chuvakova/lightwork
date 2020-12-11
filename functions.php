<?php

$version = wp_get_theme()->get( 'Version');
wp_enqueue_style('lightwork-style', get_template_directory_uri() . "/style.css", array('lightwork-bootstrap'), $version,'all');
wp_enqueue_style('lightwork-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1','all');
wp_enqueue_style('lightwork-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0','all');
wp_enqueue_style ('theme-style', get_template_directory_uri().'/assets/css/style.css');
wp_enqueue_style('lightwork-add-style', get_template_directory_uri() . "/assets/css/modules/custom.css");

//  function lightwork_register_scripts(){

//     wp_enqueue_script('lightwork-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
//     wp_enqueue_script('lightwork-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
//     wp_enqueue_script('lightwork-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );
//      wp_enqueue_script('lightwork-main',  get_template_directory_uri() .'/assets/js/main.js', array(), '1.0', true );
     
// }

//  add_action(' wp_enqueue_scripts', 'lightwork_register_scripts', true);

//  function lightwork_additional_style(){
//     wp_enqueue_style('lightwork-add-style', get_template_directory_uri() . "/css/modules/custom.css");

//  }
//  add_action('wp_enqueue_scripts', 'lightwork_additional_style')
 ?>
 