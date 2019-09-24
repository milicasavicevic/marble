<?php

include 'customizer.php';
include 'custom_footer_widget.php';

function resources()
{

/*
 * include css
 */
wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', false, '1.1', 'all');
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', false, '1.1', 'all');
wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', false, '1.1', 'all');
wp_enqueue_style('icomoon', get_template_directory_uri() . '/css/icomoon.css', false, '1.1', 'all');
wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false, '1.1', 'all');

/*
 * include scripts
 */

    wp_enqueue_script( 'bootstrap.min',get_template_directory_uri().  '/js/bootstrap.min.js' ,  array('jquery.min'), '1.1');
    wp_enqueue_script( 'google-map', get_template_directory_uri().'/js/google-map.js' ,  array('jquery.min') );
    wp_enqueue_script( 'jquery.flexslider-min', get_template_directory_uri(). '/js/jquery.flexslider-min.js' , array('jquery.min'), '1.1' );
    wp_enqueue_script( 'jquery.min', get_template_directory_uri(). '/js/jquery.min.js' , array(), '1.1' );
    wp_enqueue_script( 'jquery.easing.1.3.', get_template_directory_uri().  '/js/jquery.easing.1.3.js' , array('jquery.min'), '1.1' );
    wp_enqueue_script( 'jquery.waypoints.min', get_template_directory_uri().  '/js/jquery.waypoints.min.js' , array('jquery.min'), '1.1' );
    wp_enqueue_script( 'modernizr-2.6.2.min', get_template_directory_uri().  '/js/modernizr-2.6.2.min.js' , array('jquery.min'), '1.1' );
    wp_enqueue_script( 'respond.min', get_template_directory_uri().  '/js/respond.min.js' , array(), '1.1');





wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js',
array('jquery.min'), null);
}

add_action('wp_enqueue_scripts', 'resources');

//theme setup
function setup()
{
    //navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
        'sidebar' => __('Sidebar Menu'),
    ));

    //add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('banner-image', 920, 210, array('left', 'top'));

}

add_action('after_setup_theme', 'setup');

// reduce number of words in post content

add_filter("the_content", "plugin_myContentFilter");

function plugin_myContentFilter($content)
{
    // Take the existing content and return a subset of it

   if (is_front_page())
    {
        return substr($content, 0, 100);
    }
    elseif (is_single() || is_page())
    {
        return $content;
    }
    else{
        return substr($content, 0, 100);
    }
}

//add footer areas
function footerWidgetsInit()
{
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'footer1',
    ));
}

add_action('widgets_init', 'footerWidgetsInit');

// registering custom post type
function add_cpt_portfolio()
{
    $labels = array(
        'name' => _x('Portfolio', 'portfolio'),
        'singular_name' => _x('Portfolio', 'portfolio'),
        'add_new' => _x('Add New', 'portfolio'),
        'add_new_item' => __('Add New Post'),
        'edit_item' => __('Edit portfolio'),
        'new_item' => __('New Property'),
        'all_items' => __('Portfolio'),
        'view_item' => __('View Portfolio'),
        'search_items' => __('Search Portfolio'),
        'not_found' => __('No portfolio found'),
        'not_found_in_trash' => __('No portfolio found in the Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Portfolio'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Holds portfolio and Portfolio specific data',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'has_archive' => true,
//        'register_meta_box_cb' => 'add_portfolio_metaboxes',
    );
    register_post_type('portfolio', $args);
}

add_action('init', 'add_cpt_portfolio');




