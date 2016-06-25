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

        <div id="content" role="main">

            <?php
                $supervisor = get_theme_mod ( 'supervisor_picture_01', true);
                    if ( $supervisor ) { ?>

            <div class="col-md-2"></div>

            <div class="col-md-4 col-md entry-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>

            </div>


            <div class="col-md-4 col-md-offset-1 col-md entry-content prisliste">
                <img class="embedded_image" style="width: 100%;" src="<?php echo $supervisor; ?>" />

            </div>
            <div class="col-md-1"></div><?php     }
                    else {
                ?>

            <div class="col-md-8 col-md-offset-2 col-md entry-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>

            </div> <?php } ?>


    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer('custom'); ?>
