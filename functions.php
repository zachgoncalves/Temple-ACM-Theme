<?php
/**
 * @package WordPress
 * @subpackage Skeleton_Theme
 */

/********************************************************************************/
/******************** enqueue -> styles ********************/
/********************************************************************************/
function theme_styles(){
    wp_enqueue_style( 
        'bootstrap', 
        get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        false,
        '4.3.1',
        'all'
    );
    wp_enqueue_style(
        'style', 
        get_stylesheet_uri() 
    );
    wp_enqueue_script( 
        'bootstrap', 
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', 
        array ( 'jquery' ), 
        4.3, 
        true
    );
    wp_enqueue_script( 
        'fontawesome-all', 
        get_template_directory_uri() . '/assets/js/fontawesome-all.min.js'
    );        
}
add_action('wp_enqueue_scripts', 'theme_styles');
/********************************************************************************/
/******************** enqueue -> scripts ********************/
/********************************************************************************/


/********************************************************************************/
/******************** add editor css control ********************/
/********************************************************************************/



/********************************************************************************/
/******************** sidebars ********************/
/********************************************************************************/



/********************************************************************************/
/******************** featured image ********************/
/********************************************************************************/



/********************************************************************************/
/******************** custom comment loop ********************/
/********************************************************************************/



/********************************************************************************/
/******************** add RSS feed links to HTML <head> ********************/
/********************************************************************************/

automatic_feed_links();


/*--------------------------------------------------------------*/
// Admin Functions
/*--------------------------------------------------------------*/

function register_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_menu' );

/*--------------------------------------------------------------*/
// Custom Post Types -> Events
/*--------------------------------------------------------------*/

function cpt_events() {

    $supports = array(
    'title',
    'editor',
    'author',
    'custom-fields',
    'revisions'
    );
    
    $labels = array(
    'name'              => _x('Events', 'plural'),
    'singular_name'     => _x('Event', 'singular'),
    'menu_name'         => _x('Events', 'admin menu'),
    'name_admin_bar'    => _x('Events', 'admin bar'),
    'add_new'           => _x('Add Event', 'add new'),
    'add_new_item'      => __('Add Event'),
    'new_item'          => __('New Event'),
    'edit_item'         => __('Edit Event'),
    'view_item'         => __('View Event'),
    'all_items'         => __('Events'),
    'search_items'      => __('Search Events'),
    'not_found'         => __('No events found.')
    );
    
    $args = array(
    'supports'      => $supports,
    'labels'        => $labels,
    'public'        => true,
    'query_var'     => true,    
    'has_archive'   => true,
    'hierarchical'  => true,
    'taxonomies'    => array( 'category' ),
    'rewrite'           => array('slug' => 'events'),
    'menu_icon'     => 'dashicons-calendar-alt'
    );
    register_post_type('event', $args);

}
add_action('init', 'cpt_events');