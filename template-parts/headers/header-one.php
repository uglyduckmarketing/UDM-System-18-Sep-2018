<!-- Desktop Navigation -->
<header class="d-none d-md-block header--one">
  <div class="container">
    <div class="row align-items-center">
      <div class="<?php echo (get_field('nav_position','options') ? $navPosition = 'col' : $navPosition = 'col-md-auto'); ?>">
        <a href="<?php echo esc_url( home_url() ); ?>"><img class="header--logo" src="<?php echo the_field('company_logo', 'options'); ?>" /></a>
      </div>
      <nav class="col-md-auto">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav header--navigation' ) ); ?>
      </nav>
      <?php if(is_active_sidebar('header_widget')) : ?>
      <div class="col text-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
          Request Quote
        </button>
      </div>
      <?php endif; ?>
    </div>
  </div>
</header>