(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/vector-maps"],{

/***/ "./resources/js/vendor/flowdash/plugins/vector-maps.js":
/*!*************************************************************!*\
  !*** ./resources/js/vendor/flowdash/plugins/vector-maps.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict';

  JQVMap.prototype.resizeContainer = function () {
    this.width = this.container.width();
    this.height = this.container.height();
    this.resize();
    this.canvas.setSize(this.width, this.height);
    this.applyTransform();
    this.positionPins();
  };

  JQVMap.prototype.setFocus = function (codes) {
    var _this = this;

    var animate = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;

    if (typeof codes === 'string') {
      codes = [codes];
    }

    var map = this;
    var coords, newCoords;
    codes.forEach(function (cc) {
      var el = $('#' + _this.getCountryId(cc));
      var path = el[0];
      var bbox = path.getBBox();

      if (typeof coords == 'undefined') {
        coords = bbox;
      } else {
        newCoords = {
          x: Math.min(coords.x, bbox.x),
          y: Math.min(coords.y, bbox.y),
          width: Math.max(coords.x + coords.width, bbox.x + bbox.width) - Math.min(coords.x, bbox.x),
          height: Math.max(coords.y + coords.height, bbox.y + bbox.height) - Math.min(coords.y, bbox.y)
        };
        coords = newCoords;
      }
    });
    var scale = Math.min(this.width / coords.width, this.height / coords.height);

    if (scale > this.zoomMaxStep * this.baseScale) {
      scale = this.zoomMaxStep * this.baseScale;
    } else if (scale < this.baseScale) {
      scale = this.baseScale;
    }

    var zoomStep = scale / this.scale;
    this.zoomCurStep = this.zoomCurStep * Math.round(zoomStep);
    var cX = coords.x * scale;
    var cY = coords.y * scale;
    var middleX = coords.width / 2;
    var middleY = coords.height / 2;
    var anchorX = (cX - middleX) / scale * -1;
    var anchorY = (cY - middleY) / scale * -1;
    var transX = anchorX + this.defaultWidth * (this.width / (this.defaultWidth * scale)) / 2;
    var transY = anchorY + this.defaultHeight * (this.height / (this.defaultHeight * scale)) / 2;
    var count = Math.abs(Math.round((scale - this.scale) * 60 / Math.max(scale, this.scale))) || 30;

    if (animate) {
      var frame = function frame() {
        i += 1;
        map.scale = scaleStart + scaleDiff * i;
        map.transX = (transXStart + transXDiff * i) / map.scale;
        map.transY = (transYStart + transYDiff * i) / map.scale;
        map.applyTransform();
        map.positionPins();

        if (i < count) {
          requestAnimationFrame(frame);
        }
      };

      var i = 0,
          scaleStart,
          scaleDiff,
          transXStart,
          transXDiff,
          transYStart,
          transYDiff;
      scaleStart = this.scale;
      scaleDiff = (scale - scaleStart) / count;
      transXStart = this.transX * this.scale;
      transYStart = this.transY * this.scale;
      transXDiff = (transX * scale - transXStart) / count;
      transYDiff = (transY * scale - transYStart) / count;
      requestAnimationFrame(frame);
    } else {
      this.transX = transX;
      this.transY = transY;
      this.setScale(scale);
      this.positionPins();
    }
  };

  function escapeXml(string) {
    return string.replace(/[<>]/g, function (c) {
      switch (c) {
        case '<':
          return "<";

        case '>':
          return ">";
      }
    });
  }

  function resizeContainer() {
    $('[data-toggle="vector-map"]').each(function () {
      var element = $(this);
      var map = element.data().mapObject;
      map.resizeContainer();
      var focus = element.data('vector-map-focus');

      if (focus) {
        map.setFocus(focus);
      }
    });
  }

  $('[data-toggle="vector-map"]').each(function () {
    var element = $(this);
    var values = element.data('vector-map-values') ? maps[element.data('vector-map-values')] || {} : {};
    var pins = {};

    try {
      pins = element.data('vector-map-pins');

      for (var key in pins) {
        if (pins.hasOwnProperty(key)) {
          pins[key] = escapeXml(pins[key]);
        }
      }
    } catch (e) {}

    var options = {
      map: element.data('vector-map-map'),
      zoomOnScroll: void 0 !== element.data('vector-map-zoom-on-scroll') ? element.data('vector-map-zoom-on-scroll') : false,
      enableZoom: void 0 !== element.data('vector-map-enable-zoom') ? element.data('vector-map-enable-zoom') : false,
      showTooltip: void 0 !== element.data('vector-map-show-tooltip') ? element.data('vector-map-show-tooltip') : true,
      focusOnSelect: void 0 !== element.data('vector-map-focus-on-select') ? element.data('vector-map-focus-on-select') : false,
      backgroundColor: void 0 !== element.data('vector-map-background-color') ? element.data('vector-map-background-color') : 'transparent',
      values: values,
      color: settings.colors.gray[50],
      selectedColor: settings.colors.primary[300],
      hoverColor: settings.colors.primary[100],
      scaleColors: [settings.colors.primary[50], settings.colors.primary[500]],
      borderWidth: 1,
      borderColor: '#ffffff',
      borderOpacity: 1,
      normalizeFunction: 'polynomial',
      colors: {},
      pins: pins,
      pinMode: 'content',
      onLabelShow: function onLabelShow(e, label, code) {
        label.html(label.html() + ' - ' + values[code]);
      },
      onRegionSelect: function onRegionSelect(event, code, region) {
        if (options.focusOnSelect) {
          map.setFocus(code);
        }
      }
    };
    var colors = element.data('vector-map-values-colors');

    if (colors) {
      for (var key in values) {
        if (values.hasOwnProperty(key) && colors[values[key]] !== undefined) {
          var color = colors[values[key]];
          options.colors[key] = settings.colors.get(color) || color;
        }
      }
    }

    element.vectorMap(options);
    var map = $(this).data().mapObject;

    if (Object.keys(options.colors)) {
      map.setColors(options.colors);
    }

    var scale = element.data('vector-map-scale');
    var focus = element.data('vector-map-focus');

    if (scale) {
      map.setScale(scale);
      map.positionPins();
    } else if (focus) {
      map.setFocus(focus);
    }
  });
  $('[data-toggle=vector-map-focus]').on('click', function (e) {
    e.preventDefault();
    var element = $(this);
    var target = $(element.data('target'));

    if (!target) {
      return;
    }

    var map = target.data().mapObject;
    var focus = element.data('focus');
    var animate = element.data('animate');

    if (focus) {
      map.setFocus(focus, animate);
    }
  });
  var drawer = document.querySelector('.mdk-drawer');

  if (drawer) {
    drawer.addEventListener('mdk-drawer-change', function () {
      return requestAnimationFrame(resizeContainer);
    });
  }
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 13:
/*!*******************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/plugins/vector-maps.js ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/plugins/vector-maps.js */"./resources/js/vendor/flowdash/plugins/vector-maps.js");


/***/ })

},[[13,"/js/manifest","/js/vendor"]]]);