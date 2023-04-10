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

<?php ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="works-list__list-item">
        <a href="<?php the_permalink(); ?>" class="works-item">
            <div class="works-item__thumbnail">
                <?php ?>
                <?php if(has_post_thumbnail()): ?>
                <img class="works-item__thumbnail-image" src="<?php the_post_thumbnail_url('large'); ?>">
                <?php endif; ?>
                <?php ?>
            </div>
            <div class="works-item__content">
                <?php ?>
                <h3 class="works-item__content-title"><?php the_title(); ?></h3>
                <?php ?>
            </div>
        </a>
    </article>
<?php endwhile; endif; ?>
<?php ?>

<?php get_footer();?>
