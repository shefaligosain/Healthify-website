$(document).ready(function() {

 /* For the sticky navigation */
$('.js--section-features').waypoint(function(direction) {
    if (direction == "down") {
        $('nav').addClass('sticky');
    } 
    else {
        $('nav').removeClass('sticky');
    }
}, {
  offset: '50px;'

});

 /* Scroll on buttons */
 $('.js--scroll-to-bonus').click(function () {
    $('html, body').animate({scrollTop: $('.js--section-bonus').offset().top}, 1000); 
 });


/* Animations*/
 $('.js--wp-1').waypoint(function(direction) {
    $('.js--wp-1').addClass('animated fadeIn');
}, {
    offset: '50%'
});

$('.js--wp-2').waypoint(function(direction) {
    $('.js--wp-2').addClass('animated fadeInLeft');
}, {
    offset: '50%'
});

$('.js--wp-3').waypoint(function(direction) {
    $('.js--wp-3').addClass('animated fadeInLeft');
}, {
    offset: '50%'
});

$('.js--wp-4').waypoint(function(direction) {
    $('.js--wp-4').addClass('animated fadeInLeft');
}, {
    offset: '50%'
});

$('.js--wp-5').waypoint(function(direction) {
    $('.js--wp-5').addClass('animated fadeInLeft');
}, {
    offset: '50%'
});

$('.js--wp-6').waypoint(function(direction) {
    $('.js--wp-6').addClass('animated fadeInLeft');
}, {
    offset: '50%'
});

$('.js--wp-7').waypoint(function(direction) {
    $('.js--wp-7').addClass('animated fadeInLeft');
}, {
    offset: '50%'
});

$('.js--wp-8').waypoint(function(direction) {
    $('.js--wp-8').addClass('animated fadeInLeft');
}, {
    offset: '50%'
});

$('.js--wp-9').waypoint(function(direction) {
    $('.js--wp-9').addClass('animated fadeInLeft');
}, {
    offset: '50%'
});

$('.js--wp-10').waypoint(function(direction) {
    $('.js--wp-10').addClass('animated fadeInLeft');
}, {
    offset: '50%'
});

$('.js--wp-11').waypoint(function(direction) {
    $('.js--wp-11').addClass('animated fadeInLeft');
}, {
    offset: '50%'
});

$('.js--wp-12').waypoint(function(direction) {
    $('.js--wp-12').addClass('animated bounceInLeft');
}, {
    offset: '50%'
});

  /* Mobile navigation */
  $('.js--nav-icon').click(function() {
    var nav = $('.js--main-nav');
    var icon = $('.js--nav-icon i');
    nav.slideToggle(200);
    /*if (icon.hasClass('fas fa-bars')) {
        icon.addClass('fas fa-times');
        icon.removeClass('fas fa-bars');
    } else {
        icon.addClass('fas fa-bars');
        icon.removeClass('fas fa-times');
    } */
  });



$(window).resize(function(){

    var nav = $('.js--main-nav');
    
    var icon = $('.js--nav-icon i');
    
    if ($(window).width() > 750){
    
    nav.css("display", "block");
    
    
    icon.removeClass('fas fa-bars');
    
    } else {
    
    nav.css("display", "none");
    
    icon.addClass('fas fa-bars');
    
    }
    
    });

});