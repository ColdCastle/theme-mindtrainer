<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
    </div><!-- #main .wrapper -->

<?php
        $facebook = get_theme_mod ( 'social_facebook', true);
        $linkedin = get_theme_mod ( 'social_linkedin', true);
        $youtube = get_theme_mod ( 'social_youtube', true);
        $twitter = get_theme_mod ( 'social_twitter', true);
        $maps = get_theme_mod ( 'address_textbox', true);
        $zipcode = get_theme_mod( 'zipcode_textbox', 'true');
        $copyright = get_theme_mod ( 'footer_copyright', 'true');
        $webmaster = get_theme_mod ( 'footer_webmaster', 'true');
        $webmaster_link = get_theme_mod ( 'footer_webmaster_link' );
        $credit_1 = get_theme_mod ( 'footer_credit1' );
        $foto = get_theme_mod ( 'footer_fotograf', 'true');
        $foto_link = get_theme_mod ( 'footer_fotograf_link' );
        $credit_2 = get_theme_mod ( 'footer_credit2' );
        $grafik = get_theme_mod ( 'footer_grafik', 'true');
        $grafik_link = get_theme_mod ( 'footer_grafik_link' );
        $newsletter = get_theme_mod ( 'toggle_newsletter' );

        $maps_link = str_replace(' ','+',$maps);
        $maps_zipcode = str_replace(' ','+',$zipcode);
    ?>

    <footer id="colophon" role="contentinfo">

<div class="social col-md-5">

    <?php
        if ( $facebook ) { ?>
            <a href="https://<?php echo $facebook; ?>" target="_blank" class="social-button facebook"><i class="fa fa-facebook"></i><span></span></a>
    <?php }
        if ( $linkedin ) { ?>
            <a href="https://<?php echo $linkedin; ?>" target="_blank" class="social-button linkedin"><i class="fa fa-linkedin"></i><span></span></a>
    <?php }
        if ( $youtube ) { ?>
            <a href="https://<?php echo $youtube; ?>" target="_blank" class="social-button youtube"><i class="fa fa-youtube"></i><span></span></a>
    <?php }
        if ( $twitter ) { ?>
            <a href="https://<?php echo $twitter; ?>" target="_blank" class="social-button twitter"><i class="fa fa-twitter"></i><span></span></a>
    <?php } ?>

<!-- NYHEDSBREV
<a id="nyhedsbrev_button" class="icon_button nyhedsbrev nyheds_link_small"><i class="fa fa-newspaper-o"></i></a><a id="nyhedsbrev_button" class="icon_button nyhedsbrev nyheds_link"><i class="fa fa-newspaper-o"></i> Nyhedsbrev</a>
-->
    <?php if ( $newsletter ) { ?>
<a id="nyhedsbrev_button" class="social-button newsletter newsletter_mobile"><i class="fa fa-newspaper-o"></i></a>
<a id="nyhedsbrev_button" class="social-button newsletter newsletter_desktop"><i class="fa fa-newspaper-o"></i>Nyhedsbrev</a>
    <?php } ?>

<div id="nyhedsbrev" class="toggle_nyhedsbrev"><span>
    <?php $recent = new WP_Query("pagename=subscribe"); while($recent->have_posts()) : $recent->the_post();?>
       <h4><?php the_title(); ?></h4>
       <?php the_content(); ?>
    <?php endwhile; ?></span>
</div>

</div>

<div class="address col-md-7" id="kontakt">
        <h4><?php echo get_bloginfo('name'); ?> v/ <?php echo get_theme_mod( 'title_textbox' ); ?> <?php echo get_theme_mod( 'name_textbox' ); ?></h4>
        <a href="https://www.google.dk/maps/place/<?php echo $maps_link; ?>,+<?php echo $maps_zipcode; ?>" target="_blank"><i class="fa fa-map-marker"></i><?php echo $maps; ?>, <?php echo $zipcode; ?></a>
  <p><i class="fa fa-phone"></i><?php echo get_theme_mod( 'telephone_textbox', '' ); ?><br>
      <a style="text-decoration: none; font-family: Roboto; font-weight: 400; font-size: 15px; color: #555;" href="mailto:<?php echo get_theme_mod( 'email_textbox', '' ); ?>?Subject=Mindtrainer"><i class="fa fa-envelope-o"></i><?php echo get_theme_mod( 'email_textbox', '' ); ?></a></p>
        <p>CVR.nr.: <?php echo get_theme_mod( 'cvr_textbox', '' ); ?></p>
</div>

<div class="col-md-12">
<hr />
</div>

<div class="col-md-2"></div>
<div class="col-md-8">

            <p class="credits" style="text-align: center;"><?php if ( $foto and $credit_1 ) { ?><?php echo $credit_1;?>: <a <?php if ( $foto_link ) { ?>href="http://<?php echo $foto_link; ?>"  target="_blank"<?php } ?>><?php echo $foto; ?></a> - <?php } ?><?php if ( $webmaster ) { ?>Webmaster: <a <?php if ( $webmaster_link ) { ?>href="http://<?php echo $webmaster_link; ?>"  target="_blank"<?php } ?>><?php echo $webmaster; ?></a><?php } ?><?php if ( $grafik and $credit_2 ) { ?> - <?php echo $credit_2; ?>: <a <?php if ( $grafik_link ) { ?>href="http://<?php echo $grafik_link; ?>" target="_blank"<?php } ?>><?php echo $grafik; ?></a><?php } ?><br><?php if ( $copyright ) { ?><i style="font-size: 14px !important;" class="fa fa-copyright"></i> <?php echo $copyright; } ?></p>
</div>
<div class="col-md-2"></div>






    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer('custom'); ?>
</body>
</html>
