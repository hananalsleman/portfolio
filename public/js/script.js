$(document).ready(function () {

	"use strict";

	// Remove Loader
	$('.loader').css('opacity', 0);
	setTimeout(function () { $('.loader').hide(); }, 600);

	// Nav Sticky
	$(window).scroll(function () {
		if ($(window).scrollTop() > 500) {
			$('#fullpage .navbar').addClass('fixed-top');
		} else {
			$('#fullpage .navbar').removeClass('fixed-top');
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

		}
	});
	
	//button contact according to screen width
	if($(window).width() < 991 ){
		$('.navbar .nav-item').removeClass('contact');
	}
	else{
		$('.navbar .nav-item:nth(4)').addClass('contact text-white');
		$('.navbar .nav-item:nth(4) a').addClass('text-white');
	}
});
