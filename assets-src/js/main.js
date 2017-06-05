(function($) {

  'use strict';

  var init = function() {
    initNavigation();
    initLanguage();
    initGallery();
    initModalGallery();
    initModalVideo();
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

  function initLog() {
    console.log('gieffevideogames');
  };

  init();

})(jQuery);
