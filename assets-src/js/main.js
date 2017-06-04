(function($) {

  'use strict';

  var init = function() {
    initNavigation();
    initLanguage();
    initGallery();
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

  function initLog() {
    console.log('gieffevideogames');
  };

  init();

})(jQuery);
