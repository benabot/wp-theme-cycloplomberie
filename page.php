<?php get_header(); ?>
<div class="container">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <h1 class="hero__titre-1"><?php the_title(); ?></h1>
            <?php
            if (is_page('contact')) {
            ?>
                <div id="app" class="app"></div>
                <?php
                the_content();
                ?>

    <?php } else {
                the_post_thumbnail('medium');
                the_content();
            }
        }
    }
    ?>
</div>
<?php get_footer(); ?>