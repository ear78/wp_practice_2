
<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="entry">

        <div id="hero-image-container">
            <div class="hero-image">
                <?php the_post_thumbnail(); ?>
            </div>

        </div>

        <section class="added-content">

            <?php the_content('Read the rest of this entry &raquo;'); ?>

        </section>

    </div>
<?php endwhile; else: ?>

    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<h3 style="margin-bottom: 20px;text-align: center;">Front Page Template File</h3>

<?php get_footer(); ?>