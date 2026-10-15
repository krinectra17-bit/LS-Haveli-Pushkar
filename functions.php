<?php
/**
 * L S Haveli Pushkar Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LS_Haveli_Pushkar
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('LS_HAVELI_VERSION')) {
    define('LS_HAVELI_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ls_haveli_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register navigation menus.
    register_nav_menus(array(
        'primary' => esc_html__('Primary Navigation', 'ls-haveli'),
        'footer'  => esc_html__('Footer Navigation', 'ls-haveli'),
    ));

    // Switch default core markup to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', array(
        'default-color' => 'FAF8F3',
        'default-image' => '',
    ));

    // Add support for core custom logo.
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 420,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'ls_haveli_setup');

/**
 * Enqueue scripts and styles.
 */
function ls_haveli_scripts() {
    // Google Fonts: Cormorant Garamond & Plus Jakarta Sans
    wp_enqueue_style(
        'ls-haveli-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Main Theme CSS
    wp_enqueue_style(
        'ls-haveli-core-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        LS_HAVELI_VERSION
    );

    // Theme Root Stylesheet (for child theme / standard WP compatibility)
    wp_enqueue_style(
        'ls-haveli-style',
        get_stylesheet_uri(),
        array('ls-haveli-core-style'),
        LS_HAVELI_VERSION
    );

    // Main Theme JavaScript
    wp_enqueue_script(
        'ls-haveli-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        LS_HAVELI_VERSION,
        true
    );

    // Pass Dynamic Customizer Data to JavaScript
    wp_localize_script('ls-haveli-main-js', 'LSHaveliConfig', array(
        'whatsappNumber' => ls_haveli_get_whatsapp_number(),
        'hotelPhone'     => ls_haveli_get_phone(),
        'hotelEmail'     => ls_haveli_get_email(),
        'hotelAddress'   => ls_haveli_get_address(),
    ));
}
add_action('wp_enqueue_scripts', 'ls_haveli_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
