/*
	Project Name : Hotely

	## UDF Function 
		-- Recommended
		-- Room Section
		-- Google-map
	
	## Document Scroll - Window Scroll
	
	## Document Ready
		-- Scrolling Navigation
		-- Responsive Caret
		-- Remove p empty tag for Shortcode
		-- Slider Section
		-- Booking Section
		-- Offer Section
		-- Direction Section
		-- Testimonial Section
		-- Price Section
		-- Recommended Section
		-- Welcome Section
		-- Booking Section 2
		-- Services Section
		-- Accmmodation Section
		-- Portfolio Section
		-- Room Section
		-- Video Section
		-- Accommodation Section
		-- Statistics Section
		-- Portfolio Section
		-- Gallery Section
		-- Map Initialization
		-- Quick Contact Form

	## Window Load
		- Site Loader
*/

(function($)
{
	"use strict" 
	
	/* -- Recommended */
	function recommended() {
		var width =	$(window).width();
		var recommended_img = $(".hotel-img-box").height();
		var recommended_content = $(".hotel-detail-box").height();
		var recommended_content_padding = (recommended_img - recommended_content)/2;
		if( recommended_content_padding > 0 ){
			if( width >= 480 ) {
				$(".hotel-detail-box").css({"padding-top": recommended_content_padding, "padding-bottom": recommended_content_padding});		
			} else {
				$(".hotel-detail-box").removeAttr("style");
			}
		} else {
			if( width >= 480 ) {
				$(".hotel-detail-box").css({"padding-top": "15px", "padding-bottom": "15px"});		
			} else {
				$(".hotel-detail-box").removeAttr("style");
			}
		}
	}
	/* -- Room Section */
	function room_carousel() {
		var width =	$(window).width();
		var room_img = $(".room-img").height();
		var room_content = $(".room-detail").height();
		var room_content_padding = (room_img - room_content)/2;
		if( room_content_padding > 0 ){
			if( width >= 992 ) {
				$(".room-detail").css({"padding-top": room_content_padding, "padding-bottom": room_content_padding});		
			} else {
				$(".room-detail").removeAttr("style");
			}
		} else {
			if( width >= 992 ) {
				$(".room-detail").css({"padding-top": "15px", "padding-bottom": "15px"});		
			} else {
				$(".room-detail").removeAttr("style");
			}
		}
	}
	function room_carousel_item() {
		var width =	$(window).width();
		var room_item_img_width = $(".room-img").width();
		var room_item_img_height = $(".room-img").height();
		
		var room_item_left = room_item_img_width + 60;
		var room_img = $(".room-img").height();
		
		var room_content = $(".room-detail").height();
		var room_content_padding = (room_img - room_content)/2;
		
		if( room_item_left > 0 ){
			if( room_content_padding > 0 ){
				if( width >= 992 ) {
					$(".carousel-contorls").css({"left":room_item_left,"top":room_content_padding});
				} else if( width <= 991 ) {
					$(".carousel-contorls").css({"left":"40px","top":room_item_img_height + 40});
				} else {
					$(".room-detail").removeAttr("style");
				}
			} else {
				if( width >= 992 ) {
					$(".carousel-contorls").css({"left":room_item_left,"top":"15px"});
				} else if( width <= 991 ) {
					$(".carousel-contorls").css({"left":"10px","top":room_item_img_height + 40});
				} else {
					$(".room-detail").removeAttr("style");
				}
			}
		}
	}
	
	/* -- Google-map */
	function initialize(obj) {

		var lat = $('#'+obj).attr("data-lat");
        var lng = $('#'+obj).attr("data-lng");
		var contentString = $('#'+obj).attr("data-string");
		var myLatlng = new google.maps.LatLng(lat,lng);
		var map, marker, infowindow;
		var image = 'images/marker.png';
		var zoomLevel = parseInt($('#'+obj).attr("data-zoom"),10);
		var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
		var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});	
		var mapOptions = {
			zoom: zoomLevel,
			disableDefaultUI: true,
			center: myLatlng,
            scrollwheel: false,
			mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
			}
		}
		
		map = new google.maps.Map(document.getElementById(obj), mapOptions);

		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');
	
		infowindow = new google.maps.InfoWindow({
			content: contentString
		});      
	    
        marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			icon: image
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});	
	}
	
	/* ## Document Scroll - Window Scroll */
	$( document ).scroll(function()
	{
		var scroll	= $(window).scrollTop();
		var height	=	$(window).height();

		/*** set sticky menu ***/
		if( scroll >= height )
		{
			$(".header-section").addClass("navbar-fixed-top animated fadeInDown").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$(".header-section").removeClass("navbar-fixed-top animated fadeInDown");
		}
		else
		{
			$(".header-section").removeClass("navbar-fixed-top animated fadeInDown");
		} /* set sticky menu - end */

		if ($(this).scrollTop() >= 50)
		{
			/* If page is scrolled more than 50px */
			$('#back-to-top').fadeIn(200);    /* Fade in the arrow */
		}
		else
		{
			$('#back-to-top').fadeOut(200);   /* Else fade out the arrow */
		}
	});

	$('#back-to-top').on("click", function()
	{
		/* When arrow is clicked */
		$('body,html').animate(
		{
			scrollTop : 0 /* Scroll to top of body */
		},800);
	});		
		
	
	/* ## Document Ready - Handler for .ready() called */
	$(document).ready(function($) {

		/* -- Scrolling Navigation */
		var scroll	=	$(window).scrollTop();
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* ** set sticky menu ** */
		if( scroll >= height -500 )
		{
			$(".header-section").addClass("navbar-fixed-top").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$(".header-section").removeClass("navbar-fixed-top");
		}
		else
		{
			$(".header-section").removeClass("navbar-fixed-top");
		} /* set sticky menu - end */
		
		/* local url of page (minus any hash, but including any potential query string) */
		var url = location.href.replace(/#.*/,'');
		
		/* Find all anchors */
		$("#navbar").find("a[href]").each(function(i,a) {
			var $a = $(a);
			var href = $a.attr("href");
			/* check is anchor href starts with page's URI */
			if ( href.indexOf(url+"#") == 0 ) {
				/* remove URI from href */
				href = href.replace(url,"");
				/* update anchors HREF with new one */
				$a.attr("href",href);
			}
		});

		/* Add Easing Effect on Section Scroll */
		$(".navbar-nav > li a[href*=#]:not([href=#]), .site-logo a[href*=#]:not([href=#])").on("click", function() {
			if ( location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname ) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$("html, body").animate( { scrollTop: target.offset().top - 89 }, 1000, 'easeInOutExpo' );
					return false;
				}
			}
		});

		/* -- Responsive Caret */
		$(".ddl-switch").on("click", function() {
			var li = $(this).parent();
			if ( li.hasClass("ddl-active") || li.find(".ddl-active").length !== 0 || li.find(".dropdown-menu").is(":visible") ) {
				li.removeClass("ddl-active");
				li.children().find(".ddl-active").removeClass("ddl-active");
				li.children(".dropdown-menu").slideUp();
			}
			else {
				li.addClass("ddl-active");
				li.children(".dropdown-menu").slideDown();
			}
		});
		
		/* -- Remove p empty tag for Shortcode */
		$( "p" ).each(function() {
			var $this = $( this );
				if( $this.html().replace(/\s|&nbsp;/g, '').length == 0) {
				$this.remove();
			}
		});		
		
		/* -- Slider Section */
		function doAnimations( elems ) {
			/* Cache the animationend event in a variable */
			var animEndEv = "webkitAnimationEnd animationend";

			elems.each(function () {
				var $this = $(this),
					$animationType = $this.data("animation");
					$this.addClass($animationType).one(animEndEv, function () {
					$this.removeClass($animationType);
				});
			});
		}

		/* Variables on page load */
		var $myCarousel = $("#photo-slider"),
		$firstAnimatingElems = $myCarousel.find(".item:first").find("[data-animation ^= 'animated']");

		/* Initialize carousel */
		$myCarousel.carousel();

		/* Animate captions in first slide on page load */
		doAnimations($firstAnimatingElems);

		/* Pause carousel */
		$myCarousel.carousel("pause");

		/* Other slides to be animated on carousel slide event */
		$myCarousel.on("slide.bs.carousel", function (e) {
			var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
			doAnimations($animatingElems);
		});
		
				
		/* -- Offer Section */
		setTimeout(function() {
			var $container = $(".offer-list");
			$container.isotope({
			  itemSelector: ".offer-box",
			  gutter: 0,
			  transitionDuration: "0.5s"
			});			
		}, 5000);
		
		
		/* -- Price Section */
		if($(".price-section").length){
			$(".price-section").each(function () {
				var $this = $(this);
				var myVal = $(this).data("value");
				$this.appear(function()
				{		
					$(".price-section .price-box").addClass("animated flipInY");
				});
			});
		}
		
		/* -- Recommended Section */
		recommended();
		if($(".recommended-section").length){
			$(".recommended-section").each(function () {
				var $this = $(this);
				var myVal = $(this).data("value");
				$this.appear(function()
				{		
					$(".recommended-section .hotel-img-box").addClass("animated rotateIn");
					$(".recommended-section .hotel-detail-box").addClass("animated flipInX");
				});
			});
		}
		
		
		/* -- Services Section */
		if($(".services-section").length){
			$(".services-section").each(function () {
				var $this = $(this);
				var myVal = $(this).data("value");
				$this.appear(function()
				{		
					$(".services-section .srv-left").addClass("animated fadeInLeft");
					$(".services-section .srv-img").addClass("animated zoomIn");
					$(".services-section .srv-right").addClass("animated fadeInRight");
				});
			});
		}
		
		/* -- Accmmodation Section */
		if($(".accmmodation-section").length){
			$(".accmmodation-section").each(function () {
				var $this = $(this);
				var myVal = $(this).data("value");
				$this.appear(function()
				{		
					$(".accmmodation-section .accmmodation-box").addClass("animated flipInY");
				});
			});
		}
		
		/* -- Portfolio Section */
		if($(".portfolio-section").length){
			$(".portfolio-section").each(function () {
				var $this = $(this);
				var myVal = $(this).data("value");
				$this.appear(function()
				{		
					$(".portfolio-section").addClass("animated zoomIn");
				});
			});
		}
		
		/* -- Room Section */
		room_carousel();
		if( $(".room-section").length ) {
			var totalItems = $("#room-carousel .item").length;
			var currentIndex = $("#room-carousel div.active").index() + 1;
			$(".num").html(""+ currentIndex +" / "+ totalItems +"");
			$("#room-carousel").carousel({
				interval: 2900
			});
			$("#room-carousel").bind("slide.bs.carousel", function() {
				currentIndex = $("#room-carousel div.active").index() + 1;
				$(".num").html(""+ currentIndex +" / "+ totalItems +"");
			});
		}
		room_carousel_item();
		
		/* -- Video Section */
		if( $(".video-section").length ) {
			$('.popup-youtube').magnificPopup({
				disableOn: 700,
				type: 'iframe',
				mainClass: 'mfp-fade',
				removalDelay: 160,
				preloader: false,
				fixedContentPos: false
			});
		}
		
		/* -- Accommodation Section */
		if( $(".accmmodation-carousel").length ) {
			$(".accmmodation-carousel").owlCarousel({
				loop: true,
				margin: 30,
				nav: false,
				dots: true,
				autoplay: true,
				responsive:{
					0:{
						items: 1
					},
					480:{
						items: 2
					},
					700:{
						items: 3
					},
					1200:{
						items: 4
					}
				}
			});
		}
		
		/* -- Statistics Section */
		$('.statistics-section').each(function ()
		{
			var $this = $(this);
			var myVal = $(this).data("value");

			$this.appear(function()
			{		
				var statistics_item_count = 0;
				var statistics_count = 0;					
				statistics_item_count = $( "[id*='statistics_count-']" ).length;

				for(var i=1; i<=statistics_item_count; i++)
				{
					statistics_count = $( "[id*='statistics_count-"+i+"']" ).attr( "data-statistics_percent" );
					$("[id*='statistics_count-"+i+"']").animateNumber({ number: statistics_count }, 2000);
				}
				$('.statistics-section .col-md-3').addClass('animated fadeInDown');
			});
		});
		
		/* -- Portfolio Section */
		setTimeout(function() {
			var $container = $(".portfolio-list");
			$container.isotope({
			  itemSelector: ".portfolio-box",
			  gutter: 0,
			  transitionDuration: "0.5s"
			});

			$('#filters a').on('click',function(){
				$('#filters a').removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector });		
				return false;
			});
		}, 5000);
		
		/* -- Gallery Section */
		if( $(".gallery-section").length ) {
			$(".gallery-carousel").owlCarousel({
				loop: true,
				margin: 30,
				nav: true,
				dots: false,
				autoplay: false,
				responsive:{
					0:{
						items: 1
					},
					480:{
						items: 2
					},
					700:{
						items: 3
					},
					1200:{
						items: 3
					}
				}
			});
		}
		$('.gallery-box , .portfolio-list .portfolio-box').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',				
			}
		});
		
		$('#calendar').datepicker({
			inline: true,
			firstDay: 1,
			showOtherMonths: true,
			dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
		});
		
		$( "#datepicker1,#datepicker2" ).datepicker();
		
		/* -- Map Initialization */
		if( $( "#map-canvas-contact").length == 1 ){
			initialize( "map-canvas-contact" );
		}
		
		/* -- Quick Contact Form */
		$( "#btn_submit" ).on( "click", function(event) {
			event.preventDefault();
			var mydata = $("form").serialize();
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "contact.php",
				data: mydata,
				success: function(data) {
					if( data["type"] == "error" ){
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").removeClass("alert-msg-success");
						$("#alert-msg").addClass("alert-msg-failure");
						$("#alert-msg").show();
					} else {
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").addClass("alert-msg-success");
						$("#alert-msg").removeClass("alert-msg-failure");					
						$("#input_name").val("");
						$("#input_email").val("");
						$("#textarea_message").val("");
						$("#alert-msg").show();
					}
				},
				error: function(xhr, textStatus, errorThrown) {
					/* alert(textStatus); */
				}
			});
			return false;
		});/* Quick Contact Form /- */
		
		/* - Expanding Search */
		new UISearch( document.getElementById( "sb-search" ) );
		
	});/* document.ready /- */
	
	/* ## Window Resize */
	$( window ).resize(function() {
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* -- Recommended Section */
		recommended();
		/* -- Room Section */
		room_carousel();
		room_carousel_item();
		
	});
	
	/* ## Window Load - Handler for .load() called */
	$(window).load(function() {
		/* - Site Loader */
		if ( !$("html").is(" .ie6, .ie7, .ie8 ") ) {
			$("#site-loader").delay(1000).fadeOut("slow");
		}
		else {
			$("#site-loader").css("display","none");
		}
	});
	
})(jQuery);

