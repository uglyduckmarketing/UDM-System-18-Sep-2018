
	<div id="slideshowslider" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
			<?php 
					$temp="0";	
					foreach( $gallery as $image ):
					$attachment = get_post($image['ID']);
					
					$alt=get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
					$caption=$attachment->post_excerpt;
					$description=$attachment->post_content;
					$href=get_permalink($attachment->ID);
					$src=$attachment->guid;
					$title=$attachment->post_title;

				?>
    <li data-target="#slideshowslider" data-slide-to="<?php echo $temp; ?>" class="<?php if($temp=="0"){ ?>active<?php } ?>"></li>
 <?php $temp++; endforeach; ?>
  </ul>
  
  <!-- The slideshowslider -->
  <div class="carousel-inner">
  <?php 
				$temp2="0";
				foreach( $gallery as $image ):
				$attachment = get_post($image['ID']);
				
				$alt=get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
				$caption=$attachment->post_excerpt;
				$description=$attachment->post_content;
				$href=get_permalink($attachment->ID);
				$src=$attachment->guid;
				$title=$attachment->post_title;
				?>
    <div class="carousel-item  col-md-12 <?php if($temp2=="0"){ ?>active<?php } ?>">
      <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" width="100%" height="500">
    </div>
      <?php $temp2++; endforeach; ?>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#slideshowslider" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slideshowslider" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
