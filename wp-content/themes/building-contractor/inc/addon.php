<?php
/*
 * @package Ebooks Collection
 */

function building_contractor_admin_enqueue_scripts() {
    wp_enqueue_style( 'building-contractor-admin-style', esc_url( get_template_directory_uri() ).'/css/addon.css' );
}
add_action( 'admin_enqueue_scripts', 'building_contractor_admin_enqueue_scripts' );

add_action('after_switch_theme', 'building_contractor_options');

function building_contractor_options() {
    global $pagenow;
    if( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) && current_user_can( 'manage_options' ) ) {
        wp_redirect( admin_url( 'themes.php?page=building-contractor' ) );
        exit;
    }
}

function building_contractor_theme_info_menu_link() {

    $building_contractor_theme = wp_get_theme();
    add_theme_page(
        sprintf( esc_html__( 'Welcome to %1$s %2$s', 'building-contractor' ), $building_contractor_theme->get( 'Name' ), $building_contractor_theme->get( 'Version' ) ),
        esc_html__( 'Theme Info', 'building-contractor' ),'edit_theme_options','building-contractor','building_contractor_theme_info_page'
    );
}
add_action( 'admin_menu', 'building_contractor_theme_info_menu_link' );

function building_contractor_theme_info_page() {

    $building_contractor_theme = wp_get_theme();
    ?>
<div class="wrap theme-info-wrap">
    <h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'building-contractor' ), esc_html($building_contractor_theme->get( 'Name' )), esc_html($building_contractor_theme->get( 'Version' ))); ?>
    </h1>
    <p class="theme-description">
    <?php esc_html_e( 'Do you want to configure this theme? Look no further, our easy-to-follow theme documentation will walk you through it.', 'building-contractor' ); ?>
    </p>
    <div class="important-link">
        <p class="main-box columns-wrapper clearfix">
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e( 'Pro version of our theme', 'building-contractor' ); ?></strong></p>
                <p><?php esc_html_e( 'Are you exited for our theme? Then we will proceed for pro version of theme.', 'building-contractor' ); ?></p>
                <a class="get-premium" href="<?php echo esc_url( BUILDING_CONTRACTOR_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Go To Premium', 'building-contractor' ); ?></a>
                <p><strong><?php esc_html_e( 'Check all classic features', 'building-contractor' ); ?></strong></p>
                <p><?php esc_html_e( 'Explore all the premium features.', 'building-contractor' ); ?></p>
                <a href="<?php echo esc_url( BUILDING_CONTRACTOR_THEME_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Theme Page', 'building-contractor' ); ?></a>
            </div>
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e( 'Need Help?', 'building-contractor' ); ?></strong></p>
                <p><?php esc_html_e( 'Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'building-contractor' ); ?></p>
                <a href="<?php echo esc_url( BUILDING_CONTRACTOR_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Contact Us', 'building-contractor' ); ?></a>
                <p><strong><?php esc_html_e( 'Leave us a review', 'building-contractor' ); ?></strong></p>
                <p><?php esc_html_e( 'Are you enjoying our theme? We would love to hear your feedback.', 'building-contractor' ); ?></p>
                <a href="<?php echo esc_url( BUILDING_CONTRACTOR_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Rate This Theme', 'building-contractor' ); ?></a>
            </div>
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e( 'Check Our Demo', 'building-contractor' ); ?></strong></p>
                <p><?php esc_html_e( 'Here, you can view a live demonstration of our premium them.', 'building-contractor' ); ?></p>
                <a href="<?php echo esc_url( BUILDING_CONTRACTOR_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Premium Demo', 'building-contractor' ); ?></a>
                <p><strong><?php esc_html_e( 'Theme Documentation', 'building-contractor' ); ?></strong></p>
                <p><?php esc_html_e( 'Need more details? Please check our full documentation for detailed theme setup.', 'building-contractor' ); ?></p>
                <a href="<?php echo esc_url( BUILDING_CONTRACTOR_THEME_DOCUMENTATION ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'building-contractor' ); ?></a>
            </div>
        </p>
    </div>
    <div id="getting-started">
        <h3><?php printf( esc_html__( 'Getting started with %s', 'building-contractor' ),
        esc_html($building_contractor_theme->get( 'Name' ))); ?></h3>
        <div class="columns-wrapper clearfix">
            <div class="column column-half clearfix">
                <div class="section">
                    <h4><?php esc_html_e( 'Theme Description', 'building-contractor' ); ?></h4>
                    <div class="theme-description-1"><?php echo esc_html($building_contractor_theme->get( 'Description' )); ?></div>
                </div>
            </div>
            <div class="column column-half clearfix">
                <img src="<?php echo esc_url( $building_contractor_theme->get_screenshot() ); ?>" alt=""/>
                <div class="section">
                    <h4><?php esc_html_e( 'Theme Options', 'building-contractor' ); ?></h4>
                    <p class="about">
                    <?php printf( esc_html__( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'building-contractor' ),esc_html($building_contractor_theme->get( 'Name' ))); ?></p>
                    <p>
                    <div class="themelink-1">
                        <a target="_blank" href="<?php echo esc_url( wp_customize_url() ); ?>"><?php esc_html_e( 'Customize Theme', 'building-contractor' ); ?></a>
                        <a href="<?php echo esc_url( BUILDING_CONTRACTOR_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Checkout Premium', 'building-contractor' ); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="theme-author">
      <p><?php
        printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'building-contractor' ),
            esc_html($building_contractor_theme->get( 'Name' )),
            '<a target="_blank" href="' . esc_url( 'https://www.theclassictemplates.com/', 'building-contractor' ) . '">classictemplate</a>',
            '<a target="_blank" href="' . esc_url( BUILDING_CONTRACTOR_REVIEW ) . '" title="' . esc_attr__( 'Rate it', 'building-contractor' ) . '">' . esc_html_x( 'rate it', 'If you like this theme, rate it', 'building-contractor' ) . '</a>'
        );
        ?></p>
    </div>
</div>
<?php
}
?>
