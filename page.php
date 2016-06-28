<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div id="main" class="wrapper">
	<div id="primary" class="site-content default_page_content orange">
		<div id="content" role="main">
			<div class="col-md col-md-12">
			<div class="col-md col-md-3"></div>
			<div class="col-md-6 entry-content default_page">
				<?php while ( have_posts() ) : the_post(); ?>
					<h1 class="default_title"><?php echo get_the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
			<div class="col-md col-md-3"></div>
			</div>
			<div class="col-md-12">
				<div class="subject_back">
				<div class="btn-group" role="group" aria-label="tilbage eller andre emner">
				  <a href="/privat#emner" type="button" class="btn btn-default"><span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span> Tilbage</a>
				  <div class="btn-group" role="group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Andre emner
					  <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
					  <li><a href="/personlig-udvikling">Personlig udvikling</a></li>
					  <li><a href="/lavt-selvvaer">Selvværd</a></li>
						<li><a href="/stress">Stress</a></li>
					  <li><a href="/sorgprocesser">Sorg og (livs)krise</a></li>
						<li><a href="/parterapi">Parterapi</a></li>
					  <li><a href="/angst">Angst</a></li>
						<li><a href="/depression">Depression</a></li>
					  <li><a href="/alvorlig-sygdom">Alvorligt syg - eller pårørende</a></li>
						<li><a href="/andet">Andet</a></li>
					</ul>
				  </div>
				</div>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
</div>
<?php get_footer('custom'); ?>
