<div class="container">
	<div class="row">
		<div class="col m7 s12">
			<div class="col m4 s12">
				<?php dynamic_sidebar( 'footer_one' ); ?>
			</div>
			<div class="col m4 s12">
				<?php dynamic_sidebar( 'footer_two' ); ?>
			</div>
			<div class="col m4 s12">
				<?php dynamic_sidebar( 'footer_three' ); ?>
			</div>
		</div>
		<div class="col m5 s12">
			<div class="col s12">
				<?php dynamic_sidebar( 'footer_four' ); ?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row footer-extra">
		<div class="col m8 s12 udm-credit">
			&#9400; <?php echo date('Y'); ?> <?php echo get_option('company_name'); ?> <span style="padding-left: 5px; padding-right: 5px;">|</span> <a class="udm_credit" href="https://uglyduckmarketing.com/" target="_blank">Created by UDM</a>
		</div>
		<div class="col m4 s12 social-footer">
			<?php if(get_option('udm_fb')) { echo '<a href="' . get_option('udm_fb') . '" target=_blank><i class="ion-social-facebook"></i></a>'; } ?>
			<?php if(get_option('udm_twitter')) { echo '<a href="' . get_option('udm_twitter') . '" target=_blank><i class="ion-social-twitter"></i></a>'; } ?>
			<?php if(get_option('udm_ig')) { echo '<a href="' . get_option('udm_ig') . '" target=_blank><i class="ion-social-instagram"></i></a>'; } ?>
			<?php if(get_option('udm_google')) { echo '<a href="' . get_option('udm_google') . '" target=_blank><i class="ion-social-googleplus"></i></a>'; } ?>
			<?php if(get_option('udm_pin')) { echo '<a href="' . get_option('udm_pin') . '" target=_blank><i class="ion-social-pinterest"></i></a>'; } ?>
		</div>
	</div>
</div>
