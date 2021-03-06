<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package 	WordPress
 * @subpackage 	VBDotFR
 * @since 		VBDotFR 1.0
 */
VBDotFR_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) );
?>
<div class="container">
<?php
if ( have_posts() ):
	if ( is_day() ) : $date = get_the_date( 'D M Y' );
	elseif ( is_month() ) : $date = get_the_date( 'M Y' );
	elseif ( is_year() ) : $date = get_the_date( 'Y' );
?>
<h1 class="display-1"><?php if ($date) {
	printf(__('Archive: %s','VBDotFR'),$date);
} else {
	_e('Archive','VBDotFR');
}?></h1>
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php printf(__('Permalink to %','VBDotFR'),get_the_title()); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
			<?php the_content(); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2><?php _e('No posts to display','VBDotFR'); ?></h2>	
<?php endif; ?>
</div>
<?php
VBDotFR_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) );
?>