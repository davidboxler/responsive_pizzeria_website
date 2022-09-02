/*=============== BTN MENU HEADER ===============*/
let navbar = document.querySelector(".header .navbar");
let menuBtn = document.querySelector("#menu-btn");

menuBtn.onclick = () => {
  menuBtn.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

/*=============== SHOW SCROLL UP ===============*/
function scrollUp() {
  const scrollUp = document.getElementById("scroll-up");
  if (this.scrollY >= 350) scrollUp.classList.add("show-scroll");
  else scrollUp.classList.remove("show-scroll");
}
window.addEventListener("scroll", scrollUp);

/*=============== SHOW HOME SLIDER ===============*/
var swiper = new Swiper(".home-slider", {
  grabCursor: true,
  loop: true,
  speed: 500,
  centeredSlides: true,
  autoplay: true,
  navigation: {
    nextEl: ".carousel-button.next",
    prevEl: ".carousel-button.prev",
  },
});

/*=============== SHOW HOME SLIDER ===============*/
var swiper = new Swiper(".promotion-slider", {
  grabCursor: true,
  loop: true,
  speed: 500,
  centeredSlides: true,
  autoplay: true,
  navigation: {
    nextEl: ".carousel-button.next",
    prevEl: ".carousel-button.prev",
  },
});
