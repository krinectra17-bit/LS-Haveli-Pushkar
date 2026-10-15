<?php
/**
 * Template part for Section I: Location & Directions
 *
 * @package LS_Haveli_Pushkar
 */

$theme_uri = get_template_directory_uri();
$address   = ls_haveli_get_address();
$phone     = ls_haveli_get_phone();
$whatsapp  = ls_haveli_get_whatsapp_number();
$email     = ls_haveli_get_email();
$gmaps_embed = get_theme_mod(
    'ls_haveli_gmaps_embed',
    'https://maps.google.com/maps?q=Pushkar+Rajasthan+305022&t=&z=15&ie=UTF8&iwloc=&output=embed'
);
$gmaps_direction = 'https://www.google.com/maps/search/?api=1&query=' . urlencode('L S Haveli, Gurudwara Road, Parikarma Marg, Pushkar, Rajasthan 305022');
?>

<section class="section section-cream" id="location" aria-label="<?php esc_attr_e('Location and Contact Information', 'ls-haveli'); ?>">
  <div class="container">
    <div class="location-grid">
      <!-- Left: Contact and Location Details -->
      <div class="location-info-card">
        <span class="eyebrow"><?php esc_html_e('Finding L S Haveli', 'ls-haveli'); ?></span>
        <h2 class="section-title"><?php esc_html_e('Location & Arrival', 'ls-haveli'); ?></h2>
        <img src="<?php echo esc_url($theme_uri . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" style="margin-left: 0; margin-right: 0;" />

        <p class="lead">
          <?php esc_html_e('Strategically situated in the peaceful pilgrimage precinct of Pushkar along Parikarma Marg, close to Badi Puliya.', 'ls-haveli'); ?>
        </p>

        <div class="location-details-list">
          <!-- Physical Address -->
          <div class="location-detail-item">
            <div class="location-detail-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <div class="location-detail-text">
              <h4><?php esc_html_e('Property Address', 'ls-haveli'); ?></h4>
              <p><?php echo esc_html($address); ?></p>
            </div>
          </div>

          <!-- WhatsApp Direct -->
          <div class="location-detail-item">
            <div class="location-detail-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            </div>
            <div class="location-detail-text">
              <h4><?php esc_html_e('Direct WhatsApp', 'ls-haveli'); ?></h4>
              <p>
                <a href="<?php echo esc_url('https://wa.me/' . $whatsapp); ?>" target="_blank" rel="noopener noreferrer" style="color: #25D366; font-weight: 600;">
                  +<?php echo esc_html($whatsapp); ?>
                </a>
                <span style="font-size: 0.8rem; display: block; color: var(--text-muted);"><?php esc_html_e('Instant response for booking enquiries', 'ls-haveli'); ?></span>
              </p>
            </div>
          </div>

          <!-- Phone Call -->
          <div class="location-detail-item">
            <div class="location-detail-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <div class="location-detail-text">
              <h4><?php esc_html_e('Telephone Desk', 'ls-haveli'); ?></h4>
              <p>
                <a href="<?php echo esc_url('tel:' . preg_replace('/[^0-9+]/', '', $phone)); ?>">
                  <?php echo esc_html($phone); ?>
                </a>
              </p>
            </div>
          </div>

          <!-- Email -->
          <div class="location-detail-item">
            <div class="location-detail-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div class="location-detail-text">
              <h4><?php esc_html_e('Email Enquiries', 'ls-haveli'); ?></h4>
              <p>
                <a href="<?php echo esc_url('mailto:' . $email); ?>">
                  <?php echo esc_html($email); ?>
                </a>
              </p>
            </div>
          </div>
        </div>

        <div style="display: flex; gap: 14px; flex-wrap: wrap;">
          <a href="<?php echo esc_url($gmaps_direction); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"></polygon></svg>
            <?php esc_html_e('Get Google Directions', 'ls-haveli'); ?>
          </a>
          <button type="button" class="btn btn-secondary btn-sm open-booking-modal">
            <?php esc_html_e('Enquire Availability', 'ls-haveli'); ?>
          </button>
        </div>
      </div>

      <!-- Right: Interactive Map Frame -->
      <div class="location-map-frame">
        <iframe 
          src="<?php echo esc_url($gmaps_embed); ?>" 
          title="<?php esc_attr_e('Map location of L S Haveli Pushkar', 'ls-haveli'); ?>"
          loading="lazy"
          allowfullscreen=""
        ></iframe>
      </div>
    </div>
  </div>
</section>
