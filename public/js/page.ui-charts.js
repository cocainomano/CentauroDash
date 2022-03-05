(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/page.ui-charts"],{

/***/ "./resources/js/vendor/flowdash/page.ui-charts.js":
/*!********************************************************!*\
  !*** ./resources/js/vendor/flowdash/page.ui-charts.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {(function () {
  'use strict';

  Charts.init();

  var Performance = function Performance(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      scales: {
        yAxes: [{
          ticks: {
            callback: function callback(a) {
              if (!(a % 10)) return "$" + a + "k";
            }
          }
        }]
      },
      tooltips: {
        callbacks: {
          label: function label(a, e) {
            var t = e.datasets[a.datasetIndex].label || "",
                o = a.yLabel,
                r = "";
            return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">$' + o + "k</span>";
          }
        }
      }
    }, options);
    var data = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Performance",
        data: [0, 10, 5, 15, 10, 20, 15, 25, 20, 30, 25, 40]
      }]
    };
    Charts.create(id, type, options, data);
  };

  var Orders = function Orders(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'roundedBar';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      barRoundness: 1.2,
      scales: {
        yAxes: [{
          ticks: {
            callback: function callback(a) {
              if (!(a % 10)) return "$" + a + "k";
            }
          }
        }]
      },
      tooltips: {
        callbacks: {
          label: function label(a, e) {
            var t = e.datasets[a.datasetIndex].label || "",
                o = a.yLabel,
                r = "";
            return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">$' + o + "k</span>";
          }
        }
      }
    }, options);
    var data = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Sales",
        data: [25, 20, 30, 22, 17, 10, 18, 26, 28, 26, 20, 32],
        barPercentage: 0.5,
        barThickness: 20
      }]
    };
    Charts.create(id, type, options, data);
  };

  var Devices = function Devices(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'doughnut';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      tooltips: {
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
      labels: ["Desktop", "Tablet", "Mobile"],
      datasets: [{
        data: [60, 25, 15],
        backgroundColor: [settings.colors.primary[700], settings.colors.success[300], settings.colors.success[100]],
        hoverBorderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white
      }]
    };
    Charts.create(id, type, options, data);
  }; ///////////////////
  // Create Charts //
  ///////////////////


  Performance('#performanceChart');
  Performance('#performanceAreaChart', 'line', {
    elements: {
      line: {
        fill: 'start',
        backgroundColor: settings.charts.colors.area
      }
    }
  });
  Orders('#ordersChart');
  Orders('#ordersChartSwitch');
  Devices('#devicesChart');
  $('[data-toggle="chart"]:checked').each(function (index, el) {
    Charts.add($(el));
  });
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 21:
/*!**************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/page.ui-charts.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/page.ui-charts.js */"./resources/js/vendor/flowdash/page.ui-charts.js");


/***/ })

},[[21,"/js/manifest","/js/vendor"]]]);