$(document).ready(function() {
	$('.item_clickable').click(function(event) {
		window.location = $(this).find('a').attr('href');
	});
});