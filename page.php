<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
	<?php
	if ( have_posts() ) while ( have_posts() ) : the_post();
	?>
		<h1 class="display-1"><?php the_title(); ?></h1>
		<?php the_content();
	endwhile;
	?>
</div>
<?php VBDotFR_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>