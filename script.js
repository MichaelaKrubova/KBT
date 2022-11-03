//topbar and navigation 

const toggleBtn = document.querySelector(".mobile-nav-toggle");
const navMenu = document.querySelector(".nav-menu");
const topBar = document.querySelector(".topbar");


//mobile menu transition
window.addEventListener("DOMContentLoaded",()=> {
    navMenu.classList.add("activated");
})

//change color of topBar on scroll
/*window.addEventListener("scroll", () => {
    if(document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        topBar.classList.add("scrolled");
    }
    else {
        topBar.classList.remove("scrolled");
    }
})
*/
//opening menu with click on menu icon and hiding on click on close icon or outside the menu
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


