(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/list"],{

/***/ "./resources/js/vendor/flowdash/plugins/list.js":
/*!******************************************************!*\
  !*** ./resources/js/vendor/flowdash/plugins/list.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict';

  $('[data-toggle="lists"]').each(function () {
    var element = $(this);
    var options = {
      valueNames: void 0 !== element.data('lists-values') ? element.data('lists-values') : [],
      listClass: void 0 !== element.data('lists-class') ? element.data('lists-class') : 'list'
    };
    var listElement = element.get(0);
    var list = new List(listElement, options);
    Object.defineProperty(listElement, 'List', {
      configurable: true,
      writable: false,
      value: list
    });
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 8:
/*!************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/plugins/list.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/plugins/list.js */"./resources/js/vendor/flowdash/plugins/list.js");


/***/ })

},[[8,"/js/manifest","/js/vendor"]]]);