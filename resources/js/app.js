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


        doToggle: function (e) {
            e.preventDefault();
            this.body.classList.toggle('nav-open');
        },

    };

    toggle.navToggle.addEventListener('click', function (e) {
        toggle.doToggle(e);
    });

}());

(function subnavToggle() {
  var items = document.querySelectorAll('.has-children > .menu__link');

  for (var i = 0; i < items.length; i++) {
    items[i].addEventListener('click', function () {
      if (window.innerWidth < 600) {
        event.preventDefault();
        this.parentNode.classList.toggle('subnav-open');
      }
    })
  }
})();



window.addEventListener('touchstart', function () {

    var items = document.querySelectorAll('.has-children > .menu__link');

    for (var i = 0; i < items.length; i++) {
        items[i].setAttribute('href', '#');
    }

});


/* Scroll header */
const scrollElement = document.querySelector('body');
const detached = "detached";
const invisible = "invisible"
let previousScroll = 0;
let menuOffset = 120;
const detachPoint = 650;
const hideShowOffset = 20;

window.addEventListener("scroll", () => {
  let currentScroll = window.pageYOffset;
  let scrollDifference = Math.abs(currentScroll - previousScroll);
  // if scrolled past menu
  if (currentScroll > menuOffset) {
    // if scrolled past detach point add class to fix menu 
    if (currentScroll > detachPoint) {
      scrollElement.classList.add(detached)
    }
    // if scrolling faster than hideShowOffset hide/show menu
    if (scrollDifference >= hideShowOffset) {
      if (currentScroll > previousScroll) {
        // Scrolling down, hide menu
        scrollElement.classList.add(invisible)
      } else {
        scrollElement.classList.remove(invisible);
      }
    }

  } else {
    if (currentScroll <= 0) {
      scrollElement.classList.remove(detached);
    }
  }
  // if user is at the bottom of document show menu
  if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
    scrollElement.classList.remove(invisible);
  }
  previousScroll = currentScroll;
});


// sticky nav
/* 
jQuery(window).scroll(function (e) {
    var $el = jQuery('.sticky-menu');
    var isPositionFixed = ($el.css('position') == 'fixed');
    if (jQuery(this).scrollTop() > 200 && !isPositionFixed) {
        $el.css({
            'position': 'fixed',
        });

        $el.addClass('stick-to-top')
    }
    if (jQuery(this).scrollTop() < 200 && isPositionFixed) {
        $el.css({
            'position': 'static'
        });

        $el.removeClass('stick-to-top')

    }
}); */

// Coverage TABS
jQuery('.callout-tabs .fl-callout a').click(function (e) {
    var t = jQuery(this).attr('href');
    var target = jQuery(t);
    e.preventDefault();
    jQuery('.coverage-row.active').removeClass('active');
    jQuery(t).addClass('active');

});