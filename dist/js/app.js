/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/***/ (function(module, exports) {

/**
 * Primary front-end script.
 *
 * Primary JavaScript file. Any includes or anything imported should
 * be filtered through this file and eventually saved back into the
 * `/dist/js/app.js` file.
 *
 * @package   Pariscope
 * @author    Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright Copyright (c) 2018, Bryan Hoffman
 * @link      https://spigotdesign.com/
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

(function () {

  // Detect for Javascript. Remove .no-js body class added in /app/functions-filters.php
  var el = document.body;
  el.classList.remove("no-js");
})();

(function () {

  var scrollPosition = window.scrollY;
  var logoContainer = document.querySelector('body');

  window.addEventListener('scroll', function () {

    scrollPosition = window.scrollY;

    if (scrollPosition >= 300) {
      logoContainer.classList.add('scroll');
    } else {
      logoContainer.classList.remove('scroll');
    }
  });
})();

(function () {

  var toggle = {
    navToggle: document.querySelector('.toggle-menu'),
    body: document.querySelector('body'),
    search: document.querySelector('.app-search__search-icon'),
    searchClose: document.querySelector('.app-search__close'),

    doToggle: function doToggle(e) {
      e.preventDefault();
      this.body.classList.toggle('nav-open');
    },

    sToggle: function sToggle(e) {
      e.preventDefault();
      this.body.classList.toggle('search-open');
    },

    sClose: function sClose(e) {
      e.preventDefault();
      this.body.classList.toggle('search-open');
    }
  };

  toggle.navToggle.addEventListener('click', function (e) {
    toggle.doToggle(e);
  });
  toggle.search.addEventListener('click', function (e) {
    toggle.sToggle(e);
  });
  toggle.searchClose.addEventListener('click', function (e) {
    toggle.sClose(e);
  });
  //toggle.nav.addEventListener('click', function(e) { toggle.doToggle(e); });
})();

/***/ }),

/***/ "./resources/scss/customize-controls.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/scss/editor.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/scss/screen.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/js/app.js");
__webpack_require__("./resources/scss/screen.scss");
__webpack_require__("./resources/scss/editor.scss");
module.exports = __webpack_require__("./resources/scss/customize-controls.scss");


/***/ })

/******/ });
//# sourceMappingURL=app.js.map