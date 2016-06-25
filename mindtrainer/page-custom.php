<?php
/**

Template Name: Custom page
 */

get_header(); ?>
	<div id="primary" class="site-content">


		<div id="content" role="main">



			<div class="col-md-12">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer('custom'); ?>
