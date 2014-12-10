require.config({
	baseUrl: '/blue360/website/',
	paths: {
		'jquery': 'bower_components/jquery/dist/jquery',
		'classie': 'js/lib/classie',
		'bootstrapValidation': 'js/lib/jqBootstrapValidation',
		'bootstrap': 'js/lib/bootstrap.min',
		'BlackAndWhite': 'bower_components/jquery.BlackAndWhite/src/jquery.BlackAndWhite',
		'BnWWorker': 'bower_components/jquery.BlackAndWhite/src/BnWWorker',
		'slider': 'js/lib/plugin',
		'stellar': 'js/lib/jquery.stellar.min'
	}
});

require([
	'BnWWorker',
	'jquery',
	'js/lib/jquery.easing',
	'BlackAndWhite',
	'js/dev/contact_me',
	'js/dev/cbpAnimatedHeader',
	'bootstrap',
	'slider',
	'stellar'
], function(BnWWorker){
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

	    $('#skippr img').slideShow({
            timeOut: 3500,
            showNavigation: true,
            pauseOnHover: false,
            swipeNavigation: false
        });

        $(window).stellar();
	});

	// Highlight the top nav as scrolling occurs
	$('body').scrollspy({
	    target: '.navbar-fixed-top'
	});

	// Closes the Responsive Menu on Menu Item Click
	$('.navbar-collapse ul li a').click(function() {
	    $('.navbar-toggle:visible').click();
	});

	$('.boxgrid.captionfull').hover(function(){
		$(".cover", this).stop().animate({top:'182px'},{queue:false,duration:160});
	}, function() {
		$(".cover", this).stop().animate({top:'240px'},{queue:false,duration:160});
	});

	$('.boxgrid').BlackAndWhite({
		hoverEffect:true,
		webworkerPath: BnWWorker,
		speed: 500
	});
});