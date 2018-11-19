<ul id="gallery" class="gallery grid-gallery">
	<?php 
		foreach( $gallery as $image ):
		$attachment = get_post($image['ID']);
		
		$alt=get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
		$caption=$attachment->post_excerpt;
		$description=$attachment->post_content;
		$href=get_permalink($attachment->ID);
		$src=$attachment->guid;
		$title=$attachment->post_title;

	?>
		<li class="">
			<div class="grid-thumbnail">
				<img src="<?php echo isset($src) ? $src : ''; ?>" alt="<?php echo esc_attr($alt); ?>" >
			</div><!--.grid-thumbnail-->

			<div class="grid-details">
				<a href="<?php echo isset($src) ? $src : ''; ?>" title="<?php echo esc_attr($title); ?>" data-desc="<?php echo esc_attr($description); ?>">
					<h5><span class="grid-post-title"> <?php echo esc_attr($title); ?></span></h5>
				</a>
			</div> 
		</li>

        <?php endforeach; ?>
		
	</ul>
