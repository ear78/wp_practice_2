<!doctype html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <header class="site-header">
<!--            <div id="logo">-->

<!--                <h2><a href="#">--><?php //bloginfo('name'); ?><!--</a></h2>-->
<!--                <p>--><?php //bloginfo('description'); ?><!--</p>-->
<!--        This will grab the custom log in customize        --><?php //the_custom_logo(); ?>
<!--            </div>-->

<!--            <div id="menu-container">-->
<!--                <p class="brand">-->
<!--                    Kamera-->
<!--                    <i class="fa fa-eercast" aria-hidden="true"></i>-->

                    <!-- custom logo being added dynamically in customize -->
<!--                    --><?php
//
//                        if( function_exists('the_custom_logo')){
//                            the_custom_logo();
//                        };
//
//                        ?>
<!--                </p>-->
<!--                --><?php //wp_nav_menu(array( 'theme_location' => 'main-navigation')); ?>
<!--            </div>-->

<!--            <div id="mobile-container">-->

<!--                --><?php //wp_nav_menu(array( 'theme_location' => 'main-navigation')); ?>

<!--                <div class="hamburger-menu">-->
<!--                        <p class="brand">-->
<!--                            Kamera-->
<!--                            <i class="fa fa-eercast" aria-hidden="true"></i>-->

                            <!-- custom logo being added dynamically in customize -->
<!--                            --><?php
//
//                            if( function_exists('the_custom_logo')){
//                                the_custom_logo();
//                            };
//
//                            ?>

<!--                        </p>-->
<!--                    <i class="fa fa-bars" aria-hidden="true"></i>-->
<!--                </div>-->
<!--                <div id="menu-modal" class="menu-modal"></div>-->
<!--            </div>-->

            <?php wp_nav_menu([
                    'theme_location' => 'new-navigation'
                    ]); ?>

        </header>


        <main id="content">

