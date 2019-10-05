lightbox.option({
  disableScrolling: true
})

// // masthead scroll
// var header = $('#masthead'); // fixed DOM
// var adclass = 'scrolled'; // add css class
// var scrollY = 90; // scroll

// $(window).scroll(function() {
//   if ($(window).scrollTop() > scrollY) {
//     header.addClass(adclass);
//   } else {
//     header.removeClass(adclass);
//   }
// });

var getMainMenuEls = document.getElementsByClassName('menu-list_button');


var clickMainMenuHandler = function(resp) {
  var getMainBodyEls = document.getElementsByClassName('main-body-date--active');
  for (var getMainMenuEl of getMainMenuEls) {
    getMainMenuEl.classList.remove('menu-list_button__active');
  }
  getMainBodyEls[0].classList.remove('main-body-date--active');
  resp.target.classList.add('menu-list_button__active');
  var activBodyTag = 'main-body-date-' + resp.target.value;
  var getActivBodyEl = document.getElementById(activBodyTag);
  getActivBodyEl.classList.add('main-body-date--active');


};
for (var getMainMenuEl of getMainMenuEls) {
  getMainMenuEl.addEventListener('click', clickMainMenuHandler);
};