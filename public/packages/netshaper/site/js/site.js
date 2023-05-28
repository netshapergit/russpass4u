$(function() {
	$('img[data-popup]').each(function() {
		var element = $(this);
		var href = element.data('popup');

		if (href) {
			element.wrapAll('<a href="' + href + '" target="_blank" />');

			element.parent().colorbox({
				rel: element.data('rel')
			});
		}
	});
});
