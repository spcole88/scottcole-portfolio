<?php get_header();?>

<?php if (have_posts()): while (have_posts()): the_post();?>

<section class="scst-hero scst-dark-hero scst-front-page-template__hero grid-general">
    <div class="scst-hero__inner">
        <h1 class="home-title"><?php the_field("hero_title"); ?></h1>
        <p><?php the_field("hero_content"); ?></p>
    </div>
    <img class="scst-front-page-template__hero__img"
        src="<?php echo get_template_directory_uri(); ?>/assets/img/me-and-a.jpg"
        alt="A photo of me and my son out for a walk.">
</section>

<section class="scst-front-page-template__content grid-general">

<h2 class="scst-front-page-template__content__title"><?php the_field("about_title"); ?></h2>

    <div class="scst-front-page-template__content__list">
        <?php the_field("about_bullets"); ?>
    </div>

    <div class="scst-front-page-template__content__inner">
        <?php the_field("about_main_content"); ?>
    </div>
</section>

<?php
/**
 * Build custom WP Query to get the posts from the Projects custom post type.
 */

$args = array(
    'post_type'         => 'project',
    'posts_per_page'    => 3,
    'orderby'           => 'date',
    'order'             => 'DESC',
);

$projects_query = new WP_Query($args);
?>

<section class="scst-front-page-template__work grid-general">
    <?php 
        if ($projects_query->have_posts()) : 
            while ($projects_query->have_posts()) : $projects_query->the_post();
    ?>
    <div class="scst-front-page-template__work__card grid-simple">
        <img alt="Alt text" src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'full'); ?>">
        <div class="scst-front-page-template__work__card__content">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="scst-button scst-button-light">Read more</a>
        </div>
    </div>
    <?php 
        endwhile;
        endif;
        wp_reset_postdata();
    ?>
</section>

<?php
    endwhile;
endif;
?>

<?php get_footer();?>