<?php
/**
 * The Template for displaying all single posts
 *
 * @package 	WordPress
 * @subpackage 	VBDotFR
 * @since 		VBDotFR 1.0
 */
VBDotFR_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) );
?>
<div class="container">
	<?php
	if ( have_posts() ) while ( have_posts() ) : the_post();
	?>
	<article>
		<h1><?php the_title(); ?></h1>
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> 
		<?php
		comments_popup_link('Leave a Comment', '1 Comment', '% Comments');
		the_content();
		if ( get_the_author_meta( 'description' ) ) :
			echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
		<h3><?php printf(__('About %s','VBDotFR'), get_the_author()) ; ?></h3>
		<?php
			the_author_meta( 'description' );
		endif;
		comments_template( '', true ); ?>
	</article>
	<?php
	endwhile;
	?>
</div>
<?php
VBDotFR_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) );
?>