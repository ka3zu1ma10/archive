lightbox.option({
  disableScrolling: true
})

// masthead scroll
var header = $('#masthead'); // fixed DOM
var adclass = 'scrolled'; // add css class
var scrollY = 90; // scroll

$(window).scroll(function() {
  if ($(window).scrollTop() > scrollY) {
    header.addClass(adclass);
  } else {
    header.removeClass(adclass);
  }
});