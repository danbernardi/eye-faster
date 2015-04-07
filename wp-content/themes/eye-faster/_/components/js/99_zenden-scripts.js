/*jslint browser: true*/
/*global $, jQuery, alert, console, Modernizr, Waypoint, ajaxpagination*/

$(document).ready(function () {
	"use strict";
	
	// apply active class to anchors that match current page
	(function addActive() {
		$('a[href^="' + location.pathname.split("/")[2] + '"]').parent('li').addClass('current-menu-item');
	}());
	
	// disables scroll when hovering interior element with overflow scroll
	/*(function disableScroll() {
		$('.past').hover(function () {
			$('body').css('overflow', 'hidden');
		}, function () {
			$('body').css('overflow', 'auto');
		});
	}());*/
	
	
	// init hero slider
	(function initHeroSlider() {
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
	// init testimonial slider
	(function initTestimonialSlider() {
		$('.testimonials .slick').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 8000,
			arrows: false,
			pauseOnHover: true,
			draggable: false,
			dots: true
		});
	}());
	
	// lightbox
	(function initLightbox() {
		// establish lightbox btn
		var lb = $('.lb a, .lb-btn');
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
		var subnavBtn = $('.subnav li a, .scrollbtn');
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
		$('.contactscroll').on('click', function (e) {
			if ($('.flag').hasClass('home')) {
				e.preventDefault();
				$('#connect').velocity('scroll', 1000);
			}
		});
	}());
  
  (function initAjaxLoad() {
    $('.leader').on('click', function (e) {
      e.preventDefault();
      
      var url = $(this).find('a').attr('href');
      
      $('.lightbox').load(url + ' .leader', function () {
        $('#team-member').addClass('open');
			  $('#overlay').fadeIn(100);
        $('#overlay, .close').on('click', function () {
          $('#team-member').removeClass('open');
          $('#overlay').fadeOut(500);
        });
      });
      
    });
  }());
  
  
	
});
