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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * Primary front-end script.
 *
 * Primary JavaScript file. Any includes or anything imported should
 * be filtered through this file and eventually saved back into the
 * `/dist/js/app.js` file.
 *
 * @package   LiveLikeSam
 * @author    Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright Copyright (c) 2020, Bryan Hoffman
 * @link      https://spigotdesign.com/
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
(function () {
  // Detect for Javascript. Remove .no-js body class added in /app/functions-filters.php
  var el = document.body;
  el.classList.remove("no-js");
})();

(function () {
  var toggle = {
    navToggle: document.querySelector('.toggle-menu'),
    body: document.querySelector('.app-header'),
    search: document.querySelector('.app-search__search-icon'),
    searchClose: document.querySelector('.app-search__close'),
    doToggle: function doToggle(e) {
      e.preventDefault();
      this.body.classList.toggle('nav-open');
    }
  };
  toggle.navToggle.addEventListener('click', function (e) {
    toggle.doToggle(e);
  });
})();

(function subnavToggle() {
  var items = document.querySelectorAll('.has-children > .menu__link');

  for (var i = 0; i < items.length; i++) {
    items[i].addEventListener('click', function () {
      if (window.innerWidth < 900) {
        event.preventDefault();
        this.parentNode.classList.toggle('subnav-open');
      }
    });
  }
})();

window.addEventListener('touchstart', function () {
  var items = document.querySelectorAll('.has-children > .menu__link');

  for (var i = 0; i < items.length; i++) {
    items[i].setAttribute('href', '#');
  }
});
jQuery(document).ready(function () {
  jQuery('.menu--shop-by-category .menu__item--ancestor > .menu__link').parent().addClass('subnav-open');
}); // Sidebar Toggle

(function sidebarToggle() {
  var items = document.querySelectorAll('.menu--shop-by-category .has-children > .menu__link');

  for (var i = 0; i < items.length; i++) {
    items[i].addEventListener('click', function () {
      event.preventDefault();
      this.parentNode.classList.toggle('subnav-open');
    });
  }
})();

/***/ }),

/***/ "./resources/scss/customize-controls.scss":
/*!************************************************!*\
  !*** ./resources/scss/customize-controls.scss ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/scss/editor.scss":
/*!************************************!*\
  !*** ./resources/scss/editor.scss ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/scss/screen.scss":
/*!************************************!*\
  !*** ./resources/scss/screen.scss ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!**************************************************************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/scss/screen.scss ./resources/scss/editor.scss ./resources/scss/customize-controls.scss ***!
  \**************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/bryan/Documents/Work/Sites/neemtreefarms/app/public/wp-content/themes/pariscope/resources/js/app.js */"./resources/js/app.js");
__webpack_require__(/*! /Users/bryan/Documents/Work/Sites/neemtreefarms/app/public/wp-content/themes/pariscope/resources/scss/screen.scss */"./resources/scss/screen.scss");
__webpack_require__(/*! /Users/bryan/Documents/Work/Sites/neemtreefarms/app/public/wp-content/themes/pariscope/resources/scss/editor.scss */"./resources/scss/editor.scss");
module.exports = __webpack_require__(/*! /Users/bryan/Documents/Work/Sites/neemtreefarms/app/public/wp-content/themes/pariscope/resources/scss/customize-controls.scss */"./resources/scss/customize-controls.scss");


/***/ })

/******/ });
//# sourceMappingURL=app.js.map