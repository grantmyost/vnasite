<header class="banner navbar navbar-static-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a id="logo-anchor" href="/"><img id="logo" alt="logo" src="/assets/vna-logo-with-text.jpg" /></a>
      <nav id="main-header-nav" class="nav-main nav-collapse collapse pull-right" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
            endif;
          ?>
      </nav>
    </div>
  </div>
</header>
