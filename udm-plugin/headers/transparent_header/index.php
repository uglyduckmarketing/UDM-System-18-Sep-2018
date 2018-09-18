<?php
$data=unserialize(get_option('header_layout_'.$layout));
?>
<header>
<div class="main_transparent_box">

	<?php if($data['top_bar']=="yes"){ ?>
        <!--top-header_basic-->
        <section class="top_basic_header top_basic_show">
            <div class="container-fluid">
                <div class="row">
                 <ul class="top_heade_left">
                    <?php 
							if($data['lefttopbartext'] == 'yes')
							{
						?>
							<li><p><?php echo $data['lefttopbar_text']; ?></p></li>
						<?php 
							}
							else if($data['lefttopbarphone'] == 'yes')
							{
						?>
							<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo $data['lefttopbar_phone_left_text']; ?></a></li>
							<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
						<?php 
							}
							else if($data['lefttopbarsocial'] == 'yes')
							{ 
						?>
							<?php
							if($data['lefttopbar_social_icon_style']=='square')
							{
								 $type="-square"; 
							}
							else
							{
								$type="";
							}
								if(get_option('udm_facebook_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo $type; ?>"></i></a></li>
							<?php
								}	
								if(get_option('udm_googleplus_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo $type; ?>"></i></a></li>
							<?php
								}
								if(get_option('udm_linkedin_link')!="")
								{
							?>
								<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo $type; ?>"></i></a></li>
							<?php
								}
								if(get_option('udm_instagram_link')!="")
								{
							?>
								<li><a href="<?php echo get_option('udm_instagram_link'); ?>"><i class="fa fa-instagram"></i></a></li>
							<?php
								}
								if(get_option('udm_twitter_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo $type; ?>"></i></a></li>
							<?php
								}
								if(get_option('udm_pinterest_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo $type; } ; ?>"></i></a></li>
							<?php
								}
							}
							else if($data['lefttopbarbutton'] == 'yes')
							{
								$scheme = parse_url( $data['lefttopbar_button_link'], PHP_URL_SCHEME);
								if( !in_array( $scheme, array( 'http', 'https'))){
									$url="http://".$data['lefttopbar_button_link'];
								}
								else
								{
									$url=$data['lefttopbar_button_link'];
								}
							?>
								<li><span class="right_side_bt"><a href="<?php if($url!=""){ echo $url; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if($data['lefttopbar_button_text']!=""){ echo $data['lefttopbar_button_text']; }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span></li>
						<?php 
							}
						?>
                </ul>
                <ul class="top_heade_right">
                   <?php 
							if($data['righttopbartext'] == 'yes')
							{
						?>
							<li><p><?php echo $data['righttopbar_text']; ?></p></li>
						<?php 
							}
							else if($data['righttopbarphone'] == 'yes')
							{
						?>
							<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo $data['righttopbar_phone_left_text']; ?></a></li>
							<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
						<?php 
							}
							else if($data['righttopbarsocial'] == 'yes')
							{ 
						?>
							<?php
							if($data['righttopbar_social_icon_style']=='square')
							{
								 $type="-square"; 
							}
							else
							{
								$type="";
							}
								if(get_option('udm_facebook_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo $type; ?>"></i></a></li>
							<?php
								}	
								if(get_option('udm_googleplus_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo $type; ?>"></i></a></li>
							<?php
								}
								if(get_option('udm_linkedin_link')!="")
								{
							?>
								<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo $type; ?>"></i></a></li>
							<?php
								}
								if(get_option('udm_instagram_link')!="")
								{
							?>
								<li><a href="<?php echo get_option('udm_instagram_link'); ?>"><i class="fa fa-instagram"></i></a></li>
							<?php
								}
								if(get_option('udm_twitter_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo $type; ?>"></i></a></li>
							<?php
								}
								if(get_option('udm_pinterest_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo $type; } ; ?>"></i></a></li>
							<?php
								}
							}
							else if($data['righttopbarbutton'] == 'yes')
							{
								$scheme = parse_url( $data['righttopbar_button_link'], PHP_URL_SCHEME);
								if( !in_array( $scheme, array( 'http', 'https'))){
									$url="http://".$data['righttopbar_button_link'];
								}
								else
								{
									$url=$data['righttopbar_button_link'];
								}
							?>
								<li><span class="right_side_bt"><a href="<?php if($url!=""){ echo $url; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if($data['righttopbar_button_text']!=""){ echo $data['righttopbar_button_text']; }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span></li>
						<?php 
							}
						?>
                </ul>
                </div>
            </div>
        </section>
	<?php } ?>
        
        <!--basic-header-default-->    
        <section class="basic_header_default">
            <nav class="navbar navbar-expand-md bg-light navbar-light">
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option('udm_company_logo'); ?>"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                     <?php
						$menu=$data['navigation'];
						if($menu!="")
						{
							wp_nav_menu(array('menu' => $menu, 'menu_class' => 'navbar-nav'));
						}
						else
						{
							wp_nav_menu(array('menu_class' => 'navbar-nav'));
						}
					?>
                  <?php if($data['bottom_button_hide']!="yes"){ ?>
						<span class="right_side_bt"><a href="<?php if($data['bottombar_button_link']!=""){ echo $data['bottombar_button_link']; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if($data['bottombar_button_text']!=""){ echo $data['bottombar_button_text']; }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span>
					<?php } ?>
                </div>  
            </nav>
        </section>
        </div>
        <!--end-->
		</header>