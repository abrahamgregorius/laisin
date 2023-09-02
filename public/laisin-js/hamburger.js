$(document).ready(function() {
    const hamburger = document.querySelector('.hamburger');
    const mobileNav = document.querySelector('.mobile-nav');
    const hamburgerToggle = document.querySelectorAll('.hamburger-toggle');
    const closeMobileNav = document.querySelector('.close-mobile-nav');

    const toggleMobileNav = () => {
        mobileNav.classList.toggle('slide');
        hamburgerToggle.forEach(element => element.classList.toggle('hide'));
    };

    hamburger.addEventListener('click', toggleMobileNav);
    closeMobileNav.addEventListener('click', toggleMobileNav);
});