$(document).ready(function() {
	'use strict';
	
	$('.menu').click(function(event) {
		$('.menu, .nav').toggleClass('active');
		$('body').toggleClass('lock');
	});
});