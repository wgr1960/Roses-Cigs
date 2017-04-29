<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bulma
 */
?>

<?php get_header(); ?>
<?php masterslider(1); ?>
<section class="music">
	<div class="container">
		<iframe src="https://open.spotify.com/embed?uri=spotify:album:34MdXnBif0OrMNF0gIySce" width="450" height="380" frameborder="0" allowtransparency="true"></iframe>
	</div>
</section>
<div id="primary" class="content-area news">
	<main id="main" class="site-main wrapper" role="main">
		<?php if ( have_posts() ) : ?>
			<div class="container">
				<div class="columns is-multiline">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="column is-12">
							<?php get_template_part( 'template-parts/content', 'post' ); ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="section pagination">
				<div class="container">
					<?php the_posts_pagination(); ?>
				</div>
			</div>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
