$(document).ready(function(){ 
  $(window).scroll(function () {
  $('.hideElement').each ( function(i) {
    var bottom_object = $(this).offset().top + $(this).outerHeight();
    
    var page_bottom = $(window).scrollTop() + $(window).height();
    
    if (page_bottom > bottom_object) {
      $(this).animate({'opacity':'1'}, 500);
    }
    
    })
  })
});