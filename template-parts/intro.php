<?php
/**
 * Template part for Section A: Introduction to the Haveli
 *
 * @package LS_Haveli_Pushkar
 */

$theme_uri = get_template_directory_uri();
?>

<section class="section section-cream" id="about" aria-label="<?php esc_attr_e('About L S Haveli', 'ls-haveli'); ?>">
  <div class="container">
    <div class="intro-grid">
      <!-- Left: Authentic Image Frame -->
      <div class="intro-image-frame">
        <img 
          src="<?php echo esc_url($theme_uri . '/assets/images/facade-night.jpg'); ?>" 
          alt="<?php esc_attr_e('Exterior architectural facade of L S Haveli Pushkar with glowing arches and rooftop dining at night', 'ls-haveli'); ?>" 
          class="intro-image"
          loading="lazy"
          width="1024"
          height="768"
        />
        <div class="intro-image-badge">
          <div class="intro-badge-title">L S Haveli</div>
          <div class="intro-badge-sub"><?php esc_html_e('Pushkar, Rajasthan', 'ls-haveli'); ?></div>
        </div>
      </div>

      <!-- Right: Editorial Content -->
      <div class="intro-content">
        <span class="eyebrow"><?php esc_html_e('Boutique Heritage Hospitality', 'ls-haveli'); ?></span>
        <h2 class="section-title"><?php esc_html_e('Discover the Charm of Pushkar', 'ls-haveli'); ?></h2>
        
        <img src="<?php echo esc_url($theme_uri . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" style="margin-left: 0; margin-right: 0;" />

        <p class="lead">
          <?php esc_html_e('Nestled just moments from the holy waters of Pushkar Lake, L S Haveli is an intimate boutique haven where traditional Rajasthani architectural elegance meets genuine Indian hospitality.', 'ls-haveli'); ?>
        </p>

        <p>
          <?php esc_html_e('Built with classic Rajput arched jharokhas, warm sandstone hues, and a central courtyard pool, our haveli provides a peaceful sanctuary away from the vibrant town bazaars. Whether you are visiting for the sacred Brahma Temple, taking a tranquil morning dip, or savoring authentic local delicacies on our rooftop terrace, your stay is defined by warmth, understated comfort, and an authentic sense of place.', 'ls-haveli'); ?>
        </p>

        <!-- Highlights List -->
        <div class="intro-highlights-list">
          <div class="intro-highlight-item">
            <div class="intro-highlight-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
            </div>
            <div class="intro-highlight-text">
              <h4><?php esc_html_e('Prime Location', 'ls-haveli'); ?></h4>
              <p><?php esc_html_e('Walkable to Pushkar Lake & Brahma Temple', 'ls-haveli'); ?></p>
            </div>
          </div>

          <div class="intro-highlight-item">
            <div class="intro-highlight-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M2 12h20M2 16h20M2 8h20"></path>
              </svg>
            </div>
            <div class="intro-highlight-text">
              <h4><?php esc_html_e('Courtyard Pool', 'ls-haveli'); ?></h4>
              <p><?php esc_html_e('Refreshing open-air pool & deck', 'ls-haveli'); ?></p>
            </div>
          </div>

          <div class="intro-highlight-item">
            <div class="intro-highlight-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
              </svg>
            </div>
            <div class="intro-highlight-text">
              <h4><?php esc_html_e('Rooftop Dining', 'ls-haveli'); ?></h4>
              <p><?php esc_html_e('Fresh Indian vegetarian culinary fare', 'ls-haveli'); ?></p>
            </div>
          </div>

          <div class="intro-highlight-item">
            <div class="intro-highlight-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
            </div>
            <div class="intro-highlight-text">
              <h4><?php esc_html_e('Boutique Comfort', 'ls-haveli'); ?></h4>
              <p><?php esc_html_e('Air-conditioned rooms with private baths', 'ls-haveli'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
