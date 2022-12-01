$(document).ready(function() {

	 // Owl carousel code
	$('#slider').nivoSlider();

	$('#back-top').fadeOut();
	
	$("#owl-example").owlCarousel({
	  	autoPlay : true
	});

	// Dropdown Visibility on hover
	$('li.dropdown').on('mouseover', function(){
	  		$(this).addClass('open');
	}).on('mouseout', function(){
		$(this).removeClass('open');
	});

	$("html").niceScroll({
		cursorcolor : "#313bc3",
		cursorwidth : "5px",
		zindex: 9999,
		cursorborder: "none",
		cursorborderradius : 5,
		autohidemode: false,
	});
	
	// fade in #back-top
	$(window).scroll(function () {

		if ($(this).scrollTop() >=600) {
			$('#back-top').fadeIn('slow').scrollUp;
		} else {
			$('#back-top').fadeOut('slow');
		}
	});

	// scroll body to 0px on click
	$('#back-top').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 2000);
		return false;
	});


});