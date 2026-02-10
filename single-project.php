<?php get_header();?>

<?php if (have_posts()): while (have_posts()): the_post();?>

<section class="scst-hero scst-single-template__hero scst-single-template__hero__project grid-general" style="">
    <div class="scst-hero__inner">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section class="scst-single-template__content">
    <div class="scst-single-template__content__inner">
        <?php the_content(); ?>
        <div class="scst-single-template__author-date">
            <p><?php the_date(); ?></p>
            <p>by <?php the_author(); ?></p>
        </div>
    </div>
</section>

<?php
    endwhile;
endif;
?>

<?php get_footer();?>