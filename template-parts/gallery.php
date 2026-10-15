<?php
/**
 * Template part for Section G: Photo Gallery & Lightbox
 *
 * @package LS_Haveli_Pushkar
 */

$theme_uri = get_template_directory_uri();
?>

<section class="section section-cream" id="gallery" aria-label="<?php esc_attr_e('L S Haveli Photo Gallery', 'ls-haveli'); ?>">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow"><?php esc_html_e('Visual Journey', 'ls-haveli'); ?></span>
      <h2 class="section-title"><?php esc_html_e('The Haveli Gallery', 'ls-haveli'); ?></h2>
      <img src="<?php echo esc_url($theme_uri . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" />
      <p class="section-subtitle">
        <?php esc_html_e('Explore authentic photographs of our courtyard pool, traditional Rajput architecture, comfortable rooms, and evening ambiance.', 'ls-haveli'); ?>
      </p>
    </div>

    <!-- Filter Buttons -->
    <div class="gallery-filter-bar">
      <button type="button" class="gallery-filter-btn active" data-filter="all"><?php esc_html_e('All Photographs', 'ls-haveli'); ?></button>
      <button type="button" class="gallery-filter-btn" data-filter="courtyard"><?php esc_html_e('Courtyard & Pool', 'ls-haveli'); ?></button>
      <button type="button" class="gallery-filter-btn" data-filter="rooms"><?php esc_html_e('Rooms & Suites', 'ls-haveli'); ?></button>
      <button type="button" class="gallery-filter-btn" data-filter="architecture"><?php esc_html_e('Architecture & Exterior', 'ls-haveli'); ?></button>
    </div>

    <!-- Gallery Grid -->
    <div class="gallery-grid">
      <!-- 1. Hero Courtyard Pool (Large) -->
      <div class="gallery-item large" data-category="courtyard" data-title="<?php esc_attr_e('L S Haveli illuminated courtyard pool and reflections at twilight', 'ls-haveli'); ?>">
        <img 
          src="<?php echo esc_url($theme_uri . '/assets/images/hero-courtyard-pool.jpg'); ?>" 
          alt="<?php esc_attr_e('Courtyard swimming pool reflection and Rajput arches at night at L S Haveli', 'ls-haveli'); ?>" 
          loading="lazy"
          width="1024"
          height="816"
        />
        <div class="gallery-overlay">
          <div>
            <div class="gallery-caption-title"><?php esc_html_e('Courtyard Pool Reflection', 'ls-haveli'); ?></div>
            <div class="gallery-caption-sub"><?php esc_html_e('Evening Illumination & Rajput Arches', 'ls-haveli'); ?></div>
          </div>
        </div>
      </div>

      <!-- 2. Exterior Facade -->
      <div class="gallery-item" data-category="architecture" data-title="<?php esc_attr_e('Night view of L S Haveli architectural facade and rooftop dining', 'ls-haveli'); ?>">
        <img 
          src="<?php echo esc_url($theme_uri . '/assets/images/facade-night.jpg'); ?>" 
          alt="<?php esc_attr_e('Exterior facade of L S Haveli Pushkar with glowing arches and decorative battlements', 'ls-haveli'); ?>" 
          loading="lazy"
          width="1024"
          height="768"
        />
        <div class="gallery-overlay">
          <div>
            <div class="gallery-caption-title"><?php esc_html_e('Haveli Architectural Facade', 'ls-haveli'); ?></div>
            <div class="gallery-caption-sub"><?php esc_html_e('Night View & Rooftop Terrace', 'ls-haveli'); ?></div>
          </div>
        </div>
      </div>

      <!-- 3. Pool Deck & Sun Courtyard -->
      <div class="gallery-item" data-category="courtyard" data-title="<?php esc_attr_e('Outdoor swimming pool deck and multi-tiered balconies', 'ls-haveli'); ?>">
        <img 
          src="<?php echo esc_url($theme_uri . '/assets/images/swimming-pool-garden.jpg'); ?>" 
          alt="<?php esc_attr_e('Open-air courtyard pool deck with curved edges and ornamental rooftop chhatri', 'ls-haveli'); ?>" 
          loading="lazy"
          width="1024"
          height="769"
        />
        <div class="gallery-overlay">
          <div>
            <div class="gallery-caption-title"><?php esc_html_e('Swimming Pool & Deck', 'ls-haveli'); ?></div>
            <div class="gallery-caption-sub"><?php esc_html_e('Courtyard Lounging Area', 'ls-haveli'); ?></div>
          </div>
        </div>
      </div>

      <!-- 4. Luxury Room with Balcony -->
      <div class="gallery-item" data-category="rooms" data-title="<?php esc_attr_e('Luxury guest room with wooden arched doorway and private balcony', 'ls-haveli'); ?>">
        <img 
          src="<?php echo esc_url($theme_uri . '/assets/images/room-luxury-balcony.jpg'); ?>" 
          alt="<?php esc_attr_e('Luxury guest room interior with king bed and open balcony doorway', 'ls-haveli'); ?>" 
          loading="lazy"
          width="1024"
          height="819"
        />
        <div class="gallery-overlay">
          <div>
            <div class="gallery-caption-title"><?php esc_html_e('Luxury Room & Private Balcony', 'ls-haveli'); ?></div>
            <div class="gallery-caption-sub"><?php esc_html_e('Heritage Woodwork & Balcony Views', 'ls-haveli'); ?></div>
          </div>
        </div>
      </div>

      <!-- 5. Deluxe Double Room -->
      <div class="gallery-item" data-category="rooms" data-title="<?php esc_attr_e('Deluxe Double Room interior with king bed and warm decor', 'ls-haveli'); ?>">
        <img 
          src="<?php echo esc_url($theme_uri . '/assets/images/room-deluxe-double.jpg'); ?>" 
          alt="<?php esc_attr_e('Deluxe Double Room at L S Haveli with plush bedding and ambient lighting', 'ls-haveli'); ?>" 
          loading="lazy"
          width="1024"
          height="819"
        />
        <div class="gallery-overlay">
          <div>
            <div class="gallery-caption-title"><?php esc_html_e('Deluxe Double Room', 'ls-haveli'); ?></div>
            <div class="gallery-caption-sub"><?php esc_html_e('Warm Rajput Hues & Modern Comfort', 'ls-haveli'); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
