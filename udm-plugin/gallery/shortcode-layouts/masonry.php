<style>
.gal {

	-ms-column-count: 3;
	-webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;


	}
	.gal img{ width: 100%; padding: 7px 0;}
@media (max-width: 500px) {

		.gal {


	-ms-column-count: 1;
	-webkit-column-count: 1; /* Chrome, Safari, Opera */
    -moz-column-count: 1; /* Firefox */
    column-count: 1;


	}

	}
</style>
	<div class="gal masonry">
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
				<a href="<?php echo $src; ?>" title="<?php echo $title; ?>" data-desc="<?php echo $description; ?>">
					<img class="img-fluid" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
				</a>
			<?php endforeach; ?>
			</div>
