<footer class="content-info" role="contentinfo">
  <div class="container">
  	<?php
          if (has_nav_menu('footer_navigation')) :
            wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav nav-pills hidden-phone'));
          endif;
        ?>
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p id="copy-right">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br><a href="http://895webdesign.com">Web Design</a> by 895</p>
  </div>
</footer>

<?php wp_footer(); ?>
