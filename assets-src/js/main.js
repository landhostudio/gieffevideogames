(function($) {

  'use strict';

  var init = function() {
    initLanguage();
    initLog();
  };

  function initLanguage() {
    $('.button--toggle').click(function() {
      $('.dropdown').toggleClass('dropdown--active');
    });
    $(document).click(function(event) {
      if (event.target.nodeName.toLowerCase() != 'button') {
        $('.dropdown').removeClass('dropdown--active');
      }
    });
  };

  function initLog() {
    console.log('gieffevideogames');
  };

  init();

})(jQuery);
