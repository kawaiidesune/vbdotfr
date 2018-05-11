<?php
/**
 * The front page template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) );
?>
<h1 class="display-1 float-right">Salut! <small><?php _e('That is French for "Howdy"', 'starkers'); ?></small></h1>
<h2 class="display-2 float-right"><a href="/about"><?php _e('My name is Véronique Bellamy', 'starkers'); ?></a></h2>
<h2 class="display-2 float-right"><a href="/blog"><?php _e('Read my thoughts.'); ?></a></h2>
<h2 class="display-2 float-right"><?php _e('This site is still under construction', 'starkers'); ?> <small><a href="https://github.com/kawaiidesune/vbdotfr"><?php _e('But I am working on it', 'starkers'); ?></a></small></h2>
<?php
Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') );
?>