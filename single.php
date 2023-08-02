<?php get_header(); ?>
<div class="container">
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
	?>
			<article>
				<header>
					<h1 class="hero__titre-1"><?php the_title(); ?></h1>
					<div class="post__meta">
						Publié le : <?php the_date(); ?> |
						<?php
						$categories = get_the_category();
						$catTotal = count($categories);
						if ($catTotal > 1) {
						?>
							Dans les catégories <?php the_category(' &bull; '); ?>
						<?php
						} else {
						?>
							Dans la catégorie <?php the_category(' '); ?>
						<?php
						}


						?>

					</div>
					<?php
					if (function_exists('yoast_breadcrumb')) {
						yoast_breadcrumb('<p id="breadcrumbs" class="post__meta">', '</p>');
					}
					?>

				</header>
				<?php
				the_post_thumbnail('medium');
				the_content();


				?>
			</article>
	<?php
		}
	}
	?>
</div>
<?php get_footer(); ?>