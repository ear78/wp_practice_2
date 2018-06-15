<?php
/*
 * display navigation social menu
 *
 */

?>



  <nav class="social-menu-container" role="navigation" aria-label="<?php esc_attr_e('Footer Social Links Menu', 'wppractice2');?>">

    <?php
      wp_nav_menu(array(
        'theme_location' => 'social',
        'menu_class' => 'social-links-menu',
        'container' => '',
        'depth' => 1
      ));
     ?>

  </nav>


