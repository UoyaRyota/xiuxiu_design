<?php
/**
 * The page top file
 *
 * This is an exclusive WordPress theme for XIUXIU DESIGN.
 * Basically, the content is created for the purpose of displaying your works and making inquiries
 * We plan to add necessary functions as the version is upgraded.
 *
 * @package WordPress
 * @subpackage Xiuxiu_Design
 * @since xiuxiu design 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
  
	the_post();
	get_template_part( 'template-parts/content/content' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

endwhile; // End of the loop.
?>
  <?php
  $args = array(
    'post_type' => '',
    'posts_per_page' => 3
  );

  $my_query = new WP_Query( $args );
?>

<article class="works-list-item">
    <ul class="cards7">

      <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

      <li class="card7">
        <a href="<?php the_permalink(); ?>" class="works-item">
          <div class="card__image-holder">
            <?php if(has_post_thumbnail()): ?>
            <img class="works-item__thumbnail-image card__image" src="<?php the_post_thumbnail_url('large'); ?>">
            <?php endif; ?>
          </div>
        </a>
      </li>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </ul>
  </article>

  <div style="text-align: center;">
    <a href="<?php echo home_url().'/works'; ?>">
      <input class="wpcf7-form-control has-spinner wpcf7-submit btn filled" type="submit" value="もっと見る">
    </a>
  </div>


<section class="travel">
  <div class="travel__inner">
    <div class="travel__img cover-slide">
      <img
        class="img-zoom"
        src="http://mysite.local/wp-content/uploads/2023/04/DSC00916.jpg"
        alt=""
      />
    </div>
    <div class="travel__texts inview">
      <div class="travel__texts-inner">
        <div class="travel__title main-title item">
          <span class="purple">Travel</span>
          <span>the world</span>
        </div>
        <div class="travel__sub sub-title item">世界中を旅しよう</div>
        <div class="travel__description item">
          <p>
            世界１５０ヶ国で<br />利用できる民泊サービスです。
          </p>
          <p>あなたの望む宿がきっと見つかります。</p>
        </div>
        <div class="travel__btn item">
          <button class="btn filled">もっと詳しく</button>
        </div>
      </div>
    </div>
  </div>
</section>

  <?php
  $args = array(
    'post_type' => 'works',
    'posts_per_page' => 3
  );

  $my_query = new WP_Query( $args );
?>

  <article class="works-list-item">
    <ul class="cards7">

      <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

      <li class="card7">
        <a href="<?php the_permalink(); ?>" class="works-item">
          <div class="card__image-holder">
            <?php if(has_post_thumbnail()): ?>
            <img class="works-item__thumbnail-image card__image" src="<?php the_post_thumbnail_url('large'); ?>">
            <?php endif; ?>
          </div>
        </a>
      </li>

      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>
    </ul>
  </article>

  <div style="text-align: center;">
    <a href="<?php echo home_url().'/works'; ?>">
      <input class="wpcf7-form-control has-spinner wpcf7-submit btn filled" type="submit" value="もっと見る">
    </a>
  </div>


  <?php 
  test_post('works');
  ?>


  <? get_footer();?>