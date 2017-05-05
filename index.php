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
	<div class="container has-text-centered">
		<h2 class="roses-header-text">Music</h2>
		<div class="columns">
			<div class="column is-half album-promo">
				<img class="album-cover-image roses-box-shadow" src="/wp-content/themes/Roses-Cigs/images/roses_album_cover.png"/>
				<p class="white-text top-margin">Buy or stream the self-titled album now!</p>
				<!-- Streaming Images -->
				<div class="column">
					<a class="streaming-icon" href="https://itunes.apple.com/us/artist/roses-and-cigarettes/id987734712"><i class="fa fa-apple  yellow-text"aria-hidden="true"></i></a>
					<a class="streaming-icon" href="https://play.spotify.com/artist/2JZd7083SkKl8xV7zS2xIS?play=true&utm_source=open.spotify.com&utm_medium=open"><i class="fa fa-spotify yellow-text" aria-hidden="true"></i></a>
					<a class="streaming-icon" href="https://soundcloud.com/roses-and-cigarettes"><i class="fa fa-soundcloud yellow-text" aria-hidden="true"></i></a>
					<a class="streaming-icon" href="https://www.amazon.com/Roses-Cigarettes/dp/B00WZU0XAA"><i class="fa fa-amazon yellow-text" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="column is-half">
				<iframe class="roses-box-shadow roses-music-player" src="https://open.spotify.com/embed?uri=spotify:album:34MdXnBif0OrMNF0gIySce" width="400" height="500" frameborder="0" allowtransparency="true"></iframe>
			</div>
		</div>
	</div>
</section>
<section id="primary" class="content-area odd-section">
	<h2 class="roses-header-text has-text-centered">News</h2>
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
	<h2 class="roses-header-text has-text-centered">Gigs</h2>
	<div class="container">
		<div class="columns">
			<div class="column is-12">
			</div>
		</div>
	</div>
</section>


<!-- Biography -->
<?php get_sidebar(); ?>

<!-- Gallery -->
<section id="gallery" class="even-section">
	<h2 class="roses-header-text has-text-centered">Photos</h2>
	<div class="columns">
		<div class="column">
			<?php echo do_shortcode('[FinalTilesGallery id="1"]'); ?>
		</div>
	</div>
</section>

<!-- Videos -->
<section id="videos" class="odd-section">
	<div class="columns">
		<div class="column">
			<h2 class="roses-header-text has-text-centered">Videos</h2>
		</div>
	</div>
	<?php masterslider(2); ?>
</section>

<!-- Newsletter -->
<section id="newsletter">
	<div class="columns">
		<div class="column is-centered">
			<!-- Begin MailChimp Signup Form -->
			<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				#mc_embed_signup{ 
					color: darkgrey;
					background: linear-gradient(rgba(32, 29, 22, 0.95), rgba(32, 29, 22, 0.95));
    				padding: 35px 0;
					font-family: RosesRustic;
				}
			</style>
			<div id="mc_embed_signup">
				<form action="//rosesandcigarettes.us10.list-manage.com/subscribe/post?u=a784f2e3f97f791038f8893df&amp;id=613a2e44f7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    		<div id="mc_embed_signup_scroll">
			<h2 class="has-text-centered">Subscribe to our Newsletter!</h2>
			<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
			<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
			<div class="mc-field-group">
				<label for="mce-FNAME">First Name </label>
				<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
			</div>
			<div class="mc-field-group">
				<label for="mce-LNAME">Last Name </label>
				<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
			</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a784f2e3f97f791038f8893df_613a2e44f7" tabindex="-1" value=""></div>
			<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div></div></form></div>

<!--End mc_embed_signup-->
		</div>
	</div>
</section>


<!-- Contact -->
<section id="contact" class="even-section">
	<h2 class="roses-header-text has-text-centered">Contact</h2>
	<div class="columns">
		<div class="column is-half">
			<p class="has-text-centered white-text">Management</p>
			<p class="has-text-centered">Gregg Bell | Wanted Management</p>
			<p class="has-text-centered">wantedgregg@gmail.com</p>
		</div>
		<div class="column is-half">
			<p class="has-text-centered white-text">Band Booking</p>
			<p class="has-text-centered">Ann Marie Jones</p>
			<p class="has-text-centered">rosesandcigarettesband@gmail.com</p>
		</div>
	</div>

</section>
<!-- Footer -->
<?php get_footer(); ?>
