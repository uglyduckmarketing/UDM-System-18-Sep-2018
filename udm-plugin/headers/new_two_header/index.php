<?php
	$data=unserialize(get_option('header_layout_'.$layout));
?>
<header>
 <!--top-header_basic-->
	<div class="stacked_header common_header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 p-no logo_stacked logo_common">
				 <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>/"><img src="<?php echo get_option('udm_company_logo'); ?>"></a>
				</div>
				<div class="col-md-9 p-no">
				   <section class="top_stacked_header top_basic_show <?php if(isset($data['top_bar_style']) && $data['top_bar_style']=="1_3"){ echo "one_third"; }else{ echo "fifty_fifty"; } ?>" >
						<div class="container-fluid">
							<div class="row align-items-center justify-content-end">
								<?php 
									if(isset($data['lefttopbartext']) && $data['lefttopbartext'] == 'yes')
									{
								?>
								<div class="col-md-auto">
								<ul class="top_header_get_bt top_header_get_bt_show lefttoptext">
									<li><p><?php echo isset($data['lefttopbar_text']) ? $data['lefttopbar_text'] : ''; ?></p></li>
									</ul>
								</div>
								<?php 
									}
									else if(isset($data['lefttopbarphone']) && $data['lefttopbarphone'] == 'yes')
									{
								?>
								<div class="col-md-auto">
								 <ul class="top_heade_left top_header_left_show lefttopphone">
									<?php 
										if(isset($data['lefttopbar_phone_left_text']) && $data['lefttopbar_phone_left_text']!="")
										{
									?>
									<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo isset($data['lefttopbar_phone_left_text']) ? $data['lefttopbar_phone_left_text'] : ''; ?></a></li>
									<?php
										}										
										if(isset($data['lefttopbar_phone_overright']) && $data['lefttopbar_phone_overright']=="yes")
										{
									?>
									<li><a class="contact_stacked contact_common_style" href="tel:<?php echo isset($data['lefttopbar_phone_number']) ? $data['lefttopbar_phone_number'] : ''; ?>"><?php echo isset($data['lefttopbar_phone_number']) ? $data['lefttopbar_phone_number'] : ''; ?></a></li>
									<?php
										}else{
									?>
									<li><a class="contact_stacked contact_common_style" href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
									<?php
									}
									?>
									</ul>
								</div>
								<?php 
									}
									else if(isset($data['lefttopbarsocial']) && $data['lefttopbarsocial'] == 'yes')
									{ 
								?>
								<div class="col-md-auto social_icon_box">	 
								<ul class="top_heade_right lefttopsocial">
								
									<?php
									if(isset($data['lefttopbar_social_icon_style']) && $data['lefttopbar_social_icon_style']=='square')
									{
										 $type="-square"; 
									}
									else
									{
										$type="";
									}
										if(get_option('udm_facebook_link')!=""){
									?>
										<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
									<?php
										}	
										if(get_option('udm_googleplus_link')!=""){
									?>
										<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
									<?php
										}
										if(get_option('udm_linkedin_link')!="")
										{
									?>
										<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
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
										<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
									<?php
										}
										if(get_option('udm_pinterest_link')!=""){
									?>
										<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo isset($type) ? $type : ''; } ; ?>"></i></a></li>
									<?php
										}
									?>
									</ul>
									</div>
									<?php										
									}
									else if(isset($data['lefttopbarbutton']) && $data['lefttopbarbutton'] == 'yes')
									{
										$scheme = parse_url( isset($data['lefttopbar_button_link']) ? $data['lefttopbar_button_link'] : '', PHP_URL_SCHEME);
										if( !in_array( $scheme, array( 'http', 'https'))){
											$url="http://".isset($data['lefttopbar_button_link']) ? $data['lefttopbar_button_link'] : '';
										}
										else
										{
											$url=isset($data['lefttopbar_button_link']) ? $data['lefttopbar_button_link'] : '';
										}
									?>
								<div class="col-md-auto">
								<ul class="top_header_get_bt top_header_get_bt_show lefttopbutton">
										<li><span class="right_side_bt"><a href="<?php if($url!=""){ echo isset($url) ? $url : ''; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if(isset($data['lefttopbar_button_text']) && $data['lefttopbar_button_text']!=""){ echo esc_attr($data['lefttopbar_button_text']); }else{ ?>Get Started<?php } ?></h6></button></a></span></li>
										</ul>
								</div>
								<?php 
									}
								
								if(isset($data['top_bar_style']) && $data['top_bar_style']=="1_3"){
							?>
						   <?php 
									if(isset($data['middletopbartext']) && $data['middletopbartext'] == 'yes')
									{
								?>
								   <div class="col-md-auto">
									<ul class="top_header_get_bt top_header_get_bt_show middletoptext">
									<li><p><?php echo isset($data['middletopbar_text']) ? $data['middletopbar_text'] : ''; ?></p></li>
									</ul>
								</div>
								<?php 
									}
									else if(isset($data['middletopbarphone']) && $data['middletopbarphone'] == 'yes')
									{
								?> 
								<div class="col-md-auto">
								<ul class="top_heade_left top_header_left_show middletopphone">
								 <?php 
										if(isset($data['middletopbar_phone_left_text']) && $data['middletopbar_phone_left_text']!="")
										{
									?>
									<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo isset($data['middletopbar_phone_left_text']) ? $data['middletopbar_phone_left_text'] : ''; ?></a></li>
									<?php 
										}
										if(isset($data['middletopbar_phone_overright']) && $data['middletopbar_phone_overright']=="yes")
										{
									?>
									<li><a class="contact_stacked contact_common_style" href="tel:<?php echo isset($data['middletopbar_phone_number']) ? $data['middletopbar_phone_number'] : ''; ?>"><?php echo isset($data['middletopbar_phone_number']) ? $data['middletopbar_phone_number'] : ''; ?></a></li>
									<?php
										}else{
									?>
									<li><a class="contact_stacked contact_common_style" href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
									<?php
									}
									?>
								</ul>
								</div>
								<?php 
									}
									else if(isset($data['middletopbarsocial']) && $data['middletopbarsocial'] == 'yes')
									{ 
								?> 
								<div class="col-md-auto">
								<ul class="top_heade_right middletopsocial">
								
									<?php
									if(isset($data['middletopbar_social_icon_style']) && $data['middletopbar_social_icon_style']=='square')
									{
										 $type="-square"; 
									}
									else
									{
										$type="";
									}
										if(get_option('udm_facebook_link')!=""){
									?>
										<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
									<?php
										}	
										if(get_option('udm_googleplus_link')!=""){
									?>
										<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
									<?php
										}
										if(get_option('udm_linkedin_link')!="")
										{
									?>
										<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
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
										<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
									<?php
										}
										if(get_option('udm_pinterest_link')!=""){
									?>
										<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo isset($type) ? $type : ''; } ; ?>"></i></a></li>
									<?php
										}
										?>
										</ul>
								</div>
										<?php
									}
									else if(isset($data['middletopbarbutton']) && $data['middletopbarbutton'] == 'yes')
									{
										$scheme = parse_url( isset($data['middletopbar_button_link']) ? $data['middletopbar_button_link'] : '', PHP_URL_SCHEME);
										if( !in_array( $scheme, array( 'http', 'https'))){
											$url="http://".isset($data['middletopbar_button_link']) ? $data['middletopbar_button_link'] : '';
										}
										else
										{
											$url=isset($data['middletopbar_button_link']) ? $data['middletopbar_button_link'] : '';
										}
									?>
								<div class="col-md-auto border_left_rgt">
									<ul class="top_header_get_bt top_header_get_bt_show middletopbutton">
										<li><span class="right_side_bt"><a href="<?php if($url!=""){ echo isset($url) ? $url : '';; }else{ echo "#"; } ?>" class="btn"><?php if(isset($data['middletopbar_button_text']) && $data['middletopbar_button_text']!=""){ echo esc_attr($data['middletopbar_button_text']); }else{ ?>Get Started<?php } ?></a></span></li>
										</ul>
								</div>
								<?php 
									}
								} ?>
							
								<?php 
									if(isset($data['righttopbartext']) && $data['righttopbartext'] == 'yes')
									{
								?>
								<div class="col-md-auto">
								<ul class="top_header_get_bt top_header_get_bt_show righttoptext">
									<li><p><?php echo isset($data['righttopbar_text']) ? $data['righttopbar_text'] : ''; ?></p></li>
								</ul>
								</div>
								<?php 
									}
									else if(isset($data['righttopbarphone']) && $data['righttopbarphone'] == 'yes')
									{
								?> 
								<div class="col-md-auto">
								<ul class="top_heade_left top_header_left_show righttopphone">
								 <?php 
										if(isset($data['righttopbar_phone_left_text']) && $data['righttopbar_phone_left_text']!="")
										{
									?>
									<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo esc_attr($data['righttopbar_phone_left_text']); ?></a></li>
									<?php 
										}
										if(isset($data['righttopbar_phone_overright']) && $data['righttopbar_phone_overright']=="yes")
										{
									?>
									<li><a class="contact_stacked contact_common_style" href="tel:<?php echo isset($data['righttopbar_phone_number']) ? $data['righttopbar_phone_number'] : ''; ?>"><?php echo isset($data['righttopbar_phone_number']) ? $data['righttopbar_phone_number'] : ''; ?></a></li>
									<?php
										}else{
									?>
									<li><a class="contact_stacked contact_common_style" href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
									<?php
									}
									?>
									</ul>
								</div>
								<?php 
									}
									else if(isset($data['righttopbarsocial']) && $data['righttopbarsocial'] == 'yes')
									{ 
								?>
								<div class="col-md-auto">
								<ul class="top_heade_right righttopsocial">
									<?php
									if(isset($data['righttopbar_social_icon_style']) && $data['righttopbar_social_icon_style']=='square')
									{
										 $type="-square"; 
									}
									else
									{
										$type="";
									}
										if(get_option('udm_facebook_link')!=""){
									?>
										<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
									<?php
										}	
										if(get_option('udm_googleplus_link')!=""){
									?>
										<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
									<?php
										}
										if(get_option('udm_linkedin_link')!="")
										{
									?>
										<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
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
										<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo isset($type) ? $type : ''; ?>"></i></a></li>
									<?php
										}
										if(get_option('udm_pinterest_link')!=""){
									?>
										<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo isset($type) ? $type : ''; } ; ?>"></i></a></li>
									<?php
										}
										?>
										</ul>
									</div>
										<?php
									}
									else if(isset($data['righttopbarbutton']) && $data['righttopbarbutton'] == 'yes')
									{
										$scheme = parse_url( isset($data['righttopbar_button_link']) ? $data['righttopbar_button_link'] : '', PHP_URL_SCHEME);
										if( !in_array( $scheme, array( 'http', 'https'))){
											$url="http://".isset($data['righttopbar_button_link']) ? $data['righttopbar_button_link'] : '';
										}
										else
										{
											$url=isset($data['righttopbar_button_link']) ? $data['righttopbar_button_link'] : '';
										}
									?>
								<div class="col-md-auto">
								<ul class="top_header_get_bt top_header_get_bt_show righttopbutton">
										<li><span class="right_side_bt"><a href="<?php if($url!=""){ echo isset($url) ? $url : ''; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if(isset($data['righttopbar_button_text']) && $data['righttopbar_button_text']!=""){ echo esc_attr($data['righttopbar_button_text']); }else{ ?>Get Started<?php } ?></h6></button></a></span></li>
										</ul>
								</div>
								<?php 
									}
								?>
							</div>
						</div>
					</section>
					<!--stacked_header-->    
					
				</div>
			</div>
			<section class="bottom_stacked_header">
				<nav class="navbar navbar-expand-md navbar-light">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="collapsibleNavbar">
						 <?php
							 $menu=isset($data['navigation']) ? $data['navigation'] : '';
							if($menu!="")
							{
								wp_nav_menu(array('menu' => $menu, 'menu_class' => 'navbar-nav'));
							}
							else
							{
								wp_nav_menu(array('menu_class' => 'navbar-nav'));
							}
						?>
			
					</div>  
				</nav>
			</section>
		</div>
	</div>
<!--end-->
</header>