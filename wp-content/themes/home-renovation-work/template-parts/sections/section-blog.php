<?php  
	$homerenovationwork_hs_blog 			= esc_attr(get_theme_mod('hs_blog','1'));
	$homerenovationwork_blog_title 		= esc_attr(get_theme_mod('blog_title'));
	$homerenovationwork_blog_subtitle		= esc_attr(get_theme_mod('blog_subtitle')); 
	$homerenovationwork_blog_description	= esc_attr(get_theme_mod('blog_description'));
	$homerenovationwork_blog_num			= esc_attr(get_theme_mod('blog_display_num','3'));
	if($homerenovationwork_hs_blog=='1'):
?>

<section id="blog-section" class="blog-area home-blog">

	<div class="container">

		<?php if(!empty($homerenovationwork_blog_title) || !empty($homerenovationwork_blog_subtitle) || !empty($homerenovationwork_blog_description)): ?>
			<div class="title">
				<?php if(!empty($homerenovationwork_blog_title)): ?>
					<h6><?php echo wp_kses_post($homerenovationwork_blog_title); ?></h6>
				<?php endif; ?>
				
				<?php if(!empty($homerenovationwork_blog_subtitle)): ?>
					<h2><?php echo wp_kses_post($homerenovationwork_blog_subtitle); ?></h2>
					<span class="shap"></span>
				<?php endif; ?>
				
				<?php if(!empty($homerenovationwork_blog_description)): ?>
					<p><?php echo wp_kses_post($homerenovationwork_blog_description); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?> 


		<div class="row">
			<?php 	
				$homerenovationwork_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $homerenovationwork_blog_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				$homerenovationwork_blog_wp_query = new WP_Query($homerenovationwork_blogs_args);
				if($homerenovationwork_blog_wp_query)
				{	
				while($homerenovationwork_blog_wp_query->have_posts()):$homerenovationwork_blog_wp_query->the_post(); ?>
				<div class="col-lg-4 col-md-6 col-sm-12 b_m_bx">
					<div class="blogbx">
							
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<div class="blog-image" style="background-image: url('<?php echo esc_url($image[0]); ?>')"></div>
							</a>
							<?php else: 
								$img = get_template_directory_uri().'/assets/images/default.png';
								?>
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<div class="blog-image" style="background-image: url('<?php echo esc_url($img); ?>')"></div>
								</a>
							<?php endif; ?>
							<div class="blog-content">
								<div class="admin-cat-box">
									<div class="row">
										<div class="col-lg-6 col-6 badmin">
											<div class="box-admin">
												<ul class="comment-timing">
													<li><i class="fa fa-hashtag"></i> <?php esc_html_e('For','home-renovation-work'); ?> 
														<?php
															$categories = get_the_category($post->ID);
															if ( ! empty( $categories ) ) {
																foreach ( $categories as $category ) {
																	echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a> ';
																}
															}
														?>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-6 col-6 pl-0">
											<div class="box-admin">
												<ul class="comment-timing">
													<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item'); ?>>
													<i class="fa fa-calendar"></i><?php echo get_the_date( 'M' ); ?> <?php echo get_the_date( 'j' ); ?><?php esc_html_e(',','home-renovation-work'); ?> <?php echo get_the_date( 'Y' ); ?>
													</div>
												</ul>
										  	</div>
										</div>
									</div>
								</div>
								<div class="contbx">
									<?php 
										if ( is_single() ) :
											
										the_title('<h6 class="post-title">', '</h6>' );
										
										else:
										
										the_title( sprintf( '<a href="%s" rel="bookmark"><h6 class="post-title">', esc_url( get_permalink() ) ), '</h6></a>' );
										
										endif; 
									?> 
									<p><?php echo wp_trim_words(get_the_content(),8);	?></p>
									<div class="btn_blog" >
										<a href="<?php echo esc_url( get_permalink() ); ?>">
											<?php esc_html_e( 'Read More', 'home-renovation-work' ); ?> 
										</a>
									</div>
								</div>
							</div>
						<div class="clearfix"></div>
					</div>
				</div>

			<?php endwhile; 
				}
				wp_reset_postdata();
			?>
		</div>

	</div>

</section>
<?php endif; ?>