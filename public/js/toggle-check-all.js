(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/toggle-check-all"],{

/***/ "./resources/js/vendor/flowdash/toggle-check-all.js":
/*!**********************************************************!*\
  !*** ./resources/js/vendor/flowdash/toggle-check-all.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(domFactory) {function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

var toggleCheckAllComponent = function toggleCheckAllComponent() {
  return {
    properties: {
      target: {
        reflectToAttribute: true
      }
    },
    listeners: ['_onClick(click)'],

    /**
     * Fire a DOM Event on the HTMLElement
     * @param  {String} eventName The event name
     */
    dispatchEvent: function dispatchEvent(eventName, element) {
      var event;
      var bubbles = false;

      if ('CustomEvent' in window && _typeof(window.CustomEvent) === 'object') {
        try {
          event = new CustomEvent(eventName, {
            bubbles: bubbles,
            cancelable: false
          });
        } catch (e) {
          event = new this.CustomEvent_(eventName, {
            bubbles: bubbles,
            cancelable: false
          });
        }
      } else {
        event = document.createEvent('Event');
        event.initEvent(eventName, bubbles, true);
      }

      element.dispatchEvent(event);
    },
    CustomEvent_: function CustomEvent_(event, params) {
      params = params || {
        bubbles: false,
        cancelable: false,
        detail: undefined
      };
      var evt = document.createEvent('CustomEvent');
      evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
      return evt;
    },

    get $target() {
      return document.querySelector(this.target);
    },

    get $targets() {
      return this.$target.querySelectorAll('[type="checkbox"]');
    },

    _onClick: function _onClick(e) {
      var _this = this;

      if (this.element.type && this.element.type === 'checkbox') {
        this._checked = this.element.checked;
      } else {
        this._checked = !this._checked;
        e.preventDefault();
      }

      this.$targets.forEach(function (i) {
        i.checked = _this._checked;

        _this.dispatchEvent('change', i);
      });
    }
  };
};

domFactory.handler.register('toggle-check-all', toggleCheckAllComponent);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! dom-factory */ "./node_modules/dom-factory/dist/dom-factory.js")))

/***/ }),

/***/ 25:
/*!****************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/toggle-check-all.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/toggle-check-all.js */"./resources/js/vendor/flowdash/toggle-check-all.js");


/***/ })

},[[25,"/js/manifest","/js/vendor"]]]);