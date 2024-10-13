<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		// header
		$tophead_phone = esc_attr(get_theme_mod('tophead_phone','+000 0000 000'));
		$tophead_mail = esc_attr(get_theme_mod('tophead_mail','demo@example.com'));
		$topheadefblink = esc_attr(get_theme_mod('tophead_fblink','#'));
		$topheadeinstalink = esc_attr(get_theme_mod('tophead_instalink','#'));
		$topheadetwitterlink = esc_attr(get_theme_mod('tophead_twitterlink','#'));
		$tophead_pinterestlink = esc_attr(get_theme_mod('tophead_pinterestlink','#'));

		$topheader_btntext = esc_attr(get_theme_mod('topheader_btntext','Contact Us'));
		$topheader_btntextlink = esc_attr(get_theme_mod('topheader_btntextlink','#'));
		$stickyheader = esc_attr(homerenovationwork_sticky_menu());
	?>

<div class="main">
    <header class="main-header site-header <?php echo esc_attr(homerenovationwork_sticky_menu()); ?>">
		
			<div class="header-section">
				<div class="tophead ">
					<div class="container">					
						<div class=" row mr-0">
							<div class="col-lg-6 col-md-6 col-sm-6 col-8 emphbx">
								<li>
									<i class="fa-solid fa-phone-volume"></i>
									<a class="tooltip-text" href="tel:<?php echo apply_filters('homerenovationwork_header', $tophead_phone); ?>">
										<?php echo apply_filters('homerenovationwork_header', $tophead_phone); ?>
									</a>
								</li>
								<li>
									<i class="fa-regular fa-envelope"></i>
									<a class="tooltip-text" href="mailto:<?php echo apply_filters('homerenovationwork_header', $tophead_mail); ?>">
										
										<?php echo apply_filters('homerenovationwork_header', $tophead_mail); ?>
									</a>
								</li>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-6 col-4 s_media">
								<div class="h_social">
									
										<div class="socialicon">
											<?php if ($topheadefblink) { ?>
												<a href="<?php echo apply_filters('homerenovationwork_header', $tophead_fblink); ?>">
													<i class="fa-brands fa-facebook-f"></i>
												</a>
											<?php } ?>
											<?php if ($topheadetwitterlink) { ?>
												<a href="<?php echo apply_filters('homerenovationwork_header', $tophead_twitterlink); ?>">
													<i class="fa-brands fa-x-twitter"></i>
												</a>
											<?php } ?>
											<?php if ($topheadeinstalink) { ?>
												<a href="<?php echo apply_filters('homerenovationwork_header', $tophead_instalink); ?>">
													<i class="fa-brands fa-instagram"></i>
												</a>
											<?php } ?>
											<?php if ($tophead_pinterestlink) { ?>
												<a href="<?php echo apply_filters('homerenovationwork_header', $tophead_pinterestlink); ?>">
													<i class="fa-brands fa-pinterest-p"></i>
												</a>
											<?php } ?>
										</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			<div class="container">
				<div class="btmmhead ">
					<div class=" row mr-0">
						<div class="col-lg-3 col-md-4 col-sm-4 col-12 ">
							<div class="logobx">
								<div class="site-logo">
									<?php
									if(has_custom_logo())
										{	
											the_custom_logo();
										}
										else { 
										?>
										<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
											
											<?php 
												echo esc_html(bloginfo('name'));
											?>
										</a>	

										<div class="box-info">
											<?php
												$homerenovationwork_site_desc = get_bloginfo( 'description');
												if ($homerenovationwork_site_desc) : ?>
													<p class="site-description"><?php echo esc_html($homerenovationwork_site_desc); ?></p>
											<?php endif; ?>
										</div>
									<?php 						
										}
									?>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-8 col-12 pd-0">
							<div class="bottomhead ">
								<div class=" row mr-0">
									<div class="col-lg-9 col-md-8 col-sm-7 ">
										<div class="menus">
											<nav class="navbar navbar-expand-lg navbaroffcanvase">
											<div class="navbar-menubar">
												<!-- Small Divice Menu-->
												<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','home-renovation-work'); ?>"> 
													<i class="fa fa-bars"></i>
												</button>
												<div class="collapse navbar-collapse navbar-menu">
													<button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','home-renovation-work'); ?>"> 
														<i class="fa fa-times"></i>
													</button> 
													<?php 
														wp_nav_menu( 
															array(  
																'theme_location' => 'primary_menu',
																'container'  => '',
																'container_id'    => '',
																'menu_class' => 'navbar-nav main-nav',
																'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
																'walker' => new WP_Bootstrap_Navwalker()
																) 
															);
													?>
												</div>
											</div>
											</nav>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-5 pd-0">
										<?php if ($topheader_btntext) { ?>
											<div class="hbtn">
												<a class="contactus" href="<?php echo apply_filters('homerenovationwork_header', $topheader_btntextlink); ?>">
													<?php echo apply_filters('homerenovationwork_header', $topheader_btntext); ?>
												</a> 
											</div>
										<?php } ?>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </header>
	<div class="clearfix"></div>

</div>
