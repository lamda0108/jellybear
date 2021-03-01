$(document).ready(function(){
    $('#slides').superslides({
        animation: 'slide',
        play: 3000,
        pagination: false,
        inherit_height_from: '#slider-container'
    });

    $(".owl-carousel").owlCarousel({
        items : 4,
        loop  : true,
        margin : 30,
        nav    : true,
        responsive:{
            0:{
                items:2,

            },
            600:{
                items:3,
            },
            1000:{
                items:4,
            }
        },
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      });
});