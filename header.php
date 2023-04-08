<?php
/**
 * The template for displaying the header
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

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>My-site</title>
  <?php wp_head(); ?>

</head>



<script type="text/javascript">
    $(function(){
        //<form>タグのidを指定
        $("#formCheck").validationEngine(
            'attach', {
                promptPosition: "topLeft"//エラーメッセージ位置の指定
            }
        );
    });
</script>


<body <?php body_class(); ?>>

  <!-- include loader -->
  <!-- <?php get_template_part( 'template-parts/header/site-loader' ); ?> -->

  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
      <?php esc_html_e( 'Skip to content', 'my-site' ); ?></a>
      <?php get_template_part( 'template-parts/header/site-header' ); ?>

    <div id="content" class="site-content global-container">
      <div id="primary" class="content-area container">
        <main id="main" class="site-main">