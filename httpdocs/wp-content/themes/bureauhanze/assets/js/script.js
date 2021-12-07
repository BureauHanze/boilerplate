("use strict");

// Nav
const pageOverlay = document.getElementById("page-overlay");
const page = document.getElementById("page");
const navContainer = document.querySelector(".nav");
const openNav = document.getElementById("open_nav");
const closeNav = document.getElementById("close_nav");

// Nav init
function navClose(){
    pageOverlay.classList.remove("page-overlay--active");
    navContainer.classList.remove("nav--active");
}

// When the user clicks on the button, open the nav
openNav.onclick = function () {
    pageOverlay.className += " page-overlay--active";
    navContainer.className += " nav--active";
};

// When the user clicks on [ X ], close the nav
closeNav.onclick = function () {
    navClose();
};

// When the user clicks anywhere outside of the nav modal, close it
window.onclick = function (event) {
    if (event.target == pageOverlay) {
        navClose();
    }
};

// Scroll to top
function scrollToTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}

// Sticky header
window.onscroll = function() {StickyHeader()};
const header = document.getElementById("main__header");
const sticky = header.offsetTop;
function StickyHeader() {
   if (window.pageYOffset > sticky) {
     header.classList.add("header-sticky");
   } else {
     header.classList.remove("header-sticky");
   }
}