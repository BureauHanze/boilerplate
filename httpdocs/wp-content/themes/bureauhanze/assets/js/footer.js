
// Nav
const pageOverlay = document.getElementById("page-overlay");
const navContainer = document.querySelector(".nav");
const openNav = document.getElementById("nav--open");
const closeNav = document.getElementById("nav--close");

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
window.onscroll = function() {stickyHeader()};
const header = document.getElementById("main__header");
const sticky = header.offsetTop;
function stickyHeader() {
   if (window.pageYOffset > sticky) {
     header.classList.add("--sticky");
   } else {
     header.classList.remove("--sticky");
   }
}

// Add active class on current link
function highlightCurrent() {
    const curPage = document.URL;
    const links = document.getElementsByTagName('a');
    for (let link of links) {
        if (link.href == curPage) {
        link.classList.add("--active");
        }
    }
}
document.onreadystatechange = () => {
    if (document.readyState === 'complete') {
        highlightCurrent()
    }
};