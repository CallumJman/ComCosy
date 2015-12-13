<?php
/**
 * Enqueue JS - http://eamann.com/tech/dont-dequeue-wordpress-jquery/
 */

if ( !function_exists('zero_script') ) :  

  function zero_script() {
    
    if (!is_admin()) {

    //Call Custom js file
    wp_register_script('main_js', get_template_directory_uri() . '/dist/js/main.js', array('jquery'), '', true);
    wp_enqueue_script( 'main_js' );
    
    }
  }//zero_script

endif;  

add_action('wp_enqueue_scripts', 'zero_script'); // Initiate the function