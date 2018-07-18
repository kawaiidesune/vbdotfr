<?php
/**
 * Starkers functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */

/* ========================================================================================================================

Required external files

======================================================================================================================== */

require_once(get_template_directory() . '/external/starkers-utilities.php');
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

add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

/* ========================================================================================================================

Custom Post Types - include custom post types and taxonimies here e.g.

e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

======================================================================================================================== */



/* ========================================================================================================================

Scripts

======================================================================================================================== */

/**
 * Add scripts via wp_head()
 *
 * @return void
 * @author Keir Whitaker
 */

function starkers_script_enqueuer() {
	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'));
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('site', get_stylesheet_directory_uri() . '/js/site.js', array( 'jquery' ) );

	wp_enqueue_style('fira-sans', 'https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,600,600i,700,700i');
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
function starkers_comment( $comment, $args, $depth ) {
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

function starkers_widgets_init() {
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
add_action('widgets_init', 'starkers_widgets_init');

function starkers_create_post_type() {
	register_post_type( 'project',
		array(
			'labels' => array(
				'name'				=>	__('Projects', 'starkers'),
				'singular_name'		=>	__('Project', 'starkers'),
				'menu_name'			=>	_x('Projects', 'admin menu', 'starkers'),
				'name_admin_bar'	=>	_x('Project', 'add new on admin bar', 'starkers'),
				'add_new'			=>	_x('Add New', 'project', 'starkers'),
				'add_new_item'		=>	__('Add New Project', 'starkers'),
				'new_item'			=>	__('New Project', 'starkers'),
				'edit_item'			=>	__('Edit Project', 'starkers'),
				'view_item'			=>	__('View Project', 'starkers'),
				'all_items'			=>	__('All Projects', 'starkers'),
				'search_items'		=>	__('Search Projects', 'starkers'),
				'parent_item_colon'	=>	__('Parent Projects:', 'starkers'),
				'not_found'			=>	__('No projects found', 'stakers'),
				'not_found_in_trash'=>	__('No projects found in Trash.', 'starkers')
			),
			'description' => __('Projects that are not portfolio pieces', 'starkers'),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => _x('projects','Slug for projects','starkers'))
		)
	);
}
add_action('init', 'starkers_create_post_type');

/**
 * starkers_menus function.
 * 
 * This enqueues the footer and top nav menus.
 * 
 * @access public
 * @return void
 */
function starkers_menus() {
	register_nav_menus(
		array(
			'top-menu' => __('Top Menu'),
			'footer-menu' => __('Footer Menu')
		)
	);
}
add_action('init', 'starkers_menus');

/**
 * starkers_theme_slug_setup function.
 * 
 * It's the new way of rendering titles in WordPress themes since 4.1
 * 
 * @access public
 * @return void
 * @see https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
 */
function starkers_theme_slug_setup() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'starkers_theme_slug_setup');
?>