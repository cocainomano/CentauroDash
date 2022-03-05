(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/page.dashboard"],{

/***/ "./resources/js/vendor/flowdash/page.dashboard.js":
/*!********************************************************!*\
  !*** ./resources/js/vendor/flowdash/page.dashboard.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {function _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

(function () {
  'use strict';

  function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  window['moment-range'].extendMoment(moment);
  $('[data-toggle="tab"]').on('hide.bs.tab', function (e) {
    $(e.target).removeClass('active');
  });
  Charts.init();

  var TotalSales = function TotalSales(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      title: {
        display: true,
        fontSize: 12,
        fontColor: 'rgba(54, 76, 102, 0.54)',
        position: 'top',
        text: 'SALES OVER TIME'
      },
      legend: {
        display: true,
        align: 'start',
        labels: {
          usePointStyle: false,
          padding: 16,
          boxWidth: 16
        }
      },
      elements: {
        line: {
          fill: 'start',
          backgroundColor: settings.charts.colors.area
        }
      },
      scales: {
        yAxes: [{
          ticks: {
            stepSize: 10,
            callback: function callback(item) {
              return "$" + item;
            }
          }
        }],
        xAxes: [{
          ticks: {
            padding: 4,
            callback: function callback(item) {
              return item;
            }
          },
          gridLines: {
            display: false
          },
          type: 'time',
          time: {
            unit: 'day',
            displayFormats: {
              day: 'D/MM'
            },
            stepSize: 2,
            maxTicksLimit: 7,
            autoSkip: false
          }
        }]
      },
      tooltips: {
        callbacks: {
          label: function label(a, e) {
            var t = e.datasets[a.datasetIndex].label || "",
                o = a.yLabel,
                r = "";
            return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">$' + o + "</span>";
          }
        }
      }
    }, options);
    var data = []; // Create a date range for the last 7 days

    var start = moment().subtract(6, 'days').format('YYYY-MM-DD'); // 7 days ago

    var end = moment().format('YYYY-MM-DD'); // today

    var range = moment.range(start, end); // Create the graph data
    // Iterate the date range and assign a random value for each day

    var _iterator = _createForOfIteratorHelper(range.by('days')),
        _step;

    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var _moment = _step.value;
        data.push({
          y: getRandomInt(2, 40),
          x: _moment.toDate()
        });
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }

    var data = {
      datasets: [{
        label: "Total Sales",
        data: data
      }]
    };
    Charts.create(id, type, options, data);
  };

  var TotalVisitors = function TotalVisitors(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'roundedBar';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      title: {
        display: true,
        fontSize: 12,
        fontColor: 'rgba(54, 76, 102, 0.54)',
        position: 'top',
        text: 'VISITORS OVER TIME'
      },
      legend: {
        display: true,
        align: 'start',
        labels: {
          usePointStyle: false,
          padding: 16,
          boxWidth: 16
        }
      },
      barRoundness: 1.2,
      barThickness: 8,
      scales: {
        yAxes: [{
          ticks: {
            callback: function callback(a) {
              if (!(a % 10)) return a + "k";
            }
          }
        }],
        xAxes: [{
          ticks: {
            padding: 4,
            callback: function callback(item) {
              return item;
            }
          },
          offset: true,
          gridLines: {
            display: false
          },
          type: 'time',
          time: {
            unit: 'day',
            displayFormats: {
              day: 'D/MM'
            },
            stepSize: 2,
            maxTicksLimit: 7
          }
        }]
      },
      tooltips: {
        callbacks: {
          label: function label(a, e) {
            var t = e.datasets[a.datasetIndex].label || "",
                o = a.yLabel,
                r = "";
            return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">' + o + "k</span>";
          }
        }
      }
    }, options);
    var data = []; // Create a date range for the last 7 days

    var start = moment().subtract(6, 'days').format('YYYY-MM-DD'); // 7 days ago

    var end = moment().format('YYYY-MM-DD'); // today

    var range = moment.range(start, end); // Create the graph data
    // Iterate the date range and assign a random value for each day

    var _iterator2 = _createForOfIteratorHelper(range.by('days')),
        _step2;

    try {
      for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
        var _moment2 = _step2.value;
        data.push({
          y: getRandomInt(10, 30),
          x: _moment2.toDate()
        });
      }
    } catch (err) {
      _iterator2.e(err);
    } finally {
      _iterator2.f();
    }

    var data = {
      datasets: [{
        label: "Total Visitors",
        data: data,
        barPercentage: 0.5,
        barThickness: 20
      }]
    };
    Charts.create(id, type, options, data);
  };

  var RepeatCustomerRate = function RepeatCustomerRate(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      elements: {
        line: {
          tension: 0
        }
      },
      title: {
        display: true,
        fontSize: 12,
        fontColor: 'rgba(54, 76, 102, 0.54)',
        position: 'top',
        text: 'CUSTOMERS'
      },
      legend: {
        display: true,
        align: 'start',
        labels: {
          usePointStyle: false,
          padding: 16,
          boxWidth: 16
        }
      },
      scales: {
        yAxes: [{
          ticks: {
            autoSkip: false,
            autoSkipPadding: 0,
            padding: 4,
            maxTicksLimit: 4,
            callback: function callback(item) {
              return item + "%";
            }
          }
        }],
        xAxes: [{
          ticks: {
            padding: 4,
            callback: function callback(item) {
              return item;
            }
          },
          gridLines: {
            display: false
          },
          type: 'time',
          time: {
            unit: 'day',
            displayFormats: {
              day: 'D/MM'
            },
            stepSize: 2,
            maxTicksLimit: 7,
            autoSkip: false
          }
        }]
      },
      tooltips: {
        callbacks: {
          label: function label(a, e) {
            var t = e.datasets[a.datasetIndex].label || "",
                o = a.yLabel,
                r = "";
            return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">' + o + "%</span>";
          }
        }
      }
    }, options);
    var firstTimeData = [];
    var returningData = []; // Create a date range for the last 7 days

    var start = moment().subtract(6, 'days').format('YYYY-MM-DD'); // 7 days ago

    var end = moment().format('YYYY-MM-DD'); // today

    var range = moment.range(start, end); // Create the graph data
    // Iterate the date range and assign a random value for each day

    var _iterator3 = _createForOfIteratorHelper(range.by('days')),
        _step3;

    try {
      for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
        var _moment3 = _step3.value;
        firstTimeData.push({
          y: getRandomInt(0, 5),
          x: _moment3.toDate()
        });
        returningData.push({
          y: getRandomInt(5, 10),
          x: _moment3.toDate()
        });
      }
    } catch (err) {
      _iterator3.e(err);
    } finally {
      _iterator3.f();
    }

    var data = {
      datasets: [{
        label: "First time",
        data: firstTimeData,
        borderWidth: 2,
        borderColor: settings.colors.primary[400],
        backgroundColor: settings.colors.primary[400],
        pointBackgroundColor: settings.colors.primary[400]
      }, {
        label: "Returning",
        data: returningData,
        borderWidth: 2,
        borderColor: settings.colors.success[400],
        backgroundColor: settings.colors.success[400],
        pointBackgroundColor: settings.colors.success[400]
      }]
    };
    Charts.create(id, type, options, data);
  };

  var TotalOrders = function TotalOrders(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      title: {
        display: true,
        fontSize: 12,
        fontColor: 'rgba(54, 76, 102, 0.54)',
        position: 'top',
        text: 'ORDERS OVER TIME'
      },
      legend: {
        display: true,
        align: 'start',
        labels: {
          usePointStyle: false,
          padding: 16,
          boxWidth: 16
        }
      },
      scales: {
        yAxes: [{
          ticks: {
            stepSize: 1,
            callback: function callback(item) {
              return item;
            }
          }
        }],
        xAxes: [{
          ticks: {
            padding: 4,
            callback: function callback(item) {
              return item;
            }
          },
          gridLines: {
            display: false
          },
          type: 'time',
          time: {
            unit: 'day',
            displayFormats: {
              day: 'D/MM'
            },
            stepSize: 2,
            maxTicksLimit: 7,
            autoSkip: false
          }
        }]
      },
      tooltips: {
        callbacks: {
          label: function label(a, e) {
            var t = e.datasets[a.datasetIndex].label || "",
                o = a.yLabel,
                r = "";
            return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">' + o + "</span>";
          }
        }
      }
    }, options);
    var data = []; // Create a date range for the last 7 days

    var start = moment().subtract(6, 'days').format('YYYY-MM-DD'); // 7 days ago

    var end = moment().format('YYYY-MM-DD'); // today

    var range = moment.range(start, end); // Create the graph data
    // Iterate the date range and assign a random value for each day

    var _iterator4 = _createForOfIteratorHelper(range.by('days')),
        _step4;

    try {
      for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
        var _moment4 = _step4.value;
        data.push({
          y: getRandomInt(0, 2),
          x: _moment4.toDate()
        });
      }
    } catch (err) {
      _iterator4.e(err);
    } finally {
      _iterator4.f();
    }

    var data = {
      datasets: [{
        label: "Total Orders",
        data: data
      }]
    };
    Charts.create(id, type, options, data);
  };

  var AverageOrderValue = function AverageOrderValue(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      title: {
        display: true,
        fontSize: 12,
        fontColor: 'rgba(54, 76, 102, 0.54)',
        position: 'top',
        text: 'ORDER VALUE'
      },
      legend: {
        display: true,
        align: 'start',
        labels: {
          usePointStyle: false,
          padding: 16,
          boxWidth: 16
        }
      },
      scales: {
        yAxes: [{
          ticks: {
            stepSize: 10,
            callback: function callback(item) {
              return "$" + item;
            }
          }
        }],
        xAxes: [{
          ticks: {
            padding: 4,
            callback: function callback(item) {
              return item;
            }
          },
          gridLines: {
            display: false
          },
          type: 'time',
          time: {
            unit: 'day',
            displayFormats: {
              day: 'D/MM'
            },
            stepSize: 2,
            maxTicksLimit: 7,
            autoSkip: false
          }
        }]
      },
      tooltips: {
        callbacks: {
          label: function label(a, e) {
            var t = e.datasets[a.datasetIndex].label || "",
                o = a.yLabel,
                r = "";
            return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">$' + o + "</span>";
          }
        }
      }
    }, options);
    var data = []; // Create a date range for the last 7 days

    var start = moment().subtract(6, 'days').format('YYYY-MM-DD'); // 7 days ago

    var end = moment().format('YYYY-MM-DD'); // today

    var range = moment.range(start, end); // Create the graph data
    // Iterate the date range and assign a random value for each day

    var _iterator5 = _createForOfIteratorHelper(range.by('days')),
        _step5;

    try {
      for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
        var _moment5 = _step5.value;
        data.push({
          y: getRandomInt(0, 50),
          x: _moment5.toDate()
        });
      }
    } catch (err) {
      _iterator5.e(err);
    } finally {
      _iterator5.f();
    }

    var data = {
      datasets: [{
        label: "Order Value",
        data: data
      }]
    };
    Charts.create(id, type, options, data);
  };

  var VisitsByDevice = function VisitsByDevice(id) {
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
            return t += '<span class="popover-body-value">' + e.datasets[0].data[a.index] + " visits</span>";
          }
        }
      }
    }, options);
    var data = {
      labels: ["Desktop", "Mobile", "Tablet"],
      datasets: [{
        data: [267, 184, 0],
        backgroundColor: [settings.colors.success[400], settings.colors.primary[500], settings.colors.gray[300]],
        hoverBorderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white
      }]
    };
    Charts.create(id, type, options, data);
  };

  var EarningsTraffic = function EarningsTraffic(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      elements: {
        line: {
          fill: 'start',
          backgroundColor: settings.charts.colors.area
        }
      },
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
        label: "Traffic",
        data: [10, 2, 5, 15, 10, 12, 15, 25, 22, 30, 25, 40]
      }]
    };
    Charts.create(id, type, options, data);
  };

  var Products = function Products(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    var data = arguments.length > 3 ? arguments[3] : undefined;
    options = Chart.helpers.merge({
      elements: {
        line: {
          fill: 'start',
          backgroundColor: settings.charts.colors.area,
          tension: 0,
          borderWidth: 1
        },
        point: {
          pointStyle: 'circle',
          radius: 5,
          hoverRadius: 5,
          backgroundColor: settings.colors.white,
          borderColor: settings.colors.primary[700],
          borderWidth: 2
        }
      },
      scales: {
        yAxes: [{
          display: false
        }],
        xAxes: [{
          display: false
        }]
      }
    }, options);
    data = data || {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
      datasets: [{
        label: "Earnings",
        data: [400, 200, 450, 460, 220, 380, 800]
      }]
    };
    Charts.create(id, type, options, data);
  };

  var Courses = function Courses(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      elements: {
        line: {
          borderColor: settings.colors.success[700],
          backgroundColor: settings.hexToRGB(settings.colors.success[100], 0.5)
        },
        point: {
          borderColor: settings.colors.success[700]
        }
      }
    }, options);
    Products(id, type, options);
  };

  var LocationDoughnut = function LocationDoughnut(id) {
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
      labels: ["United States", "United Kingdom", "Germany", "India"],
      datasets: [{
        data: [25, 25, 15, 35],
        backgroundColor: [settings.colors.success[400], settings.colors.danger[400], settings.colors.primary[500], settings.colors.gray[300]],
        hoverBorderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white
      }]
    };
    Charts.create(id, type, options, data);
  };

  var TrafficBar = function TrafficBar(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'roundedBar';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      barRoundness: 1.2,
      scales: {
        yAxes: [{
          ticks: {
            callback: function callback(a) {
              if (!(a % 10)) return a + "k";
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
            return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">' + o + "k</span>";
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

  $('.stats-chart').each(function (index, element) {
    var ctx = element.getContext('2d');
    var stats_data = [];

    for (var i = 6; i >= 0; i--) {
      stats_data.push(getRandomInt(100, 300));
    }

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["01", "02", "03", "04", "05", "06", "07", "08"],
        datasets: [{
          data: stats_data,
          borderWidth: 2,
          borderColor: settings.colors.primary[400],
          backgroundColor: settings.colors.primary[50],
          pointBackgroundColor: settings.colors.primary[400]
        }]
      },
      options: {
        elements: {
          point: {
            radius: 0
          }
        },
        tooltips: {
          enabled: false
        },
        legend: {
          display: false,
          labels: {
            display: false
          }
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false // zeroLineColor: colors.border_color

            },
            ticks: {
              display: false
            }
          }],
          yAxes: [{
            gridLines: {
              display: false // zeroLineColor: colors.border_color

            },
            ticks: {
              display: false
            }
          }]
        }
      }
    });
  }); ///////////////////
  // Create Charts //
  ///////////////////

  TotalSales('#totalSalesChart');
  TotalVisitors('#totalVisitorsChart');
  RepeatCustomerRate('#repeatCustomerRateChart');
  TotalOrders('#totalOrdersChart');
  AverageOrderValue('#averageOrderValueChart');
  VisitsByDevice('#visitsByDeviceChart');
  TrafficBar('#trafficBarChart');
  EarningsTraffic('#earningsTrafficChart');
  LocationDoughnut('#locationDoughnutChart');
  Products('#productsChart');
  Courses('#coursesChart');
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 18:
/*!**************************************************************!*\
  !*** multi ./resources/js/vendor/flowdash/page.dashboard.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/chavis/Desarrollo/dashboard/resources/js/vendor/flowdash/page.dashboard.js */"./resources/js/vendor/flowdash/page.dashboard.js");


/***/ })

},[[18,"/js/manifest","/js/vendor"]]]);