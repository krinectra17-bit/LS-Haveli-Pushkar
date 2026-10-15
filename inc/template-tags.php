<?php
/**
 * Custom template tags and helper functions for L S Haveli theme
 *
 * @package LS_Haveli_Pushkar
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Get configured WhatsApp number for the hotel
 */
function ls_haveli_get_whatsapp_number() {
    $default = '919829000000';
    $number = get_theme_mod('ls_haveli_whatsapp_number', $default);
    // Sanitize to digits only
    return preg_replace('/[^0-9]/', '', $number);
}

/**
 * Get formatted telephone number
 */
function ls_haveli_get_phone() {
    return get_theme_mod('ls_haveli_phone_number', '+91 98290 00000');
}

/**
 * Get hotel email
 */
function ls_haveli_get_email() {
    return get_theme_mod('ls_haveli_email_address', 'info@lshavelipushkar.com');
}

/**
 * Get hotel address
 */
function ls_haveli_get_address() {
    return get_theme_mod(
        'ls_haveli_physical_address',
        'Near Badi Puliya / High Bridge, Gurudwara Road, Parikarma Marg, Pushkar, Rajasthan 305022, India'
    );
}

/**
 * Generate a direct WhatsApp enquiry URL
 *
 * @param string $room_name Optional room name to pre-fill
 * @return string
 */
function ls_haveli_get_whatsapp_url($room_name = '') {
    $number = ls_haveli_get_whatsapp_number();
    $preferred = !empty($room_name) ? $room_name : 'Deluxe Room / Any Available';

    $message = "Hello L S Haveli,\n\n"
             . "I would like to enquire about a stay.\n\n"
             . "Preferred Room: " . $preferred . "\n\n"
             . "Please share current availability and applicable rates.\n\n"
             . "Thank you.";

    return 'https://wa.me/' . $number . '?text=' . rawurlencode($message);
}
