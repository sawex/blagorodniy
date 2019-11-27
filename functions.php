<?php
/**
 * Blagorodnyi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blagorodnyi
 */

if ( ! defined( 'MST_BLAG_VER' ) ) {
  define( 'MST_BLAG_VER', '1.0.4' );
}

if ( ! function_exists( 'mst_blag_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mst_blag_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Blagorodnyi, use a find and replace
		 * to change 'mst_blag' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mst_blag', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mst_blag' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mst_blag_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mst_blag_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mst_blag_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mst_blag' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mst_blag' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mst_blag_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mst_blag_scripts() {
  wp_enqueue_style(
    'mst_blag-bootstrap-css',
    get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css',
    [],
    MST_BLAG_VER
  );

  wp_enqueue_style(
    'mst_blag-slick-css',
    get_template_directory_uri() . '/assets/css/slick.css',
    [],
    MST_BLAG_VER
  );

	wp_enqueue_style(
	  'mst_blag-style',
    get_stylesheet_uri(),
    [],
    MST_BLAG_VER
  );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script(
	  'mst_blag-slick-js',
    get_template_directory_uri() . '/assets/js/slick.min.js',
    [],
    MST_BLAG_VER,
    true
  );

	wp_enqueue_script(
	  'mst_blag-clipboard-js',
    get_template_directory_uri() . '/assets/js/clipboard.min.js',
    [],
    MST_BLAG_VER,
    true
  );

	wp_enqueue_script(
	  'mst_blag-gumshoe-js',
    get_template_directory_uri() . '/assets/js/gumshoe.min.js',
    [],
    MST_BLAG_VER,
    true
  );

	wp_enqueue_script(
	  'mst_blag-common',
    get_template_directory_uri() . '/assets/js/common.js',
    [],
    MST_BLAG_VER,
    true
  );

  wp_localize_script(
    'mst_blag-common',
    'mainState',
    [
      'googleMaps' => [
        'apiKey' => ST_GOOGLE_API_KEY,
        'zoom' => 16,
        'mapCenter' => [
          'latitude' => '47.831300',
          'longitude' => '35.017414',
        ],
        'markers' => [
          [
            'icon' => get_template_directory_uri() . '/assets/images/icons/location.png',
            'latitude' => '47.830920',
            'longitude' => '35.021362',
          ],
        ],
      ],
    ]
  );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mst_blag_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Set custom logo classes.
 *
 * @param string $html Logo markup
 * @return string $html New logo markup
 */
function mst_blag_change_logo_class( $html ) {
  $html = str_replace( 'custom-logo-link', 'logo', $html );
  $html = str_replace( 'custom-logo', 'logo__img', $html );
  return $html;
}

add_filter( 'get_custom_logo', 'mst_blag_change_logo_class' );
