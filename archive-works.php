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
    <li class="card7">
      <a href="<?php the_permalink(); ?>" class="works-item">
        <div class="card__image-holder sample_box">

          <?php if(has_post_thumbnail()): ?>
          <img class="works-item__thumbnail-image card__image" src="<?php the_post_thumbnail_url('large'); ?>">
          <?php endif; ?>

        </div>
      </a>
    </li>
    <?php endwhile; endif; ?>
  </ul>
</article>

<?php get_footer();?>