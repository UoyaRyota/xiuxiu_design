<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Xiu_Xiu_Design
 * @since Xiu Xiu Design 0.1
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


function xiu_xiu_design_setup() {

  /*
  * Let WordPress manage the document title.
  * This theme does not use a hard-coded <title> tag in the document head,
  * WordPress will provide it for us.
  */
  add_theme_support( 'title-tag' );

  /**
  * Add post-formats support.
  * Select box for post formatting on new submissions
  */
  add_theme_support(
    'post-formats',
    array('link','aside','gallery','image','quote','status','video','audio','chat',)
  );
  
  //Added thumbnail item to post edit screen
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1568, 9999 );
  
  /*
  * Switch default core markup for search form, comment form,
  * and comments to output valid HTML5.
  */
  add_theme_support(
    'html5',
    array('comment-form','comment-list','gallery','caption','style','script','navigation-widgets',)
  );
  
  /*
  * Add support for core custom logo.
  * Appearance > Customize > Site Info Add Logo
  */
  $logo_width  = 300;
  $logo_height = 100;
  
  add_theme_support(
    'custom-logo',array(
      'height'               => $logo_height,
      'width'                => $logo_width,
      'flex-width'           => true,
      'flex-height'          => true,
      'unlink-homepage-logo' => true,
    )
  );
  
  /**
  * Add theme support for selective refresh for widgets.
  */
  add_theme_support( 'customize-selective-refresh-widgets' );
  
  /**
  * Add support for Block Styles. 
  * The basic default styles of the lock editor are automatically reflected in the theme,
  * but some styles can be applied by enabling wp-block-styles.
  */ 
  add_theme_support( 'wp-block-styles' );
  
  //Add support for full and wide align images.
  add_theme_support( 'align-wide' );
  
  // Add support for editor styles.
  add_theme_support( 'editor-styles' );
  $background_color = get_theme_mod( 'background_color', 'D1E4DD' );
  

  
  // Add custom editor font sizes.
  add_theme_support(
    'editor-font-sizes',
    array(
      array(
        'name'      => esc_html__( 'Extra small', 'xiuxiudesign' ),
        'shortName' => esc_html_x( 'XS', 'Font size', 'xiuxiudesign' ),
        'size'      => 16,
        'slug'      => 'extra-small',
      ),
      array(
        'name'      => esc_html__( 'Small', 'xiuxiudesign' ),
        'shortName' => esc_html_x( 'S', 'Font size', 'xiuxiudesign' ),
        'size'      => 18,
        'slug'      => 'small',
      ),
      array(
        'name'      => esc_html__( 'Normal', 'xiuxiudesign' ),
        'shortName' => esc_html_x( 'M', 'Font size', 'xiuxiudesign' ),
        'size'      => 20,
        'slug'      => 'normal',
      ),
      array(
        'name'      => esc_html__( 'Large', 'xiuxiudesign' ),
        'shortName' => esc_html_x( 'L', 'Font size', 'xiuxiudesign' ),
        'size'      => 24,
        'slug'      => 'large',
      ),
      array(
        'name'      => esc_html__( 'Extra large', 'xiuxiudesign' ),
        'shortName' => esc_html_x( 'XL', 'Font size', 'xiuxiudesign' ),
        'size'      => 40,
        'slug'      => 'extra-large',
      ),
      array(
        'name'      => esc_html__( 'Huge', 'xiuxiudesign' ),
        'shortName' => esc_html_x( 'XXL', 'Font size', 'xiuxiudesign' ),
        'size'      => 96,
        'slug'      => 'huge',
      ),
      array(
        'name'      => esc_html__( 'Gigantic', 'xiuxiudesign' ),
        'shortName' => esc_html_x( 'XXXL', 'Font size', 'xiuxiudesign' ),
        'size'      => 144,
        'slug'      => 'gigantic',
      ),
    )
  );
  
  // Custom background color,Appearance > Background Set color by default
  add_theme_support('custom-background',array('default-color' => 'd1e4dd',));
  
  // Editor color palette.
  $black     = '#000000';
  $dark_gray = '#28303D';
  $gray      = '#39414D';
  $green     = '#D1E4DD';
  $blue      = '#D1DFE4';
  $purple    = '#D1D1E4';
  $red       = '#E4D1D1';
  $orange    = '#E4DAD1';
  $yellow    = '#EEEADD';
  $white     = '#FFFFFF';
  
  // Set your own color palette
  add_theme_support(
    'editor-color-palette',
    array(
      array(
        'name'  => esc_html__( 'Black', 'xiuxiudesign' ),
        'slug'  => 'black',
        'color' => $black,
      ),
      array(
        'name'  => esc_html__( 'Dark gray', 'xiuxiudesign' ),
        'slug'  => 'dark-gray',
        'color' => $dark_gray,
      ),
      array(
        'name'  => esc_html__( 'Gray', 'xiuxiudesign' ),
        'slug'  => 'gray',
        'color' => $gray,
      ),
      array(
        'name'  => esc_html__( 'Green', 'xiuxiudesign' ),
        'slug'  => 'green',
        'color' => $green,
      ),
      array(
        'name'  => esc_html__( 'Blue', 'xiuxiudesign' ),
        'slug'  => 'blue',
        'color' => $blue,
      ),
      array(
        'name'  => esc_html__( 'Purple', 'xiuxiudesign' ),
        'slug'  => 'purple',
        'color' => $purple,
      ),
      array(
        'name'  => esc_html__( 'Red', 'xiuxiudesign' ),
        'slug'  => 'red',
        'color' => $red,
      ),
      array(
        'name'  => esc_html__( 'Orange', 'xiuxiudesign' ),
        'slug'  => 'orange',
        'color' => $orange,
      ),
      array(
        'name'  => esc_html__( 'Yellow', 'xiuxiudesign' ),
        'slug'  => 'yellow',
        'color' => $yellow,
      ),
      array(
        'name'  => esc_html__( 'White', 'xiuxiudesign' ),
        'slug'  => 'white',
        'color' => $white,
      ),
    )
  );
  
  // Gradation color setting
  add_theme_support(
    'editor-gradient-presets',
    array(
      array(
        'name'     => esc_html__( 'Purple to yellow', 'xiuxiudesign' ),
        'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
        'slug'     => 'purple-to-yellow',
      ),
      array(
        'name'     => esc_html__( 'Yellow to purple', 'xiuxiudesign' ),
        'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
        'slug'     => 'yellow-to-purple',
      ),
      array(
        'name'     => esc_html__( 'Green to yellow', 'xiuxiudesign' ),
        'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
        'slug'     => 'green-to-yellow',
      ),
      array(
        'name'     => esc_html__( 'Yellow to green', 'xiuxiudesign' ),
        'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
        'slug'     => 'yellow-to-green',
      ),
      array(
        'name'     => esc_html__( 'Red to yellow', 'xiuxiudesign' ),
        'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
        'slug'     => 'red-to-yellow',
      ),
      array(
        'name'     => esc_html__( 'Yellow to red', 'xiuxiudesign' ),
        'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
        'slug'     => 'yellow-to-red',
      ),
      array(
        'name'     => esc_html__( 'Purple to red', 'xiuxiudesign' ),
        'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
        'slug'     => 'purple-to-red',
      ),
      array(
        'name'     => esc_html__( 'Red to purple', 'xiuxiudesign' ),
        'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
        'slug'     => 'red-to-purple',
      ),
    )
  );
  
  /**
  * Add support for responsive embedded content.
  * Responsive iframe support.
  */ 
  add_theme_support( 'responsive-embeds' );
  
  /**
  * Add support for custom line height controls.
  * Set up headings and paragraphs with custom line heights that can be defined. 
  */ 
  add_theme_support( 'custom-line-height' );
  
  /**
  * Add support for experimental link color control.
  * Enable color management for paragraphs, headings, groups, columns, media and text block links.
  */
  add_theme_support( 'experimental-link-color' );
  
  /**
  * Add support for experimental cover block spacing.
  * Blocks can have padding control.
  */ 
  add_theme_support( 'custom-spacing' );
  
  // Add support for custom units.
  add_theme_support( 'custom-units' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /* register global menu */
  register_nav_menus(
    array(
      'primary' => esc_html__( 'Primary menu', 'xiuxiudesign' ),
      'footer'  => esc_html__( 'Footer menu', 'xiuxiudesign' ),
    )
  );
  
}
add_action( 'after_setup_theme', 'xiu_xiu_design_setup' );


function xiu_xiu_design_script() {

  wp_enqueue_style(
    'xiuxiu-style', 
    get_template_directory_uri() . '/assets/styles/base.css', 
    array(), 
    wp_get_theme()->get( 'Version' ), 
  );

  wp_enqueue_style(
    'google-fonts-kameron',
    'https://fonts.googleapis.com/css2?family=Kameron:wght@400;700&display=swap" rel="stylesheet"',
    array(),
    wp_get_theme()->get( 'Version' ), 
    'all'
  );

  wp_enqueue_style(
    'google-fonts-noto-sans',
    '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet"',
    array(),
    wp_get_theme()->get( 'Version' ), 
    'all'
  );

  wp_enqueue_style(
    'google-fonts-api',
    'https://fonts.googleapis.com
    rel="preconnect"',
    array(),
    wp_get_theme()->get( 'Version' ), 
    'all'
  );

  wp_enqueue_style(
    'fonts-gstatic',
    'https://fonts.gstatic.com
    rel="preconnect"
    crossorigin',
    array(),
    wp_get_theme()->get( 'Version' ), 
    'all'
  );

  wp_enqueue_style(
    'google-fonts-montserrat',
    'https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap
    rel="stylesheet"',
    array(),
    wp_get_theme()->get( 'Version' ), 
    'all'
  );

  wp_enqueue_script(
    'xiuxiu-js',
    get_template_directory_uri() . '/assets/scripts/main.js',
    array(),
    wp_get_theme()->get( 'Version' ), 
    true
  );

  wp_enqueue_script(
    'test-js',
    get_template_directory_uri() . '/assets/scripts/libs/test.js',
    array(),
    wp_get_theme()->get( 'Version' ), 
    true
  );

  wp_enqueue_script(
    'contact-form-js',
    get_template_directory_uri() . '/assets/scripts/libs/contact-form.js',
    array(),
    wp_get_theme()->get( 'Version' ), 
    true
  );

  // validation
  wp_enqueue_style(
    'validation-style', 
    get_template_directory_uri() . '/assets/styles/vendors/validationEngine.jquery.css', 
    array(), 
    wp_get_theme()->get( 'Version' ), 
  );

  wp_enqueue_script(
    'jquery-js',
    '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
    array(), 
    wp_get_theme()->get( 'Version' ),  
  );

  wp_enqueue_script(
    'validation-js',
    get_template_directory_uri() . '/assets/scripts/vendors/jquery.validationEngine.min.js',
    array(),
    wp_get_theme()->get( 'Version' ), 
    true
  );

  wp_enqueue_script(
    'validation-ja-js',
    get_template_directory_uri() . '/assets/scripts/vendors/jquery.validationEngine-ja.js',
    array(),
    wp_get_theme()->get( 'Version' ), 
    true
  );


}
add_action('wp_enqueue_scripts', 'xiu_xiu_design_script');

// Added class to li in wp_nav_menu
function add_additional_class_on_li($classes, $item, $args) {
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Added class to a in wp_nav_menu
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

add_filter( 'wpcf7_validate_configuration', '__return_false' );

/**
* Reference URL
* https://miya-system-works.com/blog/detail/147
*/

// Add custom post type archive template works
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'works';
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// Add Custom Post Types
function add_custom_post_type(){

  register_post_type(
      'works',
      array( 
          'label' => '制作実績',
          'public'        => true,
          'has_archive'   => true,
          'menu_position' => 5,
          'menu_icon'     => 'dashicons-edit', 
          'supports' => array(
              'title',
              'editor',
              'author',
              'thumbnail',
          )
      )
  );
}
add_action('init', 'add_custom_post_type');

// Add a custom taxonomy
function add_custom_taxonomy(){
    register_taxonomy(
        'works-category',
        'works',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
        )
    );

    register_taxonomy(
        'works-tag',
        'works',
        array(
            'label' => 'タグ',
            'hierarchical' => false,
            'public' => true,
        )
    );
}
add_action('init', 'add_custom_taxonomy');







