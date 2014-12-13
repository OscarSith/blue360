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
		'stellar': 'bower_components/stellar.js/jquery.stellar'
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
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    $.stellar({
    	positionProperty: 'position'
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

	var $windows = $(window);
	showImagesByResolution($windows.width());

	$windows.resize(function() {
		showImagesByResolution($(this).width());
	});
	$('header img').slideShow({
        timeOut: 3500,
        showNavigation: true,
        pauseOnHover: false,
        swipeNavigation: false
    });

    function showImagesByResolution (width) {
    	if (width > 768 && width <= 991) {
			$('#skippr').addClass('hidden');
			$('#skippr_t').removeClass('hidden').children().css({width:'1440px', height:'720px'});
			$('#skippr_m').addClass('hidden');
		} else if(width <= 768) {
			$('#skippr').addClass('hidden');
			$('#skippr_t').addClass('hidden');
			$('#skippr_m').removeClass('hidden').children().css({width:'1440px', height:'720px'});
		} else {
			$('#skippr').removeClass('hidden').children().css({width:'1440px', height:'720px'});
			$('#skippr_t').addClass('hidden');
			$('#skippr_m').addClass('hidden');
		}
    }
});