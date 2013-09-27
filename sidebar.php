<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress Kickstarter Theme
 */
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php if( is_dynamic_sidebar( 'main-widget-area' ) ): ?>
		<?php dynamic_sidebar( 'main-widget-area' ); ?>
	<?php endif; ?>
</div>