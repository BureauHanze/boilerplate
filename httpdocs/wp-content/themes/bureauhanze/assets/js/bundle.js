const pageOverlay=document.getElementById("page-overlay"),page=document.getElementById("page"),navContainer=document.querySelector(".nav"),openNav=document.getElementById("open_nav"),closeNav=document.getElementById("close_nav");function navClose(){pageOverlay.classList.remove("page-overlay--active"),navContainer.classList.remove("nav--active")}function scrollToTop(){window.scrollTo({top:0,behavior:"smooth"})}openNav.onclick=function(){pageOverlay.className+=" page-overlay--active",navContainer.className+=" nav--active"},closeNav.onclick=function(){navClose()},window.onclick=function(e){e.target==pageOverlay&&navClose()};
//# sourceMappingURL=bundle.js.map