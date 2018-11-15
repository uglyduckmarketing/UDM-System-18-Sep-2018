<?php
	$layout=get_option("udm_footer_default");
	$data=unserialize(get_option('footer_layout_'.$layout)); 
?>
<footer class="footer-mailchimp">
<div class="footer-top">
	<div class="container">
		<div class="row">
			
			<?php
				if ( is_active_sidebar('footer_one'))
				{
			?>
			<div class="col">
				<?php
					dynamic_sidebar('footer_one');
				?>
			</div>
			<?php
				}
				if ( is_active_sidebar('footer_two')){
	
			?>
			<div class="col">
				<?php
					dynamic_sidebar('footer_two');
				?>
			</div>
			<?php

				}if ( is_active_sidebar('footer_three')){
			
			?>
			<div class="col">
				<?php
					dynamic_sidebar('footer_three');
				?>
			</div>
			<?php
				
				}if ( is_active_sidebar('footer_four')){

			?>
			<div class="col">
				<?php
					dynamic_sidebar('footer_four');
				?>
			</div>
			<?php
				}if ( is_active_sidebar('footer_five')){
			?>
			<div class="col">
				<?php
					dynamic_sidebar('footer_five');
				?>
			</div>
			<?php
				}
			?>
		
		
		</div>
	</div>
</div>
<div class="footer-bottom">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
		
			<h3><?php echo ($data['title_text']!="" ? $data['title_text'] : "UDM Plugin"); ?></h3>
			<p><?php echo ($data['desc_text']!="" ? $data['desc_text'] : "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."); ?></p>
			<ul class="footer_social_icons">
			<?php
				if(isset($data['social_icons']) && $data['social_icons']=="yes")
				{
						if(get_option('udm_facebook_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook-square"></i></a></li>
							<?php
								}	
								if(get_option('udm_googleplus_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus-square"></i></a></li>
							<?php
								}
								if(get_option('udm_linkedin_link')!="")
								{
							?>
								<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin-square"></i></a></li>
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
								<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter-square"></i></a></li>
							<?php
								}
								if(get_option('udm_pinterest_link')!=""){
							?>
								<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest-square"></i></a></li>
							<?php
								}
				}
			?>
			</ul>
			<ul class="footer_apps_icons">
			<?php
				if(isset($data['apps_icons']) && $data['apps_icons']=="yes")
				{
					if($data['android_app_url']!=""){
			?>
					<li><a href="<?php echo get_option('android_app_url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/google-play.png"></a></li>
			<?php
				}	
				if($data['ios_app_url']!=""){
			?>
					<li><a href="<?php echo get_option('ios_app_url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/apple-store.png"></i></a></li>
			<?php
				}
				}
			?>
			</ul>
			
		</div>
		</div>
	</div>
</div>
</footer>