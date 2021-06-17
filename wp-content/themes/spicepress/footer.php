<?php

/**
 * Template file for footer area
 */
$spicepress_footer_copyright = get_theme_mod('footer_copyright_text', '<p>' . __('Proudly powered by <a href="https://wordpress.org">WordPress</a> | Theme: <a href="https://spicethemes.com" rel="nofollow">SpicePress</a> by SpiceThemes', 'spicepress') . '</p>');
?>
<!-- Footer Section -->
<?php if (is_active_sidebar('footer_widget_area_left') || is_active_sidebar('footer_widget_area_center') ||  is_active_sidebar('footer_widget_area_right') || ($spicepress_footer_copyright != null)) : ?>
	<footer class="site-footer">
		<div class="container">
			<?php get_template_part('sidebar', 'footer');
			if ($spicepress_footer_copyright != null) : ?>
				<div class="row">
					<div class="col-md-12">
						<?php
						$spicepress_user = get_option('spicepress_user_with_1_9_1');
						if ($spicepress_user = 'old') { ?>
							<div class="site-info wow fadeIn animated" data-wow-delay="0.4s">
								<p>Par Vincent Gestas</p>
							</div>
						<?php } else { ?>
							<div class="site-info wow fadeIn animated" data-wow-delay="0.4s">
								<p>Par Vincent Gestas</p>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</footer>
<?php endif; ?>
<!-- /Footer Section -->
<div class="clearfix"></div>
</div>
<!--Close of wrapper-->
<!--Scroll To Top-->
<a href="#" class="hc_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top-->
<?php wp_footer(); ?>
</body>

</html>