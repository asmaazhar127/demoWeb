<?php
function homerenovationwork_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'homerenovationwork_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'home-renovation-work' ),
		)
	);
	

	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'home-renovation-work' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 1500*800','home-renovation-work'),
			'priority' => 1,
			'panel' => 'homerenovationwork_frontpage_sections',
		)
	);


	$wp_customize->add_setting('homerenovationwork_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new homerenovationwork_Tab_Control($wp_customize, 'homerenovationwork_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'home-renovation-work'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'home-renovation-work'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
                'slider_descriptioncolor',
                'slider_btntxt1color',
				'slider_btnbgcolor',
				'slider_btntxthrvcolor',
				'slider_scrolldownarrowiconcolor',
				'slider_scrolldownarrowbgcolor',
				'slider_arrowiconcolor',
				'slider_arrowiconbgcolor',
				'slider_arrowiconhrvcolor'

            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description Color
	$sliderdescriptioncolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt1 Color
	$sliderbtntxt1color = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'slider_btntxt1color',
    	array(
			'default' => $sliderbtntxt1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt1color',
		array(
		    'label'   		=> __('Button Text Color','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg Color
	$sliderbtnbgcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'slider_btnbgcolor',
    	array(
			'default' => $sliderbtnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbgcolor',
		array(
		    'label'   		=> __('Button BG Color','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxthrv Color
	$sliderbtntxthrvcolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'slider_btntxthrvcolor',
    	array(
			'default' => $sliderbtntxthrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxthrvcolor',
		array(
		    'label'   		=> __('Button Text Hover Color','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider scrolldownarrowicon Color
	$sliderscrolldownarrowiconcolor = esc_html__('#000', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'slider_scrolldownarrowiconcolor',
    	array(
			'default' => $sliderscrolldownarrowiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_scrolldownarrowiconcolor',
		array(
		    'label'   		=> __('Scroll Down Arrow Icon Color','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider scrolldownarrowbg Color
	$sliderscrolldownarrowbgcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'slider_scrolldownarrowbgcolor',
    	array(
			'default' => $sliderscrolldownarrowbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_scrolldownarrowbgcolor',
		array(
		    'label'   		=> __('Scroll Down Arrow BG Color','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider arrowicon Color
	$sliderarrowiconcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'slider_arrowiconcolor',
    	array(
			'default' => $sliderarrowiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_arrowiconcolor',
		array(
		    'label'   		=> __('Arrows Icon Color','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider arrowiconbg Color
	$sliderarrowiconbgcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'slider_arrowiconbgcolor',
    	array(
			'default' => $sliderarrowiconbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_arrowiconbgcolor',
		array(
		    'label'   		=> __('Arrows Icon BG Color','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider arrowiconhrv Color
	$sliderarrowiconhrvcolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'slider_arrowiconhrvcolor',
    	array(
			'default' => $sliderarrowiconhrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_arrowiconhrvcolor',
		array(
		    'label'   		=> __('Arrows Icon Hover Color','home-renovation-work'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	

	/*=========================================
	aboutus Section
	=========================================*/
	$wp_customize->add_section(
		'aboutus_setting', array(
			'title' => esc_html__( 'AboutUs Section', 'home-renovation-work' ),
			'priority' => 2,
			'panel' => 'homerenovationwork_frontpage_sections',
		)
	);

	$wp_customize->add_setting('homerenovationwork_aboutus_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new homerenovationwork_Tab_Control($wp_customize, 'homerenovationwork_aboutus_tabs', array(
	   'section' => 'aboutus_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'home-renovation-work'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
				'aboutus_disable_section',
            	'aboutus_image',
				'aboutus_imgheading',
				'aboutus_subtitle',
				'aboutus_title',
				'aboutus_description',
				'aboutus_ytvideolink',
				'aboutus_phonetitle',
				'aboutus_phonenumber',
            	'aboutus_readmorebtn_link',
				'aboutus_getstartedbtn_link'
            ),
            'active' => true,
		),
		array(
		'name' => esc_html__('Style', 'home-renovation-work'),
		'icon' => 'dashicons dashicons-art',
		'fields' => array(
			'aboutus_imgheadingcolor',
			'aboutus_imgheadingiconcolor',
			'aboutus_imgheadingbgcolor',
			'aboutus_subtitlecolor',
			'aboutus_titlecolor',
			'aboutus_descriptioncolor',
			'aboutus_phoneiconcolor',
			'aboutus_phonetextnumcolor',
			'aboutus_btntextcolor',
			'aboutus_btnbgcolor',
			'aboutus_btntexthrvcolor',
			'aboutus_btn2textcolor',
			'aboutus_btn2bgcolor',
			'aboutus_btn2texthrvcolor'
		),
     	)
    	),
	))); 


	// hide show aboutus section
	$wp_customize->add_setting(
        'aboutus_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new homerenovationwork_Toggle_Switch_Custom_Control(
            $wp_customize,
            'aboutus_disable_section',
            array(
                'settings'      => 'aboutus_disable_section',
                'section'       => 'aboutus_setting',
                'label'         => __( 'Disable Section', 'home-renovation-work' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'home-renovation-work' ),
                    'off' => __( 'No', 'home-renovation-work' )
                ),
            )
        )
    );

	// aboutus_image
	$wp_customize->add_setting(
    	'aboutus_image',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'aboutus_image',
	        array(
			    'label'   		=> __('Image 1','home-renovation-work'),
				'description'=> __('Image Size Should Be 600*500','home-renovation-work'),
	            'section' => 'aboutus_setting',
	            'settings' => 'aboutus_image'
	        )
	    )
	);


	// aboutus_imgheading
	$wp_customize->add_setting(
    	'aboutus_imgheading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imgheading',
		array(
		    'label'   		=> __('Image Heading','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_subtitle
	$wp_customize->add_setting(
    	'aboutus_subtitle',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_subtitle',
		array(
		    'label'   		=> __('Sub Title','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// aboutus_title
	$wp_customize->add_setting(
    	'aboutus_title',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_title',
		array(
		    'label'   		=> __('Title','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_description
	$wp_customize->add_setting(
    	'aboutus_description',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_description',
		array(
		    'label'   		=> __('Description','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus ytvideolink
	$wp_customize->add_setting(
    	'aboutus_ytvideolink',
    	array(
			'default' => 'https://www.youtube.com/watch?v=UPvZkoWxb84',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_ytvideolink',
		array(
		    'label'   		=> __('Video Link','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_phonetitle
	$wp_customize->add_setting(
    	'aboutus_phonetitle',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_phonetitle',
		array(
		    'label'   		=> __('Phone Number Title','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_phonenumber
	$wp_customize->add_setting(
    	'aboutus_phonenumber',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_phonenumber',
		array(
		    'label'   		=> __('Phone Number','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_readmorebtn_link
	$aboutusreadmorebtnlink = esc_html__('#', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_readmorebtn_link',
    	array(
			'default' => $aboutusreadmorebtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_readmorebtn_link',
		array(
		    'label'   		=> __('Read More Button Link','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus_getstartedbtn_link
	$aboutusreadmorebtnlink = esc_html__('#', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_getstartedbtn_link',
    	array(
			'default' => $aboutusreadmorebtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_getstartedbtn_link',
		array(
		    'label'   		=> __('Get Started Button Link','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	
	//style

	// aboutus heading Color
	$aboutusheadingcolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_imgheadingcolor',
    	array(
			'default' => $aboutusheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imgheadingcolor',
		array(
		    'label'   		=> __('Image Heading Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
	// aboutus headingicon Color
	$aboutusheadingiconcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_imgheadingiconcolor',
    	array(
			'default' => $aboutusheadingiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imgheadingiconcolor',
		array(
		    'label'   		=> __('Image Heading Icon Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus headingbg Color
	$aboutusheadingbgcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_imgheadingbgcolor',
    	array(
			'default' => $aboutusheadingbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imgheadingbgcolor',
		array(
		    'label'   		=> __('Image Heading BG Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	


	// aboutus subtitle Color
	$aboutussubtitlecolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_subtitlecolor',
    	array(
			'default' => $aboutussubtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_subtitlecolor',
		array(
		    'label'   		=> __('Sub Title Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus title Color
	$aboutustitlecolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_titlecolor',
    	array(
			'default' => $aboutustitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_titlecolor',
		array(
		    'label'   		=> __('Title Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// aboutus description Color
	$aboutusdescriptioncolor = esc_html__('#787F81', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_descriptioncolor',
    	array(
			'default' => $aboutusdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// aboutus phoneicon Color
	$aboutuslistcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_phoneiconcolor',
    	array(
			'default' => $aboutuslistcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_phoneiconcolor',
		array(
		    'label'   		=> __('Phone Number Icon Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus listicon Color
	$aboutuslisticoncolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_phonetextnumcolor',
    	array(
			'default' => $aboutuslisticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_phonetextnumcolor',
		array(
		    'label'   		=> __('Phone Text & Number Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// aboutus btntext Color
	$aboutusbtntextcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_btntextcolor',
    	array(
			'default' => $aboutusbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btntextcolor',
		array(
		    'label'   		=> __('Button 1 Text Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btnbg Color 
	$aboutusbtnbgcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_btnbgcolor',
    	array(
			'default' => $aboutusbtnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btnbgcolor',
		array(
		    'label'   		=> __('Button 1 BG Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btntexthrv Color
	$aboutusbtntexthrvcolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_btntexthrvcolor',
    	array(
			'default' => $aboutusbtntexthrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btntexthrvcolor',
		array(
		    'label'   		=> __('Button 1 Text Hover Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btn2text Color
	$aboutusbtn2textcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_btn2textcolor',
    	array(
			'default' => $aboutusbtn2textcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btn2textcolor',
		array(
		    'label'   		=> __('Button 2 Text Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btn2bg Color 
	$aboutusbtn2bgcolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_btn2bgcolor',
    	array(
			'default' => $aboutusbtn2bgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btn2bgcolor',
		array(
		    'label'   		=> __('Button 2 BG Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btn2texthrv Color
	$aboutusbtn2texthrvcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'aboutus_btn2texthrvcolor',
    	array(
			'default' => $aboutusbtn2texthrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btn2texthrvcolor',
		array(
		    'label'   		=> __('Button 2 Text Hover Color','home-renovation-work'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	/*=========================================
	ourservice Section
	=========================================*/
	$wp_customize->add_section(
		'ourservice_setting', array(
			'title' => esc_html__( 'Our Service Section', 'home-renovation-work' ),
			'priority' => 2,
			'panel' => 'homerenovationwork_frontpage_sections',
		)
	);
	

	$wp_customize->add_setting('homerenovationwork_ourservice_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new homerenovationwork_Tab_Control($wp_customize, 'homerenovationwork_ourservice_tabs', array(
	   'section' => 'ourservice_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'home-renovation-work'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'ourservice_disable_section',
				'ourservice_heading',
            	'ourservice1',
            	'ourservice2',
            	'ourservice3',
				'ourservice4',
            	'ourservice5',
            	'ourservice6',
            	'ourservice_readmorebtn_link'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'home-renovation-work'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'ourservice_headingcolor',
            	'ourservice_headingbrdcolor',
            	'ourservice_boxtitlecolor',
            	'ourservice_boxtitlehrvcolor',
				'ourservice_btntextcolor',
				'ourservice_btntextbgcolor'
            ),
     	)
	    
    	),
	))); 



	// General

	// hide show ourservice section
	$wp_customize->add_setting(
        'ourservice_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new homerenovationwork_Toggle_Switch_Custom_Control(
            $wp_customize,
            'ourservice_disable_section',
            array(
                'settings'      => 'ourservice_disable_section',
                'section'       => 'ourservice_setting',
                'label'         => __( 'Disable Section', 'home-renovation-work' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'home-renovation-work' ),
                    'off' => __( 'No', 'home-renovation-work' )
                ),
            )
        )
    );


    // ourservice_heading
	$wp_customize->add_setting(
    	'ourservice_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'ourservice_heading',
		array(
		    'label'   		=> __('Heading','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// ourservice 1
	$wp_customize->add_setting( 
    	'ourservice1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'ourservice1',
		array(
		    'label'   		=> __('Our Service 1','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	// ourservice 2
	$wp_customize->add_setting(
    	'ourservice2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'ourservice2',
		array(
		    'label'   		=> __('Our Service 2','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// ourservice 3
	$wp_customize->add_setting(
    	'ourservice3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'ourservice3',
		array(
		    'label'   		=> __('Our Service 3','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// ourservice 4
	$wp_customize->add_setting( 
    	'ourservice4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourservice4',
		array(
		    'label'   		=> __('Our Service 4','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	// ourservice 5
	$wp_customize->add_setting(
    	'ourservice5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'ourservice5',
		array(
		    'label'   		=> __('Our Service 5','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// ourservice 6
	$wp_customize->add_setting(
    	'ourservice6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'ourservice6',
		array(
		    'label'   		=> __('Our Service 6','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// ourservice_readmorebtn_link
	$ourservicereadmorebtnlink = esc_html__('#', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'ourservice_readmorebtn_link',
    	array(
			'default' => $ourservicereadmorebtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'ourservice_readmorebtn_link',
		array(
		    'label'   		=> __('Read More Button Link','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// style

	// ourservice heading color
	$ourserviceheadingcolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'ourservice_headingcolor',
    	array(
			'default' => $ourserviceheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourservice_headingcolor',
		array(
		    'label'   		=> __('Heading Color','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// ourservice headingbrd color
	$ourserviceheadingbrdcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'ourservice_headingbrdcolor',
    	array(
			'default' => $ourserviceheadingbrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourservice_headingbrdcolor',
		array(
		    'label'   		=> __('Heading Border Color','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// ourservice boxtitle color
	$ourserviceboxtitlecolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'ourservice_boxtitlecolor',
    	array(
			'default' => $ourserviceboxtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourservice_boxtitlecolor',
		array(
		    'label'   		=> __('Box Title Color','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// ourservice boxtitlehrv color
	$ourserviceboxtitlehrvcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'ourservice_boxtitlehrvcolor',
    	array(
			'default' => $ourserviceboxtitlehrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourservice_boxtitlehrvcolor',
		array(
		    'label'   		=> __('Box Title Hover Color','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// ourservice btntext color
	$ourservicebtntextcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'ourservice_btntextcolor',
    	array(
			'default' => $ourservicebtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourservice_btntextcolor',
		array(
		    'label'   		=> __('Button Text Color','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// ourservice btntextbg color
	$ourservicebtntextbgcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'ourservice_btntextbgcolor',
    	array(
			'default' => $ourservicebtntextbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourservice_btntextbgcolor',
		array(
		    'label'   		=> __('Button BG Color','home-renovation-work'),
		    'section'		=> 'ourservice_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	$wp_customize->register_control_type('homerenovationwork_Tab_Control');

}

add_action( 'customize_register', 'homerenovationwork_blog_setting' );

// feature selective refresh
function homerenovationwork_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'homerenovationwork_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'homerenovationwork_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'homerenovationwork_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'homerenovationwork_blog_section_partials' );

// blog_title
function homerenovationwork_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function homerenovationwork_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// feature description
function homerenovationwork_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


