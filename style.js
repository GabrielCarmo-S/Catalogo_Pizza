

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