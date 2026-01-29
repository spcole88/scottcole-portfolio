<?php get_header();?>

<section class="scst-hero scst-index__hero grid-general">
    <div class="scst-hero__inner">
        <h1><?php echo esc_html(single_post_title()); ?></h1>
        <p>Where I post about things I've learned or tried out, not necessarily bigger specific projects.</p>
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