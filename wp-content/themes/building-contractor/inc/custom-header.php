<?php
/**
 * @package Building Contractor
 * Setup the WordPress core custom header feature.
 *
 * @uses building_contractor_header_style()
 */
function building_contractor_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'building_contractor_custom_header_args', array(
		'default-text-color'     => 'fff',
		'width'                  => 2500,
		'height'                 => 400,
		'wp-head-callback'       => 'building_contractor_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'building_contractor_custom_header_setup' );

if ( ! function_exists( 'building_contractor_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see building_contractor_custom_header_setup().
 */
function building_contractor_header_style() {
	$header_text_color = get_header_textcolor();

	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header {
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat !important;
			background-position: center top;
			background-size: cover !important;
		}

	<?php endif; ?>	

	.page-template-template-home-page .site-title a, .page-template-template-home-page p.site-title a, h1.site-title a, p.site-title a{
		color: <?php echo esc_attr(get_theme_mod('building_contractor_sitetitle_color')); ?> !important;
	}

	.page-template-template-home-page .site-description, .site-description{
		color: <?php echo esc_attr(get_theme_mod('building_contractor_sitetagline_color')); ?> !important;
	}

	.main-nav ul li a {
		color: <?php echo esc_attr(get_theme_mod('building_contractor_menu_color')); ?> !important;
	}

	.main-nav li a:hover{
		color: <?php echo esc_attr(get_theme_mod('building_contractor_menuhrv_color')); ?>;
	}

	.main-nav ul ul a{
		color: <?php echo esc_attr(get_theme_mod('building_contractor_submenu_color')); ?> !important;
	}

	.main-nav ul ul a:hover {
		color: <?php echo esc_attr(get_theme_mod('building_contractor_submenuhrv_color')); ?> !important;
	}

	.sliderbox h1 a{
		color: <?php echo esc_attr(get_theme_mod('building_contractor_slidertitle_color')); ?> !important;
	}
	#slider .redmor {
		color: <?php echo esc_attr(get_theme_mod('building_contractor_sliderbutton1text_color')); ?> !important;
	}
	#slider .redmor {
		background-color: <?php echo esc_attr(get_theme_mod('building_contractor_sliderbutton1_color')); ?> !important;
	}

	.copywrap p {
		color: <?php echo esc_attr(get_theme_mod('building_contractor_footercoypright_color')); ?> !important;
	}
	#footer h6 {
		color: <?php echo esc_attr(get_theme_mod('building_contractor_footertitle_color')); ?> !important;

	}
	#footer p {
		color: <?php echo esc_attr(get_theme_mod('building_contractor_footerdescription_color')); ?>;
	}
	#footer ul li a {
		color: <?php echo esc_attr(get_theme_mod('building_contractor_footerlist_color')); ?>;

	}
	#footer {
		background-color: <?php echo esc_attr(get_theme_mod('building_contractor_footerbg_color')); ?>;
	}
	

	</style>
	<?php 
}
endif;