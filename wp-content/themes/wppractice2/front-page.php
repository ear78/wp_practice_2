
<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="entry">

        <div id="hero-image-container">
            <div class="hero-image">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
            </div>

        </div>

        <section class="added-content text-wrapper">

            <?php the_content('Read the rest of this entry &raquo;'); ?>

        </section>

        <section class="info-section">

            <?php get_template_part( '/template-parts/content', 'add' ); ?>

        </section>

    </div>
<?php endwhile; else: ?>

    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<h3 style="margin-bottom: 20px;text-align: center;height: 300px;line-height:10;">Front Page Template File</h3>

<?php get_footer(); ?>