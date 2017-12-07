function detectTouch(e) {
  if (!$(e.target).is('.header-navbar .header-navbar-list') && !$(e.target).closest('.header-navbar .header-navbar-list').length && !$(e.target).is('label[for="navbar-trigger"]') && $('#navbar-trigger').prop('checked') === true) {
    $('#navbar-trigger').prop('checked', false);
  }
}

$(function() {
  var responsiveMenu = window.matchMedia( "(max-width: 1100px)" );

  if (responsiveMenu.matches) {
    document.addEventListener('touchmove', detectTouch, false);
  } else {
    document.removeEventListener('touchmove', detectTouch, false);
  }
  $(window ).resize(function() {
    if (responsiveMenu.matches) {
      document.addEventListener('touchmove', detectTouch, false);
    } else {
      document.removeEventListener('touchmove', detectTouch, false);
    }
  });
});