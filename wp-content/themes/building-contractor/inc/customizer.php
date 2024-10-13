<?php
/**
 * Building Contractor Theme Customizer
 *
 * @package Building Contractor
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function building_contractor_customize_register( $wp_customize ) {

	function building_contractor_sanitize_dropdown_pages( $page_id, $setting ) {
  		$page_id = absint( $page_id );
  		return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	wp_enqueue_style('building-contractor-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');

	//Logo
    $wp_customize->add_setting('building_contractor_logo_width',array(
		'default'=> '',
		'transport' => 'refresh',
		'sanitize_callback' => 'building_contractor_sanitize_integer'
	));
	$wp_customize->add_control(new Building_Contractor_Slider_Custom_Control( $wp_customize, 'building_contractor_logo_width',array(
		'label'	=> esc_html__('Logo Width','building-contractor'),
		'section'=> 'title_tagline',
		'settings'=>'building_contractor_logo_width',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));

	// color site title
	$wp_customize->add_setting('building_contractor_sitetitle_color',array(
		'default' => '',
		'sanitize_callback' => 'building_contractor_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'building_contractor_sitetitle_color', array(
	   'settings' => 'building_contractor_sitetitle_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Title Color', 'building-contractor'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('building_contractor_title_enable',array(
		'default' => true,
		'sanitize_callback' => 'building_contractor_sanitize_checkbox',
	));
	$wp_customize->add_control( 'building_contractor_title_enable', array(
	   'settings' => 'building_contractor_title_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Title','building-contractor'),
	   'type'      => 'checkbox'
	));

	// color site tagline
	$wp_customize->add_setting('building_contractor_sitetagline_color',array(
		'default' => '',
		'sanitize_callback' => 'building_contractor_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'building_contractor_sitetagline_color', array(
	   'settings' => 'building_contractor_sitetagline_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Tagline Color', 'building-contractor'),
	   'type'      => 'color'
	));


	$wp_customize->add_setting('building_contractor_tagline_enable',array(
		'default' => false,
		'sanitize_callback' => 'building_contractor_sanitize_checkbox',
	));
	$wp_customize->add_control( 'building_contractor_tagline_enable', array(
	   'settings' => 'building_contractor_tagline_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Tagline','building-contractor'),
	   'type'      => 'checkbox'
	));

	// woocommerce section
	$wp_customize->add_section('building_contractor_woocommerce_page_settings', array(
		'title'    => __('WooCommerce Page Settings', 'building-contractor'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('building_contractor_shop_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'building_contractor_sanitize_checkbox'
	 ));
	 $wp_customize->add_control('building_contractor_shop_page_sidebar',array(
		'type' => 'checkbox',
		'label' => __(' Check To Enable Shop page sidebar','building-contractor'),
		'section' => 'building_contractor_woocommerce_page_settings',
	 ));

    // shop page sidebar alignment
    $wp_customize->add_setting('building_contractor_shop_page_sidebar_position', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'building_contractor_sanitize_choices',
	));
	$wp_customize->add_control('building_contractor_shop_page_sidebar_position',array(
		'type'           => 'radio',
		'label'          => __('Shop Page Sidebar', 'building-contractor'),
		'section'        => 'building_contractor_woocommerce_page_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'building-contractor'),
			'Right Sidebar' => __('Right Sidebar', 'building-contractor'),
		),
	));	 

	 $wp_customize->add_setting( 'building_contractor_single_page_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'building_contractor_sanitize_checkbox'
    ) );
    $wp_customize->add_control('building_contractor_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Check To Enable Single Product Page Sidebar','building-contractor'),
		'section' => 'building_contractor_woocommerce_page_settings'
    ));

	// single product page sidebar alignment
    $wp_customize->add_setting('building_contractor_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'building_contractor_sanitize_choices',
	));
	$wp_customize->add_control('building_contractor_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page Sidebar', 'building-contractor'),
		'section'        => 'building_contractor_woocommerce_page_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'building-contractor'),
			'Right Sidebar' => __('Right Sidebar', 'building-contractor'),
		),
	));

	$wp_customize->add_setting( 'building_contractor_woo_product_img_border_radius', array(
        'default'              => '0',
        'transport'            => 'refresh',
        'sanitize_callback'    => 'building_contractor_sanitize_integer'
    ) );
    $wp_customize->add_control(new building_contractor_Slider_Custom_Control( $wp_customize, 'building_contractor_woo_product_img_border_radius',array(
		'label'	=> esc_html__('Woo Product Img Border Radius','building-contractor'),
		'section'=> 'building_contractor_woocommerce_page_settings',
		'settings'=>'building_contractor_woo_product_img_border_radius',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));

	// Add a setting for number of products per row
	$wp_customize->add_setting('building_contractor_products_per_row', array(
	'default'   => '3',
	'transport' => 'refresh',
	'sanitize_callback' => 'building_contractor_sanitize_integer'
	));

	$wp_customize->add_control('building_contractor_products_per_row', array(
	'label'    => __('Woo Products Per Row', 'building-contractor'),
	'section'  => 'building_contractor_woocommerce_page_settings',
	'settings' => 'building_contractor_products_per_row',
	'type'     => 'select',
	'choices'  => array(
		'2' => '2',
		'3' => '3',
		'4' => '4',
	),
	) );

	// Add a setting for the number of products per page
	$wp_customize->add_setting('building_contractor_products_per_page', array(
	'default'   => '9',
	'transport' => 'refresh',
	'sanitize_callback' => 'building_contractor_sanitize_integer'
	));

	$wp_customize->add_control('building_contractor_products_per_page', array(
	'label'    => __('Woo Products Per Page', 'building-contractor'),
	'section'  => 'building_contractor_woocommerce_page_settings',
	'settings' => 'building_contractor_products_per_page',
	'type'     => 'number',
	'input_attrs' => array(
		'min'  => 1,
		'step' => 1,
	),
	));

    $wp_customize->add_setting('building_contractor_product_sale_position',array(
        'default' => 'Left',
        'sanitize_callback' => 'building_contractor_sanitize_choices'
	));
	$wp_customize->add_control('building_contractor_product_sale_position',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','building-contractor'),
        'section' => 'building_contractor_woocommerce_page_settings',
        'choices' => array(
            'Left' => __('Left','building-contractor'),
            'Right' => __('Right','building-contractor'),
        ),
	) );    

	//Theme Options
	$wp_customize->add_panel( 'building_contractor_panel_area', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options Panel', 'building-contractor' ),
	) );

	//Site Layout Section
	$wp_customize->add_section('building_contractor_site_layoutsec',array(
		'title'	=> __('Manage Site Layout Section ','building-contractor'),
		'description' => __('<p class="sec-title">Manage Site Layout Section</p>','building-contractor'),
		'priority'	=> 1,
		'panel' => 'building_contractor_panel_area',
	));

	$wp_customize->add_setting('building_contractor_box_layout',array(
		'default' => false,
		'sanitize_callback' => 'building_contractor_sanitize_checkbox',
	));
	$wp_customize->add_control( 'building_contractor_box_layout', array(
	   'section'   => 'building_contractor_site_layoutsec',
	   'label'	=> __('Check to Show Box Layout','building-contractor'),
	   'type'      => 'checkbox'
 	));

	$wp_customize->add_setting('building_contractor_preloader',array(
		'default' => true,
		'sanitize_callback' => 'building_contractor_sanitize_checkbox',
	));
	$wp_customize->add_control( 'building_contractor_preloader', array(
	   'section'   => 'building_contractor_site_layoutsec',
	   'label'	=> __('Check to Show preloader','building-contractor'),
	   'type'      => 'checkbox'
 	));

    $wp_customize->add_setting( 'building_contractor_layout_settings_upgraded_features',array(
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('building_contractor_layout_settings_upgraded_features', array(
	    'type'=> 'hidden',
	    'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
	        <a target='_blank' href='". esc_url(BUILDING_CONTRACTOR_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
	    'section' => 'building_contractor_site_layoutsec'
	));

   //Global Color
   $wp_customize->add_section('building_contractor_global_color', array(
	   'title'    => __('Manage Global Color Section', 'building-contractor'),
	   'panel'    => 'building_contractor_panel_area',
   ));
   $wp_customize->add_setting('building_contractor_first_color', array(
	  'default'           => '#fd7e14',
	  'sanitize_callback' => 'sanitize_hex_color',
   ));
   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'building_contractor_first_color', array(
	   'label'    => __('Theme Color One', 'building-contractor'),
	   'section'  => 'building_contractor_global_color',
	   'settings' => 'building_contractor_first_color',
   )));	

    $wp_customize->add_setting('building_contractor_second_color', array(
	  'default'           => '#1f212d',
	  'sanitize_callback' => 'sanitize_hex_color',
   ));
   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'building_contractor_second_color', array(
	   'label'    => __('Theme Color Two', 'building-contractor'),
	   'section'  => 'building_contractor_global_color',
	   'settings' => 'building_contractor_second_color',
   )));

    $wp_customize->add_setting('building_contractor_third_color', array(
	  'default'           => '#020724',
	  'sanitize_callback' => 'sanitize_hex_color',
   ));
   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'building_contractor_third_color', array(
	   'label'    => __('Theme Color Two', 'building-contractor'),
	   'section'  => 'building_contractor_global_color',
	   'settings' => 'building_contractor_third_color',
   )));
  
    $wp_customize->add_setting( 'building_contractor_global_color_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	  ));
	  $wp_customize->add_control('building_contractor_global_color_settings_upgraded_features', array(
		  'type'=> 'hidden',
		  'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			  <a target='_blank' href='". esc_url(BUILDING_CONTRACTOR_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		  'section' => 'building_contractor_global_color'
	  ));	 

 	// Header Section
	$wp_customize->add_section('building_contractor_header_section', array(
        'title' => __('Manage Header Section', 'building-contractor'),
		'description' => __('<p class="sec-title">Manage Header Section</p>','building-contractor'),
        'priority' => null,
		'panel' => 'building_contractor_panel_area',
 	));

 	$wp_customize->add_setting('building_contractor_topbar',array(
		'default' => false,
		'sanitize_callback' => 'building_contractor_sanitize_checkbox',
	));

	$wp_customize->add_control( 'building_contractor_topbar', array(
	   'section'   => 'building_contractor_header_section',
	   'label'	=> __('Check to show topbar','building-contractor'),
	   'type'      => 'checkbox'
 	));

 	$wp_customize->add_setting('building_contractor_stickyheader',array(
		'default' => false,
		'sanitize_callback' => 'building_contractor_sanitize_checkbox',
	));

	$wp_customize->add_control( 'building_contractor_stickyheader', array(
	   'section'   => 'building_contractor_header_section',
	   'label'	=> __('Check To Show Sticky Header','building-contractor'),
	   'type'      => 'checkbox'
 	));

 	$wp_customize->add_setting('building_contractor_top_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('building_contractor_top_text',array(
		'label'	=> esc_html__('Add Top Header Text','building-contractor'),
		'section'=> 'building_contractor_header_section',
		'type'=> 'text'
	));

	// header menu
	$wp_customize->add_setting('building_contractor_menu_color',array(
		'default' => '',
		'sanitize_callback' => 'building_contractor_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'building_contractor_menu_color', array(
	   'settings' => 'building_contractor_menu_color',
	   'section'   => 'building_contractor_header_section',
	   'label' => __('Menu Color', 'building-contractor'),
	   'type'      => 'color'
	));

	// header menu hover color
	$wp_customize->add_setting('building_contractor_menuhrv_color',array(
		'default' => '',
		'sanitize_callback' => 'building_contractor_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'building_contractor_menuhrv_color', array(
	   'settings' => 'building_contractor_menuhrv_color',
	   'section'   => 'building_contractor_header_section',
	   'label' => __('Menu Hover Color', 'building-contractor'),
	   'type'      => 'color'
	));

	// header sub menu color
	$wp_customize->add_setting('building_contractor_submenu_color',array(
		'default' => '',
		'sanitize_callback' => 'building_contractor_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'building_contractor_submenu_color', array(
	   'settings' => 'building_contractor_submenu_color',
	   'section'   => 'building_contractor_header_section',
	   'label' => __('SubMenu Color', 'building-contractor'),
	   'type'      => 'color'
	));

	// header sub menu hover color
	$wp_customize->add_setting('building_contractor_submenuhrv_color',array(
		'default' => '',
		'sanitize_callback' => 'building_contractor_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'building_contractor_submenuhrv_color', array(
	   'settings' => 'building_contractor_submenuhrv_color',
	   'section'   => 'building_contractor_header_section',
	   'label' => __('SubMenu Hover Color', 'building-contractor'),
	   'type'      => 'color'
	));

    $wp_customize->add_setting( 'building_contractor_header_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	  ));
	  $wp_customize->add_control('building_contractor_header_settings_upgraded_features', array(
		  'type'=> 'hidden',
		  'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			  <a target='_blank' href='". esc_url(BUILDING_CONTRACTOR_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		  'section' => 'building_contractor_header_section'
	  ));
	//Slider
  	$wp_customize->add_section('building_contractor_slider_section',array(
	    'title' => __('Manage Slider Section','building-contractor'),
	    'priority'  => null,
	    'description'	=> __('<p class="sec-title">Manage Slider Section</p> Select Category from the Dropdowns for slider, Also use the given image dimension (570 x 570).','building-contractor'),
	    'panel' => 'building_contractor_panel_area',
	));

	$wp_customize->add_setting('building_contractor_slider',array(
		'default' => false,
		'sanitize_callback' => 'building_contractor_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'building_contractor_slider', array(
	   'settings' => 'building_contractor_slider',
	   'section'   => 'building_contractor_slider_section',
	   'label'     => __('Check To Enable This Section','building-contractor'),
	   'type'      => 'checkbox'
	));

	$wp_customize->add_setting('building_contractor_slider_top_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('building_contractor_slider_top_text',array(
		'label'	=> esc_html__('Add Slider Top Text','building-contractor'),
		'section'=> 'building_contractor_slider_section',
		'type'=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

    $wp_customize->add_setting('building_contractor_slider_cat',array(
	    'default' => 'select',
	    'sanitize_callback' => 'building_contractor_sanitize_choices',
  	));
  	$wp_customize->add_control('building_contractor_slider_cat',array(
	    'type'    => 'select',
	    'choices' => $cat_post,
	    'label' => __('Select Category to display Latest Post','building-contractor'),
	    'section' => 'building_contractor_slider_section',
	));

	$wp_customize->add_setting('building_contractor_button_text',array(
		'default' => 'Explore Services',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'building_contractor_button_text', array(
	   'settings' => 'building_contractor_button_text',
	   'section'   => 'building_contractor_slider_section',
	   'label' => __('Add Button Text', 'building-contractor'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('building_contractor_button_link_slider',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('building_contractor_button_link_slider',array(
        'label' => esc_html__('Add Button Link','building-contractor'),
        'section'=> 'building_contractor_slider_section',
        'type'=> 'url'
    ));

    //Slider height
    $wp_customize->add_setting('building_contractor_slider_img_height',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('building_contractor_slider_img_height',array(
        'label' => __('Slider Image Height','building-contractor'),
        'description'   => __('Add the slider image height here (eg. 600px)','building-contractor'),
        'input_attrs' => array(
            'placeholder' => __( '500px', 'building-contractor' ),
        ),
        'section'=> 'building_contractor_slider_section',
        'type'=> 'text'
    ));

    $wp_customize->add_setting( 'building_contractor_slider_settings_upgraded_features',array(
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('building_contractor_slider_settings_upgraded_features', array(
	    'type'=> 'hidden',
	    'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
	        <a target='_blank' href='". esc_url(BUILDING_CONTRACTOR_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
	    'section' => 'building_contractor_slider_section'
	));

	// blog Section
	$wp_customize->add_section('building_contractor_below_slider_section', array(
		'title'	=> __('Manage Our Services Section','building-contractor'),
		'description'	=> __('<p class="sec-title">Manage Blog Section</p> Select Pages from the dropdown for Blog.','building-contractor'),
		'priority'	=> null,
		'panel' => 'building_contractor_panel_area',
	));

	$wp_customize->add_setting('building_contractor_disabled_pgboxes',array(
		'default' => false,
		'sanitize_callback' => 'building_contractor_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'building_contractor_disabled_pgboxes', array(
	   'settings' => 'building_contractor_disabled_pgboxes',
	   'section'   => 'building_contractor_below_slider_section',
	   'label'     => __('Check To Enable This Section','building-contractor'),
	   'type'      => 'checkbox'
	));

	$wp_customize->add_setting('building_contractor_headingtext1',array(
		'default' => ' ',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'building_contractor_headingtext1', array(
	   'settings' => 'building_contractor_headingtext1',
	   'section'   => 'building_contractor_below_slider_section',
	   'label' => __('Heading', 'building-contractor'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('building_contractor_headingtext_para',array(
		'default' => ' ',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'building_contractor_headingtext_para', array(
	   'settings' => 'building_contractor_headingtext_para',
	   'section'   => 'building_contractor_below_slider_section',
	   'label' => __('Sub Heading', 'building-contractor'),
	   'type'      => 'text'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'building_contractor_blog_cat', array(
		'default'	=> '0',
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Building_Contractor_Category_Dropdown_Custom_Control( $wp_customize, 'building_contractor_blog_cat', array(
		'section' => 'building_contractor_below_slider_section',
		'label' => __('Select Category to display Services', 'building-contractor'),
		'settings'   => 'building_contractor_blog_cat',
	) ) );

	$wp_customize->add_setting('building_contractor_post_button_text',array(
		'default' => 'Read More',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'building_contractor_post_button_text', array(
	   'settings' => 'building_contractor_post_button_text',
	   'section'   => 'building_contractor_below_slider_section',
	   'label' => __('Add Button Text', 'building-contractor'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting( 'building_contractor_secondsec_settings_upgraded_features',array(
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('building_contractor_secondsec_settings_upgraded_features', array(
	  'type'=> 'hidden',
	  'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
	      <a target='_blank' href='". esc_url(BUILDING_CONTRACTOR_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
	  'section' => 'building_contractor_below_slider_section'
	));

	//Blog post
	$wp_customize->add_section('building_contractor_blog_post_settings',array(
        'title' => __('Manage Post Section', 'building-contractor'),
        'priority' => null,
        'panel' => 'building_contractor_panel_area'
    ) );

   // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('building_contractor_sidebar_post_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'building_contractor_sanitize_choices'
	));
	$wp_customize->add_control('building_contractor_sidebar_post_layout',array(
     'type' => 'radio',
     'label'     => __('Theme Post Sidebar Position', 'building-contractor'),
     'description'   => __('This option work for blog page, archive page and search page.', 'building-contractor'),
     'section' => 'building_contractor_blog_post_settings',
     'choices' => array(
         'full' => __('Full','building-contractor'),
         'left' => __('Left','building-contractor'),
         'right' => __('Right','building-contractor'),
         'three-column' => __('Three Columns','building-contractor'),
         'four-column' => __('Four Columns','building-contractor'),
         'grid' => __('Grid Layout','building-contractor')
     ),
	) );

	$wp_customize->add_setting('building_contractor_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'building_contractor_sanitize_choices'
	));
	$wp_customize->add_control('building_contractor_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','building-contractor'),
        'section' => 'building_contractor_blog_post_settings',
        'choices' => array(
            'No Content' => __('No Content','building-contractor'),
            'Excerpt Content' => __('Excerpt Content','building-contractor'),
            'Full Content' => __('Full Content','building-contractor'),
        ),
	) );

	$wp_customize->add_setting('building_contractor_blog_post_thumb',array(
        'sanitize_callback' => 'building_contractor_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('building_contractor_blog_post_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Show / Hide Blog Post Thumbnail', 'building-contractor'),
        'section'     => 'building_contractor_blog_post_settings',
    ));

    $wp_customize->add_setting( 'building_contractor_blog_post_page_image_box_shadow', array(
        'default'              => '0',
        'transport'            => 'refresh',
        'sanitize_callback'    => 'building_contractor_sanitize_integer'
    ) );
    $wp_customize->add_control(new building_contractor_Slider_Custom_Control( $wp_customize, 'building_contractor_blog_post_page_image_box_shadow',array(
		'label'	=> esc_html__('Blog Page Image Box Shadow','building-contractor'),
		'section'=> 'building_contractor_blog_post_settings',
		'settings'=>'building_contractor_blog_post_page_image_box_shadow',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));
    $wp_customize->add_setting( 'building_contractor_post_settings_upgraded_features',array(
		'sanitize_callback' => 'sanitize_text_field'
	  ));
	  $wp_customize->add_control('building_contractor_post_settings_upgraded_features', array(
		  'type'=> 'hidden',
		  'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
			  <a target='_blank' href='". esc_url(BUILDING_CONTRACTOR_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
		  'section' => 'building_contractor_blog_post_settings'
	  ));
	// Footer Section
	$wp_customize->add_section('building_contractor_footer', array(
		'title'	=> __('Manage Footer Section','building-contractor'),
		'description'	=> __('<p class="sec-title">Manage Footer Section</p>','building-contractor'),
		'priority'	=> null,
		'panel' => 'building_contractor_panel_area',
	));

	$wp_customize->add_setting('building_contractor_footer_widget', array(
	    'default' => false,
	    'sanitize_callback' => 'building_contractor_sanitize_checkbox',
	));
	$wp_customize->add_control('building_contractor_footer_widget', array(
	    'settings' => 'building_contractor_footer_widget', // Corrected setting name
	    'section'   => 'building_contractor_footer',
	    'label'     => __('Check to Enable Footer Widget', 'building-contractor'),
	    'type'      => 'checkbox',
	));


	$wp_customize->add_setting('building_contractor_footer_bg_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'building_contractor_footer_bg_color', array(
        'label'    => __('Footer Background Color', 'building-contractor'),
        'section'  => 'building_contractor_footer',
    )));

	$wp_customize->add_setting('building_contractor_footer_bg_image',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'building_contractor_footer_bg_image',array(
        'label' => __('Footer Background Image','building-contractor'),
        'section' => 'building_contractor_footer',
    )));

	$wp_customize->add_setting('building_contractor_copyright_line',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'building_contractor_copyright_line', array(
	   'section' 	=> 'building_contractor_footer',
	   'label'	 	=> __('Copyright Line','building-contractor'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));

    $wp_customize->add_setting('building_contractor_copyright_link',array(
    	'default' => 'https://www.theclassictemplates.com/products/free-contractor-wordpress-theme',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'building_contractor_copyright_link', array(
	   'section' 	=> 'building_contractor_footer',
	   'label'	 	=> __('Link','building-contractor'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));

	//  footer coypright color
	$wp_customize->add_setting('building_contractor_footercoypright_color',array(
		'default' => '',
		'sanitize_callback' => 'building_contractor_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'building_contractor_footercoypright_color', array(
	   'settings' => 'building_contractor_footercoypright_color',
	   'section'   => 'building_contractor_footer',
	   'label' => __('Coypright Color', 'building-contractor'),
	   'type'      => 'color'
	));

	//  footer title color
	$wp_customize->add_setting('building_contractor_footertitle_color',array(
		'default' => '',
		'sanitize_callback' => 'building_contractor_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'building_contractor_footertitle_color', array(
	   'settings' => 'building_contractor_footertitle_color',
	   'section'   => 'building_contractor_footer',
	   'label' => __('Title Color', 'building-contractor'),
	   'type'      => 'color'
	));

	//  footer description color
	$wp_customize->add_setting('building_contractor_footerdescription_color',array(
		'default' => '',
		'sanitize_callback' => 'building_contractor_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'building_contractor_footerdescription_color', array(
	   'settings' => 'building_contractor_footerdescription_color',
	   'section'   => 'building_contractor_footer',
	   'label' => __('Description Color', 'building-contractor'),
	   'type'      => 'color'
	));

	//  footer list color
	$wp_customize->add_setting('building_contractor_footerlist_color',array(
		'default' => '',
		'sanitize_callback' => 'building_contractor_sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'building_contractor_footerlist_color', array(
	   'settings' => 'building_contractor_footerlist_color',
	   'section'   => 'building_contractor_footer',
	   'label' => __('List Color', 'building-contractor'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('building_contractor_scroll_hide', array(
        'default' => true,
        'sanitize_callback' => 'building_contractor_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'building_contractor_scroll_hide',array(
        'label'          => __( 'Check To Show Scroll To Top', 'building-contractor' ),
        'section'        => 'building_contractor_footer',
        'settings'       => 'building_contractor_scroll_hide',
        'type'           => 'checkbox',
    )));

     $wp_customize->add_setting('building_contractor_scroll_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'building_contractor_sanitize_choices'
    ));
    $wp_customize->add_control('building_contractor_scroll_position',array(
        'type' => 'radio',
        'section' => 'building_contractor_footer',
        'label'	 	=> __('Scroll To Top Positions','building-contractor'),
        'choices' => array(
            'Right' => __('Right','building-contractor'),
            'Left' => __('Left','building-contractor'),
            'Center' => __('Center','building-contractor')
        ),
    ) );

    $wp_customize->add_setting( 'building_contractor_footer_settings_upgraded_features',array(
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('building_contractor_footer_settings_upgraded_features', array(
	    'type'=> 'hidden',
	    'description' => "<span class='customizer-upgraded-features'>Unlock Premium Customization Features:
	        <a target='_blank' href='". esc_url(BUILDING_CONTRACTOR_PREMIUM_PAGE) ." '>Upgrade to Pro</a></span>",
	    'section' => 'building_contractor_footer'
	));

	// Google Fonts
	$wp_customize->add_section( 'building_contractor_google_fonts_section', array(
		'title'       => __( 'Google Fonts', 'building-contractor' ),
		'priority'    => 24,
	) );

	$font_choices = array(
		'Kaushan Script:' => 'Kaushan Script',
		'Emilys Candy:' => 'Emilys Candy',
		'Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900' => 'Poppins',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Montserrat:400,700' => 'Montserrat',
		'Raleway:400,700' => 'Raleway',
		'Droid Sans:400,700' => 'Droid Sans',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Oxygen:400,300,700' => 'Oxygen',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Cabin:400,700,400italic' => 'Cabin',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Bitter:400,700,400italic' => 'Bitter',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
		'Rokkitt:400' => 'Rokkitt',
	);

	$wp_customize->add_setting( 'building_contractor_headings_fonts', array(
		'sanitize_callback' => 'building_contractor_sanitize_fonts',
	));
	$wp_customize->add_control( 'building_contractor_headings_fonts', array(
		'type' => 'select',
		'description' => __('Select your desired font for the headings.', 'building-contractor'),
		'section' => 'building_contractor_google_fonts_section',
		'choices' => $font_choices
	));

	$wp_customize->add_setting( 'building_contractor_body_fonts', array(
		'sanitize_callback' => 'building_contractor_sanitize_fonts'
	));
	$wp_customize->add_control( 'building_contractor_body_fonts', array(
		'type' => 'select',
		'description' => __( 'Select your desired font for the body.', 'building-contractor' ),
		'section' => 'building_contractor_google_fonts_section',
		'choices' => $font_choices
	));	

}
add_action( 'customize_register', 'building_contractor_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function building_contractor_customize_preview_js() {
	wp_enqueue_script( 'building_contractor_customizer', esc_url(get_template_directory_uri()) . '/js/customize-preview.js', array( 'customize-preview' ), '20161510', true );
}
add_action( 'customize_preview_init', 'building_contractor_customize_preview_js' );
