require.config({
	baseUrl: '/blue360/website/',
	paths: {
		'jquery': 'bower_components/jquery/dist/jquery',
		'classie': 'js/lib/classie',
		'bootstrapValidation': 'js/lib/jqBootstrapValidation',
		'bootstrap': 'js/lib/bootstrap.min'
	}
});

require([
	'jquery',
	'bower_components/jquery.easing/js/jquery.easing',
	'js/contact_me',
	'js/cbpAnimatedHeader',
	'bootstrap'
], function(){
	/*!
	 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
	 * Code licensed under the Apache License v2.0.
	 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
	 */

	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
	    $('a.page-scroll').bind('click', function(event) {
	        var $anchor = $(this);
	        $('html, body').stop().animate({
	            scrollTop: $($anchor.attr('href')).offset().top
	        }, 1500, 'easeInOutExpo');
	        event.preventDefault();
	    });
	});

	// Highlight the top nav as scrolling occurs
	$('body').scrollspy({
	    target: '.navbar-fixed-top'
	});

	// Closes the Responsive Menu on Menu Item Click
	$('.navbar-collapse ul li a').click(function() {
	    $('.navbar-toggle:visible').click();
	});
});