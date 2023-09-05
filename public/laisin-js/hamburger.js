const hamburger = document.querySelector(".hamburger"),
    mobileNav = document.querySelector(".mobile-nav"),
    hamburgerToggle = document.querySelectorAll(".hamburger-toggle"),
    closeMobileNav = document.querySelector(".close-mobile-nav"),
    toggleMobileNav = () => { mobileNav.classList.toggle("slide"), hamburgerToggle.forEach(e => e.classList.toggle("hide")) };
hamburger.addEventListener("click", toggleMobileNav), closeMobileNav.addEventListener("click", toggleMobileNav);