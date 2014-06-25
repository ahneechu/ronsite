<?php
/**
 * Template for single post view
 * @package themify
 * @since 1.0.0
 */
?>
<?php get_header(); ?>

<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">	
	<?php 
	/////////////////////////////////////////////
	// Sidebar							
	/////////////////////////////////////////////
	get_sidebar(); ?>

<?php if ( have_posts() ) :	while ( have_posts() ) : the_post(); ?>

		<!-- layout-container -->
		<div id="layout" class="pagewidth clearfix">

		<?php themify_content_before(); // hook ?>
		<!-- content -->
		<div id="content" class="list-post">
			<?php themify_content_start(); // hook ?>

			<?php get_template_part( 'includes/loop', 'single' ); ?>

			<?php
			wp_link_pages( array(
				  'before'         => '<p><strong>' . __( 'Pages:', 'themify' ) . ' </strong>',
				  'after'          => '</p>',
				  'next_or_number' => 'number'
			 ));
			?>

			
		<!-- /content -->
		<?php themify_content_after(); // hook ?>

<?php endwhile; endif; ?>



</div>
<!-- /layout-container -->

<?php get_footer(); ?>