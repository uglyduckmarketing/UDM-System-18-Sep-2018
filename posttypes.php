<?php

if ( ! function_exists('slides_postype') ) {

// Create Slider Post Type
function slides_postype() {

	$labels = array(
		'name'                  => _x( 'Slides', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Slides', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Slides', 'text_domain' ),
		'name_admin_bar'        => __( 'Slides', 'text_domain' ),
		'archives'              => __( 'Slides Archives', 'text_domain' ),
		'attributes'            => __( 'Slides Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Slide:', 'text_domain' ),
		'all_items'             => __( 'All Slides', 'text_domain' ),
		'add_new_item'          => __( 'Add New Slide', 'text_domain' ),
		'add_new'               => __( 'Add Slide', 'text_domain' ),
		'new_item'              => __( 'New Slide', 'text_domain' ),
		'edit_item'             => __( 'Edit Slide', 'text_domain' ),
		'update_item'           => __( 'Update Slide', 'text_domain' ),
		'view_item'             => __( 'View Slide', 'text_domain' ),
		'view_items'            => __( 'View Slides', 'text_domain' ),
		'search_items'          => __( 'Search Slides', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Background Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set background image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove background image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as background image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Slides', 'text_domain' ),
		'description'           => __( 'Homepage Slider', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'slides', $args );

}
add_action( 'init', 'slides_postype', 0 );
}

// Add Custom Meta To Slides

function slider_options_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function slider_options_add_meta_box() {
	add_meta_box(
		'slider_options-slider-options',
		__( 'Slider Options', 'slider_options' ),
		'slider_options_html',
		'slides',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'slider_options_add_meta_box' );

function slider_options_html( $post) {
	wp_nonce_field( '_slider_options_nonce', 'slider_options_nonce' ); ?>

	<p>
		<label for="slider_options_slide_title"><?php _e( 'Slide Title', 'slider_options' ); ?></label><br>
		<input type="text" name="slider_options_slide_title" id="slider_options_slide_title" value="<?php echo slider_options_get_meta( 'slider_options_slide_title' ); ?>">
	</p>	<p>
		<label for="slider_options_slide_short_description"><?php _e( 'Slide Short Description', 'slider_options' ); ?></label><br>
		<textarea name="slider_options_slide_short_description" id="slider_options_slide_short_description" ><?php echo slider_options_get_meta( 'slider_options_slide_short_description' ); ?></textarea>

	</p>	<p>
		<label for="slider_options_button_text"><?php _e( 'Button Text', 'slider_options' ); ?></label><br>
		<input type="text" name="slider_options_button_text" id="slider_options_button_text" value="<?php echo slider_options_get_meta( 'slider_options_button_text' ); ?>">
	</p>	<p>
		<label for="slider_options_button_url"><?php _e( 'Button URL', 'slider_options' ); ?></label><br>
		<input type="text" name="slider_options_button_url" id="slider_options_button_url" value="<?php echo slider_options_get_meta( 'slider_options_button_url' ); ?>">
	</p><?php
}

function slider_options_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['slider_options_nonce'] ) || ! wp_verify_nonce( $_POST['slider_options_nonce'], '_slider_options_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['slider_options_slide_title'] ) )
		update_post_meta( $post_id, 'slider_options_slide_title', esc_attr( $_POST['slider_options_slide_title'] ) );
	if ( isset( $_POST['slider_options_slide_short_description'] ) )
		update_post_meta( $post_id, 'slider_options_slide_short_description', esc_attr( $_POST['slider_options_slide_short_description'] ) );
	if ( isset( $_POST['slider_options_button_text'] ) )
		update_post_meta( $post_id, 'slider_options_button_text', esc_attr( $_POST['slider_options_button_text'] ) );
	if ( isset( $_POST['slider_options_button_url'] ) )
		update_post_meta( $post_id, 'slider_options_button_url', esc_attr( $_POST['slider_options_button_url'] ) );
}
add_action( 'save_post', 'slider_options_save' );


// Create Slider Shortcode
function udm_slider_shortcode() { ?>
	<div class="hero-slider">
		<?php $loop = new WP_Query( array( 'post_type' => 'slides' ) );
	    if ( $loop->have_posts() ) :
	    	while ( $loop->have_posts() ) : $loop->the_post();
				$slideTitle = slider_options_get_meta( 'slider_options_slide_title' );
				$slideDescription = slider_options_get_meta( 'slider_options_slide_short_description' );
				$buttonTitle = slider_options_get_meta( 'slider_options_button_text' );
				$buttonLink = slider_options_get_meta( 'slider_options_button_url' );
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
	        <div class="slide-main" style="background: url(<?php echo $src[0]; ?>) center/cover no-repeat !important;">
						<div class="slide-overlay"></div>
						<div class="slide-container">
							<h2><?php echo $slideTitle; ?></h2>
							<p><?php if($slideDescription) { print $slideDescription; } ?></p>
							<?php if($buttonTitle) : ?>
								<a href="<?php echo $buttonLink; ?>" class="waves-effect waves-light btn"><?php echo $buttonTitle; ?></a>
							<?php endif; ?>
						</div>
	        </div>
	    	<?php endwhile; ?>
			<?php endif; ?>
	  <?php wp_reset_postdata(); ?>
	</div>
<?php }
add_shortcode( 'udm_slider', 'udm_slider_shortcode' );

?>
