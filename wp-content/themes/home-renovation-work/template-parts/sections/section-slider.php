<section id="slider-section" class="slider-area home-slider">
  <!-- <div class="slideinning"></div> -->
  <!-- start of hero --> 
  <section class="hero-slider hero-style">
    <div class="home_renovation_workswiper-container">
      <div class="swiper-wrapper">
        <?php for($p=1; $p<6; $p++) { ?>
        <?php if( get_theme_mod('slider'.$p,false)) { ?>
        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
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

        <div class="home_renovation_workswiper-slide">
            <div class="home_renovation_workslide-inner slide-bg-image">
                <div class="sliderimg">
                    <img class="slide-mainimg slidershape1" src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">
                    <div class="slider-olay"></div>
                </div>                      
                <div class="slidercontent">
                  <div class="slide-title">
                    <h2><?php the_title_attribute(); ?></h2>    
                  </div>     
                  <div class="slide-text"> 
                    <?php the_excerpt(); ?>
                  </div>
                  <div class="slide-btns">
                      <a class="ReadMore" href="<?php echo esc_url( get_permalink() ); ?>">
                        <?php esc_html_e('Learn More','home-renovation-work'); ?>  
                      </a>
                  </div>
                </div>
            </div>
        </div>
        <?php endwhile;
           wp_reset_postdata(); ?>
        <?php } } ?>
        <div class="clear"></div> 

      </div>
       <!-- swipper controls -->
      <div class="home_renovation_workswiper-pagination"></div>
      <div class="home_renovation_workswiper-button-next">
        <i class="fa-solid fa-arrow-left"></i>
      </div>
      <div class="home_renovation_workswiper-button-prev">
        <i class="fa-solid fa-arrow-left"></i>
      </div>
    </div>
  </section>
  <!-- end of hero slider -->
  <div id="scroll-down-btn" class="next-sec-tab wave wow zoomIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: zoomIn;">
    <a class="tab-area" href="#services">
        <i class="fa fa-arrow-down" aria-hidden="true"></i>
    </a>
    <div class="wave__container">
      <div class="wave__circle"></div>
      <div class="wave__circle"></div>
      <div class="wave__circle"></div>
    </div>
  </div>
</section>


