const navbar = document.getElementById("navbar");
const navbarMenu = document.querySelectorAll(".nav-item-custom");
const menuDesktop = document.getElementById("menu-desktop");
const btnMenuMobile = document.getElementById("mobileMenu");
const btnAuthGuest = document.getElementById("btnCreateAccount");

// Navbar event listener
function navbarScrollEvent() {
    window.addEventListener("scroll", () => {
        if (window.scrollY > 0) {
            navbar.classList.add("scrolled");
            navbar.classList.remove("position-absolute");
            navbarMenu.forEach((item) => {
                item.classList.add("navbar-menu-scrolled");
            });
            btnMenuMobile.classList.add("text-white");
        } else {
            navbar.classList.remove("scrolled");
            navbar.classList.add("position-absolute");
            navbarMenu.forEach((item) => {
                item.classList.remove("navbar-menu-scrolled");
            });
            btnMenuMobile.classList.remove("text-white");
        }
    });
}

function navbarResponsiveEvent() {
    window.addEventListener("load", () => {
        const width = window.innerWidth;
        if (width > 769) {
            menuDesktop.classList.remove("d-none");
            menuDesktop.classList.add("d-flex");
            btnMenuMobile.classList.remove("d-block");
            btnMenuMobile.classList.add("d-none");
            btnAuthGuest.classList.remove("d-none");
            btnAuthGuest.classList.add("d-block");
        } else {
            menuDesktop.classList.remove("d-flex");
            menuDesktop.classList.add("d-none");
            btnMenuMobile.classList.add("d-block");
            btnMenuMobile.classList.remove("d-none");
            btnAuthGuest.classList.add("d-none");
            btnAuthGuest.classList.remove("d-block");
        }
    });

    window.addEventListener("resize", () => {
        const width = window.innerWidth;
        if (width > 769) {
            menuDesktop.classList.remove("d-none");
            menuDesktop.classList.add("d-flex");
            btnMenuMobile.classList.remove("d-block");
            btnMenuMobile.classList.add("d-none");
            btnAuthGuest.classList.remove("d-none");
            btnAuthGuest.classList.add("d-block");
        } else {
            menuDesktop.classList.remove("d-flex");
            menuDesktop.classList.add("d-none");
            btnMenuMobile.classList.add("d-block");
            btnMenuMobile.classList.remove("d-none");
            btnAuthGuest.classList.add("d-none");
            btnAuthGuest.classList.remove("d-block");
        }
    });
}

// function listener
navbarScrollEvent();
navbarResponsiveEvent();
