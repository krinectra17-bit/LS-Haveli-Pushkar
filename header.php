<?php
/**
 * The header for L S Haveli theme
 *
 * @package LS_Haveli_Pushkar
 */

$theme_uri = get_template_directory_uri();
$whatsapp  = ls_haveli_get_whatsapp_number();
$phone     = ls_haveli_get_phone();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="theme-color" content="#FAF8F3">

  <!-- SEO & Social Meta -->
  <meta name="description" content="<?php esc_attr_e('Discover L S Haveli, a heritage-style boutique stay in Pushkar, Rajasthan. Explore comfortable rooms, rooftop dining, a swimming pool, and convenient access to Pushkar Lake.', 'ls-haveli'); ?>">
  <meta property="og:title" content="<?php esc_attr_e('L S Haveli, Pushkar | Heritage Stay Near Pushkar Lake', 'ls-haveli'); ?>">
  <meta property="og:description" content="<?php esc_attr_e('Traditional Rajasthani character meets relaxed boutique hospitality in Pushkar. Courtyard pool, rooftop dining, and moments from the holy lake.', 'ls-haveli'); ?>">
  <meta property="og:type" content="hotel">
  <meta property="og:image" content="<?php echo esc_url($theme_uri . '/assets/images/hero-courtyard-pool.jpg'); ?>">
  <link rel="icon" type="image/svg+xml" href="<?php echo esc_url($theme_uri . '/assets/images/favicon.svg'); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Accessible Skip Link -->
<a class="skip-link" href="#main-content"><?php esc_html_e('Skip to main content', 'ls-haveli'); ?></a>

<!-- Main Header -->
<header class="site-header transparent" id="masthead">
  <div class="container header-container">
    <!-- Brand / Wordmark -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-brand" rel="home" aria-label="<?php esc_attr_e('L S Haveli Pushkar Homepage', 'ls-haveli'); ?>">
      <img src="<?php echo esc_url($theme_uri . '/assets/images/logo-light.svg'); ?>" alt="L S Haveli — A Heritage Lake View Haveli" class="site-logo logo-light" width="210" height="40" />
      <img src="<?php echo esc_url($theme_uri . '/assets/images/logo.svg'); ?>" alt="L S Haveli — A Heritage Lake View Haveli" class="site-logo logo-dark" width="210" height="40" />
    </a>

    <!-- Desktop Navigation -->
    <nav class="nav-desktop" aria-label="<?php esc_attr_e('Main Navigation', 'ls-haveli'); ?>">
      <a href="#about" class="nav-link"><?php esc_html_e('Haveli', 'ls-haveli'); ?></a>
      <a href="#stay" class="nav-link"><?php esc_html_e('Stay', 'ls-haveli'); ?></a>
      <a href="#dining" class="nav-link"><?php esc_html_e('Dining', 'ls-haveli'); ?></a>
      <a href="#pool" class="nav-link"><?php esc_html_e('Pool & Garden', 'ls-haveli'); ?></a>
      <a href="#facilities" class="nav-link"><?php esc_html_e('Experiences', 'ls-haveli'); ?></a>
      <a href="#pushkar" class="nav-link"><?php esc_html_e('Explore Pushkar', 'ls-haveli'); ?></a>
      <a href="#gallery" class="nav-link"><?php esc_html_e('Gallery', 'ls-haveli'); ?></a>
      <a href="#location" class="nav-link"><?php esc_html_e('Location', 'ls-haveli'); ?></a>
    </nav>

    <!-- Header Actions -->
    <div class="header-cta-group">
      <button type="button" class="btn btn-primary btn-sm open-booking-modal header-book-btn" aria-haspopup="dialog">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
          <line x1="16" y1="2" x2="16" y2="6"></line>
          <line x1="8" y1="2" x2="8" y2="6"></line>
          <line x1="3" y1="10" x2="21" y2="10"></line>
        </svg>
        <span class="btn-text-full"><?php esc_html_e('Book Your Stay', 'ls-haveli'); ?></span>
        <span class="btn-text-short"><?php esc_html_e('Book', 'ls-haveli'); ?></span>
      </button>

      <!-- Mobile Hamburger Button -->
      <button type="button" class="mobile-nav-toggle" aria-controls="mobileDrawer" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation menu', 'ls-haveli'); ?>">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-nav-backdrop" id="mobileBackdrop"></div>
<aside class="mobile-nav-drawer" id="mobileDrawer" aria-label="<?php esc_attr_e('Mobile Navigation', 'ls-haveli'); ?>">
  <div>
    <div class="mobile-drawer-header">
      <img src="<?php echo esc_url($theme_uri . '/assets/images/logo.svg'); ?>" alt="L S Haveli" style="height: 32px; width: auto;" />
      <button type="button" class="mobile-drawer-close" aria-label="<?php esc_attr_e('Close navigation menu', 'ls-haveli'); ?>">&times;</button>
    </div>

    <nav class="mobile-nav-links">
      <a href="#about" class="mobile-nav-link"><?php esc_html_e('The Haveli', 'ls-haveli'); ?></a>
      <a href="#stay" class="mobile-nav-link"><?php esc_html_e('Rooms & Suites', 'ls-haveli'); ?></a>
      <a href="#dining" class="mobile-nav-link"><?php esc_html_e('Rooftop Dining', 'ls-haveli'); ?></a>
      <a href="#pool" class="mobile-nav-link"><?php esc_html_e('Courtyard Pool', 'ls-haveli'); ?></a>
      <a href="#facilities" class="mobile-nav-link"><?php esc_html_e('Facilities', 'ls-haveli'); ?></a>
      <a href="#pushkar" class="mobile-nav-link"><?php esc_html_e('Explore Pushkar', 'ls-haveli'); ?></a>
      <a href="#gallery" class="mobile-nav-link"><?php esc_html_e('Photo Gallery', 'ls-haveli'); ?></a>
      <a href="#location" class="mobile-nav-link"><?php esc_html_e('Location & Map', 'ls-haveli'); ?></a>
    </nav>
  </div>

  <div class="mobile-nav-footer">
    <button type="button" class="btn btn-primary open-booking-modal" style="width: 100%;">
      <?php esc_html_e('Book Your Stay', 'ls-haveli'); ?>
    </button>
    
    <div class="mobile-contact-info">
      <p style="margin-bottom: 4px;"><strong><?php esc_html_e('Direct WhatsApp:', 'ls-haveli'); ?></strong> +<?php echo esc_html($whatsapp); ?></p>
      <p style="margin-bottom: 0;"><strong><?php esc_html_e('Front Desk:', 'ls-haveli'); ?></strong> <?php echo esc_html($phone); ?></p>
    </div>
  </div>
</aside>

<main id="main-content" class="site-main">
