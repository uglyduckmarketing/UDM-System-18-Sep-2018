<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <div class="search-container">
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label','udmbase' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','udmbase' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label','udmbase' ) ?>" />
				<button type="submit" class="search-submit"><i class="ion-search"></i></button>
    </div>
</form>
