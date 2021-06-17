<?php

/**
 * Template file for footer area
 */
$rockers_footer_copyright = get_theme_mod('footer_copyright_text', '<p>' . __('Proudly powered by <a href="https://wordpress.org">WordPress</a> | Theme: <a href="https://spicethemes.com" rel="nofollow">Rockers</a> by SpiceThemes', 'rockers') . '</p>');
?>
<!-- Footer Section -->
<?php if (is_active_sidebar('footer_widget_area_left') || is_active_sidebar('footer_widget_area_center') ||  is_active_sidebar('footer_widget_area_right') || ($rockers_footer_copyright != null)) : ?>
	<footer class="site-footer">
		<div class="container">

			<?php get_template_part('sidebar', 'footer'); ?>

			<?php if ($rockers_footer_copyright != null) : ?>
				<div class="row">
					<div class="col-md-12">
						<?php
						$rockers_user = get_option('rockers_user_with_3_0_5');
						if ($rockers_user = 'old') { ?>
							<div class="site-info wow fadeIn animated" data-wow-delay="0.4s">
								<p>Par Vincent Gestas</p>
							</div>
						<?php } else { ?>
							<div class="site-info wow fadeIn animated" data-wow-delay="0.4s">
								<p>
								<p>Par Vincent Gestas</p>
								</p>
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