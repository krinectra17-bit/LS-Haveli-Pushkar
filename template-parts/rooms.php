<?php
/**
 * Template part for Section B: The Stay / Rooms
 *
 * @package LS_Haveli_Pushkar
 */

$theme_uri = get_template_directory_uri();
?>

<section class="section section-secondary" id="stay" aria-label="<?php esc_attr_e('Rooms and Accommodation at L S Haveli', 'ls-haveli'); ?>">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow"><?php esc_html_e('Accommodations', 'ls-haveli'); ?></span>
      <h2 class="section-title"><?php esc_html_e('The Stay at L S Haveli', 'ls-haveli'); ?></h2>
      <img src="<?php echo esc_url($theme_uri . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" />
      <p class="section-subtitle">
        <?php esc_html_e('Thoughtfully designed guest rooms blending Rajput heritage charm with essential modern comforts for a relaxing Pushkar retreat.', 'ls-haveli'); ?>
      </p>
    </div>

    <div class="rooms-grid">
      <!-- 1. Deluxe Double Room -->
      <article class="room-card">
        <div class="room-image-wrapper">
          <img 
            src="<?php echo esc_url($theme_uri . '/assets/images/room-deluxe-double.jpg'); ?>" 
            alt="<?php esc_attr_e('Deluxe Double Room interior at L S Haveli Pushkar featuring king bed, warm accents, and window', 'ls-haveli'); ?>" 
            class="room-image"
            loading="lazy"
            width="1024"
            height="819"
          />
          <span class="room-tag"><?php esc_html_e('Double Bed', 'ls-haveli'); ?></span>
        </div>

        <div class="room-content">
          <h3 class="room-title"><?php esc_html_e('Deluxe Double Room', 'ls-haveli'); ?></h3>
          <p class="room-desc">
            <?php esc_html_e('Bright, quiet, and comfortable room featuring warm Rajasthani wall tones, comfortable double bedding, private bathroom, and air conditioning for restful slumber after exploring Pushkar.', 'ls-haveli'); ?>
          </p>

          <div class="room-amenities-pills">
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path></svg>
              Air Conditioning
            </span>
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
              Wi-Fi
            </span>
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>
              Private Bath
            </span>
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
              Daily Housekeeping
            </span>
          </div>

          <div class="room-card-footer">
            <div class="room-rate-note">
              <strong><?php esc_html_e('Direct Rate Enquiry', 'ls-haveli'); ?></strong>
              <span><?php esc_html_e('Best tariff via WhatsApp', 'ls-haveli'); ?></span>
            </div>
            <button 
              type="button" 
              class="btn btn-outline-gold btn-sm btn-room-enquiry" 
              data-room-name="Deluxe Double Room"
              aria-label="<?php esc_attr_e('Enquire for Deluxe Double Room on WhatsApp', 'ls-haveli'); ?>"
            >
              <?php esc_html_e('Enquire Room', 'ls-haveli'); ?>
            </button>
          </div>
        </div>
      </article>

      <!-- 2. Deluxe King Room -->
      <article class="room-card">
        <div class="room-image-wrapper">
          <img 
            src="<?php echo esc_url($theme_uri . '/assets/images/room-luxury-balcony.jpg'); ?>" 
            alt="<?php esc_attr_e('Deluxe King Room at L S Haveli Pushkar with king bed and heritage woodwork', 'ls-haveli'); ?>" 
            class="room-image"
            loading="lazy"
            width="1024"
            height="819"
          />
          <span class="room-tag"><?php esc_html_e('King Bed', 'ls-haveli'); ?></span>
        </div>

        <div class="room-content">
          <h3 class="room-title"><?php esc_html_e('Deluxe King Room', 'ls-haveli'); ?></h3>
          <p class="room-desc">
            <?php esc_html_e('Spacious room appointed with a plush king-size bed, handcrafted wooden details, high-speed Wi-Fi, air conditioning, and peaceful courtyard ambiance for a relaxed Pushkar experience.', 'ls-haveli'); ?>
          </p>

          <div class="room-amenities-pills">
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path></svg>
              Air Conditioning
            </span>
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
              Wi-Fi
            </span>
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect><polyline points="17 2 12 7 7 2"></polyline></svg>
              Flat-screen TV
            </span>
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>
              Private Bath
            </span>
          </div>

          <div class="room-card-footer">
            <div class="room-rate-note">
              <strong><?php esc_html_e('Direct Rate Enquiry', 'ls-haveli'); ?></strong>
              <span><?php esc_html_e('Best tariff via WhatsApp', 'ls-haveli'); ?></span>
            </div>
            <button 
              type="button" 
              class="btn btn-outline-gold btn-sm btn-room-enquiry" 
              data-room-name="Deluxe King Room"
              aria-label="<?php esc_attr_e('Enquire for Deluxe King Room on WhatsApp', 'ls-haveli'); ?>"
            >
              <?php esc_html_e('Enquire Room', 'ls-haveli'); ?>
            </button>
          </div>
        </div>
      </article>

      <!-- 3. Luxury Double Room -->
      <article class="room-card">
        <div class="room-image-wrapper">
          <img 
            src="<?php echo esc_url($theme_uri . '/assets/images/room-luxury-balcony.jpg'); ?>" 
            alt="<?php esc_attr_e('Luxury Double Room with private balcony, arched doorway, and courtyard views at L S Haveli', 'ls-haveli'); ?>" 
            class="room-image"
            loading="lazy"
            width="1024"
            height="819"
          />
          <span class="room-tag"><?php esc_html_e('Balcony / Terrace', 'ls-haveli'); ?></span>
        </div>

        <div class="room-content">
          <h3 class="room-title"><?php esc_html_e('Luxury Double Room', 'ls-haveli'); ?></h3>
          <p class="room-desc">
            <?php esc_html_e('Our premier room offering an authentic arched wooden doorway opening directly to a private balcony with traditional stone jali balustrades, offering fresh Pushkar breezes and serene views.', 'ls-haveli'); ?>
          </p>

          <div class="room-amenities-pills">
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
              Private Balcony
            </span>
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path></svg>
              Air Conditioning
            </span>
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
              Wi-Fi
            </span>
            <span class="amenity-pill">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>
              Private Bath
            </span>
          </div>

          <div class="room-card-footer">
            <div class="room-rate-note">
              <strong><?php esc_html_e('Direct Rate Enquiry', 'ls-haveli'); ?></strong>
              <span><?php esc_html_e('Best tariff via WhatsApp', 'ls-haveli'); ?></span>
            </div>
            <button 
              type="button" 
              class="btn btn-outline-gold btn-sm btn-room-enquiry" 
              data-room-name="Luxury Double Room"
              aria-label="<?php esc_attr_e('Enquire for Luxury Double Room on WhatsApp', 'ls-haveli'); ?>"
            >
              <?php esc_html_e('Enquire Room', 'ls-haveli'); ?>
            </button>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>
