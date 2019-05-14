/**
 * Primary front-end script.
 *
 * Primary JavaScript file. Any includes or anything imported should
 * be filtered through this file and eventually saved back into the
 * `/dist/js/app.js` file.
 *
 * @package   LiveLikeSam
 * @author    Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright Copyright (c) 2019, Bryan Hoffman
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
       if (window.innerWidth < 600) {
        event.preventDefault();
        this.parentNode.classList.toggle('subnav-open');
      }
    })
  }
})();



var previousScroll = 0, // previous scroll position
    menuOffset = 116, // height of menu (once scroll passed it, menu is hidden)
    detachPoint = 650, // point of detach (after scroll passed it, menu is fixed)
    hideShowOffset = 6; // scrolling value after which triggers hide/show menu

// on scroll hide/show menu
jQuery(window).scroll(function() {
    if (!jQuery('.app-header').hasClass('expanded')) {
        var currentScroll = jQuery(this).scrollTop(), // gets current scroll position
            scrollDifference = Math.abs(currentScroll - previousScroll); // calculates how fast user is scrolling

        // if scrolled past menu
        if (currentScroll > menuOffset) {
            // if scrolled past detach point add class to fix menu
            if (currentScroll > detachPoint) {
                if (!jQuery('.app-header').hasClass('detached')) {
                    jQuery('.app-header').addClass('detached');
                }
            }

            // if scrolling faster than hideShowOffset hide/show menu
            if (scrollDifference >= hideShowOffset) {
                if (currentScroll > previousScroll) {
                    // scrolling down; hide menu
                    if (!jQuery('.app-header').hasClass('invisible')) {
                        jQuery('.app-header').addClass('invisible');
                    }

                } else {
                    // scrolling up; show menu
                    if (jQuery('.app-header').hasClass('invisible')) {
                        jQuery('.app-header').removeClass('invisible');
                    }


                }
            }
        } else {
            // only remove “detached” class if user is at the top of document (menu jump fix)
            if (currentScroll <= 0) {
                jQuery('.app-header').removeClass('detached');
            }
        }

        // if user is at the bottom of document show menu
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            jQuery('.app-header').removeClass('invisible');
        }

        // replace previous scroll position with new one
        previousScroll = currentScroll;
    }
});







