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


(function() {

  var toggle = {
    navToggle:    document.querySelector('.toggle-menu'),
    body:         document.querySelector('.app-header'),
    search:       document.querySelector('.app-search__search-icon'),
    searchClose:  document.querySelector('.app-search__close'),
   

    doToggle: function(e) {
      e.preventDefault();
      this.body.classList.toggle('nav-open');
    },

  };

  toggle.navToggle.addEventListener('click', function(e) { toggle.doToggle(e); });

}());

(function subnavToggle() {
  var items = document.querySelectorAll('.has-children > .menu__link');

  for (var i=0; i < items.length; i++) {
    items[i].addEventListener('click', function() {
       if (window.innerWidth < 900) {
        event.preventDefault();
        this.parentNode.classList.toggle('subnav-open');
      }
    });

    
  }
})();



window.addEventListener('touchstart', function() {

  var items = document.querySelectorAll('.has-children > .menu__link');

  for (var i=0; i < items.length; i++) {
    items[i].setAttribute('href', '#');
  }

});

jQuery(document).ready(function(){
   jQuery('.menu--shop-by-category .menu__item--ancestor > .menu__link').parent().addClass('subnav-open');
});


// Sidebar Toggle

(function sidebarToggle() {
  var items = document.querySelectorAll('.menu--shop-by-category .has-children > .menu__link');

  for (var i=0; i < items.length; i++) {
    items[i].addEventListener('click', function() {
        event.preventDefault();
        this.parentNode.classList.toggle('subnav-open');

    });


  }
})();








