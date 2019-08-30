$('.reviews-mob .reviews-items').slick({
	infinite: true,
  	slidesToShow: 1,
  	slidesToScroll: 1,
  	arrows: true,
	draggable: false,
	autoplay: true,
	autoplaySpeed: 2000,
	pauseOnFocus: false,
	dots: false
});

$('.partners-desk .partners-items').slick({
	infinite: true,
  	slidesToShow: 4,
  	slidesToScroll: 1,
  	arrows: false,
	draggable: false,
	autoplay: true,
	autoplaySpeed: 2000,
	pauseOnFocus: false,
	dots: false
});

$('.partners-mob .partners-items').slick({
	infinite: true,
  	slidesToShow: 1,
  	slidesToScroll: 1,
  	arrows: false,
	draggable: false,
	autoplay: true,
	autoplaySpeed: 2000,
	pauseOnFocus: false,
	dots: false
});

$(document).ready(function () {
	$("#logo, #main-menu, #footer-menu, #request1, #request2").on("click", "a", function (event) {
		event.preventDefault();
		var id = $(this).attr('href');
		var	top = $(id).offset().top
		$('body,html').animate({
			scrollTop: top
		}, 1000);
	});
});

$(document).ready(function() {
		$('.menu-trigger').click(function() {
		$('header nav ul').slideToggle(500);
	});
});


$(document).ready(function() {
	if (screen.width < 960) {
		$('header nav ul li a').click(function() {
		$('header nav ul').slideToggle(500);
	});
	};
});