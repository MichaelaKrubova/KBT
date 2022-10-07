const toggleBtn = document.querySelector(".mobile-nav-toggle");
const navMenu = document.querySelector(".nav-menu");
const topBar = document.querySelector("header");


window.addEventListener("DOMContentLoaded",()=> {
    navMenu.classList.add("activated");
})


//menu is hiding on click enywhere
document.addEventListener("click", (e) => {
    console.log(e.target);
    const isExpanded = toggleBtn.getAttribute("aria-expanded");

    if(e.target.id === "toggleBtn" && isExpanded === "false") {
        toggleBtn.setAttribute("aria-expanded", true);
        navMenu.setAttribute("data-visible", true);
    }


    else if (e.target.id !== "toggleBtn" && e.target.id !== "nav-menu" && e.target.id !== "dropdown" && e.target.id !== "dropdown-link") {
        toggleBtn.setAttribute("aria-expanded", false);
        navMenu.setAttribute("data-visible", false);
    }
})


