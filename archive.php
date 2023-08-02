<?php get_header(); ?>
<div class="container">
    <?php
    if (is_category()) {
    ?>
        <h1 class="hero__titre-1"><?php the_category(' '); ?></h1>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs" class="post__meta">', '</p>');
        }
        ?>
    <?php
    }
    ?>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <section>
                <h2 class="titre2 titre2__bleu1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post__meta">
                    Publié le <?php the_time(get_option('date_format')); ?>
                </div>
                <?php
                the_post_thumbnail('medium');
                the_excerpt();
                ?>
                <div class="boite-boutons">

                    <a href="<?php the_permalink(); ?>" class="bouton">lire la suite...</a>
                </div>

            </section>
    <?php
        }
    }
    ?>
</div>
<?php get_footer(); ?>