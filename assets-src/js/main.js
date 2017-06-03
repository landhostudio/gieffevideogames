(function($) {

  'use strict';

  var init = function() {
    initNavigation();
    initLanguage();
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

  function initLog() {
    console.log('gieffevideogames');
  };

  init();

})(jQuery);
