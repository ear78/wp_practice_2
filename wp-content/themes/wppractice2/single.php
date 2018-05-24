

<?php get_header(); ?>

<h3>Single Template File</h3>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <h2 id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <small><?php the_time('F jS, Y'); ?> - <?php the_author(); ?></small>
    <small>Other Posts by: <?php the_author_posts_link(); ?></small>
    <small><a href="<?php comments_link(); ?>">click for comments</a>  - <?php comments_number('0 comments', '1 comments', '% response'); ?></small>
    <div class="entry">
        <?php the_post_thumbnail(); ?>
        <?php the_content('Read the rest of this entry &raquo;'); ?>

    </div>

    <p class="postmetadata alt">
        <small>
            posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
            and is filed under <?php the_category(', ') ?>.
            You can follow any responses to this entry through
            the <?php comments_rss_link('RSS 2.0'); ?> feed.
            <?php
            if ( comments_open() && pings_open() ) {
// Both Comments and Pings are open
                ?>
                You can <a href="#respond">leave a response</a>, or
                <a href="<?php trackback_url(display); ?>">trackback</a>
                from your own site.
                <?php
            } elseif ( !comments_open() && pings_open() ) {
// Only Pings are Open
                ?>
                Responses are currently closed, but you can
                <a href="<?php trackback_url(display); ?> ">trackback</a>
                from your own site.
                <?php
            } elseif ( comments_open() && !pings_open() ) {
// Comments are open, Pings are not
                ?>
                You can skip to the end and leave a response. Pinging is currently not allowed.
                <?php
            } else {
// Neither Comments, nor Pings are open
                ?>
                Both comments and pings are currently closed.
                <?php
            }
            edit_post_link('Edit this entry.','',''); ?>
        </small>
    </p>
<?php endwhile; else: ?>

    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<?php get_footer(); ?>