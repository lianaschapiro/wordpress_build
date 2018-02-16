<?php
  // Loop Init, WP Post Setup
  if (have_posts()): 
    while (have_posts()): 
      the_post();
      // Body class array
      $body_classes = array();
      // Loads in model controller to prepare post data for template
      require_once 'models/controller.php';
    endwhile;
  endif;
?>
