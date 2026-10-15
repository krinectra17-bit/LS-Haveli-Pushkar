<?php
/**
 * Template part for Section C: Pool and Garden
 *
 * @package LS_Haveli_Pushkar
 */

$theme_uri = get_template_directory_uri();
?>

<section class="section section-cream pool-garden-section" id="pool" aria-label="<?php esc_attr_e('Swimming Pool and Courtyard Garden at L S Haveli', 'ls-haveli'); ?>">
  <div class="container">
    <div class="pool-garden-layout">
      <!-- Left: Photo Composition -->
      <div class="pool-gallery-stack">
        <div class="pool-photo-main">
          <img 
            src="<?php echo esc_url($theme_uri . '/assets/images/swimming-pool-garden.jpg'); ?>" 
            alt="<?php esc_attr_e('Outdoor swimming pool, courtyard deck, and multi-tier haveli facade at L S Haveli Pushkar', 'ls-haveli'); ?>" 
            loading="lazy"
            width="1024"
            height="769"
          />
        </div>
        <div class="pool-photo-sub">
          <img 
            src="<?php echo esc_url($theme_uri . '/assets/images/hero-courtyard-pool.jpg'); ?>" 
            alt="<?php esc_attr_e('Night reflection of haveli illuminated scalloped arches in swimming pool', 'ls-haveli'); ?>" 
            loading="lazy"
            width="1024"
            height="816"
          />
        </div>
        <div class="pool-photo-sub">
          <img 
            src="<?php echo esc_url($theme_uri . '/assets/images/facade-night.jpg'); ?>" 
            alt="<?php esc_attr_e('Night architecture of L S Haveli Pushkar', 'ls-haveli'); ?>" 
            loading="lazy"
            width="1024"
            height="768"
          />
        </div>
      </div>

      <!-- Right: Editorial Content -->
      <div class="pool-garden-info">
        <span class="eyebrow"><?php esc_html_e('Courtyard Retreat', 'ls-haveli'); ?></span>
        <h2 class="section-title"><?php esc_html_e('An Oasis in the Sacred Town', 'ls-haveli'); ?></h2>
        <img src="<?php echo esc_url($theme_uri . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" style="margin-left: 0; margin-right: 0;" />
        
        <p class="lead">
          <?php esc_html_e('At the heart of L S Haveli lies our serene outdoor courtyard swimming pool, flanked by graceful stone jharokha arches and sunlit open skies.', 'ls-haveli'); ?>
        </p>

        <p>
          <?php esc_html_e('Whether you desire a refreshing morning swim before temple visits or a calm evening relaxing on the poolside loungers as twilight illuminates the intricate arches, the courtyard provides an authentic, peaceful sanctuary to recharge.', 'ls-haveli'); ?>
        </p>

        <div class="pool-features-list">
          <div class="pool-feature-row">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            <span><?php esc_html_e('Outdoor swimming pool with crystal clear waters', 'ls-haveli'); ?></span>
          </div>
          <div class="pool-feature-row">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            <span><?php esc_html_e('Poolside loungers and shaded open-air seating', 'ls-haveli'); ?></span>
          </div>
          <div class="pool-feature-row">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            <span><?php esc_html_e('Atmospheric heritage illumination after sunset', 'ls-haveli'); ?></span>
          </div>
        </div>

        <button type="button" class="btn btn-primary open-booking-modal">
          <?php esc_html_e('Plan Your Visit', 'ls-haveli'); ?>
        </button>
      </div>
    </div>
  </div>
</section>
