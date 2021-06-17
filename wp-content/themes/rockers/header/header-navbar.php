<?php
$rockers_header_logo_placing_classic = get_theme_mod('header_logo_placing', 'left');
 
if($rockers_header_logo_placing_classic == 'left' || $rockers_header_logo_placing_classic == 'center'){$rockers_menu_class = 'navbar-right';}
if($rockers_header_logo_placing_classic == 'right'){$rockers_menu_class = 'navbar-left';}	
?>

<!--Desktop Header Section-->
<header class="desktop-header">
	<!--Header Contact Widget-->
	<section class="header-widget-info sp-schemes">
		<div class="container">
			<div class="row">
			
			<?php if($rockers_header_logo_placing_classic == 'left' || $rockers_header_logo_placing_classic == 'center'){ ?>
			
				<div class="col-md-4 col-sm-5 col-xs-12">
					<?php the_custom_logo(); ?>
					<div class="site-branding-text">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$rockers_description = get_bloginfo( 'description', 'display' );
					if ( $rockers_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $rockers_description; ?></p>
					<?php endif; ?>
					</div>
				</div>
				
				<div class="col-md-8 col-sm-7 col-xs-12">
					<div class="row">
						<?php if( is_active_sidebar('header_widget_area') ){
						dynamic_sidebar( 'header_widget_area' );
						}else{ ?>

						<div class="col-md-4 col-sm-6 col-xs-4">
							<aside id="rockers_header_topbar_info_classic_widget-2" class="widget rockers_header_topbar_info_classic_widget">
								<div class="contact-area">
									<div class="media">
										<div class="contact-icon"><i class="fa fa-map-marker"></i></div>
										<div class="media-body">
											<h4><?php esc_html_e('Chestnut Road,','rockers'); ?></h4>									
											<h5><?php esc_html_e('California - United States','rockers'); ?></h5>
										</div>
									</div>
								</div>
							</aside>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-4">
							<aside id="rockers_header_topbar_info_classic_widget-3" class="widget rockers_header_topbar_info_classic_widget">
								<div class="contact-area">
									<div class="media">
										<div class="contact-icon"><i class="fa fa-clock-o"></i></div>
											<div class="media-body">
											<h4><?php esc_html_e('08:00 - 16:30','rockers'); ?></h4>									
											<h5><?php esc_html_e('Monday - Saturday','rockers'); ?></h5>
										</div>
									</div>
								</div>
							</aside></div>
							<div class="col-md-4 col-sm-6 col-xs-4">
							<aside id="rockers_social_icon_widget-2" class="widget rockers_social_icon_widget">	
								<ul class="custom-social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>

							</aside>
							</div>					
						<?php } ?>
						
					</div>				
				</div>	
				
			<?php }if($rockers_header_logo_placing_classic == 'right'){  ?>
			
			
			    <div class="col-md-8 col-sm-7 col-xs-12">
					<div class="row">
						<?php if( is_active_sidebar('header_widget_area') ){
						dynamic_sidebar( 'header_widget_area' );
						}else{ ?>

						<div class="col-md-4 col-sm-6 col-xs-4">
							<aside id="rockers_header_topbar_info_classic_widget-2" class="widget rockers_header_topbar_info_classic_widget">
								<div class="contact-area">
									<div class="media">
										<div class="contact-icon"><i class="fa fa-map-marker"></i></div>
										<div class="media-body">
											<h4><?php esc_html_e('Chestnut Road,','rockers'); ?></h4>									
											<h5><?php esc_html_e('California - United States','rockers'); ?></h5>
										</div>
									</div>
								</div>
							</aside>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-4">
							<aside id="rockers_header_topbar_info_classic_widget-3" class="widget rockers_header_topbar_info_classic_widget">
								<div class="contact-area">
									<div class="media">
										<div class="contact-icon"><i class="fa fa-clock-o"></i></div>
											<div class="media-body">
											<h4><?php esc_html_e('08:00 - 16:30','rockers'); ?></h4>									
											<h5><?php esc_html_e('Monday - Saturday','rockers'); ?></h5>
										</div>
									</div>
								</div>
							</aside></div>
							<div class="col-md-4 col-sm-6 col-xs-4">
							<aside id="rockers_social_icon_widget-2" class="widget rockers_social_icon_widget">	
								<ul class="custom-social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>

							</aside>
							</div>					
						<?php } ?>
						
					</div>				
				</div>
				
				<div class="col-md-4 col-sm-5 col-xs-12 align-right">
					<?php the_custom_logo(); ?>
					<div class="site-branding-text align-right">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$rockers_description = get_bloginfo( 'description', 'display' );
					if ( $rockers_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $rockers_description; ?></p>
					<?php endif; ?>
					</div>
				</div>
				
			<?php } ?>	
				
			</div>	
		</div>
	</section>
	<!--/Header Contact Widget-->
	
	<!--Menu Section-->	
	<nav class="navbar-classic navbar navbar-custom" role="navigation">
		<div class="container-fluid p-l-r-0">		

			<div class="collapse navbar-collapse">
					<?php wp_nav_menu( array(
								'theme_location' => 'primary',
								'container'  => 'nav-collapse collapse navbar-inverse-collapse',
								'menu_class' => 'nav navbar-nav '.$rockers_menu_class.'',
								'fallback_cb' => 'spicepress_fallback_page_menu',
								'walker' => new spicepress_nav_walker() 
							) ); 
					?>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	
	<!--/Menu Section-->	

</header>

<!--Mobile Header Section-->
<header class="mobile-header">
	<!--Logo & Menu Section-->	
	<nav class="navbar-classic navbar navbar-custom" role="navigation">
		<div class="container-fluid p-l-r-0">
		<?php if($rockers_header_logo_placing_classic == 'left' || $rockers_header_logo_placing_classic == 'center'){ ?>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			<?php the_custom_logo(); ?>
			<div class="site-branding-text">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				$rockers_description = get_bloginfo( 'description', 'display' );
				if ( $rockers_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $rockers_description; ?></p>
				<?php endif; ?>
			</div>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
				<span class="sr-only"><?php echo esc_html__('Toggle navigation','rockers'); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			</div>	

        <?php } if($rockers_header_logo_placing_classic == 'right'){?>

            <div class="navbar-header align-right">
			    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
					<span class="sr-only"><?php echo esc_html__('Toggle navigation','rockers'); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php the_custom_logo(); ?>
				<div class="site-branding-text align-right">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$rockers_description = get_bloginfo( 'description', 'display' );
					if ( $rockers_description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $rockers_description; ?></p>
					<?php endif; ?>
				</div>
			</div>	
		<?php } ?>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="custom-collapse">
				<?php wp_nav_menu( array(
								'theme_location' => 'primary',
								'container'  => 'nav-collapse collapse navbar-inverse-collapse',
								'menu_class' => 'nav navbar-nav '.$rockers_menu_class.'',
								'fallback_cb' => 'spicepress_fallback_page_menu',
								'walker' => new spicepress_nav_walker() 
							) ); 
					?>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	
	<!--/Logo & Menu Section-->	

	<!--Header Contact Widget-->
	<?php if( is_active_sidebar('header_widget_area') ){ ?>
	
	<section class="header-widget-info sp-schemes">
		<div class="container">
			<div class="row">
				
				<?php 
						dynamic_sidebar( 'header_widget_area' );
						
				?>
				
			</div>	
		</div>
	</section>
	<!--/Header Contact Widget-->
	
	<?php }else{?>
	
	<section class="header-widget-info sp-schemes">
		<div class="container">
		    
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-4">
				<aside id="rockers_header_topbar_info_classic_widget-2" class="widget rockers_header_topbar_info_classic_widget">
					<div class="contact-area">
						<div class="media">
							<div class="contact-icon"><i class="fa fa-map-marker"></i></div>
							<div class="media-body">
								<h4><?php esc_html_e('Chestnut Road,','rockers'); ?></h4>		
								<h5><?php esc_html_e('California - United States','rockers'); ?></h5>
							</div>
						</div>
					</div>
				</aside>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-4">
				<aside id="rockers_header_topbar_info_classic_widget-3" class="widget rockers_header_topbar_info_classic_widget">
					<div class="contact-area">
						<div class="media">
							<div class="contact-icon"><i class="fa fa-clock-o"></i></div>
								<div class="media-body">
									<h4><?php esc_html_e('08:00 - 16:30','rockers'); ?></h4>		<h5><?php esc_html_e('Monday - Saturday','rockers'); ?></h5>
							</div>
						</div>
					</div>
				</aside></div>
				<div class="col-md-4 col-sm-6 col-xs-4">
				<aside id="rockers_social_icon_widget-2" class="widget rockers_social_icon_widget">	
					<ul class="custom-social-icons">
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>

				</aside>
				</div>						
			</div>
					
		</div>
	</section>
	<?php } ?>

</header>
<!--/Mobile Header Section-->	
<!--/Desktop Header Section-->
<!--/Logo & Menu Section-->	

<div class="clearfix"></div>