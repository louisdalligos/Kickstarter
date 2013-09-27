<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress Kickstarter Theme
 */
?>
	<?php //after_contents(); ?>
	</div><!-- END #content -->
	
	<footer>
		<?php //before_footer(); ?>
		<?php _e( 'Copyright &copy; '.date("Y").'. All Rights Reserved - '.get_bloginfo( 'name' ), 'thg_framework' ); ?>
		<?php //after_footer(); ?>
	</footer>

	<?php wp_footer(); ?>

	<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>