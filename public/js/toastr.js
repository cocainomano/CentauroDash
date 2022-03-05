(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/toastr"],{

/***/ "./resources/js/vendor/flowdash/plugins/toastr.js":
/*!********************************************************!*\
  !*** ./resources/js/vendor/flowdash/plugins/toastr.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict';

  toastr.primary = function (message, title, optionsOverride) {
    return this.success(message, title, $.extend({
      iconClass: 'toast-primary'
    }, optionsOverride));
  };

  $('[data-toggle="toastr"]').on('click', function (e) {
    e.preventDefault();
    var element = $(this);
    var type = element.data('toastr-type') || 'success';
    var message = element.data('toastr-message');
    var title = element.data('toastr-title');
    var options = {
      closeButton: void 0 !== element.data('toastr-close-button') ? element.data('toastr-close-button') : false,
      debug: false,
      newestOnTop: void 0 !== element.data('toastr-newest-on-top') ? element.data('toastr-newest-on-top') : true,
      progressBar: void 0 !== element.data('toastr-progress-bar') ? element.data('toastr-progress-bar') : true,
      positionClass: void 0 !== element.data('toastr-position-class') ? element.data('toastr-position-class') : "toast-top-right",
      preventDuplicates: void 0 !== element.data('toastr-prevent-duplicates') ? element.data('toastr-prevent-duplicates') : false,
      onclick: null,
      showDuration: void 0 !== element.data('toastr-show-duration') ? element.data('toastr-show-duration') : 300,
      hideDuration: void 0 !== element.data('toastr-hide-duration') ? element.data('toastr-hide-duration') : 1000,
      timeOut: void 0 !== element.data('toastr-time-out') ? element.data('toastr-time-out') : 5000,
      extendedTimeOut: void 0 !== element.data('toastr-extended-time-out') ? element.data('toastr-extended-time-out') : 1000,
      showEasing: void 0 !== element.data('toastr-show-easing') ? element.data('toastr-show-easing') : 'swing',
      hideEasing: void 0 !== element.data('toastr-hide-easing') ? element.data('toastr-hide-easing') : 'linear',
      showMethod: void 0 !== element.data('toastr-show-method') ? element.data('toastr-show-method') : 'fadeIn',
      hideMethod: void 0 !== element.data('toastr-hide-method') ? element.data('toastr-hide-method') : 'fadeOut'
    };
    toastr[type](message, title, options);
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 12:
/*!**************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/plugins/toastr.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/plugins/toastr.js */"./resources/js/vendor/flowdash/plugins/toastr.js");


/***/ })

},[[12,"/js/manifest","/js/vendor"]]]);