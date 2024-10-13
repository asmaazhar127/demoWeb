<section id="aboutus-section" class="aboutus-area home-aboutus">

    <?php
        $aboutus_image = get_theme_mod('aboutus_image'); 
    ?>
	<div class="<?php if(esc_attr(get_theme_mod('home_renovation_work_aboutus_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('home_renovation_work_aboutus_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
        
        <div class="row m-0">  
            <div class="imgbx">  
                <div class="abtimg">              
                    <?php 
                        if(!empty($aboutus_image)){
                            echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($aboutus_image).'"  />';
                        }else{
                            echo '<img src="'.get_template_directory_uri().'/assets/images/aboutimg2.jpg" />';
                        }
                    ?>
                    <div class="abt_img_txtbx">  
                        <h4><?php echo esc_html(get_theme_mod('aboutus_imgheading')); ?></h4>
                    </div>
                </div>	
                
    		</div>
            <div class="abtdetail">
                <div class="detailbxinn">
                    <div class="abt-dbx">
                        <h4><?php echo esc_html(get_theme_mod('aboutus_subtitle')); ?></h4>
                        <h2><?php echo esc_html(get_theme_mod('aboutus_title')); ?></h2>
                    </div>
                    <div class="abt-description">
                        <p><?php echo esc_html(get_theme_mod('aboutus_description')); ?></p>
                    </div>
                    <div class="abt-cont">
                        <div class="row mr-0">
                            <div class="vbox">
                                <?php
                                $aboutusytvideolink = get_theme_mod('aboutus_ytvideolink','https://www.youtube.com/watch?v=UPvZkoWxb84');

                                if (!empty($aboutusytvideolink)) {
                                    // Extract video ID from the URL
                                    $ytid = '';

                                    // Check for various YouTube URL formats and extract video ID
                                    if (preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $aboutusytvideolink, $matches)) {
                                        $ytid = $matches[1];
                                    }

                                    // Display embedded YouTube video if video ID is found
                                    if (!empty($ytid)) {
                                        echo '<div class="youtube-video">';
                                        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $ytid . '" frameborder="0" allowfullscreen></iframe>';
                                        echo '</div>';
                                    }
                                }
                                ?>
                            </div>
                            <div class="phbx">
                                <div class="row mr-0">
                                    <div class="col-md-2 col-sm-2 col-2 pd-0">
                                        <div class="ph_icn">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-10">
                                        <h5><?php echo esc_html(get_theme_mod('aboutus_phonetitle')); ?></h5>
                                        <h6><a  href="tel:<?php echo $aboutus_phonenumber;?>"><?php echo esc_html(get_theme_mod('aboutus_phonenumber')); ?></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="abt-btn">
                        <a class="l_more" href="<?php echo esc_html(get_theme_mod('aboutus_readmorebtn_link')); ?>">
                            <?php esc_html_e('Learn More','home-renovation-work'); ?>
                        </a>
                        <a class="g_start" href="<?php echo esc_html(get_theme_mod('aboutus_getstartedbtn_link')); ?>">
                            <?php esc_html_e('Get Started','home-renovation-work'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
