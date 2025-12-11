<?php get_header();?>

<section class="scst-hero scst-page-template__hero grid-general" style="

">
    <div class="scst-hero__inner">
        <h1>404 Error</h1>
        <h6>We couldn't find the page you were looking for. Don't worry, let's get you back on track. </h6>
    </div>
</section>

<?php if (have_posts()): while (have_posts()): the_post();?>

<section class="scst-page-template__content">

</section>

<?php
endwhile;
endif;
?>

<?php get_footer();?>