<?php
/**
 * Displays the site loader.
 *
 * @package WordPress
 * @subpackage Xiuxiu_Design
 * @since xiuxiu design 1.0
 */
?>

<?php if ( is_home() || is_front_page() ) : ?>
	<div id="loader_wrap">
		<div class="loader">
			<div class="loader-rotate"></div>
		</div>
	</div>
<?php endif; ?>