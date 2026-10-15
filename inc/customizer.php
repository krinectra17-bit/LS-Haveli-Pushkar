<?php
/**
 * L S Haveli Theme Customizer
 *
 * @package LS_Haveli_Pushkar
 */

if (!defined('ABSPATH')) {
    exit;
}

function ls_haveli_customize_register($wp_customize) {
    // -------------------------------------------------------------
    // Section 1: Hotel Contact & WhatsApp Configuration
    // -------------------------------------------------------------
    $wp_customize->add_section('ls_haveli_contact_section', array(
        'title'       => __('Hotel Contact & WhatsApp Settings', 'ls-haveli'),
        'description' => __('Centrally configure hotel telephone, WhatsApp booking destination, email, and location.', 'ls-haveli'),
        'priority'    => 25,
    ));

    // WhatsApp Number (Primary Booking Goal)
    $wp_customize->add_setting('ls_haveli_whatsapp_number', array(
        'default'           => '919829000000',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ls_haveli_whatsapp_number', array(
        'label'       => __('Hotel WhatsApp Number (with country code, e.g. 919829000000)', 'ls-haveli'),
        'description' => __('All direct booking enquiries and WhatsApp buttons will open chat with this number.', 'ls-haveli'),
        'section'     => 'ls_haveli_contact_section',
        'type'        => 'text',
    ));

    // Telephone Number
    $wp_customize->add_setting('ls_haveli_phone_number', array(
        'default'           => '+91 98290 00000',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ls_haveli_phone_number', array(
        'label'   => __('Primary Contact Phone', 'ls-haveli'),
        'section' => 'ls_haveli_contact_section',
        'type'    => 'text',
    ));

    // Email Address
    $wp_customize->add_setting('ls_haveli_email_address', array(
        'default'           => 'info@lshavelipushkar.com',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ls_haveli_email_address', array(
        'label'   => __('Hotel Email Address', 'ls-haveli'),
        'section' => 'ls_haveli_contact_section',
        'type'    => 'email',
    ));

    // Physical Address
    $wp_customize->add_setting('ls_haveli_physical_address', array(
        'default'           => 'Near Badi Puliya / High Bridge, Gurudwara Road, Parikarma Marg, Pushkar, Rajasthan 305022, India',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ls_haveli_physical_address', array(
        'label'   => __('Hotel Physical Address', 'ls-haveli'),
        'section' => 'ls_haveli_contact_section',
        'type'    => 'textarea',
    ));

    // Google Maps Embed URL
    $wp_customize->add_setting('ls_haveli_gmaps_embed', array(
        'default'           => 'https://maps.google.com/maps?q=Pushkar+Rajasthan+India&t=&z=15&ie=UTF8&iwloc=&output=embed',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ls_haveli_gmaps_embed', array(
        'label'   => __('Google Maps Embed URL', 'ls-haveli'),
        'section' => 'ls_haveli_contact_section',
        'type'    => 'url',
    ));

    // -------------------------------------------------------------
    // Section 2: Hero Section Copy & Content
    // -------------------------------------------------------------
    $wp_customize->add_section('ls_haveli_hero_section', array(
        'title'    => __('Hero Section Settings', 'ls-haveli'),
        'priority' => 30,
    ));

    // Eyebrow
    $wp_customize->add_setting('ls_haveli_hero_eyebrow', array(
        'default'           => 'A HERITAGE LAKE VIEW HAVELI · PUSHKAR',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ls_haveli_hero_eyebrow', array(
        'label'   => __('Hero Eyebrow Text', 'ls-haveli'),
        'section' => 'ls_haveli_hero_section',
        'type'    => 'text',
    ));

    // Headline
    $wp_customize->add_setting('ls_haveli_hero_headline', array(
        'default'           => 'A Heritage Stay, Moments from Pushkar Lake.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ls_haveli_hero_headline', array(
        'label'   => __('Hero Headline', 'ls-haveli'),
        'section' => 'ls_haveli_hero_section',
        'type'    => 'text',
    ));

    // Supporting Copy
    $wp_customize->add_setting('ls_haveli_hero_copy', array(
        'default'           => 'Discover the charm of Pushkar at L S Haveli, where traditional Rajasthani character meets relaxed boutique hospitality.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('ls_haveli_hero_copy', array(
        'label'   => __('Hero Supporting Copy', 'ls-haveli'),
        'section' => 'ls_haveli_hero_section',
        'type'    => 'textarea',
    ));
}
add_action('customize_register', 'ls_haveli_customize_register');
