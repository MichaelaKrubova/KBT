 const navMenu = document.querySelector(".nav-menu");
 const navToggle = document.querySelector(".mobile-nav-toggle");

 navToggle.addEventListener("click", () => {
    const visibility = navMenu.getAttribute("data-visible");
    
    if(visibility === "false") {
        navMenu.setAttribute("data-visible", true);
        navToggle.setAttribute("aria-expanded", true);

    }
    else  {
        navMenu.setAttribute("data-visible", false);
        navToggle.setAttribute("aria-expanded", false) 
    }
 })