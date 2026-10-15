<?php
/**
 * The template for displaying all pages
 *
 * @package LS_Haveli_Pushkar
 */

get_header();
?>

<div class="section section-cream" style="padding-top: 140px; min-height: 75vh;">
  <div class="container container-narrow">
    <?php
    while (have_posts()) : the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="section-header text-left">
          <span class="eyebrow"><?php esc_html_e('L S Haveli · Pushkar', 'ls-haveli'); ?></span>
          <h1 class="section-title"><?php the_title(); ?></h1>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" style="margin-left: 0;" />
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div style="margin-bottom: 36px; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
            <?php the_post_thumbnail('full'); ?>
          </div>
        <?php endif; ?>

        <div class="page-content" style="font-size: 1.05rem; line-height: 1.8; color: var(--text-primary);">
          <?php the_content(); ?>
        </div>
      </article>
      <?php
    endwhile;
    ?>
  </div>
</div>

<?php
get_footer();
