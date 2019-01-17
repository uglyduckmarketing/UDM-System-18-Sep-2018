<header>
 <!--top-header_basic-->
        <section class="top_basic_header top_basic_show">
            <div class="container-fluid">
                <div class="row">
                 <ul class="top_heade_left">
                    <li><a href="tel:<?php echo get_option('udm_phone_number'); ?>">Call For FREE Estimates</a></li>
					<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
                </ul>
                <ul class="top_heade_right">
                   <?php
								$type="";
								if(get_option('udm_facebook_link')!=""){
							?>
								<li><a alt="Visit Us On FaceBook" href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo esc_attr($type); ?>"></i></a></li>
							<?php
								}	
								if(get_option('udm_googleplus_link')!=""){
							?>
								<li><a alt="Visit Us On Googleplus" href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo esc_attr($type); ?>"></i></a></li>
							<?php
								}
								if(get_option('udm_linkedin_link')!="")
								{
							?>
								<li><a alt="Visit Us On Linkedin" href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo esc_attr($type); ?>"></i></a></li>
							<?php
								}
								if(get_option('udm_instagram_link')!="")
								{
							?>
								<li><a alt="Visit Us On Instagram" href="<?php echo get_option('udm_instagram_link'); ?>"><i class="fa fa-instagram"></i></a></li>
							<?php
								}
								if(get_option('udm_twitter_link')!=""){
							?>
								<li><a alt="Visit Us On Twitter" href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo esc_attr($type); ?>"></i></a></li>
							<?php
								}
								if(get_option('udm_pinterest_link')!=""){
							?>
								<li><a alt="Visit Us On Pinterest" href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo esc_attr($type); } ; ?>"></i></a></li>
							<?php
								}
						?>
					</ul>
                </div>
            </div>
        </section>
 <!--basic-header-default-->    
        <section class="basic_header_default">
            <nav class="navbar navbar-expand-md bg-light navbar-light">
                <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><img alt="Back To Home Page" src="<?php if(get_option('udm_company_logo')!=""){ echo get_option('udm_company_logo'); }else{ echo get_template_directory_uri()."/images/login_logo.png"; } ?>" width="200"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
				  <div class="collapse navbar-collapse" id="collapsibleNavbar">
						<?php
							wp_nav_menu(array('menu_class' => 'navbar-nav'));
						?>
				   </div>  
            </nav>
        </section>
</header>