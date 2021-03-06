<?php
$data=unserialize(get_option('header_layout_'.$layout));
?>
<header class="transparent">
<div class="main_transparent_box">
<?php if(isset($data['top_bar']) && $data['top_bar']=="yes"){ ?>
        <!--top-header_basic-->
	<section class="top_basic_header top_basic_show">
		<div class="container-fluid">
			<div class="row">
			 <ul class="top_heade_left">
				<?php 
						if(isset($data['lefttopbartext']) && $data['lefttopbartext'] == 'yes')
						{
					?>
						<li><p><?php echo isset($data['lefttopbar_text']) ? $data['lefttopbar_text'] : ''; ?></p></li>
					<?php 
						}
						else if(isset($data['lefttopbarphone']) && $data['lefttopbarphone'] == 'yes')
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
							<li><span class="right_side_bt"><a class="btn" href="<?php if($url!=""){ echo isset($url) ? $url : ''; }else{ echo "#"; } ?>"><?php if(isset($data['lefttopbar_button_text']) && $data['lefttopbar_button_text']!=""){ echo esc_attr($data['lefttopbar_button_text']); }else{ ?>Get Started<?php } ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></li>
					<?php 
						}
					?>
			</ul>
			<ul class="top_heade_right">
			   <?php 
						if(isset($data['righttopbartext']) && $data['righttopbartext'] == 'yes')
						{
					?>
						<li><p><?php echo isset($data['righttopbar_text']) ? $data['righttopbar_text'] : ''; ?></p></li>
					<?php 
						}
						else if(isset($data['righttopbarphone']) && $data['righttopbarphone'] == 'yes')
						{
					?>
						<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo esc_attr($data['righttopbar_phone_left_text']); ?></a></li>
						<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
					<?php 
						}
						else if(isset($data['righttopbarsocial']) && $data['righttopbarsocial'] == 'yes')
						{ 
					?>
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
							<li><span class="right_side_bt"><a class="btn" href="<?php if($url!=""){ echo isset($url) ? $url : ''; }else{ echo "#"; } ?>"><?php if(isset($data['righttopbar_button_text']) && $data['righttopbar_button_text']!=""){ echo esc_attr($data['righttopbar_button_text']); }else{ ?>Get Started<?php } ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></li>
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
			<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><img alt="Back To Home Page" src="<?php echo get_option('udm_company_logo'); ?>"></a>
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
			  <?php if(isset($data['bottom_button_hide']) && $data['bottom_button_hide']!="yes"){ ?>
					<span class="right_side_bt"><a href="<?php if(isset($data['bottombar_button_link']) &&  $data['bottombar_button_link']!=""){ echo esc_attr($data['bottombar_button_link']); }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if(isset($data['bottombar_button_text']) && $data['bottombar_button_text']!=""){ echo esc_attr($data['bottombar_button_text']); }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span>
				<?php } ?>
			</div>  
		</nav>
	</section>
</div>
<!--end-->
</header>