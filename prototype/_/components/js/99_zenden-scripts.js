/*jslint browser: true*/
/*global $, jQuery, alert, console, Modernizr, Waypoint*/

$(document).ready(function () {
	"use strict";
	
	// apply active class to anchors that match current page
	(function addActive() {
		$('a[href^="' + location.pathname.split("/")[2] + '"]').parent('li').addClass('current-menu-item');
	}());
	
	// disables scroll when hovering interior element with overflow scroll
	(function disableScroll() {
		$('.past').hover(function () {
			$('body').css('overflow', 'hidden');
		}, function () {
			$('body').css('overflow', 'auto');
		});
	}());
	
	
	// slick slider
	(function initSlickSlider() {
		$('.clients .slick').slick({
			infinite: true,
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			arrows: false,
			pauseOnHover: false,
			draggable: false
		});
	}());
	
	// lightbox
	(function initLightbox() {
		// establish lightbox btn
		var lb = $('.lb a');
		// on click, open lightbox with matching data-target and id
		lb.on('click', function (e) {
			e.preventDefault();
			// prevent page from scrolling
			var target = $(this).attr('data-target');
			$('#' + target).addClass('open');
			$('#overlay').fadeIn(100);
			// click overlay or close button to close lightbox
			$('#overlay, .close').on('click', function () {
				$('#' + target).removeClass('open');
				$('#overlay').fadeOut(500);
			});
		});
	}());
	
	// subnav scroll to fixed
	(function initScrolltofixed() {
		$('.subnav').scrollToFixed();
	}());
	
	// subnav waypoints
	(function initScrollingSubnav() {
		var subnavBtn = $('.subnav li a');
		subnavBtn.on('click', function (e) {
			e.preventDefault();
			// add/remove active class from btn
			subnavBtn.removeClass('active');
			$(this).addClass('active');
			// retrieve href value to match anchor id
			var getHref = $(this).attr('href').split("#"),
				href = getHref[getHref.length - 1];
			$("#" + href).velocity('scroll', 1000);
		});
	}());
	
});
