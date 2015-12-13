<?php
/**
 * Enqueue CSS
 */

if ( !function_exists('zero_stylesheets') ) :

	function zero_stylesheets() {

		wp_enqueue_style('main', get_template_directory_uri() . '/dist/css/main.min.css', false, '');

	}//zero_stylesheets

endif;

add_action('wp_enqueue_scripts', 'zero_stylesheets');



//Add css to login page
function my_login_stylesheet() {
    wp_enqueue_style('main', get_template_directory_uri() . '/dist/css/main.min.css', false, '');
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

