<?php get_header();?>

<section class="scst-hero scst-hero__project-archive scst-index__hero grid-general">
    <div class="scst-hero__inner">
        <h1>Projects</h1>
        <p>This is a collection of my projects. Some may be client work from before my hiatus to raise my son. Some may be personal projects as I get back into web development.</p>
    </div>
</section>

<?php if (have_posts()): ?>

<section class="scst-blog-general__container">
    <?php while (have_posts()): the_post();?>

    <?php get_template_part('partials/blog-general'); ?>

    <?php
endwhile;
?>

</section>

<?php
else : ?>

<section class="scst-blog-general__container__no-posts">
    <h4>Looks like no posts were found.</h4>
</section>

<?php
endif;
?>

<?php get_footer();?>