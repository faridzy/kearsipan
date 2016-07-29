(function($){
	if ($('section.content').length) {
		$('section.content .small-box').click(function(e){
			$(this).children('a.small-box-footer')[0].click();
		});
		$('section.content div[class*=col-]').addClass('wow swing');
		$('section.content div[class*=col-]').hover(function() {
			// $(this).children('*:not(.nav-tabs-custom)').addClass('animated wobble');
		}, function() {
			// $(this).children('*:not(.nav-tabs-custom)').removeClass('animated wobble');
		});
	}
})(jQuery)