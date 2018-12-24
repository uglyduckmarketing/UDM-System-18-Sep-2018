<?php
$data=unserialize(get_option('header_layout_'.$layout));
?>
<!--top-header_basic-->
<header class="bordered">
<?php if($data['top_bar']=="yes"){ ?>
	<section class="top_basic_header top_basic_show">
		<div class="container">
			<div class="row">
				<ul class="top_heade_left">
					<?php 
						if(isset($data['lefttopbartext']) && $data['lefttopbartext'] == 'yes')
						{
					?>
						<li><p><?php echo isset($data['lefttopbar_text']) ? $data['lefttopbar_text'] : ''; ?></p></li>
					<?php 
						}
						else if(isset($data['lefttopbarphone']) &&  $data['lefttopbarphone'] == 'yes')
						{
					?>
						<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo isset($data['lefttopbar_phone_left_text']) ? $data['lefttopbar_phone_left_text'] : ''; ?></a></li>
						<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
					<?php 
						}
						else if(isset($data['lefttopbarsocial']) && $data['lefttopbarsocial'] == 'yes')
						{ 
					?>
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
							<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo esc_attr($type); ?>"></i></a></li>
						<?php
							}	
							if(get_option('udm_googleplus_link')!=""){
						?>
							<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo esc_attr($type); ?>"></i></a></li>
						<?php
							}
							if(get_option('udm_linkedin_link')!="")
							{
						?>
							<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo esc_attr($type); ?>"></i></a></li>
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
							<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo esc_attr($type); ?>"></i></a></li>
						<?php
							}
							if(get_option('udm_pinterest_link')!=""){
						?>
							<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo esc_attr($type); } ; ?>"></i></a></li>
						<?php
							}
						}
						else if(isset($data['lefttopbarbutton']) &&  $data['lefttopbarbutton'] == 'yes')
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
							<li><span class="right_side_bt"><a href="<?php if($url!=""){ echo isset($url) ? $url : ''; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if(isset($data['lefttopbar_button_text']) &&   $data['lefttopbar_button_text']!=""){ echo esc_attr($data['lefttopbar_button_text']); }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span></li>
					<?php 
						}
					?>
				</ul>
				<ul class="top_heade_right">
					<?php 
						if(isset($data['righttopbartext']) && $data['righttopbartext'] == 'yes')
						{
					?>
						<li><p><?php echo esc_attr($data['righttopbar_text']); ?></p></li>
					<?php 
						}
						else if(isset($data['righttopbarphone']) &&  $data['righttopbarphone'] == 'yes')
						{
					?>
						<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo isset($data['righttopbar_phone_left_text']) ? $data['righttopbar_phone_left_text'] : ''; ?></a></li>
						<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
					<?php 
						}
						else if(isset($data['righttopbarsocial']) && $data['righttopbarsocial'] == 'yes')
						{ 
					?>
						<?php
						if(isset($data['righttopbar_social_icon_style']) &&  $data['righttopbar_social_icon_style']=='square')
						{
							 $type="-square"; 
						}
						else
						{
							$type="";
						}
							if(get_option('udm_facebook_link')!=""){
						?>
							<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo esc_attr($type); ?>"></i></a></li>
						<?php
							}	
							if(get_option('udm_googleplus_link')!=""){
						?>
							<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo esc_attr($type); ?>"></i></a></li>
						<?php
							}
							if(get_option('udm_linkedin_link')!="")
							{
						?>
							<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo esc_attr($type); ?>"></i></a></li>
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
							<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo esc_attr($type); ?>"></i></a></li>
						<?php
							}
							if(get_option('udm_pinterest_link')!=""){
						?>
							<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo esc_attr($type); } ; ?>"></i></a></li>
						<?php
							}
						}
						else if(isset($data['righttopbarbutton']) && $data['righttopbarbutton'] == 'yes')
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
							<li><span class="right_side_bt"><a href="<?php if($url!=""){ echo isset($url) ? $url : ''; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if($data['righttopbar_button_text']!=""){ echo esc_attr($data['righttopbar_button_text']); }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span></li>
					<?php 
						}
					?>
				</ul>
			</div>
		</div>
	</section>
<?php } ?>
	<!--basic-header-default-->    <!--bg-light-->
	<section class="basic_header_default">
		<div class="container">
			<nav class="navbar navbar-expand-md  navbar-light">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ) ; ?>"><img src="<?php echo get_option('udm_company_logo'); ?>"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse " id="collapsibleNavbar">
					<?php
					echo '<duv class="basic_header_nav">';
						$menu=isset($data['navigation']) ? $data['navigation'] : '';
						if($menu!="")
						{
							wp_nav_menu(array('menu' => $menu, 'menu_class' => 'navbar-nav'));
						}
						else
						{
							wp_nav_menu(array('menu_class' => 'navbar-nav'));
						}
					echo '</div>';
						if(isset($data['header_button_link']) && $data['header_button_link'] != ''){
							$scheme = parse_url( $data['header_button_link'], PHP_URL_SCHEME);
							if( !in_array( $scheme, array( 'http', 'https'))){
								$url="http://".$data['header_button_link'];
							}
							else
							{
								$url=isset($data['header_button_link']) ? $data['header_button_link'] : '';
							}
						}
					 if(isset($data['header_button']) && $data['header_button']=="yes"){ ?>
						<span class="right_side_bt"><a <?php if(isset($data['header_button_link']) && $data['header_button_link']!=""){ ?> target="_blank" <?php } ?> href="<?php if($url!=""){ echo isset($url) ? $url : ''; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if(isset($data['header_button_text']) && $data['header_button_text']!=""){ echo esc_attr($data['header_button_text']); }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span>
					<?php }
						
						if(isset($data['right_header']) && $data['right_header']=="yes"){
							?>
							<div class="right_side_header">
								<small class="right_side_text"><?php if(isset($data['right_header_text']) && $data['right_header_text'] != ''){ echo esc_attr($data['right_header_text']); }else{ echo 'Call For An Estimate'; } ?></small>  
								<span class="right_side_phone"><?php if(isset($data['right_header_phone']) && $data['right_header_phone'] != ''){ echo esc_attr($data['right_header_phone']); }else{ echo get_option('udm_phone_number'); } ?></span>
							</div>
							<?php 
						}
					?>
				  </div>  
			</nav>
		 </div>				
	</section>
</header>
<!--end-->