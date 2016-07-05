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




	<div id="primary" class="site-content">

		<?php
			$virksomheder_title = get_theme_mod ( 'virksomheder_title' );
			$logo01 = get_theme_mod ( 'mindtrainer_corporate_01' );
			$logo01_link = get_theme_mod ( 'corporate_link_01' );
			$logo02 = get_theme_mod ( 'mindtrainer_corporate_02' );
			$logo02_link = get_theme_mod ( 'corporate_link_02' );
			$logo03 = get_theme_mod ( 'mindtrainer_corporate_03' );
			$logo03_link = get_theme_mod ( 'corporate_link_03' );
			$logo04 = get_theme_mod ( 'mindtrainer_corporate_04' );
			$logo04_link = get_theme_mod ( 'corporate_link_04' );
			$logo05 = get_theme_mod ( 'mindtrainer_corporate_05' );
			$logo05_link = get_theme_mod ( 'corporate_link_05' );
			$logo06 = get_theme_mod ( 'mindtrainer_corporate_06' );
			$logo06_link = get_theme_mod ( 'corporate_link_06' );
			$tagline = get_theme_mod ( 'tagline_textbox' );
			$bullet1 = get_theme_mod ( 'tagline_bullet_1');
			$bullet2 = get_theme_mod ( 'tagline_bullet_2');
			$bullet3 = get_theme_mod ( 'tagline_bullet_3');
		?>


		<div id="content" role="main">
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-2"></div>
				 <div class="col-md-8">
					<p class="tagline">
						<!-- ALL BULLETS -->
						<?php if ( $bullet1 and $bullet2 and $bullet3 ) { ?>
							<?php echo $tagline, ' ', $bullet1, ', ', $bullet2, ' og ', $bullet3 ?>
						<!-- TWO BULLETS -->
						<?php } else if ( $bullet1 and $bullet2) { ?>
							<?php echo $tagline, ' ', $bullet1, ' og ', $bullet2 ?>
						<?php } else if ( $bullet1 ) { ?>
							<?php echo $tagline, ' ', $bullet1 ?>
						<?php } else { ?>
							<?php echo $tagline ?>
						<?php } ?>
					</p>
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


			<div class="col-md-4 col-xs-12 col-md-offset-1 col-md entry-content prisliste">
				<?php $recent = new WP_Query("pagename=pris-erhverv"); while($recent->have_posts()) : $recent->the_post();?>
	   <?php the_content(); ?>
	<?php endwhile; ?>
				<div class="afbud">
				 <h3><?php echo get_theme_mod( 'afbudtitel_textbox' ); ?></h3>
				<p><?php echo get_theme_mod( 'afbud_textbox' ); ?></p>
				<p><?php echo get_theme_mod( 'afbudkontakt_textbox' ); ?></p>
				</div>
			</div>
						<div class="col-md-1"></div>
				</div>

				<?php
	if ( $logo01 or $logo02 or $logo03 or $logo04 or $logo05 ) { ?>
			 <div class="col-xs-12" style="margin-top: 20px;">
				 <div class="col-md-2"></div>
				 <div class="col-md-10">
				<h1><?php echo $virksomheder_title ?></h1>
				 </div>
				 </div>
				<div class="col-xs-12 entry-content company_logos">
					<div class="col-md-2"></div>
					<div class="col-md-8">
		<div id="corporate_logos">
			<?php if ( $logo01 ) { ?>
			<div class="col-md-2 col-xs-4">
				<div class="corporate_logo">
				<a href="http://<?php echo $logo01_link ?>" target="_blank"><img src="<?php echo $logo01 ?>" /></a>
				</div>
			</div>
			<?php }
				if ( $logo02 ) { ?>
			<div class="col-md-2 col-xs-4">
				<div class="corporate_logo">
				<a href="http://<?php echo $logo02_link ?>" target="_blank"><img src="<?php echo $logo02 ?>" /></a>
				</div>
			</div>
			<?php }
			if ( $logo03 ) { ?>
			<div class="col-md-2 col-xs-4">
				<div class="corporate_logo">
				<a href="http://<?php echo $logo03_link ?>" target="_blank"><img src="<?php echo $logo03 ?>" /></a>
				</div>
			</div>
			<?php }
			if ( $logo04 ) { ?>
			<div class="col-md-2 col-xs-4">
				<div class="corporate_logo">
				<a href="http://<?php echo $logo04_link ?>" target="_blank"><img src="<?php echo $logo04 ?>" /></a>
				</div>
			</div>
			<?php }
			if ( $logo05 ) { ?>
			<div class="col-md-2 col-xs-4">
				<div class="corporate_logo">
					<a href="http://<?php echo $logo05_link ?>" target="_blank"><img src="<?php echo $logo05 ?>" /></a>
					</div>
				</div>
			<?php }
			if ( $logo06 ) { ?>
			<div class="col-md-2 col-xs-4">
				<div class="corporate_logo">
				<a href="http://<?php echo $logo06_link ?>" target="_blank"><img src="<?php echo $logo06 ?>" /></a>
				</div>
			</div>
			<?php } ?>
			</div>
					</div>
					<div class="col-md-2"></div>
			</div>
		<?php } ?>



		</div>
		</div>
			<!--Make col for the logos -->

			</div>
		</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer('custom'); ?>
