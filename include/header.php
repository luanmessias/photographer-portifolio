<header>
  <div class="row">

    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-logo">
      <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Jason Cardoso" class="img-responsive">
      </a>
    </div>

    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-menu">
      <nav class="navbar navbar-black" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">

            <?php
              wp_nav_menu(array(
               'theme_location' => 'primary',
               'container' => false,
               'menu_class' => 'nav navbar-nav navbar-right'
               ));
            ?>

          </div>
        </div>
      </nav>
    </div>
  </div>
</header>
	