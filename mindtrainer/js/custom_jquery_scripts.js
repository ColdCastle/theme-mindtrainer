$(document).ready(function()    {
var stickyNavTop = $('#mindtrainer_menu').offset().top;

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > stickyNavTop) {
        $('#site-navigation').addClass('sticky');
        $('#small_logo').addClass('logo_appear');
        $('#logo_title').addClass('logo_title_appear');
        $('#main').addClass('fixed_top_fix');
        $('#mindtrainer_menu').addClass('navbar-fixed-top');
    } else {
        $('#site-navigation').removeClass('sticky');
        $('#small_logo').removeClass('logo_appear');
        $('#logo_title').removeClass('logo_title_appear');
        $('#main').removeClass('fixed_top_fix');
        $('#mindtrainer_menu').removeClass('navbar-fixed-top');
        }
    });

        $(".newsletter_mobile").click(function(){
        $(".toggle_nyhedsbrev").toggle();
    });
    
        $(".newsletter_desktop").click(function(){
        $(".toggle_nyhedsbrev").toggle();
    });
});
