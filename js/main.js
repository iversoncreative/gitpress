jQuery(document).ready(function ($) {
	$(function() { // Appropriate classes on default menu
		$( "div.nav ul" ).addClass( "nav navbar-nav navbar-right" );
		$( "div.nav" ).removeClass( "nav navbar-nav navbar-right" );
	});
	$(function() { // Dropdown menu on hover
	    $('#nav-main li').hover(function() {
	        $(this).addClass('open');
	    }, function() {
	        $(this).removeClass('open');
	    });
	});
});