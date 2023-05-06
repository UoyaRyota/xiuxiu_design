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
    if(get_the_ID() == '2122'){
        $x = 'form-contact';
    } else {
        $x = 'form-test';
    } 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content <?php print $x;?>">
    <?php the_content();?>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
