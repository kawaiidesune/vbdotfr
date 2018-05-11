<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
		<span class="navbar-text"><?php bloginfo('description'); ?></span>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<?php
			wp_nav_menu(
				array(
					'theme_location'	=>	'top-menu',
					'depth'				=>	2,
					'container'			=>	'div',
					'container_class'	=>	'collapse navbar-collapse',
					'menu_class'		=>	'nav navbar-nav ml-auto',
					'fallback_cb'		=>	'WP_Bootstrap_Navwalker::fallback',
					'walker'			=>	new WP_Bootstrap_Navwalker()
				)
			);
			?>
			<?php get_search_form(); ?>
		</div>
	</nav>
</header>