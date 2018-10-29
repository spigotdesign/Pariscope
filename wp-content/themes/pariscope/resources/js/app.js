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
  var logoContainer = document.querySelector('body')

  window.addEventListener('scroll', function() {

      scrollPosition = window.scrollY;

      if (scrollPosition >= 300) {
          logoContainer.classList.add('scroll');
      } else {
          logoContainer.classList.remove('scroll');
      }

  });

})();

(function() {

  var toggle = {
    navToggle:    document.querySelector('.toggle-menu'),
    body:         document.querySelector('body'),
    search:       document.querySelector('.app-search__search-icon'),
    searchClose:  document.querySelector('.app-search__close'),

    doToggle: function(e) {
      e.preventDefault();
      this.body.classList.toggle('nav-open');
    },

    sToggle: function(e) {
      e.preventDefault();
      this.body.classList.toggle('search-open');
    },

    sClose: function(e) {
      e.preventDefault();
      this.body.classList.toggle('search-open');
    }
  };

  toggle.navToggle.addEventListener('click', function(e) { toggle.doToggle(e); });
  toggle.search.addEventListener('click', function(e) { toggle.sToggle(e); });
  toggle.searchClose.addEventListener('click', function(e) { toggle.sClose(e); });
  //toggle.nav.addEventListener('click', function(e) { toggle.doToggle(e); });

}());



