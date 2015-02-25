( function( $ ) {
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	$(document).ready(function() {
		$(function() {
			menu_margin();
		});
	});

	$(window).bind('resize', function()
    {
		menu_margin();
    }).trigger('resize');

	function menu_margin() {
		var windowHeight = $(window).height();
		emptySpace = windowHeight - $(".sidebar-logo").outerHeight(true) - $(".nav-menu").height() - $(".expirience").outerHeight(true) - $(".work-hours").outerHeight(true) - $(".fb-share").outerHeight(true);
		$(".nav-menu").css("margin-top",emptySpace/2);
	}
} )( jQuery );
