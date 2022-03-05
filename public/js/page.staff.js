(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/page.staff"],{

/***/ "./resources/js/vendor/flowdash/page.staff.js":
/*!****************************************************!*\
  !*** ./resources/js/vendor/flowdash/page.staff.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
  'use strict';

  Charts.init();

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
  }; ///////////////////
  // Create Charts //
  ///////////////////


  Orders('#ordersChart');
})();

/***/ }),

/***/ 20:
/*!**********************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/page.staff.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/page.staff.js */"./resources/js/vendor/flowdash/page.staff.js");


/***/ })

},[[20,"/js/manifest"]]]);