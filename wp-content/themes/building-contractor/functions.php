<?php
/**
 * Building Contractor functions and definitions
 *
 * @package Building Contractor
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'building_contractor_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function building_contractor_setup() {
	global $content_width;
	if ( ! isset( $content_width ) )
		$content_width = 680;

	load_theme_textdomain( 'building-contractor', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wp-block-styles');
	add_theme_support( 'custom-header', array(
		'default-text-color' => false,
		'header-text' => false,
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
	) );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'building-contractor' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_editor_style( 'editor-style.css' );
}
endif; // building_contractor_setup
add_action( 'after_setup_theme', 'building_contractor_setup' );

function building_contractor_the_breadcrumb() {
    echo '<div class="breadcrumb my-3">';

    if (!is_home()) {
        echo '<a class="home-main align-self-center" href="' . esc_url(home_url()) . '">';
        bloginfo('name');
        echo "</a>";

        if (is_category() || is_single()) {
            the_category(' , ');
            if (is_single()) {
                echo '<span class="current-breadcrumb mx-3">' . esc_html(get_the_title()) . '</span>';
            }
        } elseif (is_page()) {
            echo '<span class="current-breadcrumb mx-3">' . esc_html(get_the_title()) . '</span>';
        }
    }

    echo '</div>';
}

function building_contractor_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'building-contractor' ),
		'description'   => __( 'Appears on blog page sidebar', 'building-contractor' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'building-contractor' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'building-contractor' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'building-contractor' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'building-contractor' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'building-contractor' ),
		'description'   => __( 'Appears on footer', 'building-contractor' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-1 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'building-contractor' ),
		'description'   => __( 'Appears on footer', 'building-contractor' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-2 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'building-contractor' ),
		'description'   => __( 'Appears on footer', 'building-contractor' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'building-contractor' ),
		'description'   => __( 'Appears on footer', 'building-contractor' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	register_sidebar(array(
        'name'          => __('Shop Sidebar', 'building-contractor'),
        'description'   => __('Sidebar for WooCommerce shop pages', 'building-contractor'),
		'id'            => 'woocommerce_sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
	register_sidebar(array(
        'name'          => __('Single Product Sidebar', 'building-contractor'),
        'description'   => __('Sidebar for single product pages', 'building-contractor'),
		'id'            => 'woocommerce-single-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action( 'widgets_init', 'building_contractor_widgets_init' );

// Change number of products per row to 3
add_filter('loop_shop_columns', 'building_contractor_loop_columns');
if (!function_exists('building_contractor_loop_columns')) {
    function building_contractor_loop_columns() {
        $colm = get_theme_mod('building_contractor_products_per_row', 3); // Default to 3 if not set
        return $colm;
    }
}

// Use the customizer setting to set the number of products per page
function building_contractor_products_per_page($cols) {
    $cols = get_theme_mod('building_contractor_products_per_page', 9); // Default to 9 if not set
    return $cols;
}
add_filter('loop_shop_per_page', 'building_contractor_products_per_page', 9);

function building_contractor_scripts() {

	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri())."/css/bootstrap.css" );
	wp_enqueue_style('building-contractor-style', get_stylesheet_uri(), array() );
		wp_style_add_data('building-contractor-style', 'rtl', 'replace');

	require get_parent_theme_file_path( '/inc/color-scheme/custom-color-control.php' );
	wp_add_inline_style( 'building-contractor-style',$building_contractor_color_scheme_css );
	
	wp_enqueue_style( 'owl.carousel-css', esc_url(get_template_directory_uri())."/css/owl.carousel.css" );
	wp_enqueue_style( 'building-contractor-default', esc_url(get_template_directory_uri())."/css/default.css" );
	
	wp_enqueue_style( 'building-contractor-style', get_stylesheet_uri() );
	wp_enqueue_script( 'owl.carousel-js', esc_url(get_template_directory_uri()). '/js/owl.carousel.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()). '/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'building-contractor-theme', esc_url(get_template_directory_uri()) . '/js/theme.js' );
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri())."/css/fontawesome-all.css" );
	wp_enqueue_style( 'building-contractor-block-style', esc_url( get_template_directory_uri() ).'/css/blocks.css' );	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// font-family
	$building_contractor_headings_font = esc_html(get_theme_mod('building_contractor_headings_fonts'));
	$building_contractor_body_font = esc_html(get_theme_mod('building_contractor_body_fonts'));

	if ($building_contractor_headings_font) {
	    wp_enqueue_style('building-contractor-headings-fonts', 'https://fonts.googleapis.com/css?family=' . urlencode($building_contractor_headings_font));
	} else {
	    wp_enqueue_style('montserrat-headings', 'https://fonts.googleapis.com/css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900');
	}

	if ($building_contractor_body_font) {
	    wp_enqueue_style('building-contractor-body-fonts', 'https://fonts.googleapis.com/css?family=' . urlencode($building_contractor_body_font));
	} else {
	    wp_enqueue_style('montserrat-body', 'https://fonts.googleapis.com/css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900');
	}

}
add_action( 'wp_enqueue_scripts', 'building_contractor_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Google Fonts
 */
require get_template_directory() . '/inc/gfonts.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Sanitization Callbacks.
 */
require get_template_directory() . '/inc/sanitization-callbacks.php';

/**
 * Webfont-Loader.
 */
require get_template_directory() . '/inc/wptt-webfont-loader.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/upgrade-to-pro.php';

/**
 * select .
 */
require get_template_directory() . '/inc/select/category-dropdown-custom-control.php';

/**
 * Theme Info Page.
 */
require get_template_directory() . '/inc/addon.php';

 
/**
 * Theme Info Page.
 */
if ( ! defined( 'BUILDING_CONTRACTOR_PRO_NAME' ) ) {
	define( 'BUILDING_CONTRACTOR_PRO_NAME', __( 'About Building Contractor', 'building-contractor' ));
}
if ( ! defined( 'BUILDING_CONTRACTOR_THEME_PAGE' ) ) {
define('BUILDING_CONTRACTOR_THEME_PAGE',__('https://www.theclassictemplates.com/collections/best-wordpress-templates','building-contractor'));
}
if ( ! defined( 'BUILDING_CONTRACTOR_SUPPORT' ) ) {
define('BUILDING_CONTRACTOR_SUPPORT',__('https://wordpress.org/support/theme/building-contractor/','building-contractor'));
}
if ( ! defined( 'BUILDING_CONTRACTOR_REVIEW' ) ) {
define('BUILDING_CONTRACTOR_REVIEW',__('https://wordpress.org/support/theme/building-contractor/reviews/#new-post','building-contractor'));
}
if ( ! defined( 'BUILDING_CONTRACTOR_PRO_DEMO' ) ) {
define('BUILDING_CONTRACTOR_PRO_DEMO',__('https://live.theclassictemplates.com/building-contractor-shop-pro/','building-contractor'));
}
if ( ! defined( 'BUILDING_CONTRACTOR_PREMIUM_PAGE' ) ) {
define('BUILDING_CONTRACTOR_PREMIUM_PAGE',__('https://www.theclassictemplates.com/products/building-contractor-wordpress-theme','building-contractor'));
}
if ( ! defined( 'BUILDING_CONTRACTOR_THEME_DOCUMENTATION' ) ) {
define('BUILDING_CONTRACTOR_THEME_DOCUMENTATION',__('https://live.theclassictemplates.com/demo/docs/building-contractor-shop-free','building-contractor'));
}

/* Starter Content */
	add_theme_support( 'starter-content', array(
		'widgets' => array(
			'footer-1' => array(
				'categories',
			),
			'footer-2' => array(
				'archives',
			),
			'footer-3' => array(
				'meta',
			),
			'footer-4' => array(
				'search',
			),
		),
    ));

if ( ! function_exists( 'building_contractor_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function building_contractor_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/*-- Custom metafield --*/
  function building_contractor_custom_price() {
      add_meta_box( 'bn_meta', __( 'Building Contractor Meta Fields', 'building-contractor' ), 'building_contractor_render_custom_icon_meta_field', 'post', 'normal', 'high' );
  }
  if (is_admin()){
      add_action('admin_menu', 'building_contractor_custom_price');
  }

  function building_contractor_render_custom_icon_meta_field($post) {
      wp_nonce_field(basename(__FILE__), 'building_contractor_custom_icon_meta_nonce');
      $custom_icon_value = get_post_meta($post->ID, 'building_contractor_custom_icon', true);
      ?>

      <label for="building_contractor_custom_icon_field"><?php esc_html_e('Icon Class:','building-contractor'); ?></label>

      <input type="text" name="building_contractor_custom_icon_field" id="building_contractor_custom_icon_field" value="<?php echo esc_attr($custom_icon_value); ?>" />
      <p><?php esc_html_e('Example: fas fa-globe','building-contractor'); ?></p>

      <?php if (!empty($custom_icon_value)) : ?>
          <div class="custom-icon-preview">
              <i class="<?php echo esc_attr($custom_icon_value); ?>"></i>
          </div>
      <?php endif; ?>

      <?php
  }

  function building_contractor_save_custom_icon_meta($post_id) {
      if (!isset($_POST['building_contractor_custom_icon_meta_nonce']) || !wp_verify_nonce($_POST['building_contractor_custom_icon_meta_nonce'], basename(__FILE__))) {
          return;
      }
      
      if (!current_user_can('edit_post', $post_id)) {
          return;
      }
      
      if (isset($_POST['building_contractor_custom_icon_field'])) {
          update_post_meta($post_id, 'building_contractor_custom_icon', sanitize_text_field($_POST['building_contractor_custom_icon_field']));
      }
  }
  add_action('save_post', 'building_contractor_save_custom_icon_meta');