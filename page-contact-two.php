<?php
/* Template Name: Contact Page Two */
get_header(); ?>
<div class="container" style="height: 100%; max-width: 100%; width: 100%; padding: 0px;">
	<div class="col-sm-6" style="height: 100%; padding: 65px; padding-top: 100px; padding-bottom: 180px;">
		<h1>Get In Touch.</h1><hr />
		<div class="col-md-6">
			<h3>Phone Number</h3>
			<?php echo get_option('phone_number'); ?>
		</div>
		<div class="col-md-6">
			<h3>Fax Number</h3>
			<?php echo get_option('fax_number'); ?>
		</div>
		<div class="col-sm-12">
			<h3>Email Address</h3>
			<?php echo get_option('udm_email'); ?>
		</div>
		<div class="col-sm-12">
			<h3>Location</h3>
			<?php echo get_option('udm_address'); ?><br />
			<?php echo get_option('udm_city'); ?>, <?php echo get_option('udm_state'); ?> <?php echo get_option('udm_zip'); ?>
		</div>
		<br /><br />
		<a href="#" class="button rounded slide-trigger">Message Us</a>
	</div>

	<div class="col-sm-6" style="height: 100%; padding: 0px; overflow: hidden; position: relative;">
		<div class="slide-form">
			<i class="close-btn ion-close"></i>
			<?php echo do_shortcode(get_option('ninj_form')); ?>
		</div>
		<div id="map" style="height: 100%; width: 50%; position: fixed !important;"></div>
	</div>
</div>




<style>.call-to-action, footer { display: none; } #map { position: fixed !important; } </style>
<script>
  var map;
  function initMap() {
		LATLNG = {lat: <?php echo get_option('udm_lat'); ?>, lng: <?php echo get_option('udm_long'); ?>};
    map = new google.maps.Map(document.getElementById('map'), {
      center: LATLNG,
      zoom: 14,
			scrollwheel: false,
	    navigationControl: false,
	    mapTypeControl: false,
	    scaleControl: false,
	    draggable: false,
			<?php if(get_option('map_code')) : ?> styles: <?php echo get_option('map_code'); ?><?php endif; ?>
    });
		var marker = new google.maps.Marker({
		 position: LATLNG,
		 map: map,
		 icon: {
		    anchor: new google.maps.Point(16, 16),
		    url: 'data:image/svg+xml;utf-8, \
		      <svg width="40" height="50" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"> \
		        <path fill="<?php echo get_option('udm_color'); ?>" d="M13.734,0 C6.375,0 0.408,5.966 0.408,13.325 C0.408,24.401 13.734,33.468 13.734,33.468 C13.734,33.468 27.06,23.734 27.06,13.324 C27.06,5.965 21.093,0 13.734,0 Z M13.734,19.676 C10.224,19.676 7.38,16.832 7.38,13.324 C7.38,9.816 10.224,6.972 13.734,6.972 C17.242,6.971 20.086,9.817 20.086,13.325 C20.085,16.833 17.242,19.676 13.734,19.676 Z" id="map_marker"></path> \
		      </svg>'
		  }
	 });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo get_option('udm_google_map_key'); ?>&callback=initMap" async defer></script>
<script>
	jQuery(document).ready(function($) {
		$('.slide-trigger, .close-btn').click(function() {
			$('.slide-form').toggleClass('slide-form-open');
		});
	});
</script>
<?php get_footer(); ?>
