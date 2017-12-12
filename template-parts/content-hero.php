<?php
/**
 * Template part for displaying hero image on the single page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shoreditch
 */

if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
	return;
}
?>

 <div class="entry-hero" <?php shoreditch_background_image(); ?>>
 </div><!-- .entry-hero -->
 <div class="entry-hero-wrapper cierralo-entry-hero-wrapper">
  <?php
    shoreditch_entry_meta();

    the_title( '<h1 class="entry-title cierralo-entry-title-hero cierralo-font-helveltica-bold">', '</h1>' );
  ?>
  <h3 class="author-name cierrarlo-author-info cierralo-font-helveltica-neue">Posted by <span class="cierralo-author-info-orange"><?php echo get_the_author(); ?></span> on <?php echo the_date('d/m/Y'); ?> <?php echo get_the_time('g:i')?></h3>
  <div class="cierralo-entry-hero-wrapper-separator"></div>
</div><!-- .entry-hero-wrapper -->