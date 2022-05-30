$(function() {
    var filterList = {
        init: function() {
            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixItUp({
                selectors: {
                    target: '.portfolio',
                    filter: '.filter'
                },
                load: {
                    filter: '.heading1, .heading2, .heading3, .heading4'
                }
            });
        }
    };
    // Run the show!
    filterList.init();
});


$(document).ready(function() {
    $(".fancybox").fancybox();

});




// -------------------------------------------------------------
// Back To Top  
// -------------------------------------------------------------

(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 400) {
            $('.scroll-up').fadeIn();
        } else {
            $('.scroll-up').fadeOut();
        }
    });
}());



// -------------------------------------------------------------
// Back To Top  
// -------------------------------------------------------------




// -------------------------------------------------------------
// Fancy Gallery Start  
// -------------------------------------------------------------

$(document).ready(function() { $('.fb').fancybox(); });
// -------------------------------------------------------------
// Fancy Gallery End 
// -------------------------------------------------------------


// -------------------------------------------------------------
// ScrollBar Start
// -------------------------------------------------------------

// jQuery(document).ready(function(){
//     jQuery('.scrollbar-inner').scrollbar();
// });
// -------------------------------------------------------------
// ScrollBar End 
// -------------------------------------------------------------

// -------------------------------------------------------------
// Loader Start 
// -------------------------------------------------------------

window.onload = function() { $('.loader').fadeOut(); }


// -------------------------------------------------------------
// Loader End
// -------------------------------------------------------------

$('.BlogSlider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1
});