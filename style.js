$(document).ready(function () {
    $('#sfc').on('click', function () {

    	$(".sidebar").mCustomScrollbar({
                theme: "minimal"
        });

    	$('#dismiss, .overlay').on('click', function () {
              $('.sidebar').removeClass('active');
              $('.overlay').removeClass('active');
         });

   		$('.sidebar').addClass('active');
   		$('.overlay').addClass('active');
   		 $('a[aria-expanded=true]').attr('aria-expanded', 'false');

   	});
});