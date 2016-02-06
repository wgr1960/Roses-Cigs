<?php get_header(); ?>

			<div id="home">
				<div id="home-slider-space">
					<div id="slider-left" class="slider">
						<div class="arrow-container">
							<a href="#" id="slide-left" onClick="pageSlide(this.id)" class="arrow left"></a>
						</div>
					</div>
					<div id="slide1" class="slide"></div>
					<div id="slide2" class="slide">
						<div id="slide-content2">
						</div>
					</div>
					<div id="slide3" class="slide"><h1>SLIDE 3</h1></div>
					<div id="slider-right" class="slider">
						<div class="arrow-container">
							<a href="#" id="slide-right" onClick="pageSlide(this.id)" class="arrow right"></a>
						</div>
					</div>
				</div>
			</div>

			<div id="content news" class="news">

				<div id="inner-content" class="wrap cf">

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
										<?php /*comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );*/?>
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
					<a href="http://www.songkick.com/artists/8552809" class="songkick-widget" data-theme="dark" data-detect-style="true" data-font-color="#CCAD52" data-background-color="#000000">Roses & Cigarettes: F*CK CANCER SOCAL TOUR</a>
					<script src="//widget.songkick.com/widget.js"></script>
				</div>
			</div>

			<div id="about">
				<div id="about-content">
					<h3>About</h3>
					<p>Roses & Cigarettes formed in 2013 when the country cover band that Pagliaro was singing in auditioned Petrilli for a vacant guitar position.  The girls immediately bonded over their desire to perform original material and similar tastes in music - from the classics like Fleetwood Mac, the Eagles and Bonnie Raitt; to more contemporary artists like Patty Griffin, Sheryl Crow and Miranda Lambert.  It was a mutual love of singer-songwriter Ray LaMontagne and his song Roses and Cigarettes that inspired the name of the band.  Roses & Cigarette’s music is an eclectic blend of Roots, Country, Rock, Folk and Americana – the perfect recipe for the classic California sound.  Roses & Cigarettes self-titled debut album is available now on iTunes, Apple Music, Spotify and most other digital outlets</p>
				</div>
			</div>

			<div id="photos">
			</div>

			<div id="videos">
			</div>

			<div id="music">
			</div>

			<div id="contact">
			</div>


<?php get_footer(); ?>
