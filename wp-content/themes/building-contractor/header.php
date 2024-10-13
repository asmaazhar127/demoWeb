<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Building Contractor
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
} ?>

<?php if ( get_theme_mod('building_contractor_preloader',true) != "") { ?>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<?php } ?>

<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'building-contractor' ); ?></a>

<div id="pageholder" <?php if( get_theme_mod( 'building_contractor_box_layout', false) != "" ) { echo 'class="boxlayout"'; } ?>>

<?php if ( get_theme_mod('building_contractor_topbar') != "" ) { ?>
  <div class="header-top py-3">
    <div class="container">
      <div class="row m-0">
        <?php if(get_theme_mod('building_contractor_top_text') != ''){ ?>
          <span class="topbar-text"><?php echo esc_html(get_theme_mod('building_contractor_top_text')); ?></span>
        <?php }?>
      </div>
    </div>
  </div>
<?php } ?>

<div class="header mb-4 <?php echo esc_attr(building_contractor_sticky_menu()); ?>">
  <div class="container">
    <div class="row m-0">
      <div class="col-lg-3 col-md-6 logo-col">
        <div class="logo mt-3">
          <?php building_contractor_the_custom_logo(); ?>
          <div class="site-branding-text">
            <?php if ( get_theme_mod('building_contractor_title_enable',true) != "") { ?>
              <?php if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
              <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
              <?php endif; ?>
            <?php } ?>
            <?php $building_contractor_description = get_bloginfo( 'description', 'display' );
            if ( $building_contractor_description || is_customize_preview() ) : ?>
              <?php if ( get_theme_mod('building_contractor_tagline_enable',false) != "") { ?>
              <span class="site-description"><?php echo esc_html( $building_contractor_description ); ?></span>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-6 menu-col">
        <div class="toggle-nav align-self-center">
          <button role="tab"><?php esc_html_e('MENU','building-contractor'); ?></button>
        </div>
        <div id="mySidenav" class="nav sidenav">
          <nav id="site-navigation" class="main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu','building-contractor' ); ?>">
            <ul class="mobile_nav">
              <?php
                wp_nav_menu( array( 
                  'theme_location' => 'primary',
                  'container_class' => 'main-menu' ,
                  'items_wrap' => '%3$s',
                  'fallback_cb' => 'wp_page_menu',
                ) ); 
               ?>
            </ul>
            <a href="javascript:void(0)" class="close-button"><?php esc_html_e('CLOSE','building-contractor'); ?></a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
