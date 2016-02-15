			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

					<div class="social">
			            <a href="https://instagram.com/rosesandcigarettesband/" target="blank"><i class="fa fa-instagram fa-lg"></i></a>
			            <a href="https://twitter.com/rosescigarette" target="blank"><i class="fa fa-twitter fa-lg"></i></a>
			            <a href="https://www.facebook.com/rosesandcigarettesband" target="blank"><i class="fa fa-facebook fa-lg"></i></a>
			            <a href="https://www.youtube.com/user/rosescigarettesband" target="blank"><i class="fa fa-youtube fa-lg"></i></a>
			            <a href="https://soundcloud.com/roses-and-cigarettes"><i class="fa fa-soundcloud" target="blank"></i></a>
			            <a href="spotify:artist:2JZd7083SkKl8xV7zS2xIS"><i class="fa fa-spotify fa-lg" target="blank"></i></a>
			            <a href="https://itunes.apple.com/us/album/roses-and-cigarettes/id987734711" target="blank"><i class="fa fa-apple fa-lg"></i></a>
	            	</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
