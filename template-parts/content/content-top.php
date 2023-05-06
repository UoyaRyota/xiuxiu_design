<?php
/**
 * Displays the content top.
 *
 * @package WordPress
 * @subpackage Xiuxiu_Design
 * @since xiuxiu design 1.0
 */ 
?>
<?php
$args = array(
	'posts_per_page'   => 5, 
	'category'         => 1,
	'orderby'          => 'ID',
	'order'            => 'DESC',
	'exclude'          => '',
);

$datas = get_posts( $args );

if ( $datas ):

foreach ( $datas as $post ): 
	setup_postdata( $post );
?>

	<pre>
    <?php print_r($datas);?>
  </pre>

<?php
endforeach; 
else:
?>
  <?php print 'detaがありません。'; ?>
	
<?php
endif;
wp_reset_postdata();
?>