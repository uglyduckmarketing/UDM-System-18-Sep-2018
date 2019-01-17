<?php
global $post,$wpdb;
$datas = array();
$posttype = get_post_type();
 $layout1=get_post_meta( $post->ID, 'udm_service_option', true );
	$layout=get_option('udm_footer_cta_default');
	$data = unserialize(get_option("footer_cta_layout_".$layout));
 /*if($layout1 == '' && $posttype == 'service'){
	 $layout=get_option('udm_service_default');
	 $datas=unserialize(get_option('service_layout_'.$layout));
 }else if($layout1 != '' && $posttype == 'service'){
	 $datas=unserialize(get_option('service_layout_'.$layout1));
 }else{
	 $data = unserialize(get_option("footer_cta_layout_".$layout));
 }*/

?>
<!--get_in_splitscreen--->
<section class="get_in_splitscreen back">
    <div class="container-fluid">
        <div class="row">
            <div style="background: #dd9933;" class="col col-lg-6 p1-left align-self-stretch <?php echo "mobbackimage"; ?>">
                <div class="main_content_box">
                    <div class="fullwidth_content">
					 <h2 style="color: #5ab237;">An intelligent design platform build for<br>every type of industry.</h2>
                      <p style="color: #ffffff;">We design and build the tools necessary to compete and win<br>in the digital marketplace.</p>
                    </div>
                  
                <span class="right_side_bt"><a style="background: #f44336;
    border: 1px solid #f44336;
    color: #fff;" class="btn" href="#">Get Started<i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>
		
                </div>
            </div>
            <div  style="background: #f44336;" class="col col-lg-6 p1-both align-self-stretch element "></div>
        </div>
    </div>
</section>