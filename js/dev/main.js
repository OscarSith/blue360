
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$(function() {
	$('#preloader').remove();
	//Meters
	$('#meters').bind('inview', function(e, visible) {
		if (visible) {
			Circles.create(optionsCircle('circle-1', 75));
			Circles.create(optionsCircle('circle-2', 80));
			Circles.create(optionsCircle('circle-3', 90));
			Circles.create(optionsCircle('circle-4', 45));
			Circles.create(optionsCircle('circle-5', 70));
			$(this).unbind('inview');
		}
	});
});

// Inicializa el popover
$('[data-toggle="popover"]').popover();

//#main-slider
var slideHeight = $(window).height(),
	$bg = $('#home-slider .item, #about-us .item');

$bg.css('height',slideHeight);
$(window).resize(function(){
	'use strict';
	$bg.css('height',slideHeight);
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

$('.navbar-collapse ul li a, .navbar-brand, .footer-logo a').on('click', function() {
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
	});
	$.each( contentTop, function(i){
		if ( winTop > contentTop[i] - rangeTop ){
			$('.navbar-collapse li.scroll')
			.removeClass('active')
			.eq(i).addClass('active');
		}
	});
}

$('#tohash').on('click', function(){
	$('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
	return false;
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
	var content = $(this).attr('href'),
	target_top = $("#portfolio-single-wrap").offset().top;

	$(".custom-portfolio").slideUp(100);
	$('html, body').animate({scrollTop:target_top}, 600);
	$(content).slideUp(500, function(){
		$(this).fadeIn(500);
	});
});

// Close Portfolio Single View
$('#portfolio-single-wrap').on('click', '.close-folio-item',function(event) {
	event.preventDefault();
	var content = $(this).attr('href'),
		target_offset = $("#portfolio").offset();
	$('html, body').animate({scrollTop: target_offset.top}, 600);
	$(".custom-portfolio").slideUp(500);
});

// Contact form
var form = $('#main-contact-form');
form.on('submit', function(e){
	e.preventDefault();
	var data = $(this).serialize();
	var form_status = $('<div class="form_status"></div>');
	$.ajax({
		url: $(this).attr('action'),
		type: "POST",
		dataType: 'json',
		data: data,
		beforeSend: function(){
			form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Enviando correo...</p>').fadeIn() );
		}
	}).done(function(data){
		// form_status.html('<p class="text-success">Thank you for contact us. As early as possible we will contact you</p>').delay(3000).fadeOut();
		form_status.html('<p class="text-success">Gracias por contactar con nosotros. Lo antes posible nos pondremos en contacto contigo.</p>').delay(3000).fadeOut();
		form.trigger('reset');
	});
});

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
	var radius = 18;
	if ($('body').width() < 768) {
		radius = 9;
	}
	return {
		id:           id,
		radius:       window.innerWidth / radius,
		value:        val,
		maxValue:     100,
		width:        14,
		text:         function(value){return value + '%';},
		colors:       ['#fff', '#BD1D4F'],
		duration:       2400,
		wrpClass:     'circles-wrp',
		textClass:      'circles-text',
		styleWrapper: true,
		styleText:    true
	};
}
var $map = $('#google-map');
var latitude = $map.data('latitude');
var longitude = $map.data('longitude');
function initialize_map() {
    var myLatlng = new google.maps.LatLng(latitude,longitude);
    var mapOptions = {
        zoom: 16,
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
//smoothScroll
smoothScroll.init();
//Initiat WOW JS
new WOW().init();

var $contentsTweets = $('#twitter-carousel');
$contentsTweets.find('.carousel-inner').html('<i class="fa fa-spin fa-gear fa-2x"></i>');
$.getJSON('get-timelimes', function(rec) {
	var html = '',
		indicators = '',
		i = 0,
		size = rec.length,
		active = '';

	for (i; i < size; i++) {
		active = (i === 0 ? 'active' : '');

		indicators += '<li data-target="#twitter-carousel" data-slide-to="'+i+'" class="'+active+'"></li> ';
		html += '<div class="item '+active+'"><p>'+rec[i].text+'</p></div>';
	}
	$contentsTweets.find('.carousel-indicators').html(indicators);
	$contentsTweets.find('.carousel-inner').html(html);
});

$('.modal').on('show.bs.modal', function() {
	var $contentEmbed = $(this).find('div.embed-responsive-16by9');
	if ($contentEmbed.length) {
		$contentEmbed.append($('<iframe src="' + $contentEmbed.data('yt') + '" width="560" height="315" frameborder="0" allowfullscreen>'));
	}
});
$('.modal').on('hide.bs.modal', function() {
	var $contentEmbed = $(this).find('div.embed-responsive-16by9');
	if ($contentEmbed.length) {
		$contentEmbed.empty();
	}
});