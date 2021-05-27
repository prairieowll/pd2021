$(document).ready(function() {
	'use strict';

	$('.logo').click(function(event) {
		$('html, body').animate({
			scrollTop: '0'
		}, 500);
	});

	$(window).on('scroll', function(event) {
		event.preventDefault();

		if ($(window).scrollTop() > 50) 
			$('.header__inner').addClass('scrolled');
		else $('.header__inner').removeClass('scrolled');
	});

	$(document).on('click', 'a[href^="#"]', function(event) {
		event.preventDefault();

		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 500);
	});
});