<?php get_header();?>

<?php if (have_posts()): while (have_posts()): the_post();?>

<section class="scst-hero scst-single-template__hero grid-general" style="

">
    <div class="scst-hero__inner">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section class="scst-single-template__content">
    <div class="scst-single-template__content__inner">
        <?php the_content(); ?>
    </div>
</section>

<?php
    endwhile;
endif;
?>

<?php get_footer();?>