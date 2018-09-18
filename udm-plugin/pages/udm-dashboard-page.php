<h1 class="dashboard_heading">Udm Dashboard</h1>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="header_dashboard">
             <h2>Header layout</h2>
                <div class="header_bottom_text">
                    <p><strong>Default Header: </strong><?php if(get_option('udm_header_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_header_default')).")"; }else{ echo "Please select default header layout by click on edit link. "; } ?> <a href="<?php echo admin_url('admin.php?page=udm-base-panel'); ?>">Edit</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="header_dashboard">
             <h2>Footer layout</h2>
                <div class="header_bottom_text">
                    <p><strong>Default footer: </strong><?php if(get_option('udm_footer_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_footer_default')).")"; }else{ echo "Please select default footer layout by click on edit link. "; } ?><a href="<?php echo admin_url('admin.php?page=udm-base-panel'); ?>">Edit</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="header_dashboard">
             <h2>Hero layout</h2>
                <div class="header_bottom_text">
                    <p><strong>Default Hero: </strong><?php if(get_option('udm_hero_default')!=""){ echo "( ".str_replace("_"," ", get_option('udm_hero_default')).")"; }else{ echo "Please select default hero layout by click on edit link. "; } ?> <a href="<?php echo admin_url('admin.php?page=udm-base-panel'); ?>">Edit</a></p>
                </div>
            </div>
        </div>
    </div>

