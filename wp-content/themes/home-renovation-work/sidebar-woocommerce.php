<?php
/**
 * side bar template
 *
 * @package Home Renovation Work
 */
?>
<?php if ( ! is_active_sidebar( 'home-renovation-work-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('home-renovation-work-woocommerce-sidebar'); ?>
	</div>
</div>