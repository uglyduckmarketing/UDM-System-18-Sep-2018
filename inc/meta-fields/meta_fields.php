<?php
add_action( 'services_add_form_fields', 'add_category_image', 10, 2 );
add_action( 'created_services','save_category_image', 10, 2 );
 add_action( 'services_edit_form_fields', 'update_category_image', 10, 2 );
add_action( 'edited_services', 'updated_category_image', 10, 2 );

add_action( 'admin_enqueue_scripts', 'load_media');
add_action( 'admin_footer', 'add_script' );
function load_media() {
	wp_enqueue_media();
} 

function add_category_image ( $taxonomy ) { ?>
	<div class="form-field term-group">
     <label for="category-image-id"><?php _e('Featured Image', 'hero-theme'); ?></label>
     <input type="hidden" id="category-image-id" name="category-image-id" class="custom_media_url" value="">
     <div id="category-image-wrapper"></div>
     <p>
       <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e( 'Add Image', 'hero-theme' ); ?>" />
       <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e( 'Remove Image', 'hero-theme' ); ?>" />
    </p>
   </div>
<?php
}
function add_script() { ?>
   <script>
     jQuery(document).ready( function($) {
       function ct_media_upload(button_class) {
         var _custom_media = true;
		 if(!_custom_media){
         _orig_send_attachment = wp.media.editor.send.attachment;
		 }
         $('body').on('click', button_class, function(e) {
           var button_id = '#'+$(this).attr('id');
           var send_attachment_bkp = wp.media.editor.send.attachment;
           var button = $(button_id);
           _custom_media = true;
           wp.media.editor.send.attachment = function(props, attachment){
             if ( _custom_media ) {
               $('#category-image-id').val(attachment.id);
               $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
               $('#category-image-wrapper .custom_media_image').attr('src',attachment.url).css('display','block');
             } else {
               return _orig_send_attachment.apply( button_id, [props, attachment] );
             }
            }
         wp.media.editor.open(button);
         return false;
       });
     }
     ct_media_upload('.ct_tax_media_button.button'); 
     $('body').on('click','.ct_tax_media_remove',function(){
       $('#category-image-id').val('');
       $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
     });
   });
 </script>
 <?php }
 
function save_category_image ( $term_id, $tt_id ) {
   if( isset( $_POST['category-image-id'] ) && '' !== $_POST['category-image-id'] ){
     $image = $_POST['category-image-id'];
     add_term_meta( $term_id, 'category-image-id', $image, true );
   }
}

function update_category_image ( $term, $taxonomy ) { ?>
   <tr class="form-field term-group-wrap">
     <th scope="row">
       <label for="category-image-id"><?php _e( 'Featured Image', 'hero-theme' ); ?></label>
     </th>
     <td>
       <?php $image_id = get_term_meta ( $term -> term_id, 'category-image-id', true ); ?>
       <input type="hidden" id="category-image-id" name="category-image-id" value="<?php echo $image_id; ?>">
       <div id="category-image-wrapper">
         <?php if ( $image_id ) { ?>
           <?php echo wp_get_attachment_image ( $image_id, 'thumbnail' ); ?>
         <?php } ?>
       </div>
       <p>
         <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e( 'Add Image', 'hero-theme' ); ?>" />
         <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e( 'Remove Image', 'hero-theme' ); ?>" />
       </p>
     </td>
   </tr>
 <?php
}  
function updated_category_image ( $term_id, $tt_id ) {
   if( isset( $_POST['category-image-id'] ) && '' !== $_POST['category-image-id'] ){
     $image = $_POST['category-image-id'];
     update_term_meta ( $term_id, 'category-image-id', $image );
   } else {
     update_term_meta ( $term_id, 'category-image-id', '' );
   }
 }
function udm_related_service_meta(){
	add_meta_box( 
        'udm_related_service_sec',  
        __( 'Related Services', 'udm' ), 
        'udm_related_service_display', 'service', 'normal', 'high' 
    );
}

function udm_benifit_service_meta(){
	add_meta_box( 
        'udm_service_benifits',  
        __( 'Service Benifits', 'udm' ), 
        'udm_service_benifits_display', 'service', 'normal', 'low'
    );
}

function udm_breakdown_service_meta(){
	add_meta_box( 
        'udm_service_breakdown',  
        __( 'Services Breakdown', 'udm' ), 
        'udm_service_breakdown_display', 'service', 'normal', 'low' 
    );
}

function udm_cta_service_meta(){
	add_meta_box( 
        'udm_service_cta',  
        __( 'Services CTA', 'udm' ), 
        'udm_service_cta_display', 'service', 'normal', 'low' 
    );
}

function udm_service_service_meta(){
	add_meta_box( 
        'udm_service_description',  
        __( 'Service Description', 'udm' ), 
        'udm_service_description_display', 'service', 'normal', 'low' 
    );
}

function udm_gallery_service_meta(){
	add_meta_box( 
        'udm_service_gallery',  
        __( 'Gallery', 'udm' ), 
        'udm_service_gallery_display', 'service', 'normal', 'low' 
    );
}
function udm_video_service_meta() { 
	add_meta_box( 
        'udm_service_video',  
        __( 'Service Video', 'udm' ), 
        'udm_service_video_display', 'service' , 'normal', 'low'
    );	
}
function udm_service_options() {
    add_meta_box( 
        'udm_service_options',  // unique id
        __( 'Service Option', 'udm' ),  // metabox title
        'udm_service_options_display', 'service', 'normal', 'low'   // callback to show the dropdown
    
    );
}

add_action( 'add_meta_boxes', 'udm_related_service_meta',1 );
add_action( 'add_meta_boxes', 'udm_benifit_service_meta',2 );
add_action( 'add_meta_boxes', 'udm_breakdown_service_meta',3 );
add_action( 'add_meta_boxes', 'udm_cta_service_meta',4 );
add_action( 'add_meta_boxes', 'udm_service_service_meta',5 );
add_action( 'add_meta_boxes', 'udm_gallery_service_meta',6 );
add_action( 'add_meta_boxes', 'udm_video_service_meta',7 );
add_action( 'add_meta_boxes', 'udm_service_options',8 );

function udm_service_description_display( $post ) {
	$meta = get_post_meta( $post->ID, 'service_desc', true );
	 wp_nonce_field( basename( __FILE__ ), 'udm_service_description_nonce' );
	 ?>
		<div class="inside own-fields">
			<div class="own_fields own_input_field_text">
				<label>Description Eyebrow</label>
				<div class="own_label">
					<input type="text" name="service_desc[description_eyebrow]" id="description_eyebrow" value="<?php echo isset($meta['description_eyebrow']) ? $meta['description_eyebrow'] : '' ?>">
				</div>
			</div>
			<div class="own_fields own_input_field_text">
				<label>Description Heading</label>
				<div class="own_label">
					<input type="text" name="service_desc[description_heading]" id="description_heading" value="<?php echo isset($meta['description_heading']) ? $meta['description_heading'] : '' ?>">
				</div>
			</div>
			<?php $service_description = isset($meta['service_description']) ? $meta['service_description'] : ''; ?>
			<div class="own_fields own_input_field_textarea">
				<label>Services Description</label>
				<div class="own_label">
					<?php wp_editor( htmlspecialchars_decode($service_description), 'service_description', $settings = array('textarea_name'=>'service_desc[service_description]','textarea_rows' => 15) ); ?>
				</div>
			</div>
			<!--<div class="own_fields own_input_field_colorpicker">
				<label>Choose background color:</label>
				<div class="own_label">
					<input class="color_field" type="text" name="service_desc[background_color]" value="<?php //echo isset($meta['background_color']) ? $meta['background_color'] : '#FFFFFF' ?>"/>
				</div>
			</div>-->
		</div>
		<!--<script>
        jQuery(document).ready(function($){
            $('.color_field').each(function(){
                $(this).wpColorPicker();
                });
        });
        </script>-->
	 <?php
}

function save_service_description_meta( $post_id ) { 
	if ( isset($_POST['udm_service_description_nonce']) 
			&& !wp_verify_nonce( $_POST['udm_service_description_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	if (isset($_POST['service_desc'])) { //Fix 3
			$new = $_POST['service_desc'];
				update_post_meta( $post_id, 'service_desc', $new );
		}
} 
add_action( 'save_post', 'save_service_description_meta' );
 
function udm_service_benifits_display($post){
	$bmeta = get_post_meta( $post->ID, 'benifit', true ); 
	wp_nonce_field( basename( __FILE__ ), 'udm_service_benifits_nonce' );
	?> 
	<div class="inside own-fields">
		<div class="own_label"><label for="">Benefit List</label></div>
			<table id="dynamictables" class="widefat mcf-input-table ">
				<tbody>
					<?php
					$x = 1;
					for($i = 0 ; $i<count($bmeta); $i++){
						?>
						<tr class="row tr_clone_row">
							<td class="order ui-sortable-handle" id="<?php echo $x; ?>"><?php echo $x; ?></td>
							<td class="cus_td">  
								<div class="own_fields own_input_field_text">
									<label>Benefit Title</label>
									<div class="own_label">
										<input type="text" id="benefit_title" class="text " name="benifit[<?php echo $i; ?>][benefit_<?php echo $i; ?>_title]" value="<?php echo isset($bmeta[$i]['benefit_'.$i.'_title']) ? $bmeta[$i]['benefit_'.$i.'_title'] : ''; ?>" placeholder="">
									</div> 
								</div>
								<div class="own_fields own_input_field_text">
									<label>Benefit Text</label>
									<div class="own_label">
										<input type="text" id="benifit_text" class="text " name="benifit[<?php echo $i; ?>][benefit_<?php echo $i; ?>_text]" value="<?php echo isset($bmeta[$i]['benefit_'.$i.'_text']) ? $bmeta[$i]['benefit_'.$i.'_text'] : ''; ?>" placeholder=""> 
									</div>
								</div>
							</td>
							<td class="remove">
								<a pid="" sid="" class="tr_clone_remove" href="javascript:;"><i class="fa fa-minus"></i></a>
							</td>
						</tr>
						<?php
						$x++;
					}
					?>
				</tbody>
			</table>
			<ul class="hl clearfix repeater-footer addrow-btn">
				<li class="right">
					<a href="#" oid="" tid="tabs-" class="tr_clone_add own-button ">Add Benifit</a>
				</li>
			</ul>
	</div>
<script>
$( function() {
	$('a.tr_clone_add').on('click',function (e) {
		e.preventDefault();
		$('#dynamictables tbody').append('<tr class="row tr_clone_row">'
			+'<td class="order ui-sortable-handle" id="1">1</td>'
			+'<td class="cus_td">'
				+'<div class="own_fields own_input_field_text">'
					+'<label>Benefit Title</label>'
					+'<div class="own_label">'
						+'<input type="text" id="benefit_title" class="text " name="" value="" placeholder="">'
					+'</div>'
				+'</div>'
				+'<div class="own_fields own_input_field_text">'
					+'<label>Benefit Text</label>'
					+'<div class="own_label">'
						+'<input type="text" id="benifit_text" class="text " name="" value="" placeholder="">'
					+'</div>'
				+'</div>'
			+'</td>'
			+'<td class="remove">'
				+'<a pid="" sid="" class="tr_clone_remove" href="javascript:;"><i class="fa fa-minus"></i></a>'
			+'</td>'
		);
		arrangeSno();
	});
	$('body').delegate('a.tr_clone_remove','click',function (e) {
		e.preventDefault();
	$(this).closest('tr').remove();
	arrangeSno();
	});
	function arrangeSno()
	{
		var i=1;
		var x = 0;
		$('#dynamictables tbody tr').each(function() {
			$(this).find(".order").html(i);
			$(this).find(".order").attr('id',i);
			$(this).find("#benefit_title").attr('name',"benifit["+x+"][benefit_"+x+"_title]");
			$(this).find("#benifit_text").attr('name',"benifit["+x+"][benefit_"+x+"_text]");
			i++;
			x++;
		}); 
	}
});
</script>
	<?php
}

function save_service_benifit_meta( $post_id ) { 
	if ( isset($_POST['udm_service_benifits_nonce']) 
			&& !wp_verify_nonce( $_POST['udm_service_benifits_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }

			$new = isset($_POST['benifit']) ? $_POST['benifit'] : '';
			update_post_meta( $post_id, 'benifit', $new );
	
}
add_action( 'save_post', 'save_service_benifit_meta' );

function udm_service_breakdown_display($post){
	$bkmeta = get_post_meta( $post->ID, 'breakdown', true );
	//echo '<pre>'; print_r($bkmeta);
	wp_nonce_field( basename( __FILE__ ), 'udm_service_breakdown_nonce' ); 
 
	?>
		<div class="inside own-fields">
			<div class="own_label"><label for="">Single Service Breakdown</label></div>
			<table id="servicedynamictables" class="widefat mcf-input-table ">
				<tbody>
				<?php
					$x = 1;
					if(isset($bkmeta) && $bkmeta !=''){
					for($i = 0 ; $i<count($bkmeta); $i++){
						?>
					<tr class="row tr_clone_row dynamicrow">
						<td class="order ui-sortable-handle" id="<?php echo $x; ?>"><?php echo $x; ?></td>
						<td class="cus_td">
							<div class="own_fields own_input_field_text">
								<label>Description Eyebrow</label>
								<div class="own_label">
									<input type="text" id="service_desc_eyebrow" class="text " name="breakdown[<?php echo $i; ?>][service_break_<?php echo $i; ?>_eyebrow]" value="<?php echo $bkmeta[$i]['service_break_'.$i.'_eyebrow']; ?>" placeholder="">
								</div>		
							</div>
							<div class="own_fields own_input_field_text">
								<label>Description Heading</label>
								<div class="own_label">
									<input type="text" id="service_desc_heading" class="text " name="breakdown[<?php echo $i; ?>][service_break_<?php echo $i; ?>_heading]" value="<?php echo $bkmeta[$i]['service_break_'.$i.'_heading']; ?>" placeholder="">
								</div>			
							</div>	
							<?php
								$desc = $bkmeta[$i]['service_break_'.$i.'_text'];							
							?>
							<div class="own_fields own_input_field_text">
								<label>Breakdown Text</label>
								<div class="own_label">
									<?php wp_editor( htmlspecialchars_decode($desc), 'service_breakdown_text'.$x, $settings = array('textarea_name'=>'breakdown['.$i.'][service_break_'.$i.'_text]','textarea_rows' => 15) ); ?>
								</div>			
							</div>
							<div class="own_fields own_input_field_text">
								<label>Button</label>
								<div class="own_label">
									<label>Title</label>
									<input type="text" id="button_title" class=" " name="breakdown[<?php echo $i; ?>][button_<?php echo $i; ?>_title]" value="<?php echo $bkmeta[$i]['button_'.$i.'_title']; ?>" placeholder="">
								</div>
								<div class="own_label">
									<label>Link</label>
									<input type="text" id="button_link" class="" name="breakdown[<?php echo $i; ?>][button_<?php echo $i; ?>_link]" value="<?php echo $bkmeta[$i]['button_'.$i.'_link']; ?>" placeholder="">
								</div>			
							</div>
							<div class="own_fields own_input_field_text">
								<label>Image</label>
								<div class="own_label">
									<input type="hidden"  id="myprefix_image_id" name="breakdown[<?php echo $i; ?>][service_break_<?php echo $i; ?>_image]" value="<?php echo $bkmeta[$i]['service_break_'.$i.'_image']; ?>"  class="regular-text" />
									<div class="has-image">
										<div class="img_hover">
											<a class="remove_image" href="#"><i class="fa fa-close"></i></a>
										</div>
										<?php $url = wp_get_attachment_image_url( $bkmeta[$i]['service_break_'.$i.'_image']); ?>
										<img id="myprefix-preview-image" src="<?php echo $url; ?>" alt="">
									</div>
									<div class="no-image" <?php if($bkmeta[$i]['service_break_'.$i.'_image'] != ''){ echo 'style="display:none"'; } ?>>
										<p>No image selected <input type="button" class="button add-image" value="Add Image">
										</p>
									</div>
								</div>
							</div>
							<!--<div class="own_fields own_input_field_colorpicker">
								<label>Choose background color:</label>
								<div class="own_label">
									<input id="breakdowncolor" class="breakdown_color_fields" type="text" name="breakdown[<?php //echo $i; ?>][service_break_<?php //echo $i; ?>_color]" value="<?php //echo $bkmeta[$i]['service_break_'.$i.'_color']; ?>"/>
								</div>
							</div>-->
						</td>
						<td class="remove"><a id="" class="ser_tr_clone_remove" href="javascript:;"><i class="fa fa-minus"></i></a></td>
					</tr>
<?php $x++; } }  ?>
					<tr class="row tr_clone_row tr_row" style="display:none;">
						<td class="order ui-sortable-handle" id="1">1</td>
						<td class="cus_td">
							<div class="own_fields own_input_field_text">
								<label>Description Eyebrow</label>
								<div class="own_label">
									<input type="text" id="service_desc_eyebrow" class="text " name="" value="" placeholder="">
								</div>		
							</div>
							<div class="own_fields own_input_field_text">
								<label>Description Heading</label>
								<div class="own_label">
									<input type="text" id="service_desc_heading" class="text " name="" value="" placeholder="">
								</div>			
							</div>	
							<div class="own_fields own_input_field_text">
								<label>Breakdown Text</label>
								<div class="own_label texteditor">
									<textarea id="breakdowntex" rows="15"></textarea>
									<?php //wp_editor( '', 'breakdowntex', $settings = array('textarea_name'=>'','textarea_rows' => 15) ); ?>
								</div>			
							</div>
							<div class="own_fields own_input_field_text">
								<label>Button</label>
								<div class="own_label">
									<label>Title</label>
									<input type="text" id="button_title" class=" " name="" value="" placeholder="">
								</div>
								<div class="own_label">
									<label>Link</label>
									<input type="text" id="button_link" class="" name="" value="" placeholder="">
								</div>			
							</div>
							<div class="own_fields own_input_field_text">
								<label>Image</label>
								<div class="own_label">
									<input type="hidden" name="" id="myprefix_image_id" value="" class="regular-text" />
									<div class="has-image">
										<div class="img_hover">
											<a class="remove_image" href="#"><i class="fa fa-close"></i></a>
										</div>
										<img id="myprefix-preview-image" src="" alt="">
									</div>
									<div class="no-image">
										<p>No image selected <input type="button" class="button add-image" value="Add Image">
										</p>
									</div>
								</div>
							</div>
							<!--<div class="own_fields own_input_field_colorpicker">
								<label>Choose background color:</label>
								<div class="own_label">
									<input id="breakdowncolors" class="breakdown_color_field" type="text" name="" value=""/>
								</div>
							</div>-->
						</td>
						<td class="remove"><a id="" class="ser_tr_clone_remove" href="javascript:;"><i class="fa fa-minus"></i></a></td></tr>
				</tbody>  
			</table>
			<ul class="hl clearfix repeater-footer addrow-btn">
				<li class="right">
					<a href="#" oid="" tid="tabs-" class="tr_clone_service own-button ">Add Row</a>
				</li>
			</ul>
	</div>
<script>
$( function() {
	$('.breakdown_color_fields').each(function(){
		$(this).wpColorPicker();
	});
	$('a.tr_clone_service').on('click',function (e) {
		e.preventDefault();
		
		var htmls = $('.tr_row').html();
		$('#servicedynamictables tbody').append('<tr class="row tr_clone_row dynamicrow">'+htmls+'<tr>');
			arrangeSno();
			
	});
	$('body').delegate('a.ser_tr_clone_remove','click',function (e) {
		e.preventDefault();
		$(this).closest('tr').remove();
		 arrangeSno();
	});
	
jQuery('body').delegate('.remove_image','click', function(e) {
	e.preventDefault();
	var myimage = $(this).closest('tr').find('.has-image img');
	var hasimage = $(this).closest('tr').find('.has-image');
	var noimage = $(this).closest('tr').find('.no-image');
	var mpimage = $(this).closest('tr').find('#myprefix_image_id');
	myimage.attr('src','');
	mpimage.val('');
	hasimage.hide();
	noimage.show();
	
});
	jQuery('body').delegate('.add-image','click', function(e) {
	e.preventDefault();
             var image_frame;
             if(image_frame){
                 image_frame.open();
             }
			 var hasiimage = $(this).closest('tr').find('.has-image');
			var myimage = $(this).closest('tr').find('.has-image img');
			var hasimage = $(this).closest('tr').find('#myprefix_image_id');
			var noimage = $(this).closest('tr').find('.no-image');
			var iromve = $(this).closest('tr');
             // Define image_frame as wp.media object
             image_frame = wp.media({
                           title: 'Select Media',
                           multiple : false,
                           library : {
                                type : 'image',
                            }
                       });

                       image_frame.on('select',function() {
						   
							var selection =  image_frame.state().get('selection');
							var gallery_ids = new Array();
							var my_index = 0;
							selection.each(function(attachment) {
							  attachment = attachment.toJSON();
							  if(my_index == 0){
								  
								  hasiimage.show();
								  myimage.attr('src',attachment.sizes.full.url);
								hasimage.val(attachment.id);
							  }else{
									var htmls = $('.tr_row').html();
									$('#servicedynamictables tbody').append('<tr class="row tr_clone_row dynamicrow">'+htmls+'<tr>');
							  }
								my_index++; 
							});
							
							//iromve.remove();
							arrangeSno();
						});
					image_frame.on('open',function() {
                        var selection =  image_frame.state().get('selection');
                        ids = jQuery('input#myprefix_image_id').val().split(',');
                        ids.forEach(function(id) {
                          attachment = wp.media.attachment(id);
                          attachment.fetch();
                          selection.add( attachment ? [ attachment ] : [] );
                        });

                      });
			image_frame.open();
		});
function arrangeSno()
	{
		var i=1;
		var x = 0; 
		var xs = x + 1;
		$('#servicedynamictables tbody tr.dynamicrow').each(function() {
		$(this).find(".order").html(i);
		$(this).find(".order").attr('id',i);
		//$(this).find(".no-image").hide();
		//$(this).find(".breakdowncolor").attr("id","service_breakdown_textclo"+i);  
		//$(this).find(".texteditor #service_breakdown_textclo"+i).wp_editor();
		$(this).find("#breakdowncolors").wpColorPicker();
		$(this).find("#myprefix_image_id").attr('name',"breakdown["+x+"][service_break_"+x+"_image]");
		$(this).find("#button_title").attr('name',"breakdown["+x+"][button_"+x+"_title]");
		$(this).find("#button_link").attr('name',"breakdown["+x+"][button_"+x+"_link]");
		$(this).find("#breakdowntex").attr('name',"breakdown["+x+"][service_break_"+x+"_text]");
		$(this).find("#service_desc_heading").attr('name',"breakdown["+x+"][service_break_"+x+"_heading]");
		$(this).find("#service_desc_eyebrow").attr('name',"breakdown["+x+"][service_break_"+x+"_eyebrow]");
		$(this).find("#breakdowncolors").attr('name',"breakdown["+x+"][service_break_"+x+"_color]");
		if($(this).find("#myprefix_image_id").val()){
			$(this).find(".no-image").hide();
		}
		i++;
		x++;
		xs++;
		});
	}
});
</script>
	<?php
}

function save_service_breakdown_meta( $post_id ) { 
	if ( isset($_POST['udm_service_breakdown_nonce']) 
			&& !wp_verify_nonce( $_POST['udm_service_breakdown_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	if (isset($_POST['breakdown'])) { //Fix 3
			$new = $_POST['breakdown'];
				update_post_meta( $post_id, 'breakdown', $new );
		}
}
add_action( 'save_post', 'save_service_breakdown_meta' );

function udm_service_video_display($post){
	$vmeta = get_post_meta( $post->ID, 'service_video', true );
	wp_nonce_field( basename( __FILE__ ), 'udm_service_video_nonce' );
	?>
		<div class="inside own-fields">
			<div class="own_fields own_input_field_text">
				<label>Youtube Link</label>
				<div class="own_label">
					<input type="text" <?php if(isset($vmeta['vimeo_id']) && $vmeta['vimeo_id'] != ''){ echo 'disabled'; } ?> id="youtubelink" name="service_video[youtube_link]" value="<?php echo isset($vmeta['youtube_link']) ? $vmeta['youtube_link'] : ''; ?>">
				</div>			
			</div>
			<div class="own_fields own_input_field_text">
				<label>Vimeo ID</label>
				<div class="own_label">
					<input type="text" <?php if(isset($vmeta['youtube_link']) && $vmeta['youtube_link'] != ''){ echo 'disabled'; } ?>id="vimeoid" name="service_video[vimeo_id]" value="<?php echo isset($vmeta['vimeo_id']) ? $vmeta['vimeo_id'] : ''; ?>">
				</div>			
			</div>
			<div class="own_fields own_input_field_text">
				<label>Description Eyebrow</label>
				<div class="own_label">
					<input type="text" name="service_video[video_desc_eyebrow]" value="<?php echo isset($vmeta['video_desc_eyebrow']) ? $vmeta['video_desc_eyebrow'] : ''; ?>">
				</div>			
			</div>
			<div class="own_fields own_input_field_text">
				<label>Description Heading</label>
				<div class="own_label">
					<input type="text" name="service_video[video_desc_heading]" value="<?php echo isset($vmeta['video_desc_heading']) ? $vmeta['video_desc_heading'] : ''; ?>">
				</div>			
			</div>
			<?php $vedesc = isset($vmeta['video_desc_services']) ? $vmeta['video_desc_services'] : ''; ?>
			<div class="own_fields own_input_field_text">
				<label>Services Description</label>
				<div class="own_label">
					<?php wp_editor( htmlspecialchars_decode($vedesc), 'video_desc_services', $settings = array('textarea_name'=>'service_video[video_desc_services]'
					,'textarea_rows' => 15) ); ?>
				</div>			
			</div>
			<!--<div class="own_fields own_input_field_colorpicker">
				<label>Choose background color:</label>
				<div class="own_label">
					<input class="video_color_field" type="text" name="service_video[video_background_color]" value="<?php// echo isset($vmeta['video_background_color']) ? $vmeta['video_background_color'] : '#dd3333'; ?>"/>
				</div>
			</div>-->
		</div>
<script>
jQuery(document).ready(function($){
	$('.video_color_field').each(function(){
		$(this).wpColorPicker();
	});
	$('#vimeoid').on('keyup', function(){
		if($(this).val() != ''){
			$('#vimeoid').attr('disabled', false);
			$('#youtubelink').prop('disabled', true);
		}else{
			$('#youtubelink').prop('disabled', false);
		}
		
	});
	$('#youtubelink').on('keyup', function(){
		if($(this).val() != ''){
			$('#youtubelink').prop('disabled', false);
			$('#vimeoid').prop('disabled', true);
		}else{
			$('#vimeoid').prop('disabled', false);
		}
		
	});
});
</script>
	<?php
}

function save_service_video_meta( $post_id ) { 
	if ( isset($_POST['udm_service_video_nonce']) 
			&& !wp_verify_nonce( $_POST['udm_service_video_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	if (isset($_POST['service_video'])) { //Fix 3
			$new = $_POST['service_video'];
			update_post_meta( $post_id, 'service_video', $new );
		}
}
add_action( 'save_post', 'save_service_video_meta' );

function udm_service_gallery_display($post){
	$gmeta = get_post_meta( $post->ID, 'service_gallery', true );
	wp_nonce_field( basename( __FILE__ ), 'udm_service_gallery_nonce' );
	$args = array(
    'post_type'=> 'gallery',
    'order'    => 'ASC'
    );              
	$the_query = new WP_Query( $args );
	$gallery = isset($gmeta['gallery_name']) ? $gmeta['gallery_name'] : '';
	?>
	<div class="inside own-fields">
		<div class="own_fields own_input_field_select">
			<label>Gallery</label>
			<div class="own_label">
			<select class="" id="gallery_name" name="service_gallery[gallery_name]">
				<option value="">Select</option>
				<?php
					if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
						?>
						<option value="<?php echo $the_query->post->ID; ?>" <?php if($gallery == $the_query->post->ID){ echo 'selected'; } ?>><?php the_title(); ?></option>
						<?php
					endwhile;
					endif;
				?>
			</select>
		</div>
		</div>
		<div class="own_fields own_input_field_text">
			<label>Gallery Eyebrow</label>
			<div class="own_label">
				<input type="text" name="service_gallery[gallery_eyebrow]" value="<?php echo isset($gmeta['gallery_eyebrow']) ? $gmeta['gallery_eyebrow'] : ''; ?>">
			</div>
		</div>
		<div class="own_fields own_input_field_text">
			<label>Gallery Heading</label>
			<div class="own_label">
				<input type="text" name="service_gallery[gallery_heading]" value="<?php echo isset($gmeta['gallery_heading']) ? $gmeta['gallery_heading'] : ''; ?>">
			</div>
		</div>
		<!--<div class="own_fields own_input_field_text">
			<label>Choose background color</label>
			<div class="own_label">
				<input type="text" class="gallery_color_field" name="service_gallery[gallery_backgrount_color]" value="<?php //echo isset($gmeta['gallery_backgrount_color']) ? $gmeta['gallery_backgrount_color'] : '#ffffff'; ?>">
			</div>
		</div>-->
	</div>
	<script>
        jQuery(document).ready(function($){
            $('.gallery_color_field').each(function(){
                $(this).wpColorPicker();
                });
        });
        </script>
	<?php
}

function save_service_gallery_meta( $post_id ) { 
	if ( isset($_POST['udm_service_gallery_nonce']) 
			&& !wp_verify_nonce( $_POST['udm_service_gallery_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	if (isset($_POST['service_gallery'])) { //Fix 3
			$new = $_POST['service_gallery'];
				update_post_meta( $post_id, 'service_gallery', $new );
		}
}
add_action( 'save_post', 'save_service_gallery_meta' );

function udm_service_cta_display($post){
	$cmeta = get_post_meta( $post->ID, 'service_cta', true );
	wp_nonce_field( basename( __FILE__ ), 'udm_service_cta_nonce' );
	?>
	<div class="inside own-fields">
		<div class="own_fields own_input_field_text">
			<label>CTA Eyebrow</label>
			<div class="own_label">
				<input type="text" name="service_cta[cta_eyebrow]" value="<?php echo isset($cmeta['cta_eyebrow']) ? $cmeta['cta_eyebrow'] : ''; ?>">
			</div>
		</div>
		<div class="own_fields own_input_field_text">
			<label>CTA Heading</label>
			<div class="own_label">
				<input type="text" name="service_cta[cta_heading]" value="<?php echo isset($cmeta['cta_heading']) ? $cmeta['cta_heading'] : ''; ?>">
			</div>
		</div>
		<?php $ctaheading = isset($cmeta['cta_description']) ? $cmeta['cta_description'] : ''; ?>
		<div class="own_fields own_input_field_text">
			<label>CTA Description</label>
			<div class="own_label">
				<?php wp_editor( htmlspecialchars_decode($ctaheading), 'cta_description', $settings = array('textarea_name'=>'service_cta[cta_description]','textarea_rows' => 15) ); ?>
			</div>
		</div>
		<!--<div class="own_fields own_input_field_text">
			<label>Choose background color</label>
			<div class="own_label">
				<input type="text" class="cta_color_field" name="service_cta[cta_background_color]" value="<?php //echo isset($cmeta['cta_background_color']) ? $cmeta['cta_background_color'] : '#ee2'; ?>">
			</div>
		</div>-->
		<div class="own_fields own_input_field_text">
			<label>Choose Button/Form</label>
			<div class="own_label">
			<?php $choose_btn_form = isset($cmeta['choose_btn_form']) ? $cmeta['choose_btn_form'] : ''; ?>
			<select id="choose_button_form" name="service_cta[choose_btn_form]">
				<option value="button" <?php if($choose_btn_form == 'button'){ echo 'selected'; } ?>>Button</option>
				<option value="form" <?php if($choose_btn_form == 'form'){ echo 'selected'; } ?>>Form</option>
			</select>
			</div>
		</div>
		<div class="show_button_f" <?php if($choose_btn_form == 'form'){ echo 'style="display:none;"'; } ?>>
			<div class="own_fields own_input_field_text"><label>Button Text</label><div class="own_label"><input type="text" class="" name="service_cta[cta_button_text]" value="<?php echo isset($cmeta['cta_button_text']) ? $cmeta['cta_button_text'] : ''; ?>"></div></div>
			
					<div class="own_fields own_input_field_text"><label>Button Link</label><div class="own_label"><input type="text" class="" name="service_cta[cta_button_link]" value="<?php echo isset($cmeta['cta_button_link']) ? $cmeta['cta_button_link'] : ''; ?>"></div></div>
					<?php /*<div class="own_fields own_input_field_text">
					<label>Button Color</label>
					<div class="own_label colorchange">
					<select name="service_cta[cta_button_color]" id="cta_button_text">
							<option value="primary" <?php if($cmeta['cta_button_color'] == 'primary'){ echo 'selected'; } ?>>Primary</option>
							<option value="secondary" <?php if($cmeta['cta_button_color'] == 'secondary'){ echo 'selected'; } ?>>Secondary</option>
							<option value="global_light" <?php if($cmeta['cta_button_color'] == 'global_light'){ echo 'selected'; } ?>>Global Light</option>
							<option value="global_dark" <?php if($cmeta['cta_button_color'] == 'global_dark'){ echo 'selected'; } ?>>Global Dark</option>
							<option value="custom" <?php if($cmeta['cta_button_color'] == 'custom'){ echo 'selected'; } ?>>Custom</option>
						</select>
						<div class="customcolor" <?php if($cmeta['cta_button_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
							<h3>Button Custom Color: </h3>
							<input class="udm_color_picker" type="text" name="service_cta[button_custom_color]" value="<?php echo $cmeta['button_custom_color']; ?>" />
						</div>
					</div></div>
					
					<div class="own_fields own_input_field_text">
					<label>Button Text Color</label>
					<div class="own_label colorchange">
						<select name="service_cta[cta_button_text_color]" id="cta_button_text_color">
							<option value="primary" <?php if($cmeta['cta_button_text_color'] == 'primary'){ echo 'selected'; } ?>>Primary</option>
							<option value="secondary" <?php if($cmeta['cta_button_text_color'] == 'secondary'){ echo 'selected'; } ?>>Secondary</option>
							<option value="global_light" <?php if($cmeta['cta_button_text_color'] == 'global_light'){ echo 'selected'; } ?>>Global Light</option>
							<option value="global_dark" <?php if($cmeta['cta_button_text_color'] == 'global_dark'){ echo 'selected'; } ?>>Global Dark</option>
							<option value="custom" <?php if($cmeta['cta_button_text_color'] == 'custom'){ echo 'selected'; } ?>>Custom</option>
						</select>
						<div class="customcolor" <?php if($cmeta['cta_button_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
							<h3>Button Text Custom Color: </h3>
							<input class="udm_color_picker" type="text" name="service_cta[button_text_custom_color]" value="<?php echo $cmeta['button_text_custom_color']; ?>" />
						</div> 
		</div>
		</div> */?>
					
				</div>
					
		<div class="own_fields own_input_field_text showform"  <?php if($choose_btn_form == ''){ ?> style="display:none;" <?php }else if($choose_btn_form == 'button'){ ?> style="display:none;" <?php }  ?>>
			<label>Ninja Form</label>
			<?php global $wpdb;
			$tblname = $wpdb->prefix.'nf3_forms';
			if($wpdb->get_var("SHOW TABLES LIKE '$tblname'") == $tblname) {
				$ninjaform = $wpdb->get_results("select * from $tblname order by created_at DESC");
			?>
			<div class="own_label">
			<?php $choose_ninja_form = isset($cmeta['choose_ninja_form']) ? $cmeta['choose_ninja_form'] : ''; ?>
				<select id="" name="service_cta[choose_ninja_form]">
					<option value="">Select</option>
					<?php
						foreach($ninjaform as $list){
							?>
							<option value="<?php echo $list->id; ?>" <?php if($choose_ninja_form == $list->id){ echo 'selected'; } ?>><?php echo $list->title; ?></option>
							<?php
						}
					?>
				</select>
			</div>
				<?php }else{ echo '<div class="own_label"> Ninja Form Plugin Required</div>'; } ?>
		</div>
	</div>
	<script>
	jQuery(document).ready(function($){
		$('#choose_button_form').on('change', function(){
			var val = $(this).val();
			if(val == 'button'){
				$('.showform select').val('');
				$('.show_button_f').show();
				$('.showform').hide();
			}else{
				$('.show_button_f input').val('');
				$('.show_button_f select').val('');
				$('.show_button_f').hide();
				$('.showform').show();
			}
		});
		$('.udm_color_picker').wpColorPicker();
		$('.cta_color_field').wpColorPicker();
		 $('.colorchange select').change(function(){
			if($(this).val() == "custom")
			{
				$(this).parent().find('.customcolor').show();
			}
			else
			{
				$(this).parent().find('.customcolor').hide();
			}
		});
	});
	</script>
	<?php
}

function save_service_cta_meta( $post_id ) { 
	if ( isset($_POST['udm_service_cta_nonce']) 
			&& !wp_verify_nonce( $_POST['udm_service_cta_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	if (isset($_POST['service_cta'])) { //Fix 3
			$new = $_POST['service_cta'];
				update_post_meta( $post_id, 'service_cta', $new );
		}
}
add_action( 'save_post', 'save_service_cta_meta' );

function udm_related_service_display($post){
	$rmeta = get_post_meta( $post->ID, 'related', true );
	wp_nonce_field( basename( __FILE__ ), 'udm_related_service_nonce' );
	 $show_related = isset($rmeta['show_related']) ? $rmeta['show_related'] : ''; ?>
	<div class="inside own-fields">
		<!--<div class="own_fields own_input_field_text">
			<label>Show Related</label>
			<div class="own_label switch-field">
				<input type="radio" id="switch_left" name="related[show_related]" value="yes" <?php //if(isset($rmeta['show_related'])){ if($show_related == 'yes'){ echo 'checked'; } }else{ echo 'checked'; } ?>  />
					<label for="switch_left">Yes</label>
				<input type="radio" id="switch_right" name="related[show_related]" value="no" <?php //if($show_related == 'no'){ echo 'checked'; } ?> />
					<label for="switch_right">No</label>
			</div>
		</div>-->
		<div class="own_fields own_input_field_text">
			<label>Related Eyebrow</label>
			<div class="own_label">
				<input type="text" name="related[related_eyebrow]" value="<?php echo isset($rmeta['related_eyebrow']) ? $rmeta['related_eyebrow'] : ''; ?>">
			</div>
		</div>
		<div class="own_fields own_input_field_text">
			<label>Related Heading</label>
			<div class="own_label">
				<input type="text" name="related[related_heading]" value="<?php echo isset($rmeta['related_heading']) ? $rmeta['related_heading'] : ''; ?>">
			</div>
		</div>
		<?php //$relate_desc = isset($rmeta['related_description']) ? $rmeta['related_description'] : ''; ?>
		<!--<div class="own_fields own_input_field_text">
			<label>Related Description</label>
			<div class="own_label">
				<?php// wp_editor( htmlspecialchars_decode($relate_desc), 'related_description', $settings = array('textarea_name'=>'related[related_description]','textarea_row' => 15) ); ?>
			</div>
		</div>-->
		<!--<div class="own_fields own_input_field_text">
			<label>Choose background color</label>
			<div class="own_label">
				<input type="text" class="related_color_field" name="related[related_color_field]" value="<?php //echo isset($rmeta['related_color_field']) ? $rmeta['related_color_field'] : '#FFFFFF'; ?>">
			</div>
		</div>-->
		<!--<div class="own_fields own_input_field_text">
			<label>Number of Post To Show</label>
			<div class="own_label">
				<input type="number" class="no_of_post_show" name="related[no_of_post_show]" value="<?php //echo isset($rmeta['no_of_post_show']) ? $rmeta['no_of_post_show'] : '3'; ?>">
			</div>
		</div>-->
	</div>
	<script>
	jQuery(document).ready(function($){
		$('.related_color_field').each(function(){
               $(this).wpColorPicker();
        });
	});
	</script>
	<?php
}
function save_service_related_meta( $post_id ) { 
	if ( isset($_POST['udm_related_service_nonce']) 
			&& !wp_verify_nonce( $_POST['udm_related_service_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	if (isset($_POST['related'])) { //Fix 3
			$new = $_POST['related'];
				update_post_meta( $post_id, 'related', $new );
		}
}
add_action( 'save_post', 'save_service_related_meta' );


add_action( 'save_post', 'udm_service_options_save' );
function udm_service_options_display( $post ) {
  // Use nonce for verification
  wp_nonce_field( basename( __FILE__ ), 'udm_service_options_nonce' );

  // get current value
   $dropdown_value = get_post_meta( $post->ID, 'udm_service_option', true );
  ?> 
    <select name="udm_service_option" id="udm_service_option">
		<option value="">Default Layout</option>
		<?php  
			global $wpdb;
			$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'service_layout_%'");
			foreach($layouts as $layout){
		?>
			<option value="<?php echo str_replace("service_layout_","",$layout); ?>" <?php selected(str_replace("service_layout_","",$layout),$dropdown_value); ?>><?php echo str_replace("_"," ", str_replace("service_layout_","",$layout)); ?></option>
		<?php	
			}
		?>
	</select>
  <?php
}

function udm_service_options_save( $post_id ) {

    // if doing autosave don't do nothing
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify nonce
  $udm_service_options_nonce = isset($_POST['udm_service_options_nonce']) ? $_POST['udm_service_options_nonce'] : '';
  if ( !wp_verify_nonce( $udm_service_options_nonce, basename( __FILE__ ) ) )
      return;


  // Check permissions
  if ( 'page' == $_POST['post_type'] ) 
  {
    if ( !current_user_can( 'edit_page', $post_id ) )
        return;
  }
  else
  {
    if ( !current_user_can( 'edit_post', $post_id ) )
        return;
  }

  // save the new value of the dropdown
   $new_value = $_POST['udm_service_option']; 
  update_post_meta( $post_id, 'udm_service_option', $new_value );
} 

add_action('wp_ajax_change_defualt_color',  'change_defualt_color');
add_action('wp_ajax_nopriv_change_defualt_color',  'change_defualt_color');
function change_defualt_color(){
	if(isset($_POST['action']) && $_POST['action'] == 'change_defualt_color'){
		$colortype = $_POST['colortype'];
		update_option('udm_primary_color',$_POST['colorval1'],'yes');
		update_option('udm_secondary_color',$_POST['colorval2'],'yes');
		update_option('udm_global_light',$_POST['colorval3'],'yes');
		update_option('udm_global_dark',$_POST['colorval4'],'yes');
		echo json_encode(array('success' => true,'colorv' => $_POST['colorval']));
		die;
	}
}
?>