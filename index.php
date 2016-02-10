<?php get_header(); ?>

			<div id="home">
				<div id="slides">
				  <ul class="slides-container">
				    <li id="slide-1">
				    </li>
				    <li id="slide-2"> 
				    </li>
				    <li id="slide-3">
				    </li>
				  </ul>
				  <nav class="slides-navigation">
				    <a href="#" class="next"><i class="ionicons ion-chevron-right"></i></a>
				    <a href="#" class="prev"><i class="ionicons ion-chevron-left"></i></a>
				  </nav>
				</div>
			</div>

			<div id="content" class="news">
					<div id="inner-content" class="wrap cf">
						<div class="header-container">
							<h1>News</h1>
						</div>
							<main id="main" class="news-content m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

									<header class="article-header">

										<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										<p class="byline entry-meta vcard">
	                                                                        <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
	                       								/* the time the post was published */
	                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
	                       								/* the author of the post */
	                       								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
	                    							); ?>
										</p>

									</header>

									<section class="entry-content cf">
										<?php the_content(); ?>
									</section>

									<!-- <footer class="article-footer cf">
										<p class="footer-comment-count">
											<?cphp /*comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );*/?>
										</p> -->


	                 	<?php /*printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') );*/ ?>

	                  <?php /*the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' );*/ ?>


									</footer>

								</article>

								<?php endwhile; ?>

										<?php bones_page_navi(); ?>

								<?php else : ?>

										<article id="post-not-found" class="hentry cf">
												<header class="article-header">
													<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
											</header>
												<section class="entry-content">
													<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
											</section>
											<footer class="article-footer">
													<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
											</footer>
										</article>

								<?php endif; ?>


							</main>

						<?php get_sidebar(); ?>

					</div>
			</div>

			<div id="gigs">
				<div id="gig-dates">
					<ul class="tabs">
						<li class="tab-link current" data-tab="tab-1">Upcoming Gigs</li>
						<li class="tab-link" data-tab="tab-2">Past Gigs</li>
					</ul>
					<div id="tab-1" class="tab-content current">
					</div>
					<div id="tab-2" class="tab-content">
					</div>
				</div>
			</div>

			<div id="about">
				<div id="about-content">
					<h1>About</h1>
					<div>
						<p>Roses & Cigarettes formed in 2013 when the country cover band that Pagliaro was signing in auditioned Petrilli for a vacant guitar position. The girls immediately
						bonded over their desire to perform original material and similar tastes in music. From the classics like Fleetwood Mac, the Eagles and Bonnie Raitt; to more
						contemporary artists like Patty Griffin, Sheryl Crow, and Miranda Lambert. It was a mutual love of singer-songwriter Ray LaMontagne and his song Roses and
						Cigarettes that inspired the name of the band. Roses & Cigarettes' usic is an eclectic blend of Roots, Country, Rock, Folk, and Americana - the perfect recipe
						for the classic California sound.</p>
					</div>
				</div>
			</div>

			<div id="photos">
				<div id="photos-content">
					<div class="header-container">
						<h1>Photos</h1>
					</div>
				</div>
			</div>

			<div id="videos">
				<div id="video-content">
					<div class="header-container">
						<h1>Videos</h1>
					</div>
				</div>

				<div id="video-slides">
				  <ul class="slides-container">
				    <li>
				    	<iframe width="854" height="480" src="https://www.youtube.com/embed/Tx_Un9s21Wk" frameborder="0" allowfullscreen></iframe>
				    </li>
				    <li> 
				    	<iframe width="854" height="480" src="https://www.youtube.com/embed/Tx_Un9s21Wk" frameborder="0" allowfullscreen></iframe>
				    </li>
				    <li>
				    	<iframe width="854" height="480" src="https://www.youtube.com/embed/Tx_Un9s21Wk" frameborder="0" allowfullscreen></iframe>
				    </li>
				  </ul>
				  <nav class="slides-navigation">
				    <a href="#" class="next"><i class="ionicons ion-chevron-right"></i></a>
				    <a href="#" class="prev"><i class="ionicons ion-chevron-left"></i></a>
				  </nav>
				</div>
			</div>

			<div id="music">
				<div id="music-content">
					<div class="header-container">
						<h1>Music</h1>
					</div>
					<div class="album-cover">
						<img id="album-img" src="wp-content/themes/Roses-Cigs-master/library/images/album_cover.jpg" alt="Roses & Cigarettes - Self-Titled Album Cover"/>
					</div>
					<div class="album-info">
						<p>The self-titled debut Roses & Cigarettes is out now.</p>
						<p>Featuring "Whiskey Down", "Gypsy Woman",</p>
						<p>& "Laurel Canyon"</p>
						<button id="roses-button">Buy Now</button>
					</div>

<!-- 					<iframe id="spotify_player" alt="Roses & Cigarettes - Spotify Player" src="https://embed.spotify.com/?uri=spotify:artist:2JZd7083SkKl8xV7zS2xIS" width="300" height="380" frameborder="0" allowtransparency="true"></iframe> -->
<!-- 				</div>
 -->			</div>
 			</div>
			<div id="contact">
			</div>


<?php get_footer(); ?>
