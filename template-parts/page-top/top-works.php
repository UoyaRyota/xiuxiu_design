<?php
/**
 * Displays the top works.
 *
 * @package WordPress
 * @subpackage Xiuxiu_Design
 * @since xiuxiu design 1.0
 */
?>

<section class="travel">

  <div class="travel__inner">
    <?php $myposts = get_posts( 'post_type=works&orderby=date&order=DESC&numberposts=1' ); ?>
    <div class="travel__img cover-slide">
    <? echo get_the_post_thumbnail( $myposts[0] ,'medium', array( 'class' => 'img-zoom' )); ?>
  </div>

    <div class="travel__texts inview">
      <div class="travel__texts-inner">
        <div class="travel__title main-title item">
          <span class="purple">XIUXIU</span>
          <span>DESIGN</span>
        </div>
        <div class="travel__sub sub-title item">世界中を旅しよう</div>
        <div class="travel__description item">
          <p>
            世界１５０ヶ国で<br />利用できる民泊サービスです。
          </p>
          <p>あなたの望む宿がきっと見つかります。</p>
        </div>
        <?php get_button('works','もっと詳しく','travel__btn item',''); ?>
      </div>
    </div>
  </div>
</section>