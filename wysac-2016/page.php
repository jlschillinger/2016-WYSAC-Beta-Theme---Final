<?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WYSAC_Beta
*/


get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="row">

			<?php
			while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );


		endwhile; // End of the loop.
		?>
		<?php get_sidebar(); ?>
	</div><!--.row-->
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
