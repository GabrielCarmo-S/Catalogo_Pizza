

$(document).ready(function () { 
  $('#sfc').on('click', function () {


  	$('.overlay').on('click', function () {
              $('.mobileMenu').removeClass('active');
              $('.overlay').removeClass('active');
         });

  	
        $('.mobileMenu').toggleClass('active');
        $('.overlay').toggleClass('active');
       
  });  
});

//Owl Carousel

$(".slider").owlCarousel({
  loop: true,
  autoplay: true,
  autoplayTimeout: 2000, //2000ms = 2s;
  autoplayHoverPause: true,
  responsiveClass:true,
  responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
            nav:false
        },
        800:{
            items:3,
            nav:false
        },
        1000:{
            items:3, 
        }
    }
});
 

$(".cardapio-slidder").owlCarousel({
  loop: true,
  responsiveClass:true,
  responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
            nav:false
        },
        800:{
            items:3,
            nav:false
        },
        1000:{
            items:4, 
        }
    }
});

$(".testemunhos-slidder").owlCarousel({
  loop: true,
  autoplay: true,
  autoplayTimeout: 2000, //2000ms = 2s;
  autoplayHoverPause: true,
  responsiveClass:true,
  responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
            nav:false
        },
        800:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            
        }
    }
});

