<?php 
/**
 * Template name: Homepage Alternative
 * 
 * This is a homepage template with a slider at the top and campaign grid below.
 *
 * @package 	Benny 
 */

get_header();
	
	while ( have_posts() ) :
		the_post();
		?>	
		<main class="site-main content-area" role="main">

			<article <?php post_class() ?>>

				<div class="shadow-wrapper">	

					<h1 class="page-title"><?php the_title() ?></h1>

					<div class="entry">
						<?php the_content() ?>
					</div>

				</div>

			</article>

			<?php get_template_part('campaign', 'grid');

			// if ( get_post_meta( get_the_ID(), '_franklin_homepage_2_show_campaigns', true ) ) : 

			// 	get_template_part('campaign', 'grid');

			// endif;

			// if ( get_post_meta( get_the_ID(), '_franklin_homepage_2_show_categories', true ) ) :

			// 	get_template_part('campaign', 'categories');

			// endif;
			?>
		</main>

	<?php 
	endwhile;

get_footer();