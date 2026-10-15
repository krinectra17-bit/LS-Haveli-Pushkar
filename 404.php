<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package LS_Haveli_Pushkar
 */

get_header();
?>

<div class="section section-cream" style="padding-top: 160px; padding-bottom: 120px; text-align: center; min-height: 80vh; display: flex; align-items: center;">
  <div class="container container-narrow">
    <span class="eyebrow"><?php esc_html_e('Page Not Found', 'ls-haveli'); ?></span>
    <h1 style="font-size: clamp(3rem, 7vw, 5.5rem); color: var(--accent-gold); margin-bottom: 10px;">404</h1>
    <h2 class="section-title"><?php esc_html_e('Lost Amongst the Pushkar Bazaars?', 'ls-haveli'); ?></h2>
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" />
    <p class="lead" style="max-width: 580px; margin: 0 auto 36px auto;">
      <?php esc_html_e('The page you are looking for may have moved or no longer exists. Let us guide you back to the peaceful sanctuary of L S Haveli.', 'ls-haveli'); ?>
    </p>

    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
        <?php esc_html_e('Return to Haveli Home', 'ls-haveli'); ?>
      </a>
      <a href="<?php echo esc_url(ls_haveli_get_whatsapp_url()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
        <?php esc_html_e('Message Us on WhatsApp', 'ls-haveli'); ?>
      </a>
    </div>
  </div>
</div>

<?php
get_footer();
