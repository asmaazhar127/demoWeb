<?php
function homerenovationwork_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'home-renovation-work'),
		) 
	);

    

	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer','home-renovation-work'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'homerenovationwork_sanitize_text',
			'priority'  => 3,
		)
	);
	
	// Footer Copyright 
	$homerenovationwork_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $homerenovationwork_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('CopyRight','home-renovation-work'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	



	// footer copyright color
	$footercopyrightcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'footer_copyrightcolor',
    	array(
			'default' => $footercopyrightcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightcolor',
		array(
		    'label'   		=> __('Copyright Color','home-renovation-work'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer copyrightbrd color
	$footercopyrightbrdcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'footer_copyrightbrdcolor',
    	array(
			'default' => $footercopyrightbrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightbrdcolor',
		array(
		    'label'   		=> __('Border Color','home-renovation-work'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer widgettile color
	$footerwidgettilecolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'footer_widgettilecolor',
    	array(
			'default' => $footerwidgettilecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_widgettilecolor',
		array(
		    'label'   		=> __('Widegts Title Color','home-renovation-work'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer text color
	$footertextcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'footer_textcolor',
    	array(
			'default' => $footertextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_textcolor',
		array(
		    'label'   		=> __('Text Color','home-renovation-work'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer icon color
	$footericoncolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'footer_iconcolor',
    	array(
			'default' => $footericoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_iconcolor',
		array(
		    'label'   		=> __('Icon Color','home-renovation-work'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer listhover color
	$footerlisthovercolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'footer_listhovercolor',
    	array(
			'default' => $footerlisthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_listhovercolor',
		array(
		    'label'   		=> __('List Hover Color','home-renovation-work'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltotopicon color
	$footerscrolltotopiconcolor = esc_html__('#fff', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'footer_scrolltotopiconcolor',
    	array(
			'default' => $footerscrolltotopiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopiconcolor',
		array(
		    'label'   		=> __('Scroll To Top Icon Color','home-renovation-work'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltotopiconbg color
	$footerscrolltotopiconbgcolor = esc_html__('#FF5B4A', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'footer_scrolltotopiconbgcolor',
    	array(
			'default' => $footerscrolltotopiconbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopiconbgcolor',
		array(
		    'label'   		=> __('Scroll To Top Icon BG Color','home-renovation-work'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltotopiconbghrv color
	$footerscrolltotopiconbghrvcolor = esc_html__('#002434', 'home-renovation-work' );
	$wp_customize->add_setting(
    	'footer_scrolltotopiconbghrvcolor',
    	array(
			'default' => $footerscrolltotopiconbghrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltotopiconbghrvcolor',
		array(
		    'label'   		=> __('Scroll To Top Icon BG Hover Color','home-renovation-work'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);




}
add_action( 'customize_register', 'homerenovationwork_footer' );
// Footer selective refresh
function homerenovationwork_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'homerenovationwork_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'homerenovationwork_footer_partials' );


// copyright_content
function homerenovationwork_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}