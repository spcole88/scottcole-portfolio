<?php
/**
 * Adds basic WordPress things such as menu registering, theme
 * support for things such as thumbnails etc. More specific
 * website related functionality will either be included in the
 * /inc folder, or built into a separate plugin file.
 */

// Add theme support for featured images
add_theme_support('post-thumbnails');

// Register the menu areas
function register_scst_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'footer-menu-1' => __('Footer Menu 1'),
        )
    );
}
add_action('init', 'register_scst_menus');

/**
 * Load stylsheets, including fonts
 */
function scst_enqueue_stylesheets()
{
    $ver = '1.0.16';
    $breakCache = time();
    // CSS
    wp_enqueue_style('style', get_stylesheet_uri(), array(), $breakCache);
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), $ver);
    // Fonts
    wp_enqueue_style('font1', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,700&display=swap', array(), $ver);
    wp_enqueue_style('font2', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Science+Gothic:wght@100..900&display=swap', array(), $ver);
}

add_action('wp_enqueue_scripts', 'scst_enqueue_stylesheets');

/**
* Load scripts
*/
function scst_enqueue_scripts()
{
    $ver = '1.0.16';
    $breakCache = time();
    wp_enqueue_script('scst-script', get_template_directory_uri() . '/assets/js/script.js', array(), $breakCache, true);
}

add_action('wp_enqueue_scripts', 'scst_enqueue_scripts');

/**
 * Includes for additional PHP files, such as those for the
 * custom post types etc. generally container in /inc
 */