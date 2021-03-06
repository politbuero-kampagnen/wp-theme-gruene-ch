<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Gruene Theme
 */

if ( ! is_active_sidebar( 'sidebar-widget-area' ) ) {
	return;
}
?>

<div id="secondary-additional" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'upper-sidebar-widget-area' ); ?>
</div><!-- #secondary-additional -->

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
</div><!-- #secondary -->
