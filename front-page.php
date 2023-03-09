<?php get_header(); ?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <section class="hero">

            <div class="hero__block-titre">
                <h1 class="hero__titre-1"><?php bloginfo('name'); ?></h1>
                <h2 class="hero__titre-2"><?php bloginfo('description'); ?></h2>
            </div>
            <div class="hero__block-img">
                <?php
                the_post_thumbnail(array(440, 332));
                ?>

            </div>
        </section>

        <section id="intro" class="section home-intro">
            <div class="section__container">
                <h2 class="titre--mono titre-3">Nos valeurs</h2>
                <div>
                    <?php
                    the_content();
                    ?>

                </div>
                <div class="container--valeurs">
                    <?php if (have_rows('valeurs')) :
                        while (have_rows('valeurs')) : the_row();
                    ?>
                            <div class="card--valeurs">
                                <h3><?php the_sub_field('titre_valeur_1'); ?></h3>
                                <img src="<?php the_sub_field('image1'); ?>" alt="">
                                <p><?php the_sub_field('texte_valeur_1'); ?></p>
                            </div>
                            <div class="card--valeurs">
                                <h3><?php the_sub_field('titre_valeur_2'); ?></h3>
                                <img src="<?php the_sub_field('image2'); ?>" alt="">
                                <p><?php the_sub_field('texte_valeur_2'); ?></p>
                            </div>
                            <div class="card--valeurs">
                                <h3><?php the_sub_field('titre_valeur_3'); ?></h3>
                                <img src="<?php the_sub_field('image3'); ?>" alt="">
                                <p><?php the_sub_field('texte_valeur_3'); ?></p>
                            </div>
                    <?php endwhile;
                    else :
                    // no rows found
                    endif; ?>
                </div>
        </section>

        <section id="zone" class="section home-zone">
            <div class="section__container">
                <h2 class="titre--mono titre-3">Zone d’intervention</h2>
                <div>
                    <ul>
                        <li>Amiens</li>
                        <li>Longueau</li>
                        <li>Rivery</li>
                        <li>Cagny</li>
                        <li>Camon</li>
                        <li>Pont de Metz</li>
                        <li>Salouël</li>
                    </ul>


                </div>
                <div>Carte</div>


            </div>
        </section>
        <section id="tarifs" class="section home-tarifs">
            <div class="section__container">
                <h2 class="titre--mono titre-3">Tarifs transparents</h2>
                <?php if (have_rows('tarifs')) :
                    while (have_rows('tarifs')) : the_row();
                ?>
                        <div class="tarifs--card">
                            <h3><?php the_sub_field('titre_tarif_1'); ?></h3>
                            <div><?php the_sub_field('texte_tarif_1'); ?></div>
                            <div><?php the_sub_field('prix_1'); ?> €</div>
                        </div>
                        <div class="tarifs--card">
                            <h3><?php the_sub_field('titre_tarif_2'); ?></h3>
                            <div><?php the_sub_field('texte_tarif_2'); ?></div>
                            <div><?php the_sub_field('prix_2'); ?> €</div>
                        </div>
                        <div class="tarifs--card">
                            <h3><?php the_sub_field('titre_tarif_3'); ?></h3>
                            <div><?php the_sub_field('texte_tarif_3'); ?></div>
                            <div><?php the_sub_field('prix_3'); ?> €</div>
                        </div>
                <?php endwhile;
                else :
                // no rows found
                endif; ?>

            </div>
        </section>
        <section id="réalisation" class="section home-realisations">
            <div class="section__container">
                <h2 class="titre--mono titre-3">Réalisations</h2>



            </div>
        </section>



<?php
    }
}
?>
<section class="section home-actu">
    <div class="section__container">
        <h2 class="titre--mono titre-2 ">Actualités</h2>
        <?php

        $args = array(
            'post_type' => 'post',
            'category_name' => 'actualites',
            'posts_per_page' => 3,
        );


        $my_query = new WP_Query($args);

        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
        ?>
                <article>
                    <h3 class="titre-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <span class="actu-infos">
                        Publié le <?php the_time(get_option('date_format')); ?>
                    </span>
                    <p><?php the_excerpt(); ?></p>
                </article>
        <?php
            endwhile;
        endif;

        wp_reset_postdata();
        ?>
    </div>
</section>

<?php get_footer(); ?>