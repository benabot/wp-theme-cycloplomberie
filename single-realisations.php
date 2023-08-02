<?php
/*
  Template Name: Realisations
  Template Post Type: post, page
*/
get_header();
?>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post();
  ?>

      <h1 class="hero__titre-1"><?php the_title(); ?></h1>
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs" class="post__meta">', '</p>');
      }
      ?>

      <div class="box-realisation">
        <div class="real">
          <h2 class="titre2">Avant</h2>
          <img src="<?php the_field('image_avant'); ?>" alt="">
        </div>
        <div class="real">
          <h2 class="titre2">Après</h2>
          <img src="<?php the_field('image_apres'); ?>" alt="">
        </div>
      </div>
      <?php the_content(); ?>

  <?php
    endwhile;
  endif;
  ?>
</div>
<?php
get_footer();
?>