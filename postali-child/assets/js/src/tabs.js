/**
 * Tabs
 *
 * @package Postali Child
 * @author Postali LLC
 */


jQuery( function ( $ ) {
	"use strict";

	$('.tab-link').click(function() {
        var s = $(this).attr("data-tab");
        $(".process-tabs div").removeClass("current"); 
        $(".process-content").removeClass("current");
        $(this).addClass("current");
        $("#" + s).addClass("current");
    });
	
});