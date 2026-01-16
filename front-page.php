<?php get_header();?>

<?php if (have_posts()): while (have_posts()): the_post();?>

<section class="scst-hero scst-front-page-template__hero grid-general">
    <div class="scst-hero__inner">
        <h1 class="home-title">Hi. I'm <br><span id="home-title">a Web Developer</span></h1>
        <p>I’m a web developer with a passion for building clean, custom, and functional web solutions, and I’m currently seeking new opportunities to put my technical skills to work. From the beginning of 2022 I've been taking a career break to enjoy life as a full-time dad; I'm now energized and ready to dive back into the professional world.</p>
    </div>
    <img class="scst-front-page-template__hero__img"
        src="<?php echo get_template_directory_uri(); ?>/assets/img/me-and-a.jpg"
        alt="A photo of me and my son out for a walk.">
</section>

<section class="scst-front-page-template__content grid-general">

<h2 class="scst-front-page-template__content__title">A little about me</h2>

    <div class="scst-front-page-template__content__list">
        <ul>
            <li>
                <p>I built a fully bespoke book review website using Custom Post Types, AJAX calls to the Openlibrary book API using user entered ISBN numbers, and a custom WordPress plugin I developed to add star rating functionality to posts within the Custom Post Type.</p>
            </li>
            <li>
                <p>Developed a fully bespoke WordPress theme for an established London designer/branding expert. It included Custom Post Types, custom page templates, in-depth CSS work including CSS grid and vanilla Javascript along with Greensock's GSAP for animations.</p>
            </li>
            <li>
                <p>Developed a custom WordPress plugin to add timeslot selection to a client's WooCommerce store for deliveries, along with various other projects ranging from creating shortcodes to troubleshooting non-working functionality.</p>
            </li>
        </ul>
    </div>

    <div class="scst-front-page-template__content__inner">
        <p>I’m a web developer with a passion for building clean, custom, and functional web solutions, and I’m currently seeking new opportunities to put my technical skills to work. While I spent the beginning of 2022 taking a career break to enjoy life as a full-time dad, I'm now energized and ready to dive back into the professional world. My history is a blend of seven years in detailed Quality Assurance and Regulatory Compliance—experience that instilled a deeply meticulous and problem-solving approach—and five years as a Self-Employed Web Developer where I successfully delivered a variety of custom projects.</p>
        <p>During my self-employed years, I developed highly bespoke projects, ranging from custom WordPress themes built from the ground up (using HTML, CSS, JavaScript, and PHP) to implementing dynamic features like AJAX calls to external APIs, and creating engaging, performant user interactions using libraries like GSAP. I thrive on translating complex requirements into well-executed digital experiences. I bring this blend of technical proficiency, project management acumen, and a sharp focus on quality to every line of code. I'm eager to leverage this comprehensive skill set and start contributing to a new team!</p>
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