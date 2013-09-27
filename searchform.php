<?php
/**
 * The template for displaying search forms in WordPress Kickstarter Theme
 *
 * @package WordPress Kickstarter Theme
 */
?>

<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
<div id="search-inputs">
<input type="text" value="" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>