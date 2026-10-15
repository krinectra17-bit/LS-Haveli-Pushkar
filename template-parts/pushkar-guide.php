<?php
/**
 * Template part for Section F: Explore Pushkar
 *
 * @package LS_Haveli_Pushkar
 */

$theme_uri = get_template_directory_uri();
?>

<section class="section section-secondary" id="pushkar" aria-label="<?php esc_attr_e('Explore Pushkar and Nearby Sacred Attractions', 'ls-haveli'); ?>">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow"><?php esc_html_e('Sacred Destination Guide', 'ls-haveli'); ?></span>
      <h2 class="section-title"><?php esc_html_e('Explore Pushkar', 'ls-haveli'); ?></h2>
      <img src="<?php echo esc_url($theme_uri . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" />
      <p class="section-subtitle">
        <?php esc_html_e('Positioned along the revered Parikarma Marg near Badi Puliya, L S Haveli offers convenient access to Pushkar most sacred ghats, ancient temples, and vibrant bazaars.', 'ls-haveli'); ?>
      </p>
    </div>

    <div class="pushkar-guide-grid">
      <!-- 1. Pushkar Lake -->
      <article class="attraction-card">
        <div class="attraction-header">
          <span class="attraction-proximity"><?php esc_html_e('Moments Away', 'ls-haveli'); ?></span>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12h20M2 16h20M2 8h20"></path></svg>
        </div>
        <h3 class="attraction-title"><?php esc_html_e('Pushkar Lake & 52 Ghats', 'ls-haveli'); ?></h3>
        <p class="attraction-desc">
          <?php esc_html_e('The spiritual epicenter of Pushkar, surrounded by 52 bathing ghats and over 500 temples. Attend the enchanting evening Maha Aarti as golden oil lamps reflect across the sacred waters.', 'ls-haveli'); ?>
        </p>
      </article>

      <!-- 2. Brahma Temple -->
      <article class="attraction-card">
        <div class="attraction-header">
          <span class="attraction-proximity"><?php esc_html_e('Short Walk', 'ls-haveli'); ?></span>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        </div>
        <h3 class="attraction-title"><?php esc_html_e('Jagatpita Brahma Temple', 'ls-haveli'); ?></h3>
        <p class="attraction-desc">
          <?php esc_html_e('One of the very few existing temples in the world dedicated to Lord Brahma. Crowned with a red spire and goose motif, it dates back to the 14th century and is Pushkar most prominent pilgrimage landmark.', 'ls-haveli'); ?>
        </p>
      </article>

      <!-- 3. Varaha Temple -->
      <article class="attraction-card">
        <div class="attraction-header">
          <span class="attraction-proximity"><?php esc_html_e('Easily Accessible', 'ls-haveli'); ?></span>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l7-4 7 4v14"></path></svg>
        </div>
        <h3 class="attraction-title"><?php esc_html_e('Historic Varaha Temple', 'ls-haveli'); ?></h3>
        <p class="attraction-desc">
          <?php esc_html_e('Pushkar oldest historic temple, built in the 12th century and dedicated to the Varaha avatar of Lord Vishnu. Renowned for its intricate carvings and rich religious heritage.', 'ls-haveli'); ?>
        </p>
      </article>

      <!-- 4. Old Rangji Temple -->
      <article class="attraction-card">
        <div class="attraction-header">
          <span class="attraction-proximity"><?php esc_html_e('Nearby', 'ls-haveli'); ?></span>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
        </div>
        <h3 class="attraction-title"><?php esc_html_e('Old Rangji Temple', 'ls-haveli'); ?></h3>
        <p class="attraction-desc">
          <?php esc_html_e('A rare architectural marvel featuring a dramatic fusion of traditional South Indian Dravidian gopuram and classic Rajput haveli masonry, dedicated to Lord Ranganatha.', 'ls-haveli'); ?>
        </p>
      </article>

      <!-- 5. Pushkar Sunset Point -->
      <article class="attraction-card">
        <div class="attraction-header">
          <span class="attraction-proximity"><?php esc_html_e('Quick Ride / Walk', 'ls-haveli'); ?></span>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line></svg>
        </div>
        <h3 class="attraction-title"><?php esc_html_e('Pushkar Sunset Point', 'ls-haveli'); ?></h3>
        <p class="attraction-desc">
          <?php esc_html_e('A beloved viewpoint overlooking the desert sands and the Aravali hills. Watch the sun dip behind the desert horizon amidst rhythmic drumming and evening melodies.', 'ls-haveli'); ?>
        </p>
      </article>

      <!-- 6. Desert Safari & Bazaars -->
      <article class="attraction-card">
        <div class="attraction-header">
          <span class="attraction-proximity"><?php esc_html_e('Local Experience', 'ls-haveli'); ?></span>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
        </div>
        <h3 class="attraction-title"><?php esc_html_e('Town Bazaars & Camel Dunes', 'ls-haveli'); ?></h3>
        <p class="attraction-desc">
          <?php esc_html_e('Stroll through Pushkar vibrant market lanes filled with authentic rose water, handmade leather goods, and silver jewelry, or venture into the Thar dunes for an afternoon safari.', 'ls-haveli'); ?>
        </p>
      </article>
    </div>
  </div>
</section>
