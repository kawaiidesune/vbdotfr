<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h1 class="display-1"><?php _e("Looks like you're a little lost",'starkers'); ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<p class="lead"><?php _e("This is what we call in the web industry, a 404 page. Usually, people only get here if they're lost. To find your way, you can use the search box in the navigation bar above or click a link above that seems like the most likely match for the place you wanted to go.", 'starkers'); ?></p>
			<p><strong>Photo credit:</strong> <a href="https://www.flickr.com/photos/gord99/3755499653/in/photolist-6HRVd2-6HANsB-6HX3VE-6HSP58-6HTiyV-6HSyAt-6HStUV-6HS1r6-6HWspy-6HSjhz-6HSmkV-6HWJ71-6HTAan-6HXoP1-6HWtEU-6HRU6V-6HWGRG-6HWkuN-6HASpp-6HShcr-6HXCo1-6HRRqk-6HWFLY-6HTAYK-6HWeCS-6HSwN8-6HWEUm-6HX2H5-6HW67o-6HX8w3-6HAMpF-6HTpc4-6HTqu6-6HTtJ2-6HEPgm-6HWhAU-6HXjno-6HFdm3-6HXmDu-6HEQTL-6HT9FR-6HAFsK-6HWeWW-6HTcWn-6HETB7-223xrGX-a9MoLU-a9Mnq9-a9JxPR-a9MogL">Gord McKenna on Flickr</a></p>
		</div>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>