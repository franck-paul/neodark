/*global $ */
'use strict';
// Add js class to  html
$('html').addClass('js');
$(() => {
  // totop scroll
  $(window).on('scroll', function () {
    if ($(this).scrollTop() == 0) {
      $('#gotop').fadeOut();
    } else {
      $('#gotop').fadeIn();
    }
  });
  $('#gotop').on('click', (e) => {
    $('body,html').animate(
      {
        scrollTop: 0,
      },
      800,
    );
    e.preventDefault();
  });
});
