<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Reach
 */

get_header();

get_template_part( 'partials/banner' ); ?>

<div class="site-main error-404 not-found entry" role="main">
	<h2><?php _e( 'Sorry, but you\'ve hit a dead end.', 'reach' ) ?></h2>

	<p><a href="<?php echo site_url() ?>"><?php _e( 'Go home', 'reach' ) ?></a></p>
</div><!-- .site-main -->

<?php get_footer();
