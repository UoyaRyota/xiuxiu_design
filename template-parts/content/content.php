<?php
/**
 * Displays the content.
 *
 * @package WordPress
 * @subpackage Xiuxiu_Design
 * @since xiuxiu design 1.0
 */
?>
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php 
    if(get_the_ID() == '2122'){
        $x = 'form-contact';
      } else {
        $x = 'form-test';
      } 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="entry-content <?php print $x;?>">

    <?php
		the_content();

		?>
  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
