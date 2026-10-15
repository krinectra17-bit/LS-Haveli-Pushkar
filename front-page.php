<?php
/**
 * The template for displaying the Front Page
 *
 * @package LS_Haveli_Pushkar
 */

get_header();
?>

<?php get_template_part('template-parts/hero'); ?>
<?php get_template_part('template-parts/booking-bar'); ?>
<?php get_template_part('template-parts/intro'); ?>
<?php get_template_part('template-parts/rooms'); ?>
<?php get_template_part('template-parts/pool-garden'); ?>
<?php get_template_part('template-parts/dining'); ?>
<?php get_template_part('template-parts/facilities'); ?>
<?php get_template_part('template-parts/pushkar-guide'); ?>
<?php get_template_part('template-parts/gallery'); ?>
<?php get_template_part('template-parts/reviews'); ?>
<?php get_template_part('template-parts/location'); ?>
<?php get_template_part('template-parts/cta'); ?>

<?php
get_footer();
