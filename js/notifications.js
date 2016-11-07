$(function() {
	$(".notification" ).click(function(event) {
		container = $(this).children(".notification-container");
		$(container).css('display', 'block');
		$("body").css('cursor', 'pointer');
		event.stopPropagation();
	});

	$('body').click(function(e) {
		if ($(e.target).closest('.notification-container').length === 0) {
			$(".notification-container").css('display', 'none');
			$("body").css('cursor', 'default');
		}
	});
});
