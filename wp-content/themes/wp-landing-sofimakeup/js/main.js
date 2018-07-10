var $j=jQuery.noConflict();
jQuery(window).load(function($) {

    if($j('#slides').length) {
        $j('#slides').superslides({
            hashchange: true,
            animation: 'fade',
            pagination: false
        });
    }
    // The slider being synced must be initialized first
    $j('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 120,
        itemMargin: 5,
        asNavFor: '#slider'
    });

    $j('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        smoothHeight: false,
        keyboard: true,
        touch: true,
        sync: "#carousel"
    });
});

$j(document).ready(function($) {
    $(".dyplom__wrapper a").fancybox({
        helpers: {
            thumbs : {
                width: 50,
                height: 50
            }
        }
    });
});