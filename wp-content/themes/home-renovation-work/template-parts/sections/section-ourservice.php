<section id="ourservice-section" class="ourservice-area home-ourservice">
    <?php 
        $toppawingicon = get_template_directory_uri().'/assets/images/toppawimage.png';
    ?>
    <div class="container">
        <div class="heading">
            <h2><?php echo esc_html(get_theme_mod('ourservice_heading')); ?></h2>
        </div>
        <div class="ourtbx"> 
            <div class="row">
                <?php for($p=1; $p<7; $p++) { ?>
                <?php if( get_theme_mod('ourservice'.$p,false)) { ?>
                <?php $querycolumns = new WP_query('page_id='.get_theme_mod('ourservice'.$p,true)); ?>
                <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
                $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
                <?php 
                if(has_post_thumbnail()){
                    $img = esc_url($image[0]);
                }
                if(empty($image)){
                    $img = get_template_directory_uri().'/assets/images/default.png';
                }
                ?>

                <div class="col-md-6 col-lg-4 box-space pd-0">
                    <div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">    
                        <div class="single-ourservice">
                            <img src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">
                            <div class="seroly"></div>
                            <div class="part-2">
                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                    <h3 class="title"><?php the_title_attribute(); ?></h3>
                                </a>
                                <div class="serv-btn">
                                    <a href="<?php echo esc_html(get_theme_mod('ourservice_readmorebtn_link')); ?>">
                                        <?php esc_html_e('Read More','home-renovation-work'); ?>
                                    </a>
                                </div>  
                            </div>
                            		
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <?php endwhile;
            wp_reset_postdata(); ?>
            <?php } } ?>
            <div class="clear"></div> 
            </div>
        </div> 
	</div>
</section>
