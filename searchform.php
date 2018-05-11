<form class="form-inline my-2 my-lg-0" action="/" method="get">
	<label class="sr-only" for="search">Search for:</label>
	<input class="form-control mr-sm-2" type="search" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?php _e('Search', 'starkers'); ?>" aria-label="<?php _e('Search', 'starkers'); ?>" />
	<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">
		<i class="fal fa-search"></i>
		<span class="sr-only"><?php _e('Search', 'starkers'); ?></span>
	</button>
</form>