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

	<? $tagline = get_theme_mod ( 'tagline_textbox'); ?>


	<div id="primary" class="site-content">

		<div id="content" role="main">
			<div class="col-md-12">
				<div class="col-md-2"></div>
				 <div class="col-md-8">
					<p class="tagline"><?php echo $tagline ?></p>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="col-md-12">
			<div class="col-md-2"></div>
			 <div class="col-md-4 col-md entry-content">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>

			</div>


			<div class="col-md-4 col-md-offset-1 col-md entry-content">
				<div class="prisliste">
				<?php $recent = new WP_Query("pagename=pris-privat"); while($recent->have_posts()) : $recent->the_post();?>
	   <?php the_content(); ?>
	<?php endwhile; ?>
				<div class="afbud">
				<h3><?php echo get_theme_mod( 'afbudtitel_textbox' ); ?></h3>
				<p><?php echo get_theme_mod( 'afbud_textbox' ); ?></p>
				<p><?php echo get_theme_mod( 'afbudkontakt_textbox' ); ?></p>
				</div>
				</div>




			</div>


						<div class="col-md-1"></div>
</div>
			<div class="col-xs-12" style="padding-top: 30px;">
<div class="col-md-2"></div>
			<div class="col-md-8 col-xs-12">
				<!-- HEADLINE -->
				<h1 id="emner" class="subject_title">Emner jeg beskæftiger mig med:</h1>

				<table id="subject_table">
					<tr>
					<td class="subject_cards"><a href="/personlig-udvikling">Personlig udvikling</a></td>
						<td class="divider"></td>
						<td class="subject_cards"><a href="/lavt-selvvaer">Selvværd</a></td>
						<td class="divider"></td>
						<td class="subject_cards"><a href="/stress">Stress</a></td>
					</tr>

					<tr><td class="divider_row"></td></tr>

					<tr>
					<td class="subject_cards"><a href="/sorgprocesser">Sorg og (livs)krise</a></td>
						<td class="divider"></td>
					<td class="subject_cards"><a href="/parterapi">Parterapi</a></td>
						<td class="divider"></td>
					<td class="subject_cards"><a href="/angst">Angst</a></td>
					</tr>

					<tr><td class="divider_row"></td></tr>

					<tr>
					<td class="subject_cards"><a href="/depression">Depression</a></td>
						<td class="divider"></td>
					<td class="subject_cards"><a href="/alvorlig-sygdom">Alvorligt syg - eller pårørende</a></td>
						<td class="divider"></td>
					<td class="subject_cards"><a href="/andet">Andet</a></td>
					</tr>


				</table>






</div>







				</div>
			</div>
<div class="col-xs-2"></div>
			</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer('custom'); ?>
