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
                $office03 = get_theme_mod ( 'office_picture_03', true);
                $profile = get_theme_mod ( 'profilepicture02', true);
        ?>

        <div id="content" role="main">
            <?php if ( $profile ) { ?>
            <div class="col-xs-12 col-md-6 col-md-offset-2 entry-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
            <div class="col-xs-3"></div>
            <div class="col-xs-6 col-md-3">
                <div class="profile_picture">
                <img class="embedded_image" style="width: 100%;" src="<?php echo $profile; ?>" />
                </div>
            </div>

        <?php } else { ?>

            <div class="col-xs-12 col-md-8 col-md-offset-2 entry-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
        <?php } ?>
        </div>

<?php if ( $office01 or $office02 or $office03 ) { ?>
        <div class="col-md-12">
            <hr>
        <h1 style="text-align: center; padding-top: 20px;"><?php echo get_theme_mod ( 'about_overskrift' ); ?></h1>
        </div>
        <?php if ( $office01 && !( $office02 or $office03 ) ) { ?>
            <div class="col-xs-3"></div><div class="col-xs-6">
        <img class="embedded_image" style="width: 100%;" src="<?php echo $office01; ?>" /></div><div class="col-xs-3"></div>
            <?php     }
                        elseif ( $office01 and $office02 && !$office03 ) { ?>
        <div class="col-xs-2"></div><div class="col-xs-4">
        <img class="embedded_image" style="width: 100%;" src="<?php echo $office01; ?>" /></div><div class="col-xs-4">
        <img class="embedded_image" style="width: 100%;" src="<?php echo $office02; ?>" /></div><div class="col-xs-2"></div>
            <?php     }
                else { ?>
        <div class="col-xs-4">
            <?php if ( $office01 ) { ?>
                <img class="embedded_image" style="width: 90%; margin-left: 10%;" src="<?php echo $office01; ?>" /><?php     }
                        else {
                    ?> <?php } ?>
            </div>

        <div class="col-xs-4">
            <?php if ( $office02 ) { ?>
            <img class="embedded_image" style="width: 90%; margin-left: 5%;" src="<?php echo $office02; ?>" /> <?php     }
                    else { ?>
            <?php } ?>
        </div>
        <div class="col-xs-4">
            <?php if ( $office03 ) { ?>
            <img class="embedded_image" style="width: 90%; margin-right: 10%;" src="<?php echo $office03; ?>" /><?php     }
                    else { ?>
            <?php } ?></div>
        <?php }
            } ?>

            </div>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer('custom'); ?>
