<?php
/**

Template Name: Mindtrainer Frontpage
 */

get_header(); ?>

	<div id="primary" class="site-content col-md-12">

		<?php
				$profile = get_theme_mod ( 'profilepicture01');
				$tagline = get_theme_mod ( 'tagline_textbox');

if ( $profile ) { ?>

	<div class="col-md-3 col-md-offset-2">
		<div class="profile-lene" id="content" role="main">

			<div class="profile_picture">
				<img class="embedded_image" style="width: 100%;" src="<?php echo $profile ?>" />
			</div>

		</div>
			</div>

			 <div class="col-md-6">
				 <?php } else { ?>

				 <div class="col-md-8 col-md-offset-2">
					 <?php } ?>
					<div class="entry-content frontpage-text">
						<div id="businesscard">
							<table id="header">
							<tr><th><?php echo get_theme_mod ( 'name_textbox' ); ?></th></tr>
							<tr><td><?php echo get_theme_mod ( 'title_textbox' ); ?></td></tr>
							</table>
						</div>
						<div class="frontpage_description">
							<p><?php echo $tagline ?></p>
						</div>
						<div id="frontpage_buttons" class="col-md-12">
							<div class="col-md-1"></div>
					 <div class="col-xs-6 col-md-5">
						<a href="/hjem/privat"><div class="btn_frontpage btn_privat"><span>PRIVAT</span></div></a>
					 </div>

					 <div class="col-xs-6 col-md-5">
						 <a href="/hjem/erhverv"><div class="btn_frontpage btn_erhverv"><span>ERHVERV</span></div></a>
					 </div>
							<div class="col-md-1"></div>
						</div>
<!--                        <div class="frontpage_description">
//                     <?php while ( have_posts() ) : the_post(); ?>
//                        <?php the_content(); ?>
//                            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
//                            <?php endwhile; // end of the loop. ?>
						</div> -->
					</div>
					</div>
				</div>

<?php get_sidebar(); ?>
<?php get_footer('custom'); ?>
