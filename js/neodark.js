/*global $ */
'use strict';
// Add js class to  html
$('html').addClass('js');
$(document).ready(function () {
  // totop scroll
  $(window).scroll(function () {
    if ($(this).scrollTop() != 0) {
      $('#gotop').fadeIn();
    } else {
      $('#gotop').fadeOut();
    }
  });
  $('#gotop').on('click', function (e) {
    $('body,html').animate(
      {
        scrollTop: 0,
      },
      800
    );
    e.preventDefault();
  });
});
