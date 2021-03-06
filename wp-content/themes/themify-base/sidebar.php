<?php
/**
 * Template for Main Sidebar
 * @package themify
 * @since 1.0.0
 */

$sidebar = themify_get_sidebar_layout();
if ( 'sidebar-none' == $sidebar ) {
	return;
}
?>

<?php themify_sidebar_before(); // hook ?>

<aside id="sidebar">

	<?php themify_sidebar_start(); // hook ?>

	<?php dynamic_sidebar( 'sidebar-main' ); ?>
    
	<?php themify_sidebar_end(); // hook ?>

</aside>
<!-- /#sidebar -->

<?php themify_sidebar_after(); // hook ?>