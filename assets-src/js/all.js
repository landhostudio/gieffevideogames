//=include ../../bower_components/fastclick/lib/fastclick.js
//=include ../../bower_components/jquery/dist/jquery.js
//=include ../../bower_components/flickity/dist/flickity.pkgd.js
//=include ../../bower_components/magnific-popup/dist/jquery.magnific-popup.js

(function($) {

  'use strict';

  var init = function() {
    initNavigation();
    initLanguage();
    if ( $('.hero-gallery-flickity').length ) {
      initGallery();
    }
    if ( $('.button--gallery').length ) {
      initModalGallery();
    }
    if ( $('.button--video').length ) {
      initModalVideo();
    }
    if ($('.contact-map').length) {
      initGoogleMaps();
    }
    initLog();
  };

  function initNavigation() {
    $('.button--hamburger').click(function() {
      $('.header').toggleClass('header--active');
    });
  };

  function initLanguage() {
    $('.button--toggle').click(function() {
      $('.dropdown').toggleClass('dropdown--active');
    });
  };

  function initGallery() {

    var $carousel = $('.hero-gallery-flickity').flickity({
      contain: false,
      autoPlay: 4000,
      pauseAutoPlayOnHover: false,
      percentPosition: true,
      prevNextButtons: false,
      pageDots: true,
      draggable: true,
      resize: false, // false if carousel uses per.height
      setGallerySize: false, // false if carousel uses per.height
      wrapAround: true // infinite loop
    });

    $carousel.on('mouseenter', function() {
      $carousel.on('mouseleave', onNavMouseleave);
    });

    function onNavMouseleave() {
      $carousel.flickity('playPlayer');
      $carousel.off('mouseleave', onNavMouseleave);
    };

  };

  function initModalGallery() {
    
    $('.button--gallery').click(function(event) {
      $('.hero-product-gallery').magnificPopup('open');
      event.preventDefault();
    });

    $('.hero-product-gallery').each(function () {
      $(this).magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
          enabled: true,
          preload: [0,1],
          tPrev: '«',
          tNext: '»',
          tCounter: '%curr% – %total%'
        }
      });
    });

  };

  function initModalVideo() {
    
    $('.button--video').magnificPopup({
      type: 'iframe',
      patterns: {
        youtube: {
          index: 'youtube.com/',
          id: 'v=',
          src: '//www.youtube.com/embed/%id%?autoplay=1'
        },
        vimeo: {
          index: 'vimeo.com/',
          id: '/',
          src: '//player.vimeo.com/video/%id%?autoplay=1'
        }
      }
    });

  };

  function initGoogleMaps() {

    function new_map($el) {

      var $markers = $el.find('.contact-map-location');

      var color1 = '#393939',
          color2 = '#7cc3af',
          color3 = '#fbfbfb',
          color4 = '#fbfbfb',
          color5 = '#e4f9f3';

    	var args = {
        scrollwheel       : false,
        navigationControl : true,
        mapTypeControl    : true,
        scaleControl      : true,
        draggable         : true,
        zoom              : 16,
        zoomControl       : true,
        mapTypeControl    : false,
        scaleControl      : true,
        streetViewControl : false,
        rotateControl     : false,
        fullscreenControl : false,
    		center		        : new google.maps.LatLng(0, 0),
    		mapTypeId	        : google.maps.MapTypeId.ROADMAP
    	};

      // create map
      var map = new google.maps.Map($el[0], args);

      // add a markers reference
      map.markers = [];

      // add markers
      $markers.each(function() {
        add_marker($(this), map);
	    });

      // center map
      center_map(map);

      return map;
    }

    function add_marker($marker, map) {

      var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

    	// create marker
    	var marker = new google.maps.Marker({
    		position : latlng,
    		map      : map
    	});

    	// add to array
    	map.markers.push(marker);

    	// if marker contains HTML, add it to an infoWindow
    	if ($marker.html()) {

    		// create info window
    		var infowindow = new google.maps.InfoWindow({
          content: $marker.html()
    		});

    		// show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
    		});
    	}
    }

    function center_map(map) {

    	var bounds = new google.maps.LatLngBounds();

    	// loop through all markers and create bounds
    	$.each(map.markers, function(i, marker) {
    		
        var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
    		bounds.extend(latlng);

    	});

    	// only 1 marker?
    	if (map.markers.length == 1) {
    	
      	// set center of map
  	    map.setCenter(bounds.getCenter());
  	    map.setZoom(7);

      } else {

    		// fit to bounds
    		// map.fitBounds(bounds);

        map.fitBounds(bounds);

    	}

    }

    var map = null;

    $(document).ready(function() {
      $('.contact-map-content').each(function() {
        
        // create map
        map = new_map($(this));

      });

      // resize the map when the viewport is changed
      google.maps.event.addDomListener(window, 'resize', function() {
        
        var center = map.getCenter();
        
        google.maps.event.trigger(map, 'resize');
        map.setCenter(center);

      });
      
    });

  };

  function initLog() {
    console.log('gieffevideogames');
  };

  init();

})(jQuery);
