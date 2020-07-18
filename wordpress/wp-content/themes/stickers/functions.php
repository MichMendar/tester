<?php

// Add styles and scripts
if (!function_exists('theme_scripts')) :
    function theme_scripts()
    {
        wp_enqueue_style('theme-styles', get_template_directory_uri().'/dist/css/style.min.css');
        wp_enqueue_script('theme-scripts', get_template_directory_uri().'/dist/js/main.min.js', false, '2018823', true);
        wp_enqueue_script('sticky-sidebar', get_template_directory_uri().'/dist/js/sticky-sidebar.js');
    }
endif;
add_action('wp_enqueue_scripts', 'theme_scripts');

/* Register Menus */
function register_custom_menus()
{
    register_nav_menus(array(
        'header-menu' => __('Header menu', 'bls_theme'),
    ));

    register_nav_menus(array(
        'footer-menu' => __('Footer menu', 'bls_theme'),
    ));
}
add_action('init', 'register_custom_menus');

/* thumbnail support*/
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

//Add title tag
add_theme_support('title-tag');

// Menu support
add_theme_support('menus');

// Enable optoins page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function replace_jquery()
{
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'replace_jquery');
