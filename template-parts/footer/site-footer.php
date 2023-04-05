
<!-- aside right area -->
<?php get_template_part( 'template-parts/footer/side-right' ); ?>

<footer class="footer appear up">
  <div class="logo item">
    <img src="assets/images/" alt="" class="logo__img" />
    <span class="site-title"><?php bloginfo( 'name' ); ?></span>
  </div>
  <nav class="footer__nav">

    <?php get_template_part( 'template-parts/footer/site-nav' ); ?>

    <div class="footer__copyright item">
      &copy; <?php bloginfo( 'name' ); ?>
    </div>
  </nav>
</footer>