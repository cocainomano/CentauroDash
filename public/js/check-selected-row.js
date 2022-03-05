(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/check-selected-row"],{

/***/ "./resources/js/vendor/flowdash/check-selected-row.js":
/*!************************************************************!*\
  !*** ./resources/js/vendor/flowdash/check-selected-row.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($, domFactory) {var checkSelectedRow = function checkSelectedRow() {
  return {
    listeners: ['_onChange(change)'],

    get $target() {
      return $(this.element).closest('tr');
    },

    _onChange: function _onChange(e) {
      $(this.$target)[e.target.checked ? 'addClass' : 'removeClass']('selected');
    }
  };
};

domFactory.handler.register('check-selected-row', checkSelectedRow);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js"), __webpack_require__(/*! dom-factory */ "./node_modules/dom-factory/dist/dom-factory.js")))

/***/ }),

/***/ 16:
/*!******************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/check-selected-row.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/check-selected-row.js */"./resources/js/vendor/flowdash/check-selected-row.js");


/***/ })

},[[16,"/js/manifest","/js/vendor"]]]);