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

var wellcomeEls = "<?php include ('wellcom.html'); ?>";
var photosEls = "<?php include ('phots.php'); ?>";
var designsEls = "<?php include ('designs.php'); ?>";
var aboutmeEls = "<?php include ('aboutme.html'); ?>";

var getMainMenuEls = document.getElementsByClassName('menu-list_button');
var getMainBodyEls = document.getElementById('main-body');
var clickMainMenuHandler = function(resp) {
  for (var getMainMenuEl of getMainMenuEls) {
    getMainMenuEl.classList.remove('menu-list_button__active');
  }
  getMainBodyEls.appendChild('');
  resp.target.classList.add('menu-list_button__active');
  var activBodyTag = resp.target.value + 'Els';
  getMainBodyEls.appendChild(activBodyTag);
};
for (var getMainMenuEl of getMainMenuEls) {
  getMainMenuEl.addEventListener('click', clickMainMenuHandler);
}