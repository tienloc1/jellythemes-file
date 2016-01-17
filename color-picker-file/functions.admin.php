<?php

    // Load jquery picker color
    add_action( 'admin_enqueue_scripts', 'jellythemes_add_color_picker' );
    function jellythemes_add_color_picker( $hook ) {

     if( is_admin() ) {

         // Add the color picker css file
         wp_enqueue_style( 'wp-color-picker' );

         // Include our custom jQuery file with WordPress Color Picker dependency
         wp_enqueue_script( 'custom-script-handle', get_template_directory_uri() . '/js/custom-script.js', array( 'wp-color-picker' ));
     }
    }