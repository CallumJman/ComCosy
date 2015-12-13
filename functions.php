<?php
/**
 * require different files - to increase readability!!!
 * Comment the Function the you don't need
 */

@ini_set( 'upload_max_size' , '8M' );
@ini_set( 'post_max_size', '8M');
@ini_set( 'max_execution_time', '360' );


require_once locate_template('/functions/zero_setup.php');                  //Enable support for Post Thumbnails
require_once locate_template('/functions/head_cleanup.php');            //head cleanup (remove rsd, uri links, junk css, ect)
require_once locate_template('/functions/more_cleanup.php');            //more cleanup (remove rsd, uri links, junk css, ect)
require_once locate_template('/functions/enqueue_css.php');                 //CSS
require_once locate_template('/functions/enqueue_scripts.php');         //JS
require_once locate_template('/functions/helpers.php');                         //Helpers Functions

require_once locate_template('/functions/admin_menu_custom.php');   //Clean Up Dashboard


//Adds custom menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );



//Activate HTML5 search forms
add_theme_support( 'html5', array( 'search-form' ) );


//Adds a class to 'next' & 'prev' links on blog navigation
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="action-link red small"';
}




add_action( 'admin_init', 'show_editor' );
function show_editor() {
  add_post_type_support( 'page', 'editor' );
}


//Custom wp_is_mobile function (Basically doesn't include tablets)
function my_wp_is_mobile() {
    static $is_mobile;

    if ( isset($is_mobile) )
        return $is_mobile;

    if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
        $is_mobile = false;
    } elseif (
        strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false ) {
            $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') == false) {
            $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
        $is_mobile = false;
    } else {
        $is_mobile = false;
    }

    return $is_mobile;
}



function enable_comments_custom_post_type() {
 add_post_type_support( 'product', 'comments' );
 add_post_type_support( 'request', 'comments' );
}
add_action( 'init', 'enable_comments_custom_post_type', 11 );




//Hide Contact Form 7 for non-admins
define( 'WPCF7_ADMIN_READ_CAPABILITY', 'manage_options' );
define( 'WPCF7_ADMIN_READ_WRITE_CAPABILITY', 'manage_options' );


//Custom backend for admin vs. everyone else
function remove_menus(){
    $current_user = wp_get_current_user();
    if(!($current_user->user_login == 'Admin')){ //Nothing is hidden from Admin!
      if(in_array('contributor',$current_user->roles)){ //If basic user...
        remove_menu_page( 'admin.php?page=wpcf7');
        remove_menu_page( 'edit.php');
        remove_menu_page( 'edit-comments.php');
        remove_menu_page( 'edit.php?post_type=page' );    //Pages
        remove_menu_page( 'edit.php?post_type=acf-field-group' );    //ACF Pro settings
        remove_menu_page( 'themes.php' );                 //Appearance
        remove_menu_page( 'plugins.php' );                //Plugins
        remove_menu_page( 'tools.php' );                  //Tools
        remove_menu_page( 'edit.php?post_type=lookingfor' );   
        remove_menu_page( 'admin.php?page=site-general-settings' );    
        remove_menu_page( 'admin.php?page=godaddy' );
      }else{
        remove_menu_page( 'edit.php?post_type=acf-field-group' );    //ACF Pro settings
        remove_menu_page( 'themes.php' );                 //Appearance
        remove_menu_page( 'edit.php?post_type=lookingfor' );   
        remove_menu_page( 'admin.php?page=site-general-settings' );    
        remove_menu_page( 'admin.php?page=godaddy' );
      }
    }
}
add_action( 'admin_menu', 'remove_menus' );



