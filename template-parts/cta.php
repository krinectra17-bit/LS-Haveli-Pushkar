<?php
/**
 * Template part for Section J: Closing Booking CTA
 *
 * @package LS_Haveli_Pushkar
 */

$theme_uri = get_template_directory_uri();
$whatsapp  = ls_haveli_get_whatsapp_number();
$phone     = ls_haveli_get_phone();
$cta_wa_url = ls_haveli_get_whatsapp_url();
?>

<section class="cta-banner-section" aria-label="<?php esc_attr_e('Plan Your Pushkar Stay', 'ls-haveli'); ?>">
  <div class="cta-bg-pattern"></div>
  <div class="container">
    <div class="cta-container">
      <span class="eyebrow" style="color: #DFBF86;"><?php esc_html_e('Boutique Heritage Experience', 'ls-haveli'); ?></span>
      <h2 class="cta-title"><?php esc_html_e('Your Pushkar Stay Begins Here.', 'ls-haveli'); ?></h2>
      <img src="<?php echo esc_url($theme_uri . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" />
      <p class="cta-desc">
        <?php esc_html_e('Discover the warmth of L S Haveli and plan your visit to Pushkar. Message our reservations desk directly on WhatsApp for verified tariffs, customized itineraries, and instant assistance.', 'ls-haveli'); ?>
      </p>

      <div class="cta-buttons-group">
        <a href="<?php echo esc_url($cta_wa_url); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
          <?php esc_html_e('Enquire on WhatsApp', 'ls-haveli'); ?>
        </a>

        <a href="<?php echo esc_url('tel:' . preg_replace('/[^0-9+]/', '', $phone)); ?>" class="btn btn-light">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <?php esc_html_e('Call Front Desk', 'ls-haveli'); ?>
        </a>

        <button type="button" class="btn btn-outline-gold open-booking-modal" style="color: #FAF8F3; border-color: rgba(255,255,255,0.4);">
          <?php esc_html_e('Online Booking Form', 'ls-haveli'); ?>
        </button>
      </div>
    </div>
  </div>
</section>
