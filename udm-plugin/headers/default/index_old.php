
<header class="d-none d-md-block header--one">
    <div class="primary_nav">
		<div class="cg_logo">
			<div class="col">
				<img class="header-logo" src="<?php if($data['logo_url']){ echo $data['logo_url']; }else if(get_option('udm_logo_url')!=""){ echo get_option('udm_logo_url'); }else{ echo get_template_directory_uri().'/udm-plugin/img/courts-border.png'; } ?>">
			</div>
		</div>
		<div class="cg_topbar">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 free-space"></div>
					<div class="col-md-9">
						<div class="row column_1_2">
						<div class="col social_icon <?php echo $location; ?>">
							<ul>
							<?php
								if(get_option('udm_facebook_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook"></i></a></li>
							<?php
								}	
								if(get_option('udm_googleplus_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus"></i></a></li>
							<?php
								}
								if(get_option('udm_linkedin_link')!="")
								{
							?>
								<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin"></i></a></li>
							<?php
								}
								if(get_option('udm_twitter')!=""){
							?>
								<li><a href="<?php echo get_option('udm_twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
							<?php
								}
								if(get_option('udm_pinterest_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest-p"></i></a></li>
							<?php
								}
							?>
							</ul>
						</div>
						<div class="col contact_no_section">
							<p><?php if(get_option('udm_phone_top_text')!=""){ echo get_option('udm_phone_top_text'); }else{ echo "Call for your free estimate"; } ?></p>
							<h6><a href="tel:<?php if(get_option('udm_phone_number')!=""){ echo get_option('udm_phone_number'); }else{ echo "111-111-1111"; } ?>"><?php if(get_option('udm_phone_number')!=""){ echo get_option('udm_phone_number'); }else{ echo "111-111-1111"; } ?></a></h6>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="nav_bottom">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-3 free-space"></div>
					<div class="col-md-9">
						<div class="row">
						<div class="col topmenu">
							<?php
								if ( has_nav_menu( 'primary' ) ) {
									wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav header--navigation', 'container_class' => 'topheader_menu' ) );
								}
								else
								{
									wp_nav_menu( array( 'menu_class' => 'nav header--navigation', 'container_class' => 'topheader_menu' ) );
								}
							?>
							
								<div class="call_to_action">
									<span class="call_to_bt">
										<a class="btn btn-default" href="<?php if(get_option('udm_button_link_url')!=""){ echo get_option('udm_button_link_url'); }else{ echo "#"; } ?>">
											<?php if(get_option('udm_button_text')!=""){ echo get_option('udm_button_text'); }else{ echo "Call to action"; } ?>
											<i class="fa <?php if(get_option('udm_button_icon')!=""){ echo get_option('udm_button_icon'); }else{ echo "Call for your free estimate"; } ?>"></i>
										</a>
									</span>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<?php get_template_part( 'udm-plugin/headers/default/mobile'); ?>

