/**
 * General Functions
 */
function posf (f, a) { for (var i=0; i < a.length; i++) { if (f(a[i])) {return i;} } return -1; }
function apos (x, a) { return (typeof x == 'function') ? posf(x,a) : Array.prototype.indexOf.call(a,x); }
function arem (a, x) { var i = apos(x, a); if (i >= 0) { a.splice(i, 1); } return a; }
function afind (x, a) { var i = apos(x, a); return (i >= 0) ? a[i] : null; }
function byClass (el, cl) { return el ? el.getElementsByClassName(cl) : []; }
function byTag (el, tg) { return el ? el.getElementsByTagName(tg) : []; }
function hasClass (el, cl) { var a = el.className.split(' '); return afind(cl, a); }
function addClass (el, cl) { if (el) { var a = el.className.split(' '); if (!afind(cl, a)) { a.unshift(cl); el.className = a.join(' '); } } }
function remClass (el, cl) { if (el) { var a = el.className.split(' '); arem(a, cl); el.className = a.join(' '); } }
function togClass (el, cl) { if (hasClass(el, cl)) { remClass(el, cl); return; } addClass(el, cl); }
function runOnce(action) { runOnce = function(){}; action(); }

/**
 * Remove url query string on load
 */
var url = window.location.href.split('?')[0];
window.history.replaceState(null, null, url);

/**
 * Settings array
 */
var settings = { pager: {} };

window.addEventListener('load', function(event) {
  if (localStorage['settings']) { settings = JSON.parse(localStorage['settings']); }
  if (settings['pager'][window.location.href]) { window.scrollTo(0, settings['pager'][window.location.href]); return; }
  settings['pager'][window.location.href] = 0;
  localStorage['settings'] = JSON.stringify(settings);
});

/*
 * Dropdown functions
 */
function dropdownHide(element, event) {
  /* Hide dropdown elements */
  for (var i = 0; i < element.length; i++) {
    element[i].checked = false;
  }
}

function dropdownClickHide(element, event) {
  /* Hide dropdown when clicked outside of region */
  for (var i = 0; i < element.length; i++) {
    let click = element[i].contains(event.target);
    if (!click && dropdownInputList[i].checked === true) { dropdownHide(dropdownInputList); }
  }
}

/*
 * Hide dropdown when the mouse is far away
 */
document.addEventListener('mousemove', function(event) {
  let mouseX = event.pageX;
  let mouseY = event.pageY;

  function magnitude(x, y) {
    return Math.sqrt(Math.pow(x, 2) + Math.pow(y, 2));
  }

  function distance(mouseX, mouseY, element) {
    let position = element.getBoundingClientRect();
    let elementX = position.right - (element.offsetWidth / 2 ) + window.pageXOffset;
    let elementY = position.bottom - (element.offsetHeight / 2 ) + window.pageYOffset;
    return Math.abs(magnitude(mouseX, mouseY) - magnitude(elementX, elementY));
  }

  function hide(element, threshold, event) {
    for (var i = 0; i < element.length; i++) {
      let proximity = distance(mouseX, mouseY, element[i]);
      if (proximity > threshold && dropdownInputList[i].checked === true) {
        dropdownHide(dropdownInputList, event);
      }
    }
  }

  hide(dropdownContentList, 300, event);

});

/*
 * Click events
 */
document.addEventListener('click', function(event) {
  dropdownClickHide(dropdownMenuList, event);
});

/*
 * Touch start events
 */
document.addEventListener('touchstart', function(event) {
  dropdownClickHide(dropdownMenuList, event);
});

/**
 * Scroll events
 */
var previousPosition = window.pageYOffset;
var navbar = document.getElementById("navbar");
var navbarHeight = navbar.offsetHeight;
var scrolls = 0;

var dropdownInputList = byClass(document, 'dropdown-input');
var dropdownContentList = byClass(document, 'dropdown-content');
var dropdownMenuList = byClass(document, 'dropdown');

window.addEventListener('scroll', function(event) {

    dropdownHide(dropdownInputList);

    var currentPosition = window.pageYOffset;
    var velocity = previousPosition - currentPosition;

    settings['pager'][window.location.href] = currentPosition;

    if (scrolls > 3) {
      if (velocity > 75 || currentPosition < navbarHeight) {
        remClass(navbar, 'headroom');
      } else if (velocity < -25) {
        addClass(navbar, 'headroom');
      } else if (currentPosition > navbarHeight) {
        runOnce(function () { addClass(navbar, 'headroom'); });
      }

      localStorage['settings'] = JSON.stringify(settings);
    }

    previousPosition = currentPosition;
    scrolls++;
});

/**
 * Medium Zoom 1.0.4
 * https://github.com/francoischalifour/medium-zoom
 * MIT License
 */
(function(global, factory) {
  typeof exports === "object" && typeof module !== "undefined" ? module.exports = factory() : typeof define === "function" && define.amd ? define(factory) : global.mediumZoom = factory();
})(this, function() {
  "use strict";
  var _extends = Object.assign || function(target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i];
      for (var key in source) {
        if (Object.prototype.hasOwnProperty.call(source, key)) {
          target[key] = source[key];
        }
      }
    }
    return target;
  };
  var isSupported = function isSupported(node) {
    return node.tagName === "IMG";
  };
  var isNodeList = function isNodeList(selector) {
    return NodeList.prototype.isPrototypeOf(selector);
  };
  var isNode = function isNode(selector) {
    return selector && selector.nodeType === 1;
  };
  var isSvg = function isSvg(image) {
    var source = image.currentSrc || image.src;
    return source.substr(-4).toLowerCase() === ".svg";
  };
  var getImagesFromSelector = function getImagesFromSelector(selector) {
    try {
      if (Array.isArray(selector)) {
        return selector.filter(isSupported);
      }
      if (isNodeList(selector)) {
        return [].slice.call(selector).filter(isSupported);
      }
      if (isNode(selector)) {
        return [ selector ].filter(isSupported);
      }
      if (typeof selector === "string") {
        return [].slice.call(document.querySelectorAll(selector)).filter(isSupported);
      }
      return [];
    } catch (err) {
      throw new TypeError("The provided selector is invalid.\n" + "Expects a CSS selector, a Node element, a NodeList or an array.\n" + "See: https://github.com/francoischalifour/medium-zoom");
    }
  };
  var createOverlay = function createOverlay(background) {
    var overlay = document.createElement("div");
    overlay.classList.add("medium-zoom-overlay");
    overlay.style.background = background;
    return overlay;
  };
  var cloneTarget = function cloneTarget(template) {
    var _template$getBounding = template.getBoundingClientRect(), top = _template$getBounding.top, left = _template$getBounding.left, width = _template$getBounding.width, height = _template$getBounding.height;
    var clone = template.cloneNode();
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
    var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft || 0;
    clone.removeAttribute("id");
    clone.style.position = "absolute";
    clone.style.top = top + scrollTop + "px";
    clone.style.left = left + scrollLeft + "px";
    clone.style.width = width + "px";
    clone.style.height = height + "px";
    clone.style.transform = "";
    return clone;
  };
  var createCustomEvent = function createCustomEvent(type, params) {
    var eventParams = _extends({
      bubbles: false,
      cancelable: false,
      detail: undefined
    }, params);
    if (typeof window.CustomEvent === "function") {
      return new CustomEvent(type, eventParams);
    }
    var customEvent = document.createEvent("CustomEvent");
    customEvent.initCustomEvent(type, eventParams.bubbles, eventParams.cancelable, eventParams.detail);
    return customEvent;
  };
  var mediumZoom = function mediumZoom(selector) {
    var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
    var Promise = window.Promise || function Promise(fn) {
      function noop() {}
      fn(noop, noop);
    };
    var _handleClick = function _handleClick(event) {
      var target = event.target;
      if (target === overlay) {
        close();
        return;
      }
      if (images.indexOf(target) === -1) {
        return;
      }
      toggle({
        target: target
      });
    };
    var _handleTouch = function _handleTouch(event) {
      var target = event.target;
      if (target === overlay) {
        close();
        return;
      }
    };
    var _handleScroll = function _handleScroll() {
      if (isAnimating || !active.original) {
        return;
      }
      var currentScroll = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
      if (Math.abs(scrollTop - currentScroll) > zoomOptions.scrollOffset) {
        setTimeout(close, 150);
      }
    };
    var _handleKeyUp = function _handleKeyUp(event) {
      if ((event.keyCode || event.which) === 27) {
        close();
      }
    };
    var update = function update() {
      var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
      var newOptions = options;
      if (options.background) {
        overlay.style.background = options.background;
      }
      if (options.container && options.container instanceof Object) {
        newOptions.container = _extends({}, zoomOptions.container, options.container);
      }
      if (options.template) {
        var template = isNode(options.template) ? options.template : document.querySelector(options.template);
        newOptions.template = template;
      }
      zoomOptions = _extends({}, zoomOptions, newOptions);
      images.forEach(function(image) {
        image.dispatchEvent(createCustomEvent("medium-zoom:update", {
          detail: {
            zoom: zoom
          }
        }));
      });
      return zoom;
    };
    var clone = function clone() {
      var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
      return mediumZoom(_extends({}, zoomOptions, options));
    };
    var attach = function attach() {
      for (var _len = arguments.length, selectors = Array(_len), _key = 0; _key < _len; _key++) {
        selectors[_key] = arguments[_key];
      }
      var newImages = selectors.reduce(function(imagesAccumulator, currentSelector) {
        return [].concat(imagesAccumulator, getImagesFromSelector(currentSelector));
      }, []);
      newImages.filter(function(newImage) {
        return images.indexOf(newImage) === -1;
      }).forEach(function(newImage) {
        images.push(newImage);
        newImage.classList.add("medium-zoom-image");
      });
      eventListeners.forEach(function(_ref) {
        var type = _ref.type, listener = _ref.listener, options = _ref.options;
        newImages.forEach(function(image) {
          image.addEventListener(type, listener, options);
        });
      });
      return zoom;
    };
    var detach = function detach() {
      for (var _len2 = arguments.length, selectors = Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
        selectors[_key2] = arguments[_key2];
      }
      if (active.zoomed) {
        close();
      }
      var imagesToDetach = selectors.length > 0 ? selectors.reduce(function(imagesAccumulator, currentSelector) {
        return [].concat(imagesAccumulator, getImagesFromSelector(currentSelector));
      }, []) : images;
      imagesToDetach.forEach(function(image) {
        image.classList.remove("medium-zoom-image");
        image.dispatchEvent(createCustomEvent("medium-zoom:detach", {
          detail: {
            zoom: zoom
          }
        }));
      });
      images = images.filter(function(image) {
        return imagesToDetach.indexOf(image) === -1;
      });
      return zoom;
    };
    var on = function on(type, listener) {
      var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
      images.forEach(function(image) {
        image.addEventListener("medium-zoom:" + type, listener, options);
      });
      eventListeners.push({
        type: "medium-zoom:" + type,
        listener: listener,
        options: options
      });
      return zoom;
    };
    var off = function off(type, listener) {
      var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
      images.forEach(function(image) {
        image.removeEventListener("medium-zoom:" + type, listener, options);
      });
      eventListeners = eventListeners.filter(function(eventListener) {
        return !(eventListener.type === "medium-zoom:" + type && eventListener.listener.toString() === listener.toString());
      });
      return zoom;
    };
    var open = function open() {
      var _ref2 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {}, target = _ref2.target;
      var _animate = function _animate() {
        var container = {
          width: document.documentElement.clientWidth,
          height: document.documentElement.clientHeight,
          left: 0,
          top: 0,
          right: 0,
          bottom: 0
        };
        var viewportWidth = void 0;
        var viewportHeight = void 0;
        if (zoomOptions.container) {
          if (zoomOptions.container instanceof Object) {
            container = _extends({}, container, zoomOptions.container);
            viewportWidth = container.width - container.left - container.right - zoomOptions.margin * 2;
            viewportHeight = container.height - container.top - container.bottom - zoomOptions.margin * 2;
          } else {
            var zoomContainer = isNode(zoomOptions.container) ? zoomOptions.container : document.querySelector(zoomOptions.container);
            var _zoomContainer$getBou = zoomContainer.getBoundingClientRect(), _width = _zoomContainer$getBou.width, _height = _zoomContainer$getBou.height, _left = _zoomContainer$getBou.left, _top = _zoomContainer$getBou.top;
            container = _extends({}, container, {
              width: _width,
              height: _height,
              left: _left,
              top: _top
            });
          }
        }
        viewportWidth = viewportWidth || container.width - zoomOptions.margin * 2;
        viewportHeight = viewportHeight || container.height - zoomOptions.margin * 2;
        var zoomTarget = active.zoomedHd || active.original;
        var naturalWidth = isSvg(zoomTarget) ? viewportWidth : zoomTarget.naturalWidth || viewportWidth;
        var naturalHeight = isSvg(zoomTarget) ? viewportHeight : zoomTarget.naturalHeight || viewportHeight;
        var _zoomTarget$getBoundi = zoomTarget.getBoundingClientRect(), top = _zoomTarget$getBoundi.top, left = _zoomTarget$getBoundi.left, width = _zoomTarget$getBoundi.width, height = _zoomTarget$getBoundi.height;
        var scaleX = Math.min(naturalWidth, viewportWidth) / width;
        var scaleY = Math.min(naturalHeight, viewportHeight) / height;
        var scale = Math.min(scaleX, scaleY);
        var translateX = (-left + (viewportWidth - width) / 2 + zoomOptions.margin + container.left) / scale;
        var translateY = (-top + (viewportHeight - height) / 2 + zoomOptions.margin + container.top) / scale;
        var transform = "scale(" + scale + ") translate3d(" + translateX + "px, " + translateY + "px, 0)";
        active.zoomed.style.transform = transform;
        if (active.zoomedHd) {
          active.zoomedHd.style.transform = transform;
        }
      };
      return new Promise(function(resolve) {
        if (target && images.indexOf(target) === -1) {
          resolve(zoom);
          return;
        }
        var _handleOpenEnd = function _handleOpenEnd() {
          isAnimating = false;
          active.zoomed.removeEventListener("transitionend", _handleOpenEnd);
          active.original.dispatchEvent(createCustomEvent("medium-zoom:opened", {
            detail: {
              zoom: zoom
            }
          }));
          resolve(zoom);
        };
        if (active.zoomed) {
          resolve(zoom);
          return;
        }
        if (target) {
          active.original = target;
        } else if (images.length > 0) {
          var _images = images;
          active.original = _images[0];
        } else {
          resolve(zoom);
          return;
        }
        active.original.dispatchEvent(createCustomEvent("medium-zoom:open", {
          detail: {
            zoom: zoom
          }
        }));
        scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        isAnimating = true;
        active.zoomed = cloneTarget(active.original);
        document.body.appendChild(overlay);
        if (zoomOptions.template) {
          var template = isNode(zoomOptions.template) ? zoomOptions.template : document.querySelector(zoomOptions.template);
          active.template = document.createElement("div");
          active.template.appendChild(template.content.cloneNode(true));
          document.body.appendChild(active.template);
        }
        document.body.appendChild(active.zoomed);
        window.requestAnimationFrame(function() {
          document.body.classList.add("medium-zoom--opened");
        });
        active.original.classList.add("medium-zoom-image--hidden");
        active.zoomed.classList.add("medium-zoom-image--opened");
        active.zoomed.addEventListener("click", close);
        active.zoomed.addEventListener("transitionend", _handleOpenEnd);
        if (active.original.getAttribute("data-zoom-src")) {
          active.zoomedHd = active.zoomed.cloneNode();
          active.zoomedHd.removeAttribute("srcset");
          active.zoomedHd.removeAttribute("sizes");
          active.zoomedHd.src = active.zoomed.getAttribute("data-zoom-src");
          active.zoomedHd.onerror = function() {
            clearInterval(getZoomTargetSize);
            console.warn("Unable to reach the zoom image target " + active.zoomedHd.src);
            active.zoomedHd = null;
            _animate();
          };
          var getZoomTargetSize = setInterval(function() {
            if (active.zoomedHd.complete) {
              clearInterval(getZoomTargetSize);
              active.zoomedHd.classList.add("medium-zoom-image--opened");
              active.zoomedHd.addEventListener("click", close);
              document.body.appendChild(active.zoomedHd);
              _animate();
            }
          }, 10);
        } else if (active.original.hasAttribute("srcset")) {
          active.zoomedHd = active.zoomed.cloneNode();
          active.zoomedHd.removeAttribute("sizes");
          var loadEventListener = active.zoomedHd.addEventListener("load", function() {
            active.zoomedHd.removeEventListener("load", loadEventListener);
            active.zoomedHd.classList.add("medium-zoom-image--opened");
            active.zoomedHd.addEventListener("click", close);
            document.body.appendChild(active.zoomedHd);
            _animate();
          });
        } else {
          _animate();
        }
      });
    };
    var close = function close() {
      return new Promise(function(resolve) {
        if (isAnimating || !active.original) {
          resolve(zoom);
          return;
        }
        var _handleCloseEnd = function _handleCloseEnd() {
          active.original.classList.remove("medium-zoom-image--hidden");
          document.body.removeChild(active.zoomed);
          if (active.zoomedHd) {
            document.body.removeChild(active.zoomedHd);
          }
          document.body.removeChild(overlay);
          active.zoomed.classList.remove("medium-zoom-image--opened");
          if (active.template) {
            document.body.removeChild(active.template);
          }
          isAnimating = false;
          active.zoomed.removeEventListener("transitionend", _handleCloseEnd);
          active.original.dispatchEvent(createCustomEvent("medium-zoom:closed", {
            detail: {
              zoom: zoom
            }
          }));
          active.original = null;
          active.zoomed = null;
          active.zoomedHd = null;
          active.template = null;
          resolve(zoom);
        };
        isAnimating = true;
        document.body.classList.remove("medium-zoom--opened");
        active.zoomed.style.transform = "";
        if (active.zoomedHd) {
          active.zoomedHd.style.transform = "";
        }
        if (active.template) {
          active.template.style.transition = "opacity 150ms";
          active.template.style.opacity = 0;
        }
        active.original.dispatchEvent(createCustomEvent("medium-zoom:close", {
          detail: {
            zoom: zoom
          }
        }));
        active.zoomed.addEventListener("transitionend", _handleCloseEnd);
      });
    };
    var toggle = function toggle() {
      var _ref3 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {}, target = _ref3.target;
      if (active.original) {
        return close();
      }
      return open({
        target: target
      });
    };
    var getOptions = function getOptions() {
      return zoomOptions;
    };
    var getImages = function getImages() {
      return images;
    };
    var getZoomedImage = function getZoomedImage() {
      return active.original;
    };
    var images = [];
    var eventListeners = [];
    var isAnimating = false;
    var scrollTop = 0;
    var zoomOptions = options;
    var active = {
      original: null,
      zoomed: null,
      zoomedHd: null,
      template: null
    };
    if (Object.prototype.toString.call(selector) === "[object Object]") {
      zoomOptions = selector;
    } else if (selector || typeof selector === "string") {
      attach(selector);
    }
    zoomOptions = _extends({
      margin: 0,
      scrollOffset: 40,
      container: null,
      template: null
    }, zoomOptions);
    var overlay = createOverlay(zoomOptions.background);
    document.addEventListener("click", _handleClick);
    document.addEventListener("touchstart", _handleTouch);
    document.addEventListener("keyup", _handleKeyUp);
    document.addEventListener("scroll", _handleScroll);
    window.addEventListener("resize", close);
    var zoom = {
      open: open,
      close: close,
      toggle: toggle,
      update: update,
      clone: clone,
      attach: attach,
      detach: detach,
      on: on,
      off: off,
      getOptions: getOptions,
      getImages: getImages,
      getZoomedImage: getZoomedImage
    };
    return zoom;
  };
  function styleInject(css, ref) {
    if (ref === void 0) {ref = {};}
    var insertAt = ref.insertAt;
    if (!css || typeof document === "undefined") {
      return;
    }
    var head = document.head || document.getElementsByTagName("head")[0];
    var style = document.createElement("style");
    style.type = "text/css";
    if (insertAt === "top") {
      if (head.firstChild) {
        head.insertBefore(style, head.firstChild);
      } else {
        head.appendChild(style);
      }
    } else {
      head.appendChild(style);
    }
    if (style.styleSheet) {
      style.styleSheet.cssText = css;
    } else {
      style.appendChild(document.createTextNode(css));
    }
  }
  var css = ".medium-zoom-overlay{position:fixed;top:0;right:0;bottom:0;left:0;opacity:0;transition:opacity .3s;will-change:opacity}.medium-zoom--opened .medium-zoom-overlay{cursor:pointer;cursor:zoom-out;opacity:1}.medium-zoom-image{cursor:pointer;cursor:zoom-in;transition:transform .3s cubic-bezier(.2,0,.2,1)}.medium-zoom-image--hidden{visibility:hidden}.medium-zoom-image--opened{position:relative;cursor:pointer;cursor:zoom-out;will-change:transform}";
  styleInject(css);
  return mediumZoom;
});


/**
 * Activate Medium Zoom
 */
var imageZoom = mediumZoom('[data-image-zoom]');
imageZoom.on('open', function(event) { addClass(navbar, 'headroom'); });
imageZoom.on('close', function(event) { remClass(navbar, 'headroom'); });


/**
 * Instant Page v3.0.0 - (C) 2019 Alexandre Dieulot - https://instant.page/license
 */
let mouseoverTimer;
let lastTouchTimestamp;
const prefetches = new Set();
const prefetchElement = document.createElement('link');
const isSupported = prefetchElement.relList && prefetchElement.relList.supports && prefetchElement.relList.supports('prefetch')
                    && window.IntersectionObserver && 'isIntersecting' in IntersectionObserverEntry.prototype;
const allowQueryString = 'instantAllowQueryString' in document.body.dataset;
const allowExternalLinks = 'instantAllowExternalLinks' in document.body.dataset;
const useWhitelist = 'instantWhitelist' in document.body.dataset;

let delayOnHover = 65;
let useMousedown = false;
let useMousedownOnly = false;
let useViewport = false;
if ('instantIntensity' in document.body.dataset) {
  const intensity = document.body.dataset.instantIntensity;

  if (intensity.substr(0, 'mousedown'.length) == 'mousedown') {
    useMousedown = true;
    if (intensity == 'mousedown-only') {
      useMousedownOnly = true;
    }
  }
  else if (intensity.substr(0, 'viewport'.length) == 'viewport') {
    if (!(navigator.connection && (navigator.connection.saveData || navigator.connection.effectiveType.includes('2g')))) {
      if (intensity == "viewport") {
        /* Biggest iPhone resolution (which we want): 414 × 896 = 370944
         * Small 7" tablet resolution (which we don’t want): 600 × 1024 = 614400
         * Note that the viewport (which we check here) is smaller than the resolution due to the UI’s chrome */
        if (document.documentElement.clientWidth * document.documentElement.clientHeight < 450000) {
          useViewport = true;
        }
      }
      else if (intensity == "viewport-all") {
        useViewport = true;
      }
    }
  }
  else {
    const milliseconds = parseInt(intensity);
    if (!isNaN(milliseconds)) {
      delayOnHover = milliseconds;
    }
  }
}

if (isSupported) {
  const eventListenersOptions = {
    capture: true,
    passive: true,
  };

  if (!useMousedownOnly) {
    document.addEventListener('touchstart', touchstartListener, eventListenersOptions);
  }

  if (!useMousedown) {
    document.addEventListener('mouseover', mouseoverListener, eventListenersOptions);
  }
  else {
    document.addEventListener('mousedown', mousedownListener, eventListenersOptions);
  }

  if (useViewport) {
    let triggeringFunction;
    if (window.requestIdleCallback) {
      triggeringFunction = function(callback) {
        requestIdleCallback(callback, {
          timeout: 1500,
        });
      };
    }
    else {
      triggeringFunction = function(callback) {
        callback();
      };
    }

    triggeringFunction(function() {
      const intersectionObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            const linkElement = entry.target;
            intersectionObserver.unobserve(linkElement);
            preload(linkElement.href);
          }
        });
      });

      document.querySelectorAll('a').forEach(function(linkElement) {
        if (isPreloadable(linkElement)) {
          intersectionObserver.observe(linkElement);
        }
      });
    });
  }
}

function touchstartListener(event) {
  /* Chrome on Android calls mouseover before touchcancel so `lastTouchTimestamp`
   * must be assigned on touchstart to be measured on mouseover. */
  lastTouchTimestamp = performance.now();

  const linkElement = event.target.closest('a');

  if (!isPreloadable(linkElement)) {
    return;
  }

  preload(linkElement.href);
}

function mouseoverListener(event) {
  if (performance.now() - lastTouchTimestamp < 1100) {
    return;
  }

  const linkElement = event.target.closest('a');

  if (!isPreloadable(linkElement)) {
    return;
  }

  linkElement.addEventListener('mouseout', mouseoutListener, {passive: true});

  mouseoverTimer = setTimeout(function() {
    preload(linkElement.href);
    mouseoverTimer = undefined;
  }, delayOnHover);
}

function mousedownListener(event) {
  const linkElement = event.target.closest('a');

  if (!isPreloadable(linkElement)) {
    return;
  }

  preload(linkElement.href);
}

function mouseoutListener(event) {
  if (event.relatedTarget && event.target.closest('a') == event.relatedTarget.closest('a')) {
    return;
  }

  if (mouseoverTimer) {
    clearTimeout(mouseoverTimer);
    mouseoverTimer = undefined;
  }
}

function isPreloadable(linkElement) {
  if (!linkElement || !linkElement.href) {
    return;
  }

  if (useWhitelist && !('instant' in linkElement.dataset)) {
    return;
  }

  if (!allowExternalLinks && linkElement.origin != location.origin && !('instant' in linkElement.dataset)) {
    return;
  }

  if (!['http:', 'https:'].includes(linkElement.protocol)) {
    return;
  }

  if (linkElement.protocol == 'http:' && location.protocol == 'https:') {
    return;
  }

  if (!allowQueryString && linkElement.search && !('instant' in linkElement.dataset)) {
    return;
  }

  if (linkElement.hash && linkElement.pathname + linkElement.search == location.pathname + location.search) {
    return;
  }

  if ('noInstant' in linkElement.dataset) {
    return;
  }

  return true;
}

function preload(url) {
  if (prefetches.has(url)) {
    return;
  }

  const prefetcher = document.createElement('link');
  prefetcher.rel = 'prefetch';
  prefetcher.href = url;
  document.head.appendChild(prefetcher);

  prefetches.add(url);
}
