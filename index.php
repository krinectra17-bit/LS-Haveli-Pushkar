<?php
/**
 * The main template file
 *
 * @package LS_Haveli_Pushkar
 */

get_header();
?>

<div class="section section-cream" style="padding-top: 140px; min-height: 70vh;">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow"><?php esc_html_e('Journal & Updates', 'ls-haveli'); ?></span>
      <h1 class="section-title"><?php esc_html_e('Latest from L S Haveli', 'ls-haveli'); ?></h1>
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" />
    </div>

    <div class="rooms-grid">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('room-card'); ?>>
            <?php if (has_post_thumbnail()) : ?>
              <div class="room-image-wrapper">
                <?php the_post_thumbnail('medium_large', array('class' => 'room-image')); ?>
              </div>
            <?php endif; ?>
            <div class="room-content">
              <h2 class="room-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div class="room-desc"><?php the_excerpt(); ?></div>
              <div class="room-card-footer">
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-gold btn-sm"><?php esc_html_e('Read More', 'ls-haveli'); ?></a>
              </div>
            </div>
          </article>
          <?php
        endwhile;
        the_posts_navigation();
      else :
        ?>
        <p style="grid-column: span 3; text-align: center; color: var(--text-secondary);">
          <?php esc_html_e('No articles published at this time. Return to our homepage to explore the property.', 'ls-haveli'); ?>
        </p>
        <?php
      endif;
      ?>
    </div>
  </div>
</div>

<?php
get_footer();
