<?php 
	$homerenovationwork_hs_breadcrumb					= get_theme_mod('hs_breadcrumb','1');
	$homerenovationwork_breadcrumb_bg_img				= get_theme_mod('breadcrumb_bg_img');
	$homerenovationwork_breadcrumb_back_attach		= get_theme_mod('breadcrumb_back_attach','scroll');
	
if($homerenovationwork_hs_breadcrumb == '1') {	
?>	

	<!-- Slider Area -->   
	<?php if(!empty($homerenovationwork_breadcrumb_bg_img)): ?>
    <section class="slider-area breadcrumb-section" style="background: url(<?php echo esc_url($homerenovationwork_breadcrumb_bg_img); ?>) center center <?php echo esc_attr($homerenovationwork_breadcrumb_back_attach); ?>; background-repeat: no-repeat; background-size: cover;">
	<?php else: ?>
	 <section class="slider-area breadcrumb-section">
	 <?php endif; ?>
        <div class="container">
            <div class="about-banner-text">   
            	
				<h1><?php homerenovationwork_breadcrumb_title(); ?></h1>
				
				<ol class="breadcrumb-list">
					<?php homerenovationwork_breadcrumbs(); ?>
				</ol>



            </div>
        </div> 

    </section>
    <!-- End Slider Area -->
<?php }else{  ?>
	<section style="padding: 30px 0 30px;"></section>
<?php } ?>	