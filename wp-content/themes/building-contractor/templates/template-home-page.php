<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Building Contractor
 */

get_header(); ?>

<div id="content" >

<?php
$building_contractor_hidepageboxes = get_theme_mod('building_contractor_slider', false);
$building_contractor_slider_cat = get_theme_mod('building_contractor_slider_cat');

  if ($building_contractor_hidepageboxes && $building_contractor_slider_cat) { ?>
  <section id="slider-cat">
      <div class="container sliderbox">
          <div class="owl-carousel m-0">
              <?php
              $building_contractor_catData = get_theme_mod('building_contractor_slider_cat');
              if ($building_contractor_catData) {
                  $page_query = new WP_Query(
                      array(
                          'category_name' => esc_attr(get_theme_mod('building_contractor_slider_cat')),
                          'posts_per_page' => -1, 
                      )
                  );
                  while ($page_query->have_posts()) : $page_query->the_post(); ?>
                      <div class="row">
                          <div class="col-lg-5 col-md-5 col-12 align-self-center mb-4">
                              <div class="text-content pe-lg-5">
                                <?php if(get_theme_mod('building_contractor_slider_top_text') != ''){ ?>
                                  <p class="slider-text mb-0"><?php echo esc_html(get_theme_mod('building_contractor_slider_top_text')); ?></p>
                                <?php }?>
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <?php the_excerpt(); ?>
                                <div class="slide-btn mt-md-4">
                                  <?php 
                                  $building_contractor_button_text = get_theme_mod('building_contractor_button_text', 'Explore Services');
                                  $building_contractor_button_link_slider = get_theme_mod('building_contractor_button_link_slider', ''); 
                                  if (empty($building_contractor_button_link_slider)) {
                                      $building_contractor_button_link_slider = get_permalink();
                                  }
                                  if ($building_contractor_button_text || !empty($building_contractor_button_link_slider)) { ?>
                                    <?php if(get_theme_mod('building_contractor_button_text', 'Explore Services') != ''){ ?>
                                      <a href="<?php echo esc_url($building_contractor_button_link_slider); ?>" class="button redmor">
                                        <?php echo esc_html($building_contractor_button_text); ?>
                                          <span class="screen-reader-text"><?php echo esc_html($building_contractor_button_text); ?></span>
                                      </a>
                                    <?php } ?>
                                  <?php } ?>
                                </div>
                              </div>
                          </div>
                          <div class="col-lg-7 col-md-7 col-12 align-self-center mb-4">
                            <div class="imagebox">
                              <?php if(has_post_thumbnail()){
                                the_post_thumbnail('full');
                                } else{?>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider.png" alt=""/>
                              <?php } ?>
                            </div>
                          </div>
                      </div>
                  <?php endwhile;
                  wp_reset_postdata();
              }
              ?>
          </div>
      </div>
  </section>
<?php } ?>


  <?php
    $building_contractor_hidepageboxes = get_theme_mod('building_contractor_disabled_pgboxes',false);
    $building_contractor_blog_cat = get_theme_mod('building_contractor_blog_cat');
    if( $building_contractor_hidepageboxes && $building_contractor_blog_cat){
  ?>
  <section id="blog" class="my-5">
    <div class="container">
      <div class="row m-0">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="blog_bx">
            <?php if ( get_theme_mod('building_contractor_headingtext1') != "") { ?>
              <h2 class="subhed mb-2"><?php echo esc_html(get_theme_mod('building_contractor_headingtext1','building-contractor')); ?></h2>
            <?php }?>
            <?php if ( get_theme_mod('building_contractor_headingtext_para') != "") { ?>
              <h3 class="mb-3"><?php echo esc_html(get_theme_mod('building_contractor_headingtext_para','building-contractor')); ?></h3>
            <?php }?>
          </div>
        </div>
        <div class="col-lg-8 col-md-6">
        </div>
      </div>
      <div class="row main-serv m-0">
        <?php
        if (get_theme_mod('building_contractor_blog_cat')) {
            $building_contractor_queryvar = new WP_Query(
                array(
                    'cat' => esc_attr(get_theme_mod('building_contractor_blog_cat')),
                )
            );
            $count = 0;
            while ($building_contractor_queryvar->have_posts()) : $building_contractor_queryvar->the_post();
        ?>
        <div class="custom-column">
          <div class="blog-content">
              <?php if(has_post_thumbnail()){
                the_post_thumbnail('full');
                } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service.png" alt=""/>
              <?php } ?>
              <div class="mainpost-content text-center p-3">
                <div class="inner-content">
                  <?php if (get_post_meta(get_the_ID(), 'building_contractor_custom_icon', true)) : ?>
                    <div class="meta-feilds text-center">
                      <?php if (get_post_meta($post->ID, 'building_contractor_custom_icon', true)) : ?>
                          <i class=" mb-3 <?php echo esc_html(get_post_meta($post->ID, 'building_contractor_custom_icon', true)); ?>"></i>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <div class="post-content"><?php
                      $building_contractor_trimexcerpt = get_the_excerpt();
                      $building_contractor_shortexcerpt = wp_trim_words( $building_contractor_trimexcerpt, $building_contractor_num_words = 8 );
                      echo '<p class="mt-3">' . esc_html( $building_contractor_shortexcerpt ) . '</p>';
                    ?></div>
                  <?php if (get_theme_mod('building_contractor_post_button_text', 'Read More') != '') : ?>
                    <div class="serv-btn">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('building_contractor_post_button_text', __('Read More', 'building-contractor'))); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('building_contractor_post_button_text', __('Read More', 'building-contractor'))); ?></span></a>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
          </div>
          <h4 class=post-title><?php the_title(); ?></h4>
        </div>
        <?php
        $count++;
        if ($count % 5 == 0) {
            echo '</div><div class="row main-serv">'; // Close and open a new row after every 5 columns
        }
        ?>
        <?php
            endwhile;
            wp_reset_postdata();
        }
        ?>
      </div>

    </div>
  </section>
  <?php }?>

</div>
<?php get_footer(); ?>