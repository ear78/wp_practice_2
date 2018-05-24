<!doctype html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>

    <body>

        <header>
            <p>This is the header</p>
            <div id="logo">
                <h2><a href="#"><?php bloginfo('name'); ?></a></h2>
                <p><?php bloginfo('description'); ?></p>
            </div>

            <div id="menu-container">
                <?php wp_nav_menu(); ?>
            </div>
        </header>


        <main id="content">

