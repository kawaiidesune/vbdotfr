	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6"><?php
					if (is_active_sidebar('footer_1')):
						dynamic_sidebar('footer_1');
					endif;
				?></div>
				<div class="col-lg-3 col-md-6"><?php
					if (is_active_sidebar('footer_2')):
						dynamic_sidebar('footer_2');
					endif;
				?></div>
				<div class="col-lg-3 col-md-6"><?php
					if (is_active_sidebar('footer_3')):
						dynamic_sidebar('footer_3');
					endif;
				?></div>
				<div class="col-lg-3 col-md-6"><?php
					if (is_active_sidebar('footer_4')):
						dynamic_sidebar('footer_4');
					endif;
				?></div>
			</div>
			<div class="row text-center" id="footer-soc">
				<div class="col-md-3 col-6"><a href="https://github.com/kawaiidesune"><i class="fab fa-github"></i></a></div>
				<div class="col-md-3 col-6"><a href="https://dribbble.com/veroniquebellamy"><i class="fab fa-dribbble"></i></a></div>
				<div class="col-md-3 col-6"><a href="https://www.linkedin.com/in/vbellamy/"><i class="fab fa-linkedin"></i></a></div>
				<div class="col-md-3 col-6"><a href="https://profiles.wordpress.org/vmbellamy"><i class="fab fa-wordpress"></i></a></div>
			</div>
			<div class="row row-final">
				<div class="col"><p id="footer-copyright"><?php _e('&copy; 1987-forever and a day Véronique Bellamy. All rights reserved.', 'starkers'); ?></p></div>
			</div>
		</div>
	</footer>