
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
				<img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" >
			</div><!--.grid-thumbnail-->

			<div class="grid-details">
				<a href="<?php echo $src; ?>" title="<?php echo $title; ?>" data-desc="<?php echo $description; ?>">
					<h5><span class="grid-post-title"> <?php echo $title; ?></span></h5>
				</a>
			</div> 
		</li>

        <?php endforeach; ?>
		
	</ul>
