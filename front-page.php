<?php get_header(); ?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <section class="hero">
            <img alt="pompier à vélo Amiens" src="<?php header_image(); ?>" class="img--hero">

            <div class="hero__block-titre">
                <h1 class="hero__titre-1"><?php bloginfo('name'); ?></h1>
                <h2 class="hero__titre-2"><?php bloginfo('description'); ?></h2>
                <a href="<?php echo site_url('/contact/'); ?>" class="bouton">Je réserve</a>
            </div>
            <div class="hero__block-img">
                <?php
                the_post_thumbnail(array(440, 332));
                ?>

            </div>
        </section>
        <div class="container">
            <section id="intro" class="section home-intro">

                <h2 class="titre2 titre2__bleu1">Nos valeurs</h2>
                <p class="intro--valeurs">
                    <?php
                    the_content();
                    ?>

                </p>
                <div class="container--cards">
                    <?php if (have_rows('valeurs')) :
                        while (have_rows('valeurs')) : the_row();
                    ?>
                            <div class="card--bleu">
                                <h3><?php the_sub_field('titre_valeur_1'); ?></h3>
                                <img src="<?php the_sub_field('image1'); ?>" alt="">
                                <p><?php the_sub_field('texte_valeur_1'); ?></p>
                            </div>
                            <div class="card--bleu">
                                <h3><?php the_sub_field('titre_valeur_2'); ?></h3>
                                <img src="<?php the_sub_field('image2'); ?>" alt="">
                                <p><?php the_sub_field('texte_valeur_2'); ?></p>
                            </div>
                            <div class="card--bleu">
                                <h3><?php the_sub_field('titre_valeur_3'); ?></h3>
                                <img src="<?php the_sub_field('image3'); ?>" alt="">
                                <p><?php the_sub_field('texte_valeur_3'); ?></p>
                            </div>
                    <?php endwhile;
                    else :
                    // no rows found
                    endif; ?>
                </div>
                <div class="boite-boutons">
                    <a href="<?php echo site_url('/contact/'); ?>" class="bouton">Je réserve</a>
                    <a href="<?php echo site_url('/nous-connaitre/'); ?>" class="bouton bouton__blanc">Je découvre</a>
                </div>
            </section>

            <section id="zone" class="section home-zone">

                <div>
                    <h2 class="titre2 titre2__blanc ">Zone d’intervention</h2>

                    <ul>
                        <li>Amiens</li>
                        <li>Longueau</li>
                        <li>Rivery</li>
                        <li>Cagny</li>
                        <li>Camon</li>
                        <li>Pont de Metz</li>
                        <li>Salouël</li>
                    </ul>
                    <div class="boite-boutons">
                        <a href="<?php echo site_url('/contact/'); ?>"" class=" bouton">Je réserve</a>
                    </div>
                </div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/carte.png" alt="zone d'intervention cyclo plomberie dans l'amiénois"></div>




            </section>
            <section id="tarifs" class="section home-tarifs">
                <h2 class="titre2">Tarifs transparents</h2>
                <div class="container--cards">
                    <?php if (have_rows('tarifs')) :
                        while (have_rows('tarifs')) : the_row();
                    ?>
                            <div class="card--bleu">
                                <h3><?php the_sub_field('titre_tarif_1'); ?></h3>
                                <div><?php the_sub_field('texte_tarif_1'); ?></div>
                                <div class="prix titre1"><?php the_sub_field('prix_1'); ?> €</div>
                            </div>
                            <div class="card--bleu">
                                <h3><?php the_sub_field('titre_tarif_2'); ?></h3>
                                <div><?php the_sub_field('texte_tarif_2'); ?></div>
                                <div class="prix titre1"><?php the_sub_field('prix_2'); ?> €</div>
                            </div>
                            <div class="card--bleu">
                                <h3><?php the_sub_field('titre_tarif_3'); ?></h3>
                                <div><?php the_sub_field('texte_tarif_3'); ?></div>
                                <div class="prix titre1"><?php the_sub_field('prix_3'); ?> €</div>
                            </div>
                    <?php endwhile;
                    else :
                    // no rows found
                    endif; ?>
                </div>
                <div class="boite-boutons">
                    <a href="<?php echo site_url('/contact/'); ?>" class=" bouton">Je réserve</a>
                </div>
            </section>

            <?php
            $args_real = array(
                'post_type' => 'Realisations', // Remplacez NOM_DU_CUSTOM_POST_TYPE par le nom de votre custom post type
                'posts_per_page' => 1, // Afficher un seul article
                'orderby' => 'rand' // Ordonner les résultats au hasard
            );

            $query = new WP_Query($args_real);

            if ($query->have_posts()) {
            ?>
                <section id="réalisation" class="section home-realisations">
                    <h2 class="titre2 titre2__bleu__sombre">Nos réalisations</h2>

                    <div class="boite-realisation">
                        <?php
                        while ($query->have_posts()) {
                            $query->the_post();
                            // Afficher l'image mise en avant de l'article
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium', ['class' => 'img-realisation']);
                            }
                        ?>
                            <div class="boite-realisation__texte">
                            <?php
                            // Afficher le titre de l'article
                            /* the_title('<h2 class="titre2">', '</h2>');*/
                            // Afficher l'extrait de l'article
                            the_excerpt();
                        }
                            ?>
                            <div class="boite-boutons">
                                <a href="<?php the_permalink(); ?>" class=" bouton bouton__blanc">Je découvre</a>
                            </div>
                            </div>
                        <?php
                        wp_reset_postdata();
                    } else {
                        // Aucun article trouvé
                    }
                        ?>

                    </div>

                </section>



        <?php
    }
}
        ?>
        <section class="section home-actu">
            <h2 class="titre2">Nos dernières actualités</h2>
            <div class="container--cards">
                <?php

                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'actualites',
                    'posts_per_page' => 3,
                );


                $my_query = new WP_Query($args);

                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                ?>
                        <article class="card--bleu card__actu">

                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('small', ['class' => 'img-actu']);
                            }
                            ?>

                            <h3 class="titre3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                            <p><?php the_excerpt(); ?></p>
                        </article>
                <?php
                    endwhile;
                endif;

                wp_reset_postdata();
                ?>

            </div>
            <div class="boite-boutons">
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID('Actualites');

                // Get the URL of this category
                $category_link = get_category_link($category_id);
                ?>
                <a href="<?php echo esc_url($category_link); ?>" class=" bouton ">Toutes les actus</a>
            </div>
        </section>
        </div>

        <?php get_footer(); ?>