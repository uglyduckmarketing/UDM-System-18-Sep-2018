<?php
/* Template Name: Contact Page */
get_header(); ?>
<?php get_template_part( 'template-parts/content', 'hero' ); ?>

<div style="padding-bottom: 60px;">
	<div class="container">
		<div class="row">
			<div class="col m4 s12">
				<?php if(get_option('phone_number')) : ?>
					<h3>Phone Number</h3>
					<?php echo get_option('phone_number'); ?><br />
				<?php endif; ?>
				<?php if(get_option('fax_number')) : ?>
					<h3>Fax Number</h3>
					<?php echo get_option('fax_number'); ?><br />
				<?php endif; ?>
				<?php if(get_option('udm_email')) : ?>
					<h3>Email Address</h3>
					<?php echo get_option('udm_email'); ?><br />
				<?php endif; ?>
				<?php if(get_option('udm_address')) : ?>
					<h3>Location</h3>
					<?php echo get_option('udm_address'); ?><br />
					<?php echo get_option('udm_city'); ?>, <?php echo get_option('udm_state'); ?> <?php echo get_option('udm_zip'); ?>
					<br /><br />
				<?php endif; ?>
			</div>
			<div class="col m8 s12">
				<?php echo do_shortcode(get_option('ninj_form')); ?>
			</div>
		</div>
	</div>
</div>
<div id="map" style="height: 450px; width: 100%; margin-bottom: -45px;"></div>
<style>.call-to-action { display: none; }</style>
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
<?php get_footer(); ?>
