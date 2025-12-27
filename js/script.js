
// swiper
var swiper = new Swiper (".mySwiper",{
    slidesperview: 1,
    spacebetween: 50,
    loop: true,
    grabcursor: true,
    pagination:{
        el: "swiper-pagination",
        clickable: true,
    },
    Navigation: {
        nextEl: ".swiper-button-next",
        prevel: ".swiper-button-prev",
    },

});

// scroll reveal
ScrollReveal({
        reset: true,
        distance: '80px',
        duration:2000,
        delay: 200
    });
ScrollReveal().reveal('.home-content, .heading', {origin:'top'});

//contact email
const form = document.querySelector("form");
const fullname = document.getElementById
