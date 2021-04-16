<?php
/**
 * Template Name: Post Slider
 *
 * Description: Modified slider template for the purpose of pages with new design.
 *
 * @package Merlin
 */

get_header(); ?>

	<section id="primary" class="fullwidth-content-area content-area alt-formatting">
		<main id="main" class="site-main" role="main">

			<?php while (have_posts()) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				comments_template();

			endwhile; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
