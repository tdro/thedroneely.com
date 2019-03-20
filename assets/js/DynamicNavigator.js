
/**
 * Open mobile flyout menu
 */
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


/**
 * Close flyout menu when tapped outside of its div region
 */
var activeMenu = document.getElementById('navMenu');
var activeBurger = document.getElementById('navBurger');
var activeBurgerCompact = document.getElementById('navBurgerCompact');
var activeMenuContainer = document.getElementById('navMenuContainer');

document.addEventListener('click', function(event) {

  var burgerClick = activeBurger.contains(event.target);
  var burgerCompactClick = activeBurgerCompact.contains(event.target);
  var menuContainerClick = activeMenuContainer.contains(event.target);

  if (!burgerClick && !burgerCompactClick && !menuContainerClick) {
    activeMenu.classList.remove('is-active');
    activeBurger.classList.remove('is-active');
    activeBurgerCompact.classList.remove('is-active');
  }

});

document.addEventListener('touchstart', function(event) {

  var burgerClick = activeBurger.contains(event.target);
  var burgerCompactClick = activeBurgerCompact.contains(event.target);
  var menuContainerClick = activeMenuContainer.contains(event.target);

  if (!burgerClick && !burgerCompactClick && !menuContainerClick) {
    activeMenu.classList.remove('is-active');
    activeBurger.classList.remove('is-active');
    activeBurgerCompact.classList.remove('is-active');
  }

});

/**
 * Hide elements on scroll events
 */
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

    activeMenu.classList.remove('is-active');
    activeBurger.classList.remove('is-active');
    activeBurgerCompact.classList.remove('is-active');

    pastPosition = currentPosition;
};
