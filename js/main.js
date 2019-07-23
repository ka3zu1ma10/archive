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

var getMainMenuEls = document.getElementsByClassName('menu-list_button');
var clickMainMenuHandler = function(resp) {
  for (var getMainMenuEl of getMainMenuEls) {
    getMainMenuEl.classList.remove('menu-list_button__active');
  }
  console.log(resp);
  resp.target.classList.add('menu-list_button__active');
};
for (var getMainMenuEl of getMainMenuEls) {
  getMainMenuEl.addEventListener('click', clickMainMenuHandler);
}