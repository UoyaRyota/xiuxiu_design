<?php
/**
 * The template for displaying archive pages
 *
 * This is an exclusive WordPress theme for XIUXIU DESIGN.
 * Basically, the content is created for the purpose of displaying your works and making inquiries
 * We plan to add necessary functions as the version is upgraded.
 *
 * @package WordPress
 * @subpackage Xiuxiu_Design
 * @since xiuxiu design 1.0
 */

?>

<?php get_header();?>

<article class="works-list-item">
  <h1 class="works-list-title">ともに育む森、というブランディング</h1>
  <ul class="cards7">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part( 'template-parts/page-top/archive-content' ); ?>
    <?php endwhile; endif; ?>
  </ul>
</article>

<?php get_footer();?>