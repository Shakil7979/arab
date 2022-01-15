$(document).ready(function(){
	// Mobile Menu
	// $('.logo a i').click(function(){
	// 	$('.menu ul').slideToggle(1000);

	// 	return false
	// });

	// Banner Carousel
	// $('.banner_carousel').owlCarousel({
	// 	items:1,
	// 	loop:true,
	// 	nav:true,
	// 	dots:true,
	// 	autoplay:true,
	// });



	// Login Password Show / Hide
	$(".toggle-password").click(function() {

	  $(this).toggleClass("fa-eye fa-eye-slash");
	  var input = $($(this).attr("toggle"));
	  if (input.attr("type") == "password") {
	    input.attr("type", "text");
	  } else {
	    input.attr("type", "password");
	  }
	});




	// Profile Popup
	$('.header_top_left1').click(function(){
		$('.profile_popup').toggle()
		$('.download_popup').fadeOut();
		$('.checkbox_and_progress').fadeOut();
		return false;
	});

	// Checkbox_and_progress Popup 
	$('.header_top_left2').click(function(){
		$('.checkbox_and_progress').toggle();
		$('.download_popup').fadeOut();
		$('.profile_popup').fadeOut();


		return false;
	});

	
	// Progress Bar
	$('.bar-percentage[data-percentage]').each(function () {
	  var progress = $(this);
	  var percentage = Math.ceil($(this).attr('data-percentage'));
	  $({countNum: 0}).animate({countNum: percentage}, {
	    duration: 2000,
	    easing:'linear',
	    step: function() {
	      // What todo on every count
	      var pct = Math.floor(this.countNum) + '%';
	      progress.text(pct) && progress.siblings().children().css('width',pct);
	    }
	  });
	});




});

// Btn_Popup
	$('.search_btn').click(function(){
		$('.btn_popup').show();
		$('.header_main').addClass('popup_overly');

		return false;
	});
	$('.btn_popup_close').click(function(){
		$('.btn_popup').hide();
		$('.header_main').removeClass('popup_overly');

		return false;
	});

	// Download Popup
	$('.header_top_left3').click(function(){
		$('.download_popup').toggle();
		$('.checkbox_and_progress').fadeOut();
		$('.profile_popup').fadeOut();
		

		return false;
	});

	


	