<?php
/**
 * The front page template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/vbdotfr-utilities.php for info on VBDotFR_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	VBDotFR
 * @since 		VBDotFR 1.0
 */
VBDotFR_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) );
?>
<div class="container-fluid">
	<h1 class="display-1 text-right">Salut!<small> <?php _e('That is French for "Howdy"', 'starkers'); ?></small></h1>
	<h4 class="display-4 text-right">My name is <a href="/about">Véronique Bellamy</a></h4>
	<h4 class="display-4 text-right"><a href="/blog">Read</a> my thoughts.</h4>
	<h4 class="display-4 text-right"><?php _e('This site is still under construction', 'starkers'); ?><small> <a href="https://github.com/kawaiidesune/vbdotfr">But I <em>am</em> working on it</a></small></h4>
</div>
<?php
VBDotFR_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') );
?>