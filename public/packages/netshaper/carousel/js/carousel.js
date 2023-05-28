(function($) {
	$.fn.nsCarousel = function() {
		return this.each(function(index, node) {

			var wrap = $(node);
			var hole = wrap.find('.ns-hole');
			var line = hole.find('.ns-line');
			var arrows = wrap.find('.ns-arrow');

			var lock = false;

			arrows.filter('.ns-left').click(left);
			arrows.filter('.ns-right').click(right);
			wrap.find('.ns-item img').load(setLineWidth);
			$(window).resize(setLineWidth).resize();

			function setLineWidth() {
				arrows.hide();

				var width = 0;

				line.innerWidth('auto').find('.ns-item').each(function(index, node) {
					width += $(node).outerWidth(true);
				});

				line.innerWidth(width);

				if (line.outerWidth() > hole.innerWidth()) {
					arrows.show();
				}
			}

			function left() {
				if (!lock) {
					active($(this));

					line.find('.ns-item').last().clone().prependTo(line);
					setLineWidth();
					line.css('left', '-' + line.find('.ns-item').get(1).offsetLeft + 'px');
					lock = true;
					line.animate({
						left: '-' + line.find('.ns-item').get(0).offsetLeft
					}, function() {
						line.find('.ns-item').last().remove();
						setLineWidth();
						lock = false;
					});
				}
			}

			function right() {
				if (!lock) {
					active($(this));

					line.find('.ns-item').first().clone().appendTo(line);
					setLineWidth();
					lock = true;
					line.animate({
						left: '-' + line.find('.ns-item').get(1).offsetLeft
					}, function() {
						line.find('.ns-item').first().remove();
						setLineWidth();
						line.css('left', '-' + line.find('.ns-item').get(0).offsetLeft + 'px');
						lock = false;
					});
				}
			}

			function active(element) {
				element.addClass('ns-active');

				setTimeout(function() {
					element.removeClass('ns-active');
				}, 100);
			}

		});
	};

	$(function() {
		$('.ns-carousel').nsCarousel();
	});
})(jQuery);
