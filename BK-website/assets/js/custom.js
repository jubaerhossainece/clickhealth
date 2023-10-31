$(document).ready(function() {

    $(window).scroll(function () {
    if (!(jQuery('body > main').hasClass('non-sticky'))) {
        if (jQuery(window).scrollTop()) {
            jQuery(".top-menu").addClass("slideDownScaleReversedIn").removeClass("slideDownScaleReversedOut");
        }
        else {
            jQuery(".top-menu").addClass("slideDownScaleReversedOut").removeClass("slideDownScaleReversedIn");
        }
    }
    else {
        console.log('sticky');
    }
    });

    // For Gallery
    $('.mix-active').mixItUp();

});    
