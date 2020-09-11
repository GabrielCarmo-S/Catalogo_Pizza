

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

	$(document).ready(function(){
			  
		$(".cos-card").click(function(){
			$(".collapse1").collapse('show');
		});

		$(".co-card").click(function(){
			$(".collapse2").collapse('show');
		});
			  
	});

$(document).ready(function () { 
  $('.cos-card').on('click', function () {

        $('#cd').addClass('active');
        $('#cd2').removeClass('active');
       
  });  
});

$(document).ready(function () { 
  $('.co-card').on('click', function () {

        $('#cd2').addClass('active');
        $('#cd').removeClass('active');
      
  });  
});

//Owl Carousel

$(".slider").owlCarousel({
  items: 3,
  loop: true,
  autoplay: true,
  autoplayTimeout: 2000, //2000ms = 2s;
  autoplayHoverPause: true,
});
 

$(".cardapio-slidder").owlCarousel({
  items: 4,
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