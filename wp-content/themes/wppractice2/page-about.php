<?php
/*

*/

?>

<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<!--    <h2 id="post---><?php //the_ID(); ?><!--">-->
<!--        <a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a>-->
<!--    </h2>-->
<!--    <small>--><?php //the_time('F jS, Y'); ?><!-- -->
        <!-- <?php the_author(); ?> -->
<!--    </small>-->

    <div class="entry">

        <?php the_post_thumbnail(); ?>

        <div class="">
            <?php the_content(); ?>
        </div>

    </div>
<?php endwhile; else: ?>

    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>