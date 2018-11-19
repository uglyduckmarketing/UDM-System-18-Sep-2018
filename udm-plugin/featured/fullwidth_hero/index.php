<?php
$data=unserialize(get_option('featured_layout_'.$layout));
 $meta = get_post_meta( $post->ID, 'hero_fields', true ); 
?>
<!--fullwidth-hero-3-->
<section class="fullwidth-hero-3">
    <div class="container">
        <div class="row">
            <div class="col <?php if($data['text_align']=="left"){ echo "text-left"; }else if($data['text_align']=="right"){ echo "text-right"; }else{ echo "text-center"; } ?>">
                <div class="fullwidth_content">
                   <?php if (isset($meta['udm_fullwidth_eyebrow_text_show']) && is_array($meta) && $meta['udm_fullwidth_eyebrow_text_show']=="no") {}else{ ?> <span><?php if (is_array($meta) && $meta['udm_fullwidth_eyebrow_text']!="") {	echo esc_attr($meta['udm_fullwidth_eyebrow_text']); } ?></span><?php } ?>
                    <h2><?php if (isset($meta['udm_fullwidth_header_text']) &&  is_array($meta) && $meta['udm_fullwidth_header_text']!="") {	echo esc_attr($meta['udm_fullwidth_header_text']); }else{ the_title(); } ?></h2>
                    <p><?php if (isset($meta['udm_fullwidth_description']) && is_array($meta) && $meta['udm_fullwidth_description']!="") {	echo esc_attr($meta['udm_fullwidth_description']); }else{ ?>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<?php } ?></p>
                </div>
                <?php if($data['show_button']=="yes"){ ?><span class="right_side_bt"><a class="btn btn-info" href="<?php if($data['button_link']!=""){ echo esc_attr($data['button_link']); } ?>"><h6><?php if($data['button_text']!=""){ echo esc_attr($data['button_text']); }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span><?php } ?>
            </div>
        </div>
    </div>
</section>