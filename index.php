<?php
/**
 * The main template file
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

<!-- include header -->
<?php get_header(); ?>

<!-- include content-top -->
<?php get_template_part( 'template-parts/content/content' ); ?>

<!-- height area -->
<div class="index"></div>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>


<?php
if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();

		// get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
	// twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	// get_template_part( 'template-parts/content/content-none' );

}

get_footer();