<?php
/**
 * VBDotFR functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package 	WordPress
 * @subpackage 	VBDotFR
 * @since 		VBDotFR 1.0
 */

/* ========================================================================================================================
   Required external files
   ======================================================================================================================== */

require_once(get_template_directory() . '/external/vbdotfr-utilities.php');
require_once(get_template_directory() . '/external/wp-bootstrap-navwalker.php');

/* ========================================================================================================================
   Theme specific settings
   Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
   ======================================================================================================================== */

add_theme_support('post-thumbnails');

// register_nav_menus(array('primary' => 'Primary Navigation'));

/* ========================================================================================================================
   Actions and Filters
   ======================================================================================================================== */
add_action( 'wp_enqueue_scripts', 'vbdotfr_script_enqueuer' );
add_filter( 'body_class', array( 'VBDotFr_Utilities', 'add_slug_to_body_class' ) );

/* ========================================================================================================================
   Scripts
   ======================================================================================================================== */

/**
 * Add scripts via wp_head()
 *
 * @return void
 * @author Keir Whitaker
 */

function vbdotfr_script_enqueuer() {
	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'));
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('site', get_stylesheet_directory_uri() . '/js/site.js', array( 'jquery' ) );

	wp_enqueue_style('zilla-slab', 'https://fonts.googleapis.com/css?family=Zilla+Slab+Highlight:400,700|Zilla+Slab:400,400i,700,700i');
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', 'https://pro.fontawesome.com/releases/v5.1.1/css/all.css');
	wp_enqueue_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
}	

/* ========================================================================================================================

Comments

======================================================================================================================== */

/**
 * Custom callback for outputting comments 
 *
 * @return void
 * @author Keir Whitaker
 */
function vbdotfr_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; 
	?>
	<?php if ( $comment->comment_approved == '1' ): ?>	
	<li>
		<article id="comment-<?php comment_ID() ?>">
			<?php echo get_avatar( $comment ); ?>
			<h4><?php comment_author_link() ?></h4>
			<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
			<?php comment_text() ?>
		</article>
	<?php endif;
}

function vbdotfr_widgets_init() {
	register_sidebar(
		array(
			'name'			=>	'Footer - far left',
			'id'			=>	'footer_1',
			'before_widget'	=>	'<div>',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2>',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	'Footer - centre left',
			'id'			=>	'footer_2',
			'before_widget'	=>	'<div>',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2>',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	'Footer - centre right',
			'id'			=>	'footer_3',
			'before_widget'	=>	'<div>',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2>',
			'after_title'	=>	'</h2>'
		)
	);
	register_sidebar(
		array(
			'name'			=>	'Footer - far right',
			'id'			=>	'footer_4',
			'before_widget'	=>	'<div>',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h2>',
			'after_title'	=>	'</h2>'
		)
	);
}
add_action('widgets_init', 'vbdotfr_widgets_init');

/**
 * vbdotfr_menus function.
 * 
 * This enqueues the footer and top nav menus.
 * 
 * @access public
 * @return void
 */
function vbdotfr_menus() {
	register_nav_menus(
		array(
			'top-menu' => __('Top Menu'),
			'footer-menu' => __('Footer Menu')
		)
	);
}
add_action('init', 'vbdotfr_menus');

/**
 * vbdotfr_theme_slug_setup function.
 * 
 * It's the new way of rendering titles in WordPress themes since 4.1.
 * 
 * @access public
 * @author Véronique Bellamy (v@vero.moe)
 * @return void
 * @see https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
 */
function vbdotfr_theme_slug_setup() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'vbdotfr_theme_slug_setup');

// Let's prepare the theme for Gutenberg
add_theme_support('align-wide');

?>