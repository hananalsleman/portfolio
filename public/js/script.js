$(document).ready(function () {

	"use strict";

	// Remove Loader
	$('.loader').css('opacity', 0);
	setTimeout(function () { $('.loader').hide(); }, 600);

	// Nav Sticky
	$(window).scroll(function () {
		if ($(window).scrollTop() > 500) {
			$('.navbar').addClass('fixed-top');
		} else {
			$('.navbar').removeClass('fixed-top');
		}
	});
	
	// wow
	$(function () {
		new WOW().init();
		$(".rotate").textrotator();
	})

	//Scroll
	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {	
			//progress bar animate 
			$(".progress-bar").css('width',function() {
				return $(this).attr("aria-valuenow") + "%";
			});

			//value of progress bar animate
			/*
			$('.count').each(function () {
				$(this).prop('Counter', 0).animate({
						Counter: $(this).data('value')
					}, {
					duration: 2000,
					easing: 'swing',
					step: function () {                      
						$(this).text(Math.ceil(this.Counter));
					}
				});
			});
			*/
		}
	});
	
	if($(window).width() < 768 ){
		$('.navbar .nav-item').removeClass('contact');
	}
	else{
		$('.navbar .nav-item:nth(4)').addClass('contact text-white');
		$('.navbar .nav-item:nth(4) a').addClass('text-white');
	}
});
