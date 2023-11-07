/*
 * Site Scripts
 *
 */

// Javascript detect. Not sure why we need this anylonger. 
(function () {
    // Detect for Javascript. Remove .no-js body class added in /app/functions-filters.php
    var el = document.body;
    el.classList.remove("no-js");

})();


// Menu Toggle
(function () {

    var toggle = {
        navToggle: document.querySelector('#toggle-menu'),
        body: document.querySelector('.site-header'),

        doToggle: function (e) {
            this.body.classList.toggle('nav-open');
            // e.preventDefault();
        },

    };

    toggle.navToggle.addEventListener('click', function (e) {
        toggle.doToggle(e);
    });

}());

// Scroll Header
const body              = document.querySelector('body');
const detachedClass     = 'detached';
const invisibleClass    = 'invisible'; 
let   prevScrollY       = 0;
const menuOffset        = 120;
const detachPoint       = 650;
const hideShowOffset    = 20;

window.addEventListener('scroll', () => {

  const currentScrollY = window.scrollY;

  // Add detached class if past detach point
  if (currentScrollY > detachPoint) {
    body.classList.add(detachedClass);
  } else {
    body.classList.remove(detachedClass);
  }

  // Hide/show menu if scrolling faster than offset
  if (Math.abs(currentScrollY - prevScrollY) >= hideShowOffset) {
    body.classList.toggle(invisibleClass, currentScrollY > prevScrollY);
  }

  // Show menu if at bottom
  if (window.innerHeight + currentScrollY >= document.body.offsetHeight) {
    // body.classList.remove(invisibleClass);
  }

  prevScrollY = currentScrollY;

});


window.addEventListener('load', () => {

  const loading = document.querySelector('.preload');

  loading.style.opacity = 0;

  setTimeout(() => {
    loading.remove(); 
  }, 1000); // wait 0.5s

});


// Front page 
const sections = document.querySelectorAll('.section');
const bgs = document.querySelectorAll('.bg');

window.addEventListener('scroll', () => {

  let scrollPos = window.scrollY;
  
  sections.forEach((section, idx) => {

    // Is section in view?
    const inView = scrollPos >= section.offsetTop - (window.innerHeight / 2.25) && 
                  scrollPos <= section.offsetTop + section.offsetHeight - (window.innerHeight / 2.25);
                  
    if(inView) {
      section.style.opacity = 1;
      bgs[idx].style.opacity = 1;
      
    } else {
      section.style.opacity = 0; 
      bgs[idx].style.opacity = 0;
    }

  });

});

// Capabilities fade

const listItems = document.querySelectorAll('.cap-list__item');
const images = document.querySelectorAll('.cap-bgs img');

listItems.forEach((item, index) => {
  item.addEventListener('mouseover', () => {
    images[index].style.opacity = 1;
  });
  
  item.addEventListener('mouseout', () => {  
    images[index].style.opacity = 0;
  });
});


// Client slider
// Select slider element 
const slider = document.querySelector('.workwith');
const slides = slider.querySelectorAll('li');

// Setup variables
let currentIndex = 0;
let slideWidth = slides[0].clientWidth;


// Setup variables
let scrollAmount = 0;

// Slide function
function slide() {

  if (scrollAmount >= slider.scrollWidth - slider.clientWidth) {
    scrollAmount = 0;
  }

  currentIndex++;

  // Get slide width
  const item = slider.querySelector('li');
  const width = item.getBoundingClientRect().width;

  // Increment scroll
  scrollAmount += width;

  // Slide images
  slider.scrollLeft = scrollAmount;

}

// Clone slides  
const firstSlide = slides[0].cloneNode(true);
const lastSlide = slides[slides.length - 1].cloneNode(true);

slider.appendChild(firstSlide); 
slider.insertBefore(lastSlide, slides[0]);

// Auto slide
setInterval(slide, 3000);



window.addEventListener('popstate', () => {
  location.reload();
});

