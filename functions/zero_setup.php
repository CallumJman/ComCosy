<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

if ( !function_exists('zero_setup') ) :

  function zero_setup() {

    // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
    add_theme_support('post-thumbnails');

    // default thumb size
    set_post_thumbnail_size(230, 345, true);
    add_image_size( 'hero-small', 370, 300, true );
    add_image_size( 'zero-small', 315, 345, true );
    add_image_size( 'zero-medium', 900, 560, true );
    add_image_size( 'zero-big', 1200, 660, true );
    add_image_size( 'blog-full-width', 1200, 9999);
    


    //acf_add_options_page(); //Advanced Custom Field 5PRO

    

  }//zero_setup

endif;

add_action('after_setup_theme', 'zero_setup');