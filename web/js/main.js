(function($){
	if ($('section.content').length) {
		$('section.content div[class*=col-]').addClass('wow swing');
		$('section.content div[class*=col-]').hover(function() {
			$(this).children('*:not(.nav-tabs-custom)').addClass('animated wobble');
		}, function() {
			$(this).children('*:not(.nav-tabs-custom)').removeClass('animated wobble');
		});
	}
})(jQuery)