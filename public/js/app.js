/**
 * Functions
 */
function posf (f, a) { for (var i=0; i < a.length; i++) { if (f(a[i])) return i; } return -1; }
function apos (x, a) { return (typeof x == 'function') ? posf(x,a) : Array.prototype.indexOf.call(a,x) }
function arem (a, x) { var i = apos(x, a); if (i >= 0) { a.splice(i, 1); } return a; }
function afind (x, a) { var i = apos(x, a); return (i >= 0) ? a[i] : null; }
function byClass (el, cl) { return el ? el.getElementsByClassName(cl) : [] }
function byTag (el, tg) { return el ? el.getElementsByTagName(tg) : [] }
function hasClass (el, cl) { var a = el.className.split(' '); return afind(cl, a) }
function addClass (el, cl) { if (el) { var a = el.className.split(' '); if (!afind(cl, a)) { a.unshift(cl); el.className = a.join(' ')}} }
function remClass (el, cl) { if (el) { var a = el.className.split(' '); arem(a, cl); el.className = a.join(' ') } }
function togClass (el, cl) { if (hasClass(el, cl)) { remClass(el, cl); return; } addClass(el, cl); }


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
        togClass($el, 'is-active');
        togClass($target, 'is-active');
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
    remClass(activeMenu, 'is-active');
    remClass(activeBurger, 'is-active');
    remClass(activeBurgerCompact, 'is-active');
  }

});


/**
 * Close flyout menu when tapped outside of its div region
 * iOS devices
 */
document.addEventListener('touchstart', function(event) {

  var burgerClick = activeBurger.contains(event.target);
  var burgerCompactClick = activeBurgerCompact.contains(event.target);
  var menuContainerClick = activeMenuContainer.contains(event.target);

  if (!burgerClick && !burgerCompactClick && !menuContainerClick) {
    remClass(activeMenu, 'is-active');
    remClass(activeBurger, 'is-active');
    remClass(activeBurgerCompact, 'is-active');
  }

});

/**
 * Remove url query string on load
 */
var url = window.location.href.split('?')[0];
window.history.replaceState(null, null, url);


/**
 * Hide elements on scroll events
 */
var previousPosition = window.pageYOffset;
var navbar = document.getElementById("navbar");
var navbarHeight = navbar.offsetHeight;

if (previousPosition > navbarHeight) {
    addClass(navbar, 'navbar__headroom');
}

window.onscroll = function() {
    remClass(activeMenu, 'is-active');
    remClass(activeBurger, 'is-active');
    remClass(activeBurgerCompact, 'is-active');

    var currentPosition = window.pageYOffset;
    var velocity = previousPosition - currentPosition;

    if (velocity > 55 || currentPosition < navbarHeight) {
      remClass(navbar, 'navbar__headroom');
    } else if (velocity < 0) {
      addClass(navbar, 'navbar__headroom');
    }

    previousPosition = currentPosition;
};
