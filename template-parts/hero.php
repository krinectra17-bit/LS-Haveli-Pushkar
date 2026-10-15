<?php
/**
 * Template part for displaying the Hero section
 *
 * @package LS_Haveli_Pushkar
 */

$eyebrow  = get_theme_mod('ls_haveli_hero_eyebrow', 'A HERITAGE LAKE VIEW HAVELI · PUSHKAR');
$headline = get_theme_mod('ls_haveli_hero_headline', 'A Heritage Stay, Moments from Pushkar Lake.');
$copy     = get_theme_mod('ls_haveli_hero_copy', 'Discover the charm of Pushkar at L S Haveli, where traditional Rajasthani character meets relaxed boutique hospitality.');
$theme_uri = get_template_directory_uri();
?>

<section class="hero-section" id="hero" aria-label="<?php esc_attr_e('Welcome to L S Haveli Pushkar', 'ls-haveli'); ?>">
  <div class="hero-background-wrapper">
    <picture>
      <img 
        src="<?php echo esc_url($theme_uri . '/assets/images/hero-courtyard-pool.jpg'); ?>" 
        alt="<?php esc_attr_e('L S Haveli illuminated heritage courtyard and reflection swimming pool at night in Pushkar', 'ls-haveli'); ?>" 
        class="hero-bg-image" 
        fetchpriority="high"
        width="1024" 
        height="816"
      />
    </picture>
    <div class="hero-overlay"></div>
  </div>

  <div class="container">
    <div class="hero-content">
      <div class="hero-eyebrow">
        <?php echo esc_html($eyebrow); ?>
      </div>
      
      <h1 class="hero-title">
        <?php echo esc_html($headline); ?>
      </h1>

      <p class="hero-copy">
        <?php echo esc_html($copy); ?>
      </p>

      <div class="hero-cta-group">
        <button type="button" class="btn btn-primary open-booking-modal" aria-haspopup="dialog">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg>
          <?php esc_html_e('Book Your Stay', 'ls-haveli'); ?>
        </button>

        <a href="#about" class="btn btn-light">
          <?php esc_html_e('Explore The Haveli', 'ls-haveli'); ?>
        </a>
      </div>

      <div class="hero-features-bar">
        <div class="hero-feature-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M2 12h20M2 16h20M2 8h20"></path>
          </svg>
          <span><?php esc_html_e('Courtyard Pool', 'ls-haveli'); ?></span>
        </div>
        <div class="hero-feature-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
            <line x1="6" y1="1" x2="6" y2="4"></line>
            <line x1="10" y1="1" x2="10" y2="4"></line>
            <line x1="14" y1="1" x2="14" y2="4"></line>
          </svg>
          <span><?php esc_html_e('Rooftop Dining', 'ls-haveli'); ?></span>
        </div>
        <div class="hero-feature-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 21h18M5 21V7l7-4 7 4v14M9 10h6M9 14h6M9 18h6"></path>
          </svg>
          <span><?php esc_html_e('Rajput Architecture', 'ls-haveli'); ?></span>
        </div>
        <div class="hero-feature-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span><?php esc_html_e('Moments to Pushkar Lake', 'ls-haveli'); ?></span>
        </div>
      </div>
    </div>
  </div>

  <a href="#booking-strip" class="hero-scroll-indicator" aria-label="<?php esc_attr_e('Scroll to quick booking and content', 'ls-haveli'); ?>">
    <span><?php esc_html_e('Scroll', 'ls-haveli'); ?></span>
    <div class="scroll-mouse">
      <div class="scroll-wheel"></div>
    </div>
  </a>
</section>
