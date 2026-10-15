<?php
/**
 * Template part for Section D: Rooftop Dining
 *
 * @package LS_Haveli_Pushkar
 */

$theme_uri = get_template_directory_uri();
$whatsapp_number = ls_haveli_get_whatsapp_number();
$dining_wa_message = rawurlencode("Hello L S Haveli,\n\nI would like to enquire about dining at your rooftop restaurant.\n\nPlease share your operating timings and vegetarian dining options.\n\nThank you.");
$dining_wa_link = 'https://wa.me/' . $whatsapp_number . '?text=' . $dining_wa_message;
?>

<section class="section section-secondary dining-section" id="dining" aria-label="<?php esc_attr_e('Rooftop Indian Restaurant at L S Haveli', 'ls-haveli'); ?>">
  <div class="container">
    <div class="dining-grid">
      <!-- Left: Dining Story Card -->
      <div class="dining-card-presentation">
        <span class="eyebrow"><?php esc_html_e('Culinary Heritage', 'ls-haveli'); ?></span>
        <h2 class="section-title"><?php esc_html_e('Rooftop Dining Over Pushkar', 'ls-haveli'); ?></h2>
        <img src="<?php echo esc_url($theme_uri . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" style="margin-left: 0; margin-right: 0;" />

        <p class="lead">
          <?php esc_html_e('Enjoy authentic North Indian and Rajasthani vegetarian cuisine served high above the Pushkar rooftops.', 'ls-haveli'); ?>
        </p>

        <p>
          <?php esc_html_e('Our rooftop restaurant offers an open-air and glass-framed dining space where guests can take in scenic vistas of the surrounding desert hills and haveli architecture while relishing freshly prepared meals, traditional breads, and aromatic spiced chai.', 'ls-haveli'); ?>
        </p>

        <div class="dining-dishes-grid">
          <div class="dining-dish-item">
            <h4><?php esc_html_e('Authentic Indian Curries', 'ls-haveli'); ?></h4>
            <p><?php esc_html_e('Rich aromatic gravies prepared with fresh local herbs and spices.', 'ls-haveli'); ?></p>
          </div>
          <div class="dining-dish-item">
            <h4><?php esc_html_e('Tandoori Breads & Naan', 'ls-haveli'); ?></h4>
            <p><?php esc_html_e('Freshly baked hot tandoor rotis and stuffed parathas.', 'ls-haveli'); ?></p>
          </div>
          <div class="dining-dish-item">
            <h4><?php esc_html_e('Pure Vegetarian Kitchen', 'ls-haveli'); ?></h4>
            <p><?php esc_html_e('Prepared in accordance with Pushkar sacred culinary traditions.', 'ls-haveli'); ?></p>
          </div>
          <div class="dining-dish-item">
            <h4><?php esc_html_e('Sunset Tea & Beverages', 'ls-haveli'); ?></h4>
            <p><?php esc_html_e('Masala chai and chilled drinks with rooftop panoramic views.', 'ls-haveli'); ?></p>
          </div>
        </div>

        <div class="dining-cta-group">
          <a href="<?php echo esc_url($dining_wa_link); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            <?php esc_html_e('Dining Enquiry on WhatsApp', 'ls-haveli'); ?>
          </a>
          <button type="button" class="btn btn-secondary open-booking-modal">
            <?php esc_html_e('Stay & Dine With Us', 'ls-haveli'); ?>
          </button>
        </div>
      </div>

      <!-- Right: Dining & Rooftop Architecture Photo -->
      <div class="dining-image-frame">
        <img 
          src="<?php echo esc_url($theme_uri . '/assets/images/facade-night.jpg'); ?>" 
          alt="<?php esc_attr_e('Rooftop restaurant structure glowing at night over L S Haveli Pushkar', 'ls-haveli'); ?>" 
          loading="lazy"
          width="1024"
          height="768"
        />
      </div>
    </div>
  </div>
</section>
