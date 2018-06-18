<?php
/*
 * display navigation new navigation menu
 *
 */

?>


<nav class="new-navigation-container" role="navigation" aria-lable="<?php esc_attr('New Navigation', 'wppractice2'); ?>">
    <?php
        wp_nav_menu([
            'theme_location' => 'new-navigation',
            'menu_class' => 'new-navigation',
            'container' => '',
            '3'
        ])
    ?>
</nav>

