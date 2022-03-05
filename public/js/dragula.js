(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/dragula"],{

/***/ "./resources/js/vendor/flowdash/plugins/dragula.js":
/*!*********************************************************!*\
  !*** ./resources/js/vendor/flowdash/plugins/dragula.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict';

  $('[data-toggle="dragula"]').each(function () {
    var element = $(this);
    var options = {
      moves: function moves(el, source, handle, sibling) {
        return void 0 !== element.data('dragula-moves') ? handle.classList.contains(element.data('dragula-moves')) : true;
      }
    };
    var containers = $(this).data('dragula-containers');
    var elements = [];

    if (containers) {
      for (var i = 0; i < containers.length; i++) {
        elements.push(document.querySelector(containers[i]));
      }
    } else {
      elements.push(element[0]);
    }

    dragula(elements, options);
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 3:
/*!***************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/plugins/dragula.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/plugins/dragula.js */"./resources/js/vendor/flowdash/plugins/dragula.js");


/***/ })

},[[3,"/js/manifest","/js/vendor"]]]);