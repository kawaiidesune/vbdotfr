<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package 	WordPress
 * @subpackage 	VBDotFR
 * @since 		VBDotFR 4.0
 */
VBDotFR_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) );
?>
<div class="container">
	<?php if ( have_posts() ): ?>
	<h1><?php printf(__('Tag Archive: %s','VBDotFR'), single_tag_title( '', false )); ?></h1>
	<ol>
	<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<article>
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php printf(__('Permalink to %','VBDotFR'),get_the_title()); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments');
			the_content(); ?>
			</article>
		</li>
	<?php endwhile; ?>
	</ol>
	<?php else: ?>
	<h1><?php printf(__('No posts to display in %','VBDotFR'), single_tag_title( '', false )); ?></h1>
	<?php endif; ?>
</div>
<?php VBDotFR_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>