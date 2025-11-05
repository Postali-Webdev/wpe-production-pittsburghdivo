/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

    // set all needed classes when we start
    $('.sub-menu').addClass('closed');

    //Hamburger animation
    $('.toggle-nav').click(function() {
        $(this).toggleClass('active');
        $('#menu-main-menu').toggleClass('opened');
        $('#menu-main-menu').toggleClass('active'); 
        $('.sub-menu').removeClass('opened');
        $('.sub-menu').addClass('closed');
        return false;
    });
        
    //Close navigation on anchor tap
    $('.active').click(function() {	
        $('#menu-main-menu').addClass('closed');
        $('#menu-main-menu').toggleClass('opened');
        $('#menu-main-menu .sub-menu').removeClass('opened');
        $('#menu-main-menu .sub-menu').addClass('closed');
    });	

    //Mobile menu accordion toggle for sub pages
    $('#menu-main-menu > li.menu-item-has-children').prepend('<div class="accordion-toggle"><span class="icon-arrow-right"></span></div>');
    $('#menu-main-menu > li.menu-item-has-children > .sub-menu').prepend('<div class="child-close"><span class="icon-arrow-left"></span> back</div>');

    //Mobile menu accordion toggle for third-level pages
    $('#menu-main-menu > li.menu-item-has-children > .sub-menu > li.menu-item-has-children').prepend('<div class="accordion-toggle2"><span class="icon-arrow-right"></span></div>');
    $('#menu-main-menu > li.menu-item-has-children > .sub-menu > li.menu-item-has-children > .sub-menu').prepend('<div class="tertiary-close">&nbsp;</div>');

    $('#menu-main-menu .accordion-toggle').click(function(event) {
        event.preventDefault();
        $(this).siblings('.sub-menu').addClass('opened');
        $(this).siblings('.sub-menu').removeClass('closed');
        console.log('clicked');
    });

    $('#menu-main-menu .accordion-toggle2').click(function(event) {
        event.preventDefault();
        $(this).siblings('.sub-menu').addClass('opened');
        $(this).siblings('.sub-menu').removeClass('closed');
        console.log('clicked');
    });

    $('.child-close').click(function() {
        $(this).parent().toggleClass('opened');
        $(this).parent().toggleClass('closed');
    });

    $('.tertiary-close').click(function() {
        $(this).parent().toggleClass('opened');
        $(this).parent().toggleClass('closed');
    });

    // desktop child click close parent subnav
    $('#menu-main-menu > li.menu-item-has-children > .sub-menu > li > a').click(function(event) {
        $(this).closest('.sub-menu').css('display', 'none');
    });

    // script to make accordions function
	$(".accordions").on("click", ".accordions_title", function() {
        // will (slide) toggle the related panel.
        $(this).toggleClass("active").next().slideToggle();
    });

	// keeps menu expanded so user can tab through sub-menu, then closes menu after user tabs away from last child
	// $(document).ready(function() {
	// 	$('.menu-item-has-children').on('focusin', function() {
	// 		var subMenu = $(this).find('.sub-menu');
	// 		subMenu.css('display', 'block');

	// 		$(this).find('.sub-menu > li:last-child').on('focusout', function() {
	// 			console.log('blur!');
	// 			subMenu.css('display', 'none');
	// 		})
	// 	})
	// });

});