const hamburger = document.querySelector(".hamburger")
const mobileNav = document.querySelector(".mobile-nav")
const hamburgerToggle = document.querySelectorAll(".hamburger-toggle")
const closeMobileNav = document.querySelector(".close-mobile-nav")
const toggleMobileNav = () => {
    mobileNav.classList.toggle("slide") 
    hamburgerToggle.forEach(e => e.classList.toggle("hide")) 
};
    
hamburger.addEventListener("click", () => {
    console.log(mobileNav.classList.contains('slide'))
    if(!mobileNav.classList.contains('slide')){
        mobileNav.classList.add("slide")
    }else {
        mobileNav.classList.remove("slide")        
    }
    console.log('hamburger clicked')
})

closeMobileNav.addEventListener("click", () => {
    mobileNav.classList.remove("slide") 
    console.log('hamburger clicked')
});

console.log('hamburger loaded')
