(function($) {

	'use strict';

	/**
	 	<=={Master JS}==>
	 	01 Header Sticky JS
		02 Mobile Menu JS
		03 Go Top JS
		04 Preloader JS
		05 WOW JS
		06 Testimonials Slide JS
		07 Blog Slide JS
		08 Counter JS
		09 Banner Slide JS
		10 Banner Slide Content JS
		11 Popup JS
		12 Password JS
		13 Curt BTN JS
	**/
	
	/**<<=== 01 Header Sticky JS ==>>**/
	$(window).on('scroll', function() {
		if ($(this).scrollTop() >150){  
			$('.navbar-section').addClass("is-sticky");
		}
		else{
			$('.navbar-section').removeClass("is-sticky");
		};
	});

	/**<<=== 02 Mobile Menu JS ==>>**/
	$('.for-mobile-menu').meanmenu({
		meanScreenWidth: "991",
	});

	/**<<=== 03 Go Top JS ==>>**/
	$('.back-to-top').on('click', function() {
		$("html, body").animate({ scrollTop: "0" }, 50);
	});
	$(window).on('scroll', function() {
		var scrolled = $(window).scrollTop();
		if (scrolled > 300) $('.back-to-top').addClass('active');
		if (scrolled < 300) $('.back-to-top').removeClass('active');
	});

	/**<<=== 04 Preloader JS ==>>**/
	$(window).on('load', function() {
		$('.preloader').addClass('preloader-deactivate');
	}) 

	/**<<=== 05 WOW JS ==>>**/
	if($('.wow').length){
		var wow = new WOW({
			mobile: false
		});
		wow.init();
	}

	/**<<=== 06 Testimonials Slide JS ==>>**/
	$('.testimonials-slide').owlCarousel({
		items: 1,
		loop: true,
		margin: 30,
		nav: false,
		dots: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		center: true,
		responsive: {
			0: {
				items: 1,
			},
			576: {
				items: 1,
			},
			768: {
				items: 2,
			},
			992: {
				items: 3,
			},
			1200: {
				items: 3,
			},
			1500: {
				items: 3,
			},
		},
	});
	
	/**<<=== 07 Blog Slide JS ==>>**/
	$('.blog-slide').owlCarousel({
		items: 1,
		loop: true,
		margin: 30,
		nav: false,
		dots: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		center: true,
		responsive: {
			0: {
				items: 1,
			},
			576: {
				items: 1,
			},
			768: {
				items: 2,
			},
			992: {
				items: 3,
			},
			1200: {
				items: 3,
			},
			1500: {
				items: 3,
			},
		},
	});
	
	/**<<=== 08 Counter JS ==>>**/
    $('.counter').counterUp({
        time: 1000
    });
	
	/**<<=== 09 Banner Slide JS ==>>**/
	$('.banner-slider').owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		nav: false,
		dots: false,
		autoHeight: true,
		autoplay: true,
		smartSpeed: 1500,
		mouseDrag: false,
		autoplayHoverPause: false,
		animateOut: "slideOutDown",
		animateIn: "slideInDown",
	});

	/**<<=== 10 Banner Slide Content JS ==>>**/
	$('.banner-slider-content').owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		nav: false,
		dots: false,
		autoHeight: true,
		autoplay: true,
		smartSpeed: 1500,
		mouseDrag: false,
		autoplayHoverPause: false,
		animateOut: "slideOutUp",
		animateIn: "slideInUp",
	});

	/**<<=== 11 Popup JS ==>>**/
	$('.popup-youtube, .popup-vimeo').magnificPopup({
		disableOn: 300,
		type: 'iframe',
		mainClass: 'mfp-fade',
		fixedContentPos: false,
		removalDelay: 160,
		preloader: false,
	});

	/**<<=== 12 Password JS ==>>**/
	$(".toggle-password").click(function() {

		$(this).toggleClass("fa-eye icofont-eye-blocked");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		} else {
		  	input.attr("type", "password");
		}
	});


	/**<<=== 13 Curt BTN JS ==>>**/
	$(".minus").click(function () {
		var $input = $(this).parent().find(".box");
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});
	$(".plus").click(function () {
		var $input = $(this).parent().find(".box");
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});

	/**<<=== 14 Curt BTN JS ==>>**/
	$('.hero-slider-wrap').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		mouseDrag: true,
		items:1,
		dots: false,
		autoHeight: true,
		autoplay: true,
		smartSpeed:800,
		autoplayHoverPause: true,
		navText: [
			"<i class='icofont-rounded-left'></i>",
			"<i class='icofont-rounded-right'></i>",
		],
	});

})(jQuery);
