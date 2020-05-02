(function ($) {
	"use strict";

	var BPFW = {
		init: function () {
			this.actionFlipBack();
			this.actionReadBook();
			this.actionZoomIn();
			this.actionZoomOut();
		},

		actionFlipBack: function () {
			$(document).on('click', '.bpfw-action-flip', function (e) {
				e.preventDefault();
				$('.bpfw-flip-wrapper').toggleClass('bpfw-view');
			});
		},
		actionReadBook: function () {
			$(document).on('click', '.bpfw-action-read-book', function (e) {
				e.preventDefault();

				var $this = $(this),
					urlPopup = $this.attr('href');

				$.ajax({
					'type': 'get',
					'url': urlPopup,
					'success': function (res) {
						if ($('#bpfw-popup').length > 0) {
							$('#bpfw-popup').remove();
						}

						var mfOptions = {
							closeOnBgClick: true,
							closeBtnInside: true,
							mainClass: 'mfp-zoom-in',
							midClick: true,
							items: {
								'src': urlPopup,
								'type': 'ajax'
							},
							callbacks: {
								ajaxContentAdded: function() {
									var popup_height = $(window).height() - 150;
									$('.bpfw-popup-content-wrapper').css('height', popup_height);
								}
							}
						};
						$.magnificPopup.open(mfOptions);
					}
				});
			});
		},
		actionZoomIn: function () {
			$(document).on('click', '.bpfw-preview-zoom-in', function (e) {
				e.preventDefault();

				var wrapWidth = $('.bpfw-popup-content-wrapper').width();
				var contentWidth = $('.bpfw-popup-content').width();

				if (contentWidth < wrapWidth) {
					contentWidth = contentWidth + 100;
					$('.bpfw-popup-content').css('width', contentWidth);
				}
			});
		},
		actionZoomOut: function () {
			$(document).on('click', '.bpfw-preview-zoom-out', function (e) {
				e.preventDefault();
				var contentWidth = $('.bpfw-popup-content').width();
				if (contentWidth > 600) {
					contentWidth = contentWidth - 100;
					$('.bpfw-popup-content').css('width', contentWidth);
				}
			});
		}
	};

	$(document).ready(function () {
		BPFW.init();
	});
})(jQuery);