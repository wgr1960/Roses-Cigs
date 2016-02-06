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
					<ul class="tabs">
						<li class="tab-link current" data-tab="tab-1">Upcoming Events</li>
						<li class="tab-link" data-tab="tab-2">Past Events</li>
					</ul>
					<div id="tab-1" class="tab-content current">
					</div>
					<div id="tab-2" class="tab-content">
					</div>
				</div>
			</div>

			<div id="about">
				<h1>About</h1>
				<div>
					<p>Roses & Cigarettes formed in 2013 when the country cover band that Pagliaro was signing in auditioned Petrilli for a vacant guitar position. The girls immediately
					bonded over their desire to perform original material and similar tastes in music. From the classics like NWA, Dr. Dre, and 2Pac to more
					contemporary artists like Drake, Fetty Wap, and DJ Khaled. It was a mutual love of singer-songwriter Ray LaMontagne and his song Roses and
					Cigarettes that inspired the name of the band. Roses & Cigarettes' usic is an eclectic blend of Roots, Country, Rock, Folk, and Americana - the perfect recipe
					for the classic California sound.</p>

					<!-- <p>Roses & Cigarettes formed in 2013 when the country cover band that Pagliaro was signing in auditioned Petrilli for a vacant guitar position. The girls immediately
					bonded over their desire to perform original material and similar tastes in music. From the classics like Fleetwood Mac, the Eagles and Bonnie Raitt; to more
					contemporary artists like Patty Griffin, Sheryl Crow, and Miranda Lambert. It was a mutual love of singer-songwriter Ray LaMontagne and his song Roses and
					Cigarettes that inspired the name of the band. Roses & Cigarettes' usic is an eclectic blend of Roots, Country, Rock, Folk, and Americana - the perfect recipe
					for the classic California sound.</p> -->
				</div>
				<h2>Band Booking</h3>
				<div>
					<p>rosesandcigarettesband@gmail.com</p>
				</div>
				<h2>Press & Interviews</h3>
				<div>
					<p>Dedee Morse, Publicist @ M4PR</p>
					<p>E: deedee@M4PR.com</p>
					<p>C: 818.274.9098</p>
					<p>O: 818.538.6477 (M4PR)</p>
				</div>
				<h2>Credits To</h3>
				<div>
					<p>Website: Bryan Cuevas & Willie Rodriguez</p>
					<p>Photographers: James Conners & Rachel Evans & Dan Madsen</p>
				</div>
			</div>

			<div id="photos">
				<h1>Photos</h1>
				<div id="gallery-feed">

				</div>
			</div>

			<div id="videos">
				<h1>Videos</h1>
				<div id="gallery-feed">

				</div>
			</div>

			<div id="music">
				<h1>Music</h1>
				<div id="gallery-feed">

				</div>
			</div>

			<div id="contact">
			</div>


<?php get_footer(); ?>
