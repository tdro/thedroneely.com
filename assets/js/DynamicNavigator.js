
/* open mobile flyout menu */

document.addEventListener('DOMContentLoaded', function () {
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {
        var target = $el.dataset.target;
        var $target = document.getElementById(target);
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});


/* close flyout menu when tapped outside of its div region */

var activeBurger = document.getElementById('navBurger');
var activeMenu = document.getElementById('navMenu');
document.addEventListener('click', function(event) {
  var burgerClick= activeBurger.contains(event.target);
  if (!burgerClick && activeBurger.classList.contains('is-active')) {
    activeBurger.classList.toggle('is-active');
    activeMenu.classList.toggle('is-active');
  }
});

/* hide and reveal navigator on scroll events */

var pastPosition = window.pageYOffset;
var navbarHeight = document.getElementById("navbar").offsetHeight;
window.onscroll = function() {
  var currentPosition = window.pageYOffset;
    /*
    if (pastPosition > currentPosition) {
      document.getElementById("navbar").style.top = "0";
    } else if (currentPosition > navbarHeight) {
      document.getElementById("navbar").style.top = "-5em";
    }
    */
    if (activeBurger.classList.contains('is-active')) {
      activeBurger.classList.toggle('is-active');
      activeMenu.classList.toggle('is-active');
    }
    pastPosition = currentPosition;
};
