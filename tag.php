<?php
/**
 * The template used to display Tag Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) );
?>
<div class="container">
	<?php if ( have_posts() ): ?>
	<h1><?php printf(__('Tag Archive: %s','starkers'), single_tag_title( '', false )); ?></h1>
	<ol>
	<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<article>
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php printf(__('Permalink to %','starkers'),get_the_title()); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments');
			the_content(); ?>
			</article>
		</li>
	<?php endwhile; ?>
	</ol>
	<?php else: ?>
	<h1><?php printf(__('No posts to display in %','starkers'), single_tag_title( '', false )); ?></h1>
	<?php endif; ?>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>