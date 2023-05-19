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

<article class="works-list-item" style="margin: 0px;">
  <h1 class="works-list-title"></h1>
  <ul class="cards7">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <li class="card7 card_size <?php if($_SERVER['REQUEST_URI'] === '/works/') {
  print 'works-opacity';
} ?>" style="">
  <a href="<?php the_permalink(); ?>" class="works-item" style="color: black;text-decoration: none;" style="margin: 0px; width:25%; height:100%;">
    <div class="card__image-holder" style="padding-bottom:90%; overflow:visible;">
      <?php if(has_post_thumbnail()): ?>
      <img class="works-item__thumbnail-image card__image" src="<?php the_post_thumbnail_url('large'); ?>" style="height: 340px; object-fit: cover;">
      <?php endif; ?>
    </div>
    <p style="color: black;text-decoration: none;">

    <?php

        if ( mb_strlen( $post->post_content, 'UTF-8' ) > 60 ) {
          $remove_array = ["\r\n", "\r", "\n", " ", "　"];
          $content = wp_trim_words( get_the_content(), 60, '…' );
          $content = str_replace($remove_array, '', $content);
          echo $content;

        } else {
          echo strip_tags( $post->post_content );
        }
    ?>

    </p>
  </a>
</li>
      <!-- <?php get_template_part( 'template-parts/page-top/archive-content' ); ?> -->
    <?php endwhile; endif; ?>
  </ul>
</article>

<?php get_footer();?>