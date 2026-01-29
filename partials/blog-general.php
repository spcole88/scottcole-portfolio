<?php
/**
 * General template part for the Blog archive page, outputting
 * general markup for an individual piece of a blog grid.
 */
?>
<div class="scst-blog-general">
    <?php
    // Dont want to display featured images on blogs, want a simpler look
    //$thumbnail = get_the_post_thumbnail_url(get_the_id(), 'medium');
    //if ($thumbnail) :
    ?>
    <!--<div class="scst-blog-general__img" style="background-image: url(<?php // echo $thumbnail; ?>);">
    </div>-->
    <?php
    //endif;
    ?>
    <?php the_date('', '<p class="scst-blog-general__date">', '</p>'); ?>
    <a href="<?php the_permalink(); ?>">
        <h2>
            <?php the_title(); ?>
        </h2>
    </a>

    <?php the_excerpt(); ?>

    <?php the_category(', '); ?>

    <?php 
    //$authorName = get_the_author_meta('display_name');
    /*
    if ($authorName !== '') {
        echo '<p class="scst-blog-general__author">';
        echo $authorName;
        echo '</p>';
    }
        */
    ?>

</div>