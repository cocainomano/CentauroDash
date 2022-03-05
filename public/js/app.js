(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/app"],{

/***/ "./resources/js/vendor/flowdash/app.js":
/*!*********************************************!*\
  !*** ./resources/js/vendor/flowdash/app.js ***!
  \*********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function(domFactory, $) {/* harmony import */ var _bootstrap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./bootstrap */ "./resources/js/vendor/flowdash/bootstrap.js");
/* harmony import */ var _preloader__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./preloader */ "./resources/js/vendor/flowdash/preloader.js");
/* harmony import */ var _preloader__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_preloader__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _sidebar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./sidebar */ "./resources/js/vendor/flowdash/sidebar.js");
/* harmony import */ var _sidebar__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_sidebar__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _perfect_scrollbar__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./perfect-scrollbar */ "./resources/js/vendor/flowdash/perfect-scrollbar.js");
/* harmony import */ var _perfect_scrollbar__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_perfect_scrollbar__WEBPACK_IMPORTED_MODULE_3__);





(function () {
  'use strict'; // Self Initialize DOM Factory Components

  domFactory.handler.autoInit(); // ENABLE TOOLTIPS

  $('[data-toggle="tooltip"]').tooltip();
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! dom-factory */ "./node_modules/dom-factory/dist/dom-factory.js"), __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/js/vendor/flowdash/bootstrap.js":
/*!***************************************************!*\
  !*** ./resources/js/vendor/flowdash/bootstrap.js ***!
  \***************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var material_design_kit__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! material-design-kit */ "./node_modules/material-design-kit/dist/material-design-kit.js");
/* harmony import */ var material_design_kit__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(material_design_kit__WEBPACK_IMPORTED_MODULE_0__);
window._ = __webpack_require__(/*! lodash */ "./node_modules/lodash/lodash.js");
/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
  window.Popper = __webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js")["default"];
  window.$ = window.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");

  __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");
} catch (e) {}
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */


window.axios = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */
// import Echo from 'laravel-echo';
// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });

window.domFactory = __webpack_require__(/*! dom-factory */ "./node_modules/dom-factory/dist/dom-factory.js");
window.PerfectScrollbar = __webpack_require__(/*! perfect-scrollbar */ "./node_modules/perfect-scrollbar/dist/perfect-scrollbar.esm.js")["default"];


/***/ }),

/***/ "./resources/js/vendor/flowdash/perfect-scrollbar.js":
/*!***********************************************************!*\
  !*** ./resources/js/vendor/flowdash/perfect-scrollbar.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict';

  $('[data-perfect-scrollbar]').each(function () {
    var $element = $(this);
    var element = this;
    var ps = new PerfectScrollbar(element, {
      wheelPropagation: void 0 !== $element.data('perfect-scrollbar-wheel-propagation') ? $element.data('perfect-scrollbar-wheel-propagation') : false,
      suppressScrollY: void 0 !== $element.data('perfect-scrollbar-suppress-scroll-y') ? $element.data('perfect-scrollbar-suppress-scroll-y') : false,
      swipeEasing: false
    });
    Object.defineProperty(element, 'PerfectScrollbar', {
      configurable: true,
      writable: false,
      value: ps
    });
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/js/vendor/flowdash/preloader.js":
/*!***************************************************!*\
  !*** ./resources/js/vendor/flowdash/preloader.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($, domFactory) {(function () {
  'use strict'; // PRELOADER

  window.addEventListener('load', function () {
    $('.preloader').fadeOut();
    domFactory.handler.upgradeAll();
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js"), __webpack_require__(/*! dom-factory */ "./node_modules/dom-factory/dist/dom-factory.js")))

/***/ }),

/***/ "./resources/js/vendor/flowdash/sidebar.js":
/*!*************************************************!*\
  !*** ./resources/js/vendor/flowdash/sidebar.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict'; // Connect button(s) to drawer(s)

  var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]');
  sidebarToggle = Array.prototype.slice.call(sidebarToggle);
  sidebarToggle.forEach(function (toggle) {
    toggle.addEventListener('click', function (e) {
      var selector = e.currentTarget.getAttribute('data-target') || e.currentTarget.getAttribute('href') || '#default-drawer';
      var drawer = document.querySelector(selector);

      if (drawer) {
        drawer.mdkDrawer.toggle();
      }
    });
  });
  var drawers = document.querySelectorAll('.mdk-drawer');
  drawers = Array.prototype.slice.call(drawers);
  drawers.forEach(function (drawer) {
    drawer.addEventListener('mdk-drawer-change', function (e) {
      if (!e.target.mdkDrawer) {
        return;
      }

      document.querySelector('body').classList[e.target.mdkDrawer.opened ? 'add' : 'remove']('has-drawer-opened');
      var button = document.querySelector('[data-target="#' + e.target.id + '"]');

      if (button) {
        button.classList[e.target.mdkDrawer.opened ? 'add' : 'remove']('active');
      }
    });
  }); // SIDEBAR COLLAPSE MENUS

  $('.sidebar .collapse').on('show.bs.collapse', function (e) {
    e.stopPropagation();
    var parent = $(this).parents('.sidebar-submenu').get(0) || $(this).parents('.sidebar-menu').get(0);
    $(parent).find('.open').find('.collapse').collapse('hide');
    $(this).closest('li').addClass('open');
  });
  $('.sidebar .collapse').on('hidden.bs.collapse', function (e) {
    e.stopPropagation();
    $(this).closest('li').removeClass('open');
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 15:
/*!***************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/app.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/app.js */"./resources/js/vendor/flowdash/app.js");


/***/ })

},[[15,"/js/manifest","/js/vendor"]]]);