(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/flatpickr"],{

/***/ "./resources/js/vendor/flowdash/plugins/flatpickr.js":
/*!***********************************************************!*\
  !*** ./resources/js/vendor/flowdash/plugins/flatpickr.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict';

  $('[data-toggle="flatpickr"]').each(function () {
    var element = $(this);
    var options = {
      mode: void 0 !== element.data('flatpickr-mode') ? element.data('flatpickr-mode') : 'single',
      altInput: void 0 !== element.data('flatpickr-alt-input') ? element.data('flatpickr-alt-input') : true,
      altInputClass: void 0 !== element.data('flatpickr-alt-input-class') ? element.data('flatpickr-alt-input-class') : 'form-control flatpickr-input',
      monthSelectorType: void 0 !== element.data('flatpickr-month-selector-type') ? element.data('flatpickr-month-selector-type') : 'static',
      altFormat: void 0 !== element.data('flatpickr-alt-format') ? element.data('flatpickr-alt-format') : 'F j, Y',
      dateFormat: void 0 !== element.data('flatpickr-date-format') ? element.data('flatpickr-date-format') : 'Y-m-d',
      wrap: void 0 !== element.data('flatpickr-wrap') ? element.data('flatpickr-wrap') : false,
      inline: void 0 !== element.data('flatpickr-inline') ? element.data('flatpickr-inline') : false,
      "static": void 0 !== element.data('flatpickr-static') ? element.data('flatpickr-static') : false,
      enableTime: void 0 !== element.data('flatpickr-enable-time') ? element.data('flatpickr-enable-time') : false,
      noCalendar: void 0 !== element.data('flatpickr-no-calendar') ? element.data('flatpickr-no-calendar') : false,
      appendTo: void 0 !== element.data('flatpickr-append-to') ? document.querySelector(element.data('flatpickr-append-to')) : undefined,
      onChange: function onChange(selectedDates, dateStr) {
        if (options.wrap) {
          element.find('[data-toggle]').text(dateStr);
        }
      }
    };
    element.flatpickr(options);
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 5:
/*!*****************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/plugins/flatpickr.js ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/plugins/flatpickr.js */"./resources/js/vendor/flowdash/plugins/flatpickr.js");


/***/ })

},[[5,"/js/manifest","/js/vendor"]]]);