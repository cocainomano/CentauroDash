(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/progress-charts"],{

/***/ "./resources/js/vendor/flowdash/plugins/progress-charts.js":
/*!*****************************************************************!*\
  !*** ./resources/js/vendor/flowdash/plugins/progress-charts.js ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict';

  Charts.init();

  var Progress = function Progress(id, value, total, backgroundColor) {
    var type = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : 'doughnut';
    var options = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : {};
    options = Chart.helpers.merge({
      cutoutPercentage: 90,
      aspectRatio: 1,
      responsive: false,
      maintainAspectRatio: false,
      tooltips: {
        enabled: false,
        custom: function custom() {},
        callbacks: {
          title: function title(a, e) {
            return e.labels[a[0].index];
          },
          label: function label(a, e) {
            var t = "";
            return t += '<span class="popover-body-value">' + e.datasets[0].data[a.index] + "%</span>";
          }
        }
      }
    }, options);
    var data = {
      // labels: ["In-time", "Other"],
      datasets: [{
        data: [value, total - value],
        backgroundColor: [backgroundColor, settings.colors.gray[50]],
        borderColor: settings.colors.white,
        hoverBorderColor: settings.colors.transparent,
        borderWidth: 0
      }]
    };
    Charts.create(id, type, options, data);
  }; ///////////////////
  // Create Charts //
  ///////////////////


  $('[data-toggle="progress-chart"]').each(function () {
    var element = $(this);
    var value = $(this).data('progress-chart-value');
    var color = $(this).data('progress-chart-color');
    var tone = $(this).data('progress-chart-tone');
    Progress(element, value, 100, settings.colors[color][tone]);
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 9:
/*!***********************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/plugins/progress-charts.js ***!
  \***********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/plugins/progress-charts.js */"./resources/js/vendor/flowdash/plugins/progress-charts.js");


/***/ })

},[[9,"/js/manifest","/js/vendor"]]]);