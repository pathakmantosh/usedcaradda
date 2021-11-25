(function ($) {
	"use strict";

	// ______________ Global Loader
	$(window).on("load", function (e) {
		$("#global-loader").fadeOut("slow");
	})


	jQuery('img.svg').each(function () {
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');
		jQuery.get(imgURL, function (data) {
			// Get the SVG tag, ignore the rest
			var $svg = jQuery(data).find('svg');
			// Add replaced image's ID to the new SVG
			if (typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if (typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass + ' replaced-svg');
			}
			// Remove any invalid XML tags as per http://validator.w3.org
			$svg = $svg.removeAttr('xmlns:a');
			// Replace image with new SVG
			$img.replaceWith($svg);
		}, 'xml');
	});

	// ______________ Cover-image
	$(".cover-image").each(function () {
		var attr = $(this).attr('data-image-src');
		if (typeof attr !== typeof undefined && attr !== false) {
			$(this).css('background', 'url(' + attr + ') center center');
		}
	});
	var likeCounter = 12;
	$(".like").on("click", function (e) {
		e.preventDefault();
		// animation
		if ($(this).parent().hasClass("selected")) {
			// like counter
			if ($(this).hasClass("like")) {
				likeCounter--;
				$(this).find(".counter").text(likeCounter);
			};
		} else {
			// like counter
			if ($(this).hasClass("like")) {
				likeCounter++;
				$(this).find(".counter").text(likeCounter);
			};
		}
	});



	// ______________ Color-skin
	$(document).ready(function () {
		$("a[data-theme]").click(function () {
			$("head link#theme").attr("href", $(this).data("theme"));
			$(this).toggleClass('active').siblings().removeClass('active');
		});
		$("a[data-effect]").click(function () {
			$("head link#effect").attr("href", $(this).data("effect"));
			$(this).toggleClass('active').siblings().removeClass('active');
		});
	});

	// ______________ Modal
	$("#myModal").modal('show');

	// ______________Rating Stars
	var ratingOptions = {
		selectors: {
			starsSelector: '.rating-stars',
			starSelector: '.rating-star',
			starActiveClass: 'is--active',
			starHoverClass: 'is--hover',
			starNoHoverClass: 'is--no-hover',
			targetFormElementSelector: '.rating-value'
		}
	};
	$(".rating-stars").ratingStars(ratingOptions);

	// ______________mCustomScrollbar
	$(".vscroll").mCustomScrollbar();
	$(".nav-sidebar").mCustomScrollbar({
		theme: "minimal",
		autoHideScrollbar: true,
		scrollbarPosition: "outside"
	});

	// ______________Active Class
	$(document).ready(function () {
		$(".horizontalMenu-list li a").each(function () {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
	});

	// ______________ Back to Top
	$(window).on("scroll", function (e) {
		if ($(this).scrollTop() > 0) {
			$('#back-to-top').fadeIn('slow');
		} else {
			$('#back-to-top').fadeOut('slow');
		}
	});
	$("#back-to-top").on("click", function (e) {
		$("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	});

	// ______________Quantity-right-plus
	var quantitiy = 0;
	$('.quantity-right-plus').on('click', function (e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		$('#quantity').val(quantity + 1);
	});
	$('.quantity-left-minus').on('click', function (e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		if (quantity > 0) {
			$('#quantity').val(quantity - 1);
		}
	});

	// ______________Chart-circle
	if ($('.chart-circle').length) {
		$('.chart-circle').each(function () {
			let $this = $(this);
			$this.circleProgress({
				fill: {
					color: $this.attr('data-color')
				},
				size: $this.height(),
				startAngle: -Math.PI / 4 * 2,
				emptyFill: '#f9faff',
				lineCap: ''
			});
		});
	}
	const DIV_CARD = 'div.card';
	// ______________Tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// ______________Popover
	$('[data-toggle="popover"]').popover({
		html: true
	});

	// ______________Card Remove
	$('[data-toggle="card-remove"]').on('click', function (e) {
		let $card = $(this).closest(DIV_CARD);
		$card.remove();
		e.preventDefault();
		return false;
	});

	// ______________Card Collapse
	$('[data-toggle="card-collapse"]').on('click', function (e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-collapsed');
		e.preventDefault();
		return false;
	});

	// ______________Card Full Screen
	$('[data-toggle="card-fullscreen"]').on('click', function (e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-fullscreen').removeClass('card-collapsed');
		e.preventDefault();
		return false;
	});
})(jQuery);


/* Sandesh: custome for Header start */
$(document).ready(function () {
	var base_url = window.location.origin;
	var responsive_header = ''
		+ '<div id="header2" class="col-xl-5 col-lg-5 col-sm-5 col-5">'
		+ '	<div class="top-bar-left d-flex">'
		+ '		<div class="clearfix text-center">'
		+ '			<div class="header-search-logo d-lg-block">'
		+ '				<!-- <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a> -->'
		+ '				<a class="header-logo" href="'+base_url+'">'
		+ '					<img src="'+base_url+'/assets/images/media/logos/usedCarAdda.com-Logo-2.png" class="header-brand-img" alt="used car adda logo ">'
		+ '				</a>'
		+ '			</div>'
		+ '		</div>'
		+ '	</div>'
		+ '</div>'
		+ '<div id="header3" class="col-xl-6 col-lg-6 col-sm-6 col-6">'
		+ '	<div class="top-bar-right">'
		+ '		<ul class="custom">'
		+ '			<li>'
		+ '				<a href="#location" data-toggle="modal" class="text-dark"><i class="fa fa-map-marker mr-1"></i> <span>Location</span></a>'
		+ '			</li>'
		+ '			<li>'
		+ '				<a href="#LgoinRegister" data-toggle="modal" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login/Register</span></a>'
		+ '			</li>'
		+ '		</ul>'
		+ '	</div>'
		+ '</div>'
		+ '<div id="header1" class="col-xl-1 col-lg-1 col-sm-1 col-1">'
		+ '		<div class="top-bar-left d-flex" >'
		+ '			<div class="clearfix text-center">'
		+ '				<div class="header-search-logo d-lg-block">'
		+ '					<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>'
		+ '				</div>'
		+ '			</div>'
		+ '	</div >'
		+ '</div >'
		+ '<div id="header4" class="col-xl-12 col-lg-12 col-sm-12 col-12 d-lg-block" style="top: 5px;">'
		+ '	<div class="top-bar-center header-inputs mb-lg-0">'
		+ '		<div class="input-group">'
		+ '			<input type="text" class="form-control br-tl-0 br-bl-0" placeholder="Search Cars & Brands">'
		+ '			<div class="input-group-append ">'
		+ '				<button type="button" class="btn btn-primary"><i class="fa fa-search text-white mr-1" aria-hidden="true"></i></button>'
		+ '			</div>'
		+ '		</div>'
		+ '	</div>'
		+ '</div>';

	if ($(window).width() <= 767) {
		$('div#horizontal-main-header').html('');
		$('div#horizontal-main-header').html(responsive_header);

		$()
	}
});
/* Sandesh: custome for Header end   */