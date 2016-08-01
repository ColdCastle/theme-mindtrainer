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
                $office01 = get_theme_mod ( 'office_picture_01', true);
                $office02 = get_theme_mod ( 'office_picture_02', true);
                // $office03 = get_theme_mod ( 'office_picture_03', true);
                // $profile = get_theme_mod ( 'profilepicture02', true);
        ?>

        <div id="content" role="main">
            <?php if ( $office01 or $office02 ) { ?>
            <div class="col-xs-12 col-md-5 col-md-offset-2 entry-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
            <!-- <div class="col-xs-2"></div> -->
            <div class="col-xs-12 col-md-4">
                <hr class="om-mig_line">
                <h4 class="about_headline"><?php echo get_theme_mod ( 'about_overskrift' ); ?></h4>
                <div class="office_pictures">
                
                <?php if ($office01 && $office02) { ?>
                    <div class="col-xs-6 col-md-12">
                    <img class="embedded_image" width="100%" src="<?php echo $office01; ?>" />
                    </div>
                    <div class="col-xs-6 col-md-12">
                    <img class="embedded_image" width="100%" src="<?php echo $office02; ?>" />
                    </div>
                <?php } 
                    elseif (($office01 && !($office2)) or ($office02 && !($office01))) { ?>
                    <?php if ($office01) { ?>
                        <div class="col-xs-2"></div>
                            <div class="col-xs-8 col-md-12">
                                <img class="embedded_image" width="100%" src="<?php echo $office01; ?>" />
                            </div>
                        <div class="col-xs-2"></div>
                    <?php } 
                        elseif ($office02) { ?>
                        <div class="col-xs-2"></div>
                            <div class="col-xs-8 col-md-12">
                                <img class="embedded_image" width="100%" src="<?php echo $office02; ?>" />
                            </div>
                        <div class="col-xs-2"></div>
                    <?php } ?>
                <?php } ?>
                </div>
            </div>
            <!-- <div class="col-xs-2"></div> -->

        <?php } else { ?>

            <div class="col-xs-12 col-md-8 col-md-offset-2 entry-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
        <?php } ?>
        </div>



            </div>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer('custom'); ?>
