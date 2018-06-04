
</main>
        <footer id="footer" class="container-fluid">

            <?php get_sidebar(); ?>

            <div class="container">
                <div class="row mb-70">
                    <div class="col-6 col-sm-7">
                        <img class="footer-logo" src="http://localhost:8888/wp_practice_2/wp-content/uploads/2018/05/xchng-logo-stacked-white-300x238.png" alt="xchng logo" />
                    </div>

                    <div class="col-6 col-sm-5">
                        <?php

                        $args = [
                            'menu_class' => 'footer-menu',
                            'theme_location' => 'footer'
                        ];

                        wp_nav_menu( $args );

                        ?>
                    </div>
                </div>

                <div class="row">

                    <p class="col-12 col-md-6 text-md-left copywright"><a href="<?php echo esc_url(home_url('/')); ?>">&copy; <?php echo date('Y'); ?> Kochava Labs SECZ</a></p>
                    <div class="col-12 col-md-6 text-md-right social-container">
                        <i class="fa fa-external-link-square" aria-hidden="true"></i>
                        <i class="fa fa-medium" aria-hidden="true"></i>
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>

                </div>
            </div>





            <?php wp_footer(); ?>

        </footer>

    </body>
</html>