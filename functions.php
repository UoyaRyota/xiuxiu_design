<?php

/** 
 * register widget
*/

function xiu_xiu_design_widgets_init() {

  if ( function_exists('register_sidebar') ){
    register_sidebar(array(
      'name' => 'sidebar',
      'id' => 'sidebar',
      'description' => '',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
  }
}

add_action( 'widgets_init', 'xiu_xiu_design_widgets_init' );


/* register global menu */
register_nav_menus(
  array(
    'primary' => esc_html__( 'Primary menu', 'xiuxiudesign' ),
    'footer'  => esc_html__( 'Footer menu', 'xiuxiudesign' ),
  )
);

function xiu_xiu_design_script() {

  wp_enqueue_style(
    'xiuxiu-style', 
    get_template_directory_uri() . '/assets/styles/base.css', 
    array(), 
    wp_get_theme()->get( 'Version' ), 
  );

  wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/assets/script/main.js',
    array('jquery'),
    '1.0.0',
    true
  );

  wp_enqueue_style(
    'google-fonts-kameron',
    'https://fonts.googleapis.com/css2?family=Kameron:wght@400;700&display=swap" rel="stylesheet"',
    array(),
    '1.0.0',
    'all'
  );

  wp_enqueue_style(
    'google-fonts-noto-sans',
    '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet" rel="stylesheet"',
    array(),
    '1.0.0',
    'all'
  );

}

add_action('wp_enqueue_scripts', 'xiu_xiu_design_script');


// https://zenn.dev/minnanowp/articles/823e3eabd24f20
// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args) {
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

// メニューにcss追加
// https://techmemo.biz/wordpress/wp-nav-menu-add-class/



