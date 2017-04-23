<?php /* Template Name: Bio */ ?>


<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/content-bio' ); ?>
	<?php bulmapress_get_comments(); ?>
<?php endwhile; ?>