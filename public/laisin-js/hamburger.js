let hamburger = document.querySelector('.hamburger')
let mobileNav = document.querySelector('.mobile-nav')
let hamburgerToggleNotOpen = document.querySelector('.not-open')
let hamburgerToggleOpen = document.querySelector('.open')
let closeMobileNav = document.querySelector('.close-mobile-nav')

hamburger.addEventListener('click',function(){
    mobileNav.classList.toggle('slide')
    if(mobileNav.classList.contains('slide')){
        hamburgerToggleNotOpen.classList.add('hide')
        hamburgerToggleOpen.classList.remove('hide')
    } else {
        hamburgerToggleNotOpen.classList.remove('hide')
        hamburgerToggleOpen.classList.add('hide')
    }
})

closeMobileNav.addEventListener('click',function(){
   mobileNav.classList.remove('slide')
   hamburgerToggleNotOpen.classList.remove('hide')
   hamburgerToggleOpen.classList.add('hide')
});

