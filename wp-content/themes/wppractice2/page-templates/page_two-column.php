<?php

/*
    Template Name: Two Column
 */

?>

<h1 class="section-title">Two Column Template</h1>

<section class="two-column-container">
    <div style="background:#313131;" class="columns">
        This is column 1
        <?php the_content(); ?>
    </div>
    <div style="background:lightgray;" class="columns">
        This is column 1
        <?php the_content(); ?>
    </div>
</section>
