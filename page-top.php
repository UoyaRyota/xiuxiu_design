<?php
/**
 * The page top file
 *
 * This is an exclusive WordPress theme for XIUXIU DESIGN.
 * Basically, the content is created for the purpose of displaying your works and making inquiries
 * We plan to add necessary functions as the version is upgraded.
 *
 * @package WordPress
 * @subpackage Xiuxiu_Design
 * @since xiuxiu design 1.0
 */

get_header();

?>

<? $my_query = get_query_data('', 3); ?>
<article class="works-list-item">
  <h1 class="page-top-title">NEWS</h1>
  <ul class="cards7">
    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    <?php get_template_part( 'template-parts/page-top/archive-content' ); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </ul>
</article>
<?php get_button('works','もっと見る'); ?>

<?php get_template_part( 'template-parts/page-top/top-works' ); ?>

<? $my_query = get_query_data('works', 9); ?>
<article class="works-list-item">
  <h1 class="page-top-title wow fadeInUp">WORKS</h1>
  <ul class="cards7 wow fadeInUp">
    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    <?php get_template_part( 'template-parts/page-top/archive-content' ); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </ul>
</article>
<?php get_button('works','もっと見る'); ?>

<? get_footer();?>