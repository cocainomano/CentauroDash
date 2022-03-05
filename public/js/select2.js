(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/select2"],{

/***/ "./resources/js/vendor/flowdash/plugins/select2.js":
/*!*********************************************************!*\
  !*** ./resources/js/vendor/flowdash/plugins/select2.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict';

  $.fn.select2.defaults.set('theme', 'bootstrap4');

  function templateResult(a) {
    if (!a.id) return a.text;
    var e = $(a.element).data("avatar-src");
    return e ? $('<span class="avatar avatar-xs mr-2"><img class="avatar-img rounded-circle" src="' + e + '" alt="' + a.text + '"></span><span>' + a.text + "</span>") : a.text;
  }

  $('[data-toggle="select"]').each(function () {
    var element = $(this);
    var options = {
      dropdownParent: element.closest(".modal").length ? element.closest(".modal") : $(document.body),
      minimumResultsForSearch: element.data("minimum-results-for-search"),
      templateResult: templateResult
    };
    element.select2(options);
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 11:
/*!***************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/plugins/select2.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/plugins/select2.js */"./resources/js/vendor/flowdash/plugins/select2.js");


/***/ })

},[[11,"/js/manifest","/js/vendor"]]]);