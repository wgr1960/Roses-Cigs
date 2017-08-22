<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area hero is-light odd-section bio-section" role="complementary">
	<h2 class="roses-header-text has-text-centered">Bio</h2>
	<div class="hero-body">
		<div class="container">
			<div class="columns is-multiline white-text">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</div><!-- .container -->
	</div>
</aside><!-- #secondary -->