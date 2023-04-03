<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Xiuxiu_Design
 * @since xiuxiu design 1.0
 */ 
?>

<header id="masthead" class="header">
	<div class="header__inner appear up">

    <div class="logo item">
      <!-- <img class="logo__img" src="images/logo.svg" /> -->
      <span class="logo__stay">
				<?php bloginfo('name'); ?>
			</span>
		</div>

		<?php get_template_part( 'template-parts/header/site-nav' ); ?>

		<button class="mobile-menu__btn">
			<span></span>
			<span></span>
			<span></span>
		</button>

  </div>
</header>