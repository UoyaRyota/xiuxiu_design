<?php
/**
 * Displays the site nav.
 *
 * @package WordPress
 * @subpackage Xiuxiu_Design
 * @since xiuxiu design 1.0
 */
?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'xiuxiudesign' ); ?>">
	
    <?php
      wp_nav_menu(
        array(
          'container' => '',
          'theme_location'  => 'primary',
          'add_li_class' => 'header__li',
          'items_wrap'      => '<ul id="primary-menu-list" class="%2$s header__ul">%3$s</ul>',
          'add_li_class'    => 'header__li',
          'fallback_cb'     => false,
        )
      );
    ?>

  </nav><!-- #site-navigation -->

<?php endif;?>