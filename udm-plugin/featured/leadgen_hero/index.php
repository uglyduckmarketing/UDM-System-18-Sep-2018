<?php

$data=unserialize(get_option('featured_layout_'.$layout));
 $meta = get_post_meta( $post->ID, 'hero_fields', true ); 
?>

<!--fullwidth-hero-3-->
<section class="fullwidth-hero-3 leadgen-hero">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <div class="fullwidth_content">
                   <?php if (is_array($meta) && isset($meta['udm_leadgen_eyebrow_text_show']) && $meta['udm_leadgen_eyebrow_text_show']=="no") {}else{ ?> <span><?php if (is_array($meta) && $meta['udm_leadgen_eyebrow_text']!="") {	echo esc_attr($meta['udm_leadgen_eyebrow_text']); } ?></span><?php } ?>
                    <h2><?php if (is_array($meta) && $meta['udm_leadgen_header_text']!="") {	echo esc_attr($meta['udm_leadgen_header_text']); }else{ the_title(); } ?></h2>
                    <p><?php if (is_array($meta) && $meta['udm_leadgen_description']!="") {	echo esc_attr($meta['udm_leadgen_description']); }else{ ?>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<?php } ?></p>
                </div>
                <?php if(isset($data['show_button']) && $data['show_button']=="yes"){ ?><span class="right_side_bt"><a class="btn btn-info custbtn" href="<?php if(isset($data['button_link']) && $data['button_link']!=""){ echo esc_attr($data['button_link']); } ?>"><?php if($data['button_text']!=""){ echo esc_attr($data['button_text']); }else{ ?>Get Started<?php } ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span><?php } ?>
            </div>
            <div class="col col-md-6">
                <div class="form_part_top">
					<?php echo do_shortcode($data['form_shortcode']); ?>
                </div>
            </div>
        </div>
    </div>
</section>   