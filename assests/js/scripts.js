window.console = window.console || {
            log: function () {}
        };
        $('.full-width').fullWidth()
            .on('fws.start', function(e, data){
                console.log( 'Moving '+ data.direction +' from slide '+ data.status.previous +' to slide '+ data.status.current );
            })
            .on('fws.finish', function(e, data){
                console.log( 'Moved from slide ' + data.status.previous + ' to slide ' + data.status.current );
});
$(window).load(function() {
   // isotope mansory layout
    var $container1 = $('.post-masonry');
    var $container2 = $('.post-default');
    var $container3 = $('#ra-container');
    // init
    $container1.isotope({
        itemSelector: '#post-container',
        gutter: 20
    });
      $container2.isotope({
        itemSelector: '#post-container',
        gutter: 20
    });
      $container3.isotope({
        itemSelector: '#ra-post',
        gutter: 20
    });
    // end of isotope mansory layout
    

$('.nt-news').ticker();
$.fn.ticker.defaults = {
    random:        false, // Whether to display ticker items in a random order
    itemSpeed:     3000,  // The pause on each ticker item before being replaced
    cursorSpeed:   50,    // Speed at which the characters are typed
    pauseOnHover:  true,  // Whether to pause when the mouse hovers over the ticker
    finishOnHover: true,  // Whether or not to complete the ticker item instantly when moused over
    cursorOne:     '_',   // The symbol for the first part of the cursor
    cursorTwo:     '-',   // The symbol for the second part of the cursor
    fade:          true,  // Whether to fade between ticker items or not
    fadeInSpeed:   600,   // Speed of the fade-in animation
    fadeOutSpeed:  300    // Speed of the fade-out animation
};


$('.header3-con').waypoint(function(direction){
  if(direction == 'down'){
    $(this).addClass('sticky');
  }else{
    $(this).removeClass('sticky');
}
}, {offset:'0%'});

});

// Nice Scroll
    $(document).ready(function() {  
        $("html").niceScroll({
          cursorcolor:"#171614",
          cursorwidth: "12px",
          scrollspeed: 80,
          cursorborder: "0",
          smoothscroll: true,
          mousescrollstep: 60,
          hidecursordelay: 5000,
          hwacceleration: true,
          cursoropacitymax: 1,
          cursoropacitymin: 0.4,
          horizrailenabled: false,
      });

// Own Crousel
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 5,
      itemsDesktop : [600,5],
      itemsDesktopSmall : [400,5],
 
  });

    });
// End of Nice Scroll

// View Port

$('.wrapper').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeIn',
      offset: 100
     });
$('#post-container, .bxslider, .image-gallery, .feature, .recent-publication, .recent-activities, .recent-activities2 , .member').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInUp',
      offset: 100
     });
$('.logo-img').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated slideInLeft',
      offset: 100
     });
$('.banner-img').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated slideInRight',
      offset: 100
     });

//BxXlider
$('.bxslider').bxSlider({
  mode: 'vertical',
  slideMargin: 5,
  auto: true,
  pager: false,
});



$(function () {
    $.scrollUp({
        scrollName: 'scrollUp',      // Element ID
        scrollDistance: 400,         // Distance from top/bottom before showing element (px)
        scrollFrom: 'top',           // 'top' or 'bottom'
        scrollSpeed: 500,            // Speed back to top (ms)
        easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
        animation: 'slide',           // Fade, slide, none
        animationSpeed: 300,         // Animation speed (ms)
        scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
        scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
        scrollText: '<b><span class="fa fa-arrow-circle-up fa-3x"></span></b>', // Text for element, can contain HTML
        scrollTitle: false,          // Set a custom <a> title if required.
        scrollImg: false,            // Set true to use image
        //activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        //zIndex: 2147483647           // Z-Index for the overlay
    });
});


