(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/sidebar-mini"],{

/***/ "./resources/js/vendor/flowdash/sidebar-mini.js":
/*!******************************************************!*\
  !*** ./resources/js/vendor/flowdash/sidebar-mini.js ***!
  \******************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($, domFactory) {/* harmony import */ var material_design_kit__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! material-design-kit */ "./node_modules/material-design-kit/dist/material-design-kit.js");
/* harmony import */ var material_design_kit__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(material_design_kit__WEBPACK_IMPORTED_MODULE_0__);

var TAB_KEYCODE = 9; // KeyboardEvent.which value for tab key

var RIGHT_MOUSE_BUTTON_WHICH = 3; // MouseEvent.which value for the right button (assuming a right-handed mouse)

var sidebarMiniComponent = function sidebarMiniComponent() {
  return {
    /**
     * Public properties.
     * @type {Object}
     */
    properties: {
      /**
       * The opened state of the drawer.
       * @type {Object}
       */
      opened: {
        reflectToAttribute: true,
        type: Boolean,
        value: false
      },

      /**
       * The maximum viewport width for which the narrow layout is enabled.
       * @type {Object}
       */
      responsiveWidth: {
        reflectToAttribute: true,
        value: '554px'
      }
    },

    /**
     * Event listeners.
     * @type {Array}
     */
    listeners: ['document._closeHandler(click)', '_openHandler(click)'],

    /**
     * Property change observers.
     * @type {Array}
     */
    observers: ['_onQueryMatches(mediaQuery.queryMatches)', '_onStateChange(opened)'],
    // The mediaQuery listener
    _mediaQuery: null,

    /**
     * The mediaQuery listener
     * @return {Object}
     */
    get mediaQuery() {
      if (!this._mediaQuery) {
        this._mediaQuery = Object(material_design_kit__WEBPACK_IMPORTED_MODULE_0__["mediaQuery"])(this.responsiveMediaQuery);
      }

      return this._mediaQuery;
    },

    /**
     * Computed media query value passed to the mediaQuery listener
     * @return {String}
     */
    get responsiveMediaQuery() {
      return "(max-width: ".concat(this.responsiveWidth, ")");
    },

    _onQueryMatches: function _onQueryMatches(value) {
      if (this.opened && value) {
        this.opened = false;
      }
    },
    _onStateChange: function _onStateChange(state) {
      document.querySelector('.layout-mini').classList[state ? 'add' : 'remove']('layout-mini--open');
    },
    _closeHandler: function _closeHandler(event) {
      if (this.opened) {
        if (event && (event.which === RIGHT_MOUSE_BUTTON_WHICH || event.type === 'keyup' && event.which !== TAB_KEYCODE)) {
          return;
        }

        if ($.contains(this.element, event.target)) {
          return;
        }

        event.preventDefault();
        event.stopPropagation();
        this.opened = false;
      }
    },
    _openHandler: function _openHandler(e) {
      if (!this.opened) {
        e.stopPropagation();
        this.opened = true;
      }
    },

    /**
     * Initialize component
     */
    init: function init() {
      this.mediaQuery.init();

      this._onStateChange(this.opened);
    },

    /**
     * Destroy component
     */
    destroy: function destroy() {
      this.mediaQuery.destroy();
    }
  };
};

domFactory.handler.register('sidebar-mini', sidebarMiniComponent);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js"), __webpack_require__(/*! dom-factory */ "./node_modules/dom-factory/dist/dom-factory.js")))

/***/ }),

/***/ 24:
/*!************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/sidebar-mini.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/sidebar-mini.js */"./resources/js/vendor/flowdash/sidebar-mini.js");


/***/ })

},[[24,"/js/manifest","/js/vendor"]]]);