<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Building Contractor
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<?php the_post_thumbnail(); ?>
	<div class="entry-content mt-3">
		<?php the_content(); ?>
	</div>
	<div class="clearfix"></div>
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'building-contractor' ),
			'after'  => '</div>',
		) );
	?>
	<?php edit_post_link( __( 'Edit', 'building-contractor' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article>