<?php
function homerenovationwork_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'home-renovation-work'),
		) 
	);

	
	/*=========================================
	Home Renovation Work Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','home-renovation-work'),
			'panel'  		=> 'header_section',
		)
    );


	// topheader Logo Width
    $wp_customize->add_setting('topheader_logowidth',array(
        'default' => 100,
        'sanitize_callback' => 'homerenovationwork_sanitize_float'
    ));
    $wp_customize->add_control(new homerenovationwork_Custom_Control( $wp_customize, 'topheader_logowidth',array(
	    'label' => __('Logo Width','home-renovation-work'),
	    'section' => 'title_tagline',
	    'input_attrs' => array(
	            'min' => 0,
	            'max' => 500,
	            'step' => 1,
	        ),
    )));

	
	// logo section padding 
	$wp_customize->add_setting('homerenovationwork_logo_padding',array(
		'sanitize_callback'   => 'esc_html'
	));
	$wp_customize->add_control('homerenovationwork_logo_padding',array(
		'label' => __('Logo Padding','home-renovation-work'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('homerenovationwork_logo_top_padding',array(
		'default' => '2',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('homerenovationwork_logo_top_padding',array(
		'type' => 'number',
		'label' => __('Top','home-renovation-work'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('homerenovationwork_logo_left_padding',array(
		'default' => '2',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('homerenovationwork_logo_left_padding',array(
		'type' => 'number',
		'label' => __('Left','home-renovation-work'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('homerenovationwork_logo_bottom_padding',array(
		'default' => '2',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('homerenovationwork_logo_bottom_padding',array(
		'type' => 'number',
		'label' => __('Bottom','home-renovation-work'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('homerenovationwork_logo_right_padding',array(
		'default' => '2',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('homerenovationwork_logo_right_padding',array(
		'type' => 'number',
		'label' => __('Right','home-renovation-work'),
		'section' => 'title_tagline',
	));


    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#293C4B', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','home-renovation-work'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#293C4B', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','home-renovation-work'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Home Renovation Work header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','home-renovation-work'),
			'panel'  		=> 'header_section',
		)
    );	

	
    $wp_customize->add_setting('homerenovationwork_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new homerenovationwork_Tab_Control($wp_customize, 'homerenovationwork_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'home-renovation-work'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
				'tophead_phone',
				'tophead_mail',
				'tophead_fblink',
				'tophead_instalink',
				'tophead_twitterlink',
				'tophead_pinterestlink',
				'topheader_btntextlink',
				'topheader_btntext'

            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'home-renovation-work'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'header_topheadbgcolor',
				'header_phonmailiconcolor',
				'header_topheadphonmailtextcolor',
				'header_topheadiconscolor',
				'header_topheadiconsbrdcolor',
				'header_topheadiconshovrcolor',
				'header_bgcolor',
            	'header_menuscolor',
            	'header_menushovercolor',
            	'header_submenusbgcolor',
            	'header_submenusbordercolor',
            	'header_submenutextcolor',
				'header_submenutexticoncolor',
            	'header_submenusbghovercolor',
            	'header_submenustxthovercolor',
            	'header_btntxtcolor',
            	'header_btnbgcolor',
            	'header_btntxthrvcolor'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'homerenovationwork_switch_sanitization'
   	) );
   	$wp_customize->add_control( new homerenovationwork_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','home-renovation-work' ),
        'section' => 'top_header'
   	)));


	// tophead phone
	$topheadphone = esc_html__('+000 0000 000', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'tophead_phone',
    	array(
			'default' => $topheadphone,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'tophead_phone',
		array(
		    'label'   		=> __('Top Head Phone','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// tophead mail
	$topheadmail = esc_html__('demo@example.com', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'tophead_mail',
    	array(
			'default' => $topheadmail,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'tophead_mail',
		array(
		    'label'   		=> __('Top Head Mail','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// tophead fblink
	$topheadfblink = esc_html__('#', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'tophead_fblink',
    	array(
			'default' => $topheadfblink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'tophead_fblink',
		array(
		    'label'   		=> __('Facebook Link','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// tophead twitterlink
	$topheadtwitterlink = esc_html__('#', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'tophead_twitterlink',
    	array(
			'default' => $topheadtwitterlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'tophead_twitterlink',
		array(
		    'label'   		=> __('Twitter Link','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// tophead instalink
	$topheadinstalink = esc_html__('#', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'tophead_instalink',
    	array(
			'default' => $topheadinstalink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'tophead_instalink',
		array(
		    'label'   		=> __('Instagtram Link','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// tophead pinterestlink
	$topheadpinterestlink = esc_html__('#', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'tophead_pinterestlink',
    	array(
			'default' => $topheadpinterestlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'tophead_pinterestlink',
		array(
		    'label'   		=> __('Pinterest Link','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// topheader btntextlink
	$topheaderbtntextlink = esc_html__('#', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'topheader_btntextlink',
    	array(
			'default' => $topheaderbtntextlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntextlink',
		array(
		    'label'   		=> __('Button Link','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader btntext
	$topheaderbtntext = esc_html__('Contact Us', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'topheader_btntext',
    	array(
			'default' => $topheaderbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntext',
		array(
		    'label'   		=> __('Button Text','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);



	// Style setting


	// header topheadbg Color
	$headertopheadbgcolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_topheadbgcolor',
    	array(
			'default' => $headertopheadbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadbgcolor',
		array(
		    'label'   		=> __('Top Head BG Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header phonmailicon Color
	$headerphonmailiconcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_phonmailiconcolor',
    	array(
			'default' => $headerphonmailiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_phonmailiconcolor',
		array(
		    'label'   		=> __('Phone Icon & Mail Icon Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadphnmailtext Color
	$headertopheadphnmailtextcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_topheadphonmailtextcolor',
    	array(
			'default' => $headertopheadphnmailtextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadphonmailtextcolor',
		array(
		    'label'   		=> __('Phone Number & Mail Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadicons Color
	$headertopheadiconscolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_topheadiconscolor',
    	array(
			'default' => $headertopheadiconscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadiconscolor',
		array(
		    'label'   		=> __('Social Icons Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadiconsbrd Color
	$headertopheadiconsbrdcolor = esc_html__('#4F5F65', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_topheadiconsbrdcolor',
    	array(
			'default' => $headertopheadiconsbrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadiconsbrdcolor',
		array(
		    'label'   		=> __('Social Icons Border Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadiconshovr Color
	$headertopheadiconshovrcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_topheadiconshovrcolor',
    	array(
			'default' => $headertopheadiconshovrcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadiconshovrcolor',
		array(
		    'label'   		=> __('Social Icons Hover Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// header bg Color
	$headerbgcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_bgcolor',
    	array(
			'default' => $headerbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bgcolor',
		array(
		    'label'   		=> __('Bottom Header BG Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menus Color
	$headermenuscolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menushover Color
	$headermenushovercolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_menushovercolor',
    	array(
			'default' => $headermenushovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menushovercolor',
		array(
		    'label'   		=> __('Menus Hover & Active Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbgcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbordercolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_submenusbordercolor',
    	array(
			'default' => $headersubmenusbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbordercolor',
		array(
		    'label'   		=> __('SubMenus Border Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenutexticon Color
	$headersubmenutexticoncolor = esc_html__('#000', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_submenutexticoncolor',
    	array(
			'default' => $headersubmenutexticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutexticoncolor',
		array(
		    'label'   		=> __('SubMenus Text Icon Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenusbghover Color
	$headersubmenusbghovercolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_submenusbghovercolor',
    	array(
			'default' => $headersubmenusbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbghovercolor',
		array(
		    'label'   		=> __('SubMenus BG Hover Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('SubMenus Text Hover Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	

	// header btntxt Color
	$headermailtxtcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_btntxtcolor',
    	array(
			'default' => $headermailtxtcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxtcolor',
		array(
		    'label'   		=> __('Button Text Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btnbg Color
	$headermailtxthovercolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_btnbgcolor',
    	array(
			'default' => $headermailtxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbgcolor',
		array(
		    'label'   		=> __('Button BG Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	

	// header btntxthrv Color
	$headerbordercolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'header_btntxthrvcolor',
    	array(
			'default' => $headerbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxthrvcolor',
		array(
		    'label'   		=> __('Button Text Hover Color','home-renovation-work'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	$wp_customize->register_control_type('homerenovationwork_Tab_Control');
	$wp_customize->register_panel_type( 'homerenovationwork_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'homerenovationwork_WP_Customize_Section' );

}
add_action( 'customize_register', 'homerenovationwork_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class homerenovationwork_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'homerenovationwork_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class homerenovationwork_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'homerenovationwork_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






