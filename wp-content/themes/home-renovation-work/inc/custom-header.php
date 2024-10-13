<?php
function homerenovationwork_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'homerenovationwork_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'fff',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'homerenovationwork_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'homerenovationwork_custom_header_setup' );

if ( ! function_exists( 'homerenovationwork_header_style' ) ) :

function homerenovationwork_header_style() {
	$header_text_color = get_header_textcolor();

	$topheader_logowidth = esc_attr(get_theme_mod('topheader_logowidth','100'));

	$homerenovationwork_logo_top_padding = esc_attr(get_theme_mod('homerenovationwork_logo_top_padding','2'));
	$homerenovationwork_logo_left_padding = esc_attr(get_theme_mod('homerenovationwork_logo_left_padding','2'));
	$homerenovationwork_logo_bottom_padding = esc_attr(get_theme_mod('homerenovationwork_logo_bottom_padding','2'));
	$homerenovationwork_logo_right_padding = esc_attr(get_theme_mod('homerenovationwork_logo_right_padding','2'));


  	$blog_disable_section = esc_attr(get_theme_mod('blog_disable_section','YES'));
  	$ourservice_disable_section = esc_attr(get_theme_mod('ourservice_disable_section','YES'));
  	$aboutus_disable_section = esc_attr(get_theme_mod('aboutus_disable_section','YES'));


	?>
	<style type="text/css">


		<?php 
		
		?>


		.site-logo img {
			width: <?php echo apply_filters('homerenovationwork_topheader', $topheader_logowidth); ?>%;
		}

		.site-logo img {
			padding-top: <?php echo apply_filters('homerenovationwork_topheader', $homerenovationwork_logo_top_padding); ?>px;
			padding-left: <?php echo apply_filters('homerenovationwork_topheader', $homerenovationwork_logo_left_padding); ?>px;
			padding-bottom: <?php echo apply_filters('homerenovationwork_topheader', $homerenovationwork_logo_bottom_padding); ?>px;
			padding-right: <?php echo apply_filters('homerenovationwork_topheader', $homerenovationwork_logo_right_padding); ?>px;
		}


		header.site-header .site-title {
			color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?>;
		}

		header.site-header .site-logo a {
			text-decoration-color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?> !important;
		}

		p.site-description {
			color: <?php echo esc_attr(get_theme_mod('topheader_taglinecol')); ?>;
		}
		


		
	
		header .tophead {
			background: <?php echo esc_attr(get_theme_mod('header_topheadbgcolor')); ?>;
		}

		header .emphbx li i {
			color: <?php echo esc_attr(get_theme_mod('header_phonmailiconcolor')); ?>;
		}

		header .emphbx li a {
			color: <?php echo esc_attr(get_theme_mod('header_topheadphonmailtextcolor')); ?>;
		}

		header .socialicon a i {
			color: <?php echo esc_attr(get_theme_mod('header_topheadiconscolor')); ?>;
		}

		header .socialicon a i {
			border-color: <?php echo esc_attr(get_theme_mod('header_topheadiconsbrdcolor')); ?>;
		}

		header .socialicon a:hover i {
			color: <?php echo esc_attr(get_theme_mod('header_topheadiconshovrcolor')); ?>;
		}

		header.site-header {
			background: <?php echo esc_attr(get_theme_mod('header_bgcolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li a, .main-header .navbar .navbar-menu ul li.dropdown>a::after {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.main-header .navbar .navbar-nav > li:hover a, .main-header .navbar .navbar-nav > li.focus a, .main-header .navbar .navbar-nav > li.active a, .main-header .navbar .navbar-nav > li a.active,.main-header .navbar .navbar-menu ul li:hover.dropdown>a::after {
			color: <?php echo esc_attr(get_theme_mod('header_menushovercolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu>.dropdown:after {
			color: <?php echo esc_attr(get_theme_mod('header_submenutexticoncolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
			border-left-color: <?php echo esc_attr(get_theme_mod('header_submenusbordercolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu li a:hover {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbghovercolor')); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:hover{
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?>;
		}
	
		
		header a.contactus {
			color: <?php echo esc_attr(get_theme_mod('header_btntxtcolor')); ?>;
		}

		header a.contactus {
			background: <?php echo esc_attr(get_theme_mod('header_btnbgcolor')); ?>;
		}

		header a.contactus:hover {
			color: <?php echo esc_attr(get_theme_mod('header_btntxthrvcolor')); ?>;
		}
		




		.hero-style .slide-title h2 {
			color: <?php echo esc_attr(get_theme_mod('slider_titlecolor')); ?> !important;
		}


		.hero-style .slide-text p {
			color: <?php echo esc_attr(get_theme_mod('slider_descriptioncolor')); ?>;
		}

		.hero-style a.ReadMore {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxt1color')); ?> !important;
		}

		.hero-style a.ReadMore {
			background: <?php echo esc_attr(get_theme_mod('slider_btnbgcolor')); ?> !important;
		}

		.hero-style a.ReadMore:hover {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxthrvcolor')); ?> !important;
		}

		.next-sec-tab a i {
			border-color: <?php echo esc_attr(get_theme_mod('slider_scrolldownarrowiconcolor')); ?> !important;
			color: <?php echo esc_attr(get_theme_mod('slider_scrolldownarrowiconcolor')); ?> !important;
		}

		.next-sec-tab a {
			background: <?php echo esc_attr(get_theme_mod('slider_scrolldownarrowbgcolor')); ?> !important;
		}

		.hero-slider .home_renovation_workswiper-button-prev i, 
		.hero-slider .home_renovation_workswiper-button-next i {
			color: <?php echo esc_attr(get_theme_mod('slider_arrowiconcolor')); ?> !important;
		}

		.hero-slider .home_renovation_workswiper-button-prev, 
		.hero-slider .home_renovation_workswiper-button-next {
			background: <?php echo esc_attr(get_theme_mod('slider_arrowiconbgcolor')); ?> !important;
		}

		.hero-slider .home_renovation_workswiper-button-prev:hover i,
		.hero-slider .home_renovation_workswiper-button-next:hover i {
			color: <?php echo esc_attr(get_theme_mod('slider_arrowiconhrvcolor')); ?> !important;
		}

	
		/* Our Treatment */

		#ourservice-section .heading h2 {
			color: <?php echo esc_attr(get_theme_mod('ourservice_headingcolor')); ?>;
		}

		#ourservice-section .heading h2::before,
		#ourservice-section .heading h2::after {
			border-color: <?php echo esc_attr(get_theme_mod('ourservice_headingbrdcolor')); ?>;
		}

		#ourservice-section .ourtbx .single-ourservice h3 {
			color: <?php echo esc_attr(get_theme_mod('ourservice_boxtitlecolor')); ?>;
		}

		#ourservice-section .ourtbx .single-ourservice:hover h3 {
			color: <?php echo esc_attr(get_theme_mod('ourservice_boxtitlehrvcolor')); ?>;
		}

		#ourservice-section .serv-btn a {
			color: <?php echo esc_attr(get_theme_mod('ourservice_btntextcolor')); ?>;
		}

		#ourservice-section .serv-btn a {
			background: <?php echo esc_attr(get_theme_mod('ourservice_btntextbgcolor')); ?>;
		}




		/* about us */
		#aboutus-section .abt_img_txtbx h4 {
			color: <?php echo esc_attr(get_theme_mod('aboutus_imgheadingcolor')); ?>;
		}

		#aboutus-section .abt_img_txtbx h4:before {
			background: <?php echo esc_attr(get_theme_mod('aboutus_imgheadingiconcolor')); ?>;
		}

		#aboutus-section .abt_img_txtbx {
			background: <?php echo esc_attr(get_theme_mod('aboutus_imgheadingbgcolor')); ?>;
		}

		#aboutus-section .abt-dbx h4 {
			color: <?php echo esc_attr(get_theme_mod('aboutus_subtitlecolor')); ?>;
		}

		#aboutus-section .abt-dbx h2 {
			color: <?php echo esc_attr(get_theme_mod('aboutus_titlecolor')); ?>;
		}

		#aboutus-section .abt-description p {
			color: <?php echo esc_attr(get_theme_mod('aboutus_descriptioncolor')); ?>;
		}

		#aboutus-section .ph_icn i {
			color: <?php echo esc_attr(get_theme_mod('aboutus_phoneiconcolor')); ?>;
		}

		#aboutus-section .phbx h6 a,#aboutus-section .phbx h5 {
			color: <?php echo esc_attr(get_theme_mod('aboutus_phonetextnumcolor')); ?>;
		}

		#aboutus-section .l_more {
			color: <?php echo esc_attr(get_theme_mod('aboutus_btntextcolor')); ?> !important;
		}

		#aboutus-section .l_more {
			background: <?php echo esc_attr(get_theme_mod('aboutus_btnbgcolor')); ?>;
		}

		#aboutus-section .l_more:hover {
			color: <?php echo esc_attr(get_theme_mod('aboutus_btntexthrvcolor')); ?>;
		}

		#aboutus-section .g_start {
			color: <?php echo esc_attr(get_theme_mod('aboutus_btn2textcolor')); ?> !important;
		}

		#aboutus-section .g_start {
			background: <?php echo esc_attr(get_theme_mod('aboutus_btn2bgcolor')); ?>;
		}

		#aboutus-section .g_start:hover {
			color: <?php echo esc_attr(get_theme_mod('aboutus_btn2texthrvcolor')); ?>;
		}


		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.copy-right {
			border-color: <?php echo esc_attr(get_theme_mod('footer_copyrightbrdcolor')); ?>;
		}

		.footer-area .footer-widget .w-title {
			color: <?php echo esc_attr(get_theme_mod('footer_widgettilecolor')); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area li:before, .page-template-home-template .footer-area li:before, .page .footer-area li:before, .single .footer-area li:before {
			color: <?php echo esc_attr(get_theme_mod('footer_iconcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_listhovercolor')); ?>;
		}

		.scroll-top i {
			color: <?php echo esc_attr(get_theme_mod('footer_scrolltotopiconcolor')); ?>;
		}

		.scroll-top {
			background: <?php echo esc_attr(get_theme_mod('footer_scrolltotopiconbgcolor')); ?>;
		}

		.scroll-top:hover {
			background: <?php echo esc_attr(get_theme_mod('footer_scrolltotopiconbghrvcolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		.breadcrumb-section h1{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>



	<?php
        if ($blog_disable_section == 1):
	?>
		#blog-section {
			display: none;
		}
	<?php
		else :
	?>
		#blog-section {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($ourservice_disable_section == 1):
	?>
		#ourservice-section {
			display: none;
		}
	<?php
		else :
	?>
		#ourservice-section {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($aboutus_disable_section == 1):
	?>
		#aboutus-section {
			display: none;
		}
	<?php
		else :
	?>
		#aboutus-section {
			display: block;
		}
	<?php endif; ?>



	</style>
	<?php
}
endif;
