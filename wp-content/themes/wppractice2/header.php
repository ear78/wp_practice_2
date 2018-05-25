<!doctype html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <header class="site-header">
            <div id="logo">

                <h2><a href="#"><?php bloginfo('name'); ?></a></h2>
                <p><?php bloginfo('description'); ?></p>
            </div>

            <div id="menu-container">
                <p class="brand">Kamera
                    <i class="fa fa-eercast" aria-hidden="true"></i>
                </p>
                <?php wp_nav_menu(); ?>
            </div>

            <div id="mobile-container">

                <?php wp_nav_menu(); ?>

                <div class="hamburger-menu">
                    <a href="<?php echo esc_url( home_url('/') ); ?>">
                        <p class="brand">Kamera
                            <i class="fa fa-eercast" aria-hidden="true"></i>
                        </p>
                    </a>
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div id="menu-modal" class="menu-modal"></div>
            </div>
        </header>


        <main id="content">

