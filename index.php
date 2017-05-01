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
<section id="music" class="even-section">
	<div class="container text-center">
		<h2 class="roses-header-text">Music</h2>
		<div class="columns">
			<div class="column is-half album-promo">
				<img class="album-cover-image roses-box-shadow" src="/wp-content/themes/bulmapress-master/images/roses_album_cover.png"/>
				<p class="white-text">Buy or stream the self-titled album now!</p>
				<!-- Streaming Images -->
				<div class="column">
					<i class="fa fa-apple streaming-icon yellow-text" aria-hidden="true"></i>
					<i class="fa fa-spotify streaming-icon yellow-text" aria-hidden="true"></i>
					<i class="fa fa-soundcloud streaming-icon yellow-text" aria-hidden="true"></i>
					<i class="fa fa-amazon streaming-icon yellow-text" aria-hidden="true"></i>
				</div>
			</div>
			<div class="column is-half">
				<iframe class="roses-box-shadow roses-music-player" src="https://open.spotify.com/embed?uri=spotify:album:34MdXnBif0OrMNF0gIySce" width="400" height="500" frameborder="0" allowtransparency="true"></iframe>
			</div>
		</div>
	</div>
</section>
<section id="primary" class="content-area odd-section">
	<h2 class="roses-header-text text-center">News</h2>
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
</section><!-- #primary -->

<section id="gigs" class="even-section">
	<h2 class="roses-header-text text-center">Gigs</h2>
	<div class="container">
		<div class="columns">
			<div class="column is-12">
			</div>
		</div>
	</div>
</section>

<?php get_sidebar(); ?>
<?php masterslider(2); ?>
<?php get_footer(); ?>
