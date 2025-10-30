jQuery(function ($) {
    "use strict";

	$('.review_slider').slick({
		dots: false,
		infinite: true,
		arrows: true,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 5000,
  		speed: 500,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
			  breakpoint: 1200,
			  settings: {
				slidesToShow: 2
			  }
			},
			{
			  breakpoint: 767,
			  settings: {
				slidesToShow: 1
			  }
			}
		]
	});
});