// Full Height
$(document).ready(function() {
  function setHeight() {
    windowHeight = $(window).innerHeight();
    $('#header').css('min-height', windowHeight);
    $('#header').css('padding-top', windowHeight/4);
  };
  setHeight();
  
  $(window).resize(function() {
    setHeight();
  });
});


// Smooth Scroll 
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});