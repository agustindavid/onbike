<header class="banner">
  <div class="container">
    <!-- <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?> 
    </nav>-->
<nav class="navbar navbar-default menu-onbike">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() ?>/dist/images/logo.jpg" alt="logo" class="logo"></a>
    </div> 

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="text-uppercase"><a href="#">Bicicleta</a></li>
        <li class="text-uppercase"><a href="#">Componentes</a></li>
        <li class="text-uppercase"><a href="#">Transmisión</a></li>
        <li class="text-uppercase"><a href="#">Accesorios</a></li>
        <li class="text-uppercase"><a href="#">Vestimenta</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> 20</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>
</header>
