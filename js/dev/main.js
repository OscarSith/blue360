// require.config({
// 	baseUrl: '/blue360/website/',
// 	paths: {
// 		'jquery': 'bower_components/jquery/dist/jquery',
// 		'classie': 'js/lib/classie',
// 		'bootstrapValidation': 'js/lib/jqBootstrapValidation',
// 		'bootstrap': 'js/lib/bootstrap.min',
// 		'BlackAndWhite': 'bower_components/jquery.BlackAndWhite/src/jquery.BlackAndWhite',
// 		'BnWWorker': 'bower_components/jquery.BlackAndWhite/src/BnWWorker',
// 		'slider': 'js/lib/plugin',
// 		'stellar': 'bower_components/stellar.js/jquery.stellar'
// 	}
// });

// require([
// 	'BnWWorker',
// 	'jquery',
// 	'js/lib/jquery.easing',
// 	'BlackAndWhite',
// 	'js/dev/contact_me',
// 	'js/dev/cbpAnimatedHeader',
// 	'bootstrap',
// 	'slider',
// 	'stellar'
// ], function(BnWWorker){
// 	/*!
// 	 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
// 	 * Code licensed under the Apache License v2.0.
// 	 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
// 	 */

// 	// jQuery for page scrolling feature - requires jQuery Easing plugin
//     $('a.page-scroll').bind('click', function(event) {
//         var $anchor = $(this);
//         $('html, body').stop().animate({
//             scrollTop: $($anchor.attr('href')).offset().top
//         }, 1500, 'easeInOutExpo');
//         event.preventDefault();
//     });

//     $.stellar({
//     	positionProperty: 'position'
//     });

// 	// Highlight the top nav as scrolling occurs
// 	$('body').scrollspy({
// 	    target: '.navbar-fixed-top'
// 	});

// 	// Closes the Responsive Menu on Menu Item Click
// 	$('.navbar-collapse ul li a').click(function() {
// 	    $('.navbar-toggle:visible').click();
// 	});

// 	$('.boxgrid.captionfull').hover(function(){
// 		$(".cover", this).stop().animate({top:'182px'},{queue:false,duration:160});
// 	}, function() {
// 		$(".cover", this).stop().animate({top:'240px'},{queue:false,duration:160});
// 	});

// 	$('.boxgrid').BlackAndWhite({
// 		hoverEffect:true,
// 		webworkerPath: BnWWorker,
// 		speed: 500
// 	});

// 	var $windows = $(window);
// 	showImagesByResolution($windows.width());

// 	$windows.resize(function() {
// 		showImagesByResolution($(this).width());
// 	});
// 	$('header img').slideShow({
//         timeOut: 3500,
//         showNavigation: true,
//         pauseOnHover: false,
//         swipeNavigation: false
//     });

//     function showImagesByResolution (width) {
//     	if (width > 768 && width <= 991) {
// 			$('#skippr').addClass('hidden');
// 			$('#skippr_t').removeClass('hidden').children().css({width:'1440px', height:'720px'});
// 			$('#skippr_m').addClass('hidden');
// 		} else if(width <= 768) {
// 			$('#skippr').addClass('hidden');
// 			$('#skippr_t').addClass('hidden');
// 			$('#skippr_m').removeClass('hidden').children().css({width:'1440px', height:'720px'});
// 		} else {
// 			$('#skippr').removeClass('hidden').children().css({width:'1440px', height:'720px'});
// 			$('#skippr_t').addClass('hidden');
// 			$('#skippr_m').addClass('hidden');
// 		}
//     }
// });
jQuery(function($) {

	//Preloader
	var preloader = $('.preloader');
	$(window).load(function(){
		preloader.remove();
	});

	//#main-slider
	var slideHeight = $(window).height();
	$('#home-slider .item').css('height',slideHeight);

	$(window).resize(function(){'use strict',
		$('#home-slider .item').css('height',slideHeight);
	});
	
	//Scroll Menu
	$(window).on('scroll', function(){
		if( $(window).scrollTop()>slideHeight ){
			$('.navbar-default').addClass('navbar-fixed-top');
		} else {
			$('.navbar-default').removeClass('navbar-fixed-top');
		}
	});
	
	// Navigation Scroll
	$(window).scroll(function(event) {
		Scroll();
	});

	$('.navbar-collapse ul li a').on('click', function() {  
		$('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
		return false;
	});

	// User define function
	function Scroll() {
		var contentTop      =   [];
		var contentBottom   =   [];
		var winTop      =   $(window).scrollTop();
		var rangeTop    =   200;
		var rangeBottom =   500;
		$('.navbar-collapse').find('.scroll a').each(function(){
			contentTop.push( $( $(this).attr('href') ).offset().top);
			contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
		})
		$.each( contentTop, function(i){
			if ( winTop > contentTop[i] - rangeTop ){
				$('.navbar-collapse li.scroll')
				.removeClass('active')
				.eq(i).addClass('active');			
			}
		})
	};

	$('#tohash').on('click', function(){
		$('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
		return false;
	});
	
	//Initiat WOW JS
	new WOW().init();
	//smoothScroll
	smoothScroll.init();
	
	// Progress Bar
	$('#about-us').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
		if (visible) {
			$.each($('div.progress-bar'),function(){
				$(this).css('width', $(this).attr('aria-valuetransitiongoal')+'%');
			});
			$(this).unbind('inview');
		}
	});

	//Countdown
	$('#features').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
		if (visible) {
			$(this).find('.timer').each(function () {
				var $this = $(this);
				$({ Counter: 0 }).animate({ Counter: $this.text() }, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.text(Math.ceil(this.Counter));
					}
				});
			});
			$(this).unbind('inview');
		}
	});

	// Portfolio Single View
	$('#portfolio').on('click','.folio-read-more',function(event){
		event.preventDefault();
		var link = $(this).data('single_url');
		var full_url = '#portfolio-single-wrap',
		parts = full_url.split("#"),
		trgt = parts[1],
		target_top = $("#"+trgt).offset().top;

		$('html, body').animate({scrollTop:target_top}, 600);
		$('#portfolio-single').slideUp(500, function(){
			$(this).load(link,function(){
				$(this).slideDown(500);
			});
		});
	});

	// Close Portfolio Single View
	$('#portfolio-single-wrap').on('click', '.close-folio-item',function(event) {
		event.preventDefault();
		var full_url = '#portfolio',
		parts = full_url.split("#"),
		trgt = parts[1],
		target_offset = $("#"+trgt).offset(),
		target_top = target_offset.top;
		$('html, body').animate({scrollTop:target_top}, 600);
		$("#portfolio-single").slideUp(500);
	});

	// Contact form
	var form = $('#main-contact-form');
	form.submit(function(e){
		e.preventDefault();
		var data = $(this).serialize();
		var form_status = $('<div class="form_status"></div>');
		$.ajax({
			url: $(this).attr('action'),
			type: "POST",
			dataType: 'json',
			data: data, 
			beforeSend: function(){
				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
			}
		}).done(function(data){
			form_status.html('<p class="text-success">Thank you for contact us. As early as possible  we will contact you</p>').delay(3000).fadeOut();
		});
	});

	//Google Map
	var latitude = $('#google-map').data('latitude')
	var longitude = $('#google-map').data('longitude')
	function initialize_map() {
		var myLatlng = new google.maps.LatLng(latitude,longitude);
		var mapOptions = {
			zoom: 14,
			scrollwheel: false,
			center: myLatlng
		};
		var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
		var contentString = '';
		var infowindow = new google.maps.InfoWindow({
			content: '<div class="map-content"><ul class="address">' + $('.address').html() + '</ul></div>'
		});
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map
		});
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize_map);

	//Presets
	var presets = $('.style-chooser ul li');

	$('.style-chooser .toggler').on('click', function(event){
		event.preventDefault();
		$(this).closest('.style-chooser').toggleClass('opened');
	});

	$('.style-chooser ul li a').on('click', function(event){
		event.preventDefault();
		presets.removeClass('active');
		$(this).parent().addClass('active');
		$('#css-preset').removeAttr('href').attr('href', 'css/presets/preset' + $(this).parent().data('preset') + '.css');
	})

	$('.boxgrid.captionfull').hover(function(){
		$(".cover", this).stop().animate({top:'144px'},{queue:false,duration:160});
	}, function() {
		$(".cover", this).stop().animate({top:'240px'},{queue:false,duration:160});
	});

	$('.boxgrid').BlackAndWhite({
		hoverEffect:true,
		webworkerPath: false,
		intensity: 1,
		speed: {
			fadeIn: 100,
			fadeOut: 600
		}
	});

	function optionsCircle (id, val) {
		return {
			id:           id,
			radius:       window.innerWidth / 18,
			value:        val,
			maxValue:     100,
			width:        14,
			text:         function(value){return value + '%';},
			colors:       ['#fff', '#BD1D4F'],
			duration:       400,
			wrpClass:     'circles-wrp',
			textClass:      'circles-text',
			styleWrapper: true,
			styleText:    true
		};
	}
	Circles.create(optionsCircle('circle-1', 50));
	Circles.create(optionsCircle('circle-2', 70));
	Circles.create(optionsCircle('circle-3', 85));
	Circles.create(optionsCircle('circle-4', 30));
	Circles.create(optionsCircle('circle-5', 60));
});