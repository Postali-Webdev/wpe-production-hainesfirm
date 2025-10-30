/**
 * Home Page Scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";
	
	$(document).on('click', '.home #hp_help .container .columns .lists p', function() {
		if(!$(this).hasClass('active-list')){
			var index = $(this).attr('data-id');
			$('.home #hp_help .container .columns .lists p').removeClass('active-list');
			$(this).addClass('active-list');

			$('.home #hp_help .container .columns .help-item').removeClass('active_cont');
			$('.home #hp_help .container .columns .help-item[data-id=' + index + ']').addClass('active_cont');
		}

		$('.home #hp_help .container .columns .lists.active').removeClass('active');
	});

	$(document).on('click', '.home #hp_help .container .columns .mobile_menu p', function() {
		$('.home #hp_help .container .columns .lists').toggleClass('active');
	});

	$(document).on('click', function(event) {
		if (!$(event.target).closest('.home #hp_help .columns').length) {
			$('.home #hp_help .container .columns .lists').removeClass('active');
		}
	});


	// animated text function
    $(document).ready(function () {
        if ($('.animated-text').length > 0) {
            const typedSpan = $('.visible-animated-text');
            let totype = [];

            $('.animated-text').each(function (index, value) {
                totype.push($(this).data('text'));
            });

            const typed = new Typed(".visible-animated-text", {
                strings: totype,
                typeSpeed: 75,
                backSpeed: 75,
                backDelay: 2000,
                loop: true
            });
        }
    });

	// var words = [$('.home #hp-banner .hp-container .heading span').text()];

	// var	part,
	// 	i = 0,
	// 	offset = 0,
	// 	len = words.length,
	// 	forwards = true,
	// 	skip_count = 0,
	// 	skip_delay = 30,
	// 	speed = 100;
	// var wordflick = function () {
	// 	setInterval(function () {
	// 		if (forwards) {
	// 			if (offset >= words[i].length) {
	// 				++skip_count;
	// 				if (skip_count == skip_delay) {
	// 					forwards = false;
	// 					skip_count = 0;
	// 				}
	// 			}
	// 		}
	// 		else {
	// 			if (offset == 0) {
	// 				forwards = true;
	// 				i++;
	// 				offset = 0;
	// 				if (i >= len) {
	// 					i = 0;
	// 				}
	// 			}
	// 		}
	// 		part = words[i].substr(0, offset);
	// 		if (skip_count == 0) {
	// 			if (forwards) {
	// 				offset++;
	// 			}
	// 			else {
	// 				offset--;
	// 			}
	// 		}
	// 		$('.home #hp-banner .hp-container .heading span').text(part);
	// 	},speed);
	// };
	// wordflick();

});