(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/quill"],{

/***/ "./resources/js/vendor/flowdash/plugins/quill.js":
/*!*******************************************************!*\
  !*** ./resources/js/vendor/flowdash/plugins/quill.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict';

  $('[data-toggle="quill"]').each(function () {
    var element = $(this);
    var options = {
      modules: {
        toolbar: void 0 !== element.data('quill-modules-toolbar') ? element.data('quill-modules-toolbar') : {}
      },
      theme: void 0 !== element.data('quill-theme') ? element.data('quill-theme') : 'snow',
      placeholder: void 0 !== element.data('quill-placeholder') ? element.data('quill-placeholder') : Quill.DEFAULTS.placeholder,
      readOnly: void 0 !== element.data('quill-read-only') ? element.data('quill-read-only') : Quill.DEFAULTS.readOnly,
      debug: void 0 !== element.data('quill-debug') ? element.data('quill-debug') : Quill.DEFAULTS.debug,
      formats: void 0 !== element.data('quill-formats') ? element.data('quill-formats') : Quill.DEFAULTS.formats
    };
    var quillElement = element.get(0);
    var quill = new Quill(quillElement, options);
    Object.defineProperty(quillElement, 'Quill', {
      configurable: true,
      writable: false,
      value: quill
    });
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 10:
/*!*************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/plugins/quill.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/plugins/quill.js */"./resources/js/vendor/flowdash/plugins/quill.js");


/***/ })

},[[10,"/js/manifest","/js/vendor"]]]);