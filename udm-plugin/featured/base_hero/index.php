<?php
$data=unserialize(get_option('featured_layout_'.$layout));
$meta = get_post_meta( $post->ID, 'hero_fields', true ); 
?>
<!--basic-hero-->
<section class="basic_hero">
<div class="container">
  <div class="row">
    <div class="basic_hero_inner">
        <div class="col col-lg-6">
            <h1><?php  if (is_array($meta) && isset($meta['udm_basic_header_text']) && $meta['udm_basic_header_text']!="") { echo esc_attr($meta['udm_basic_header_text']); }else{ the_title(); } ?></h1>
        </div>
		<?php
			if($data['right_side_widget']=="2")
			{
		?>
        <div class="col col-lg-6 right_side_bt">
            <a class="btn btn-info" href="<?php echo esc_attr($data['button_link']); ?>"><?php if($data['button_text']!=""){ echo esc_attr($data['button_text']); }else{ ?>Get Started<?php } ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
		<?php
			}else if($data['right_side_widget']=="1"){
				?>
        <div class="col col-lg-6 right_side_bt">
            <a class="phonetext" href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a>
        </div>
		<?php
			}
		?>
    </div>
  </div>
</div>
</section>