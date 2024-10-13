<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Building Contractor
 */
?>
<div style="background-color: #efebe5;">
<div id="footer">
  <?php 
    $building_contractor_footer_widget_enabled = get_theme_mod('building_contractor_footer_widget', false);
    
    if ($building_contractor_footer_widget_enabled !== false && $building_contractor_footer_widget_enabled !== '') { ?>

    <div class="footer-widget">
        <div class="container">
            <?php if (!dynamic_sidebar('footer-1')) : ?>
            <?php endif; // end footer widget area ?>
                  
            <?php if (!dynamic_sidebar('footer-2')) : ?>
            <?php endif; // end footer widget area ?>
          
            <?php if (!dynamic_sidebar('footer-3')) : ?>
            <?php endif; // end footer widget area ?>
            
            <?php if (!dynamic_sidebar('footer-4')) : ?>
            <?php endif; // end footer widget area ?>
        </div>
    </div>
  <?php } ?>
  <div class="clear"></div>
  <div class="copywrap text-center">
    <div class="container">
      <p><a href="<?php echo esc_html(get_theme_mod('building_contractor_copyright_link',__('https://www.theclassictemplates.com/products/free-contractor-wordpress-theme','building-contractor'))); ?>" target="_blank"><?php echo esc_html(get_theme_mod('building_contractor_copyright_line',__('Building Contractor WordPress Theme','building-contractor'))); ?></a> <?php echo esc_html('By Classic Templates','building-contractor'); ?></p>
    </div>
  </div>
</div>
</div>

<?php if(get_theme_mod('building_contractor_scroll_hide',true)){ ?>
 <a id="button"><?php esc_html_e('TOP', 'building-contractor'); ?></a>
<?php } ?>
  
<?php wp_footer(); ?>
</body>
</html>
