<?php
// Testimonials Post Type

function testimonial_cpt() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'udmbase' ),
		'singular_name'         => _x( 'Testimonials', 'Post Type Singular Name', 'udmbase' ),
		'menu_name'             => __( 'Testimonials', 'udmbase' ),
		'name_admin_bar'        => __( 'Testimonials', 'udmbase' ),
		'archives'              => __( 'Testimonials', 'udmbase' ),
		'attributes'            => __( 'Testimonial Attributes', 'udmbase' ),
		'parent_item_colon'     => __( 'Parent Testimonial:', 'udmbase' ),
		'all_items'             => __( 'All Testimonials', 'udmbase' ),
		'add_new_item'          => __( 'Add New Testimonial', 'udmbase' ),
		'add_new'               => __( 'Add Testimonial', 'udmbase' ),
		'new_item'              => __( 'New Testimonial', 'udmbase' ),
		'edit_item'             => __( 'Edit Testimonial', 'udmbase' ),
		'update_item'           => __( 'Update Testimonial', 'udmbase' ),
		'view_item'             => __( 'View Testimonial', 'udmbase' ),
		'view_items'            => __( 'View Testimonials', 'udmbase' ),
		'search_items'          => __( 'Search Testimonials', 'udmbase' ),
		'not_found'             => __( 'Not found', 'udmbase' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'udmbase' ),
		'featured_image'        => __( 'Testimonial Image', 'udmbase' ),
		'set_featured_image'    => __( 'Set testimonial image', 'udmbase' ),
		'remove_featured_image' => __( 'Remove testimonial image', 'udmbase' ),
		'use_featured_image'    => __( 'Use as testimonial image', 'udmbase' ),
		'insert_into_item'      => __( 'Insert into Testimonial', 'udmbase' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'udmbase' ),
		'items_list'            => __( 'Items list', 'udmbase' ),
		'items_list_navigation' => __( 'Items list navigation', 'udmbase' ),
		'filter_items_list'     => __( 'Filter items list', 'udmbase' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'udmbase' ),
		'description'           => __( 'UDM Testimonials', 'udmbase' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'testimonial_cpt', 0 );

// Add Custom Meta To Testimonial

function testimonial_options_get_meta( $value ) {
	global $post;

	$theField = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $theField ) ) {
		return is_array( $theField ) ? stripslashes_deep( $theField ) : stripslashes( wp_kses_decode_entities( $theField ) );
	} else {
		return false;
	}
}

function testimonial_options_add_meta_box() {
	add_meta_box(
		'testimonial_options-testimonial-options',
		__( 'Testimonial Options', 'udmbase' ),
		'testimonial_options_html',
		'testimonials',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'testimonial_options_add_meta_box' );

function testimonial_options_html( $post) {
	wp_nonce_field( '_testimonial_options_nonce', 'testimonial_options_nonce' ); ?>

	<p>
		<label for="testimonial_options_facebook"><?php _e( 'Facebook Testimonial URL', 'udmbase' ); ?></label><br>
		<input type="text" name="testimonial_options_facebook" id="testimonial_options_facebook" value="<?php echo testimonial_options_get_meta( 'testimonial_options_facebook' ); ?>">
	</p>
	<p>
		<label for="testimonial_options_twitter"><?php _e( 'Twitter Testimonial URL', 'udmbase' ); ?></label><br>
		<input type="text" name="testimonial_options_twitter" id="testimonial_options_twitter" value="<?php echo testimonial_options_get_meta( 'testimonial_options_twitter' ); ?>">
	</p>
	<p>
		<label for="testimonial_options_yelp"><?php _e( 'Yelp Testimonial URL', 'udmbase' ); ?></label><br>
		<input type="text" name="testimonial_options_yelp" id="testimonial_options_yelp" value="<?php echo testimonial_options_get_meta( 'testimonial_options_yelp' ); ?>">
	</p>
	<p>
		<label for="testimonial_options_google"><?php _e( 'Google Testimonial URL', 'udmbase' ); ?></label><br>
		<input type="text" name="testimonial_options_google" id="testimonial_options_google" value="<?php echo testimonial_options_get_meta( 'testimonial_options_google' ); ?>">
	</p>

	<?php
}

function testimonial_options_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['testimonial_options_nonce'] ) || ! wp_verify_nonce( $_POST['testimonial_options_nonce'], '_testimonial_options_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['testimonial_options_facebook'] ) )
		update_post_meta( $post_id, 'testimonial_options_facebook', esc_attr( $_POST['testimonial_options_facebook'] ) );
	if ( isset( $_POST['testimonial_options_twitter'] ) )
		update_post_meta( $post_id, 'testimonial_options_twitter', esc_attr( $_POST['testimonial_options_twitter'] ) );
	if ( isset( $_POST['testimonial_options_yelp'] ) )
		update_post_meta( $post_id, 'testimonial_options_yelp', esc_attr( $_POST['testimonial_options_yelp'] ) );
	if ( isset( $_POST['testimonial_options_google'] ) )
		update_post_meta( $post_id, 'testimonial_options_google', esc_attr( $_POST['testimonial_options_google'] ) );
}
add_action( 'save_post', 'testimonial_options_save' );

// Create Testimonial One Shortcode
function udm_testimonials_one_shortcode() {
		$loop = new WP_Query( array( 'post_type' => 'testimonials' ) );
	    if ( $loop->have_posts() ) :
	    	while ( $loop->have_posts() ) : $loop->the_post();
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
				$fb_link = testimonial_options_get_meta( 'testimonial_options_facebook' );
				$twitter_link = testimonial_options_get_meta( 'testimonial_options_twitter' );
				$google_link = testimonial_options_get_meta( 'testimonial_options_google' );
				$yelp_link = testimonial_options_get_meta( 'testimonial_options_yelp' );

					$testimonials_one .=
						'<div class="card-padding">'.

							'<div class="card">'.

								'<div class="card-content">'.
									'<div class="testimonial-text">' . get_the_content() . '</div>'.
								'</div>'.

								'<div class="card-action">'.
									'<div class="card-img circle" style="background: url('.$src[0].') !important; background-size: cover !important; background-position: center !important;">'.'</div>'.
									'<p class="testimonial-name">' . get_the_title() . '</p>';

									if($fb_link != null) {
										$testimonials_one .= '<a target="_blank" href="'.$fb_link.'" class="right social-button-testimonial facebook--testimonial"><i class="ion-social-facebook"></i> View On Facebook</a></p>';
									}
									if($twitter_link != null) {
										$testimonials_one .=
										'<a target="_blank" href="'.$twitter_link.'" class="right social-button-testimonial twitter--testimonial"><i class="ion-social-twitter"></i> View On Twitter</a></p>';
									}
									if($yelp_link != null) {
										$testimonials_one .=
										'<a target="_blank" href="'.$yelp_link.'" class="right social-button-testimonial yelp--testimonial"><i class="fa fa-yelp"></i> View On Yelp</a></p>';
									}
									if($google_link != null) {
										$testimonials_one .=
										'<a target="_blank" href="'.$google_link.'" class="right social-button-testimonial google--testimonial"><i class="ion-social-googleplus"></i> View On Google+</a></p>';
									}


								$testimonials_one .= '</div>'.

							'</div>'.

						'</div>';

	    	endwhile;
			endif;
	 wp_reset_query();
	 return '<div class="testimonials_one_container row">' . $testimonials_one . '</div>';
}
add_shortcode( 'testimonials_one', 'udm_testimonials_one_shortcode' );

// Create Testimonial Two Shortcode
function udm_testimonials_two_shortcode() {
		$loop = new WP_Query( array( 'post_type' => 'testimonials' ) );
	    if ( $loop->have_posts() ) :
	    	while ( $loop->have_posts() ) : $loop->the_post();
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
				$fb_link = testimonial_options_get_meta( 'testimonial_options_facebook' );
				$twitter_link = testimonial_options_get_meta( 'testimonial_options_twitter' );
				$google_link = testimonial_options_get_meta( 'testimonial_options_google' );
				$yelp_link = testimonial_options_get_meta( 'testimonial_options_yelp' );

					$testimonials_two .=
						'<div class="card-padding-two">'.
							'<div class="card">'.
							  '<div class="card-image" style="background: url('.$src[0].') !important; background-size: cover !important; background-position: center !important;">'.'</div>'.
								'<div class="card-content">'.
									'<div class="testimonial-text">' . get_the_content() . '</div>'.
								'</div>';

								if($fb_link != null) {
									$testimonials_two .=
									'<div class="card-action">'.
										'<p class="testimonial-name-two">' . get_the_title() .
										'<a target="_blank" href="'.$fb_link.'" class="right social-button-testimonial facebook--testimonial"><i class="ion-social-facebook"></i> View On Facebook</a></p>'.
									'</div>';
								}
								else if($twitter_link != null) {
									$testimonials_two .=
									'<div class="card-action">'.
										'<p class="testimonial-name-two">' . get_the_title() .
										'<a target="_blank" href="'.$twitter_link.'" class="right social-button-testimonial twitter--testimonial"><i class="ion-social-twitter"></i> View On Twitter</a></p>'.
									'</div>';
								}
								else if($yelp_link != null) {
									$testimonials_two .=
									'<div class="card-action">'.
										'<p class="testimonial-name-two">' . get_the_title() .
										'<a target="_blank" href="'.$yelp_link.'" class="right social-button-testimonial yelp--testimonial"><i class="fa fa-yelp"></i> View On Yelp</a></p>'.
									'</div>';
								}
								else if($google_link != null) {
									$testimonials_two .=
									'<div class="card-action">'.
										'<p class="testimonial-name-two">' . get_the_title() .
										'<a target="_blank" href="'.$google_link.'" class="right social-button-testimonial google--testimonial"><i class="ion-social-googleplus"></i> View On Google+</a></p>'.
									'</div>';
								} else {
									$testimonials_two .=
									'<div class="card-action">'.
										'<p class="testimonial-name-two">' . get_the_title() .
									'</div>';
								}

								$testimonials_two .=
							'</div>'.
						'</div>';

	    	endwhile;
			endif;
	 wp_reset_query();
	 return '<div class="testimonials_two_container row">' . $testimonials_two . '</div>';
}
add_shortcode( 'testimonials_two', 'udm_testimonials_two_shortcode' );
