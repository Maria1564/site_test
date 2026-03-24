const body = document.querySelector("body");
const mobileMenu = body.querySelector(".mobile__menu");
const btnOpenMenu = body.querySelector(".mobile__menu-btn");
const btnCloseMenu = body.querySelector(".mobile__menu-cross");

btnOpenMenu.addEventListener("click", () => {
  console.log("click");
  mobileMenu.style.transform = "translateX(0%)";
  body.style.overflow = "hidden";
});

btnCloseMenu.addEventListener("click", () => {
  mobileMenu.style.transform = "translateX(100%)";
  body.style.overflow = "auto";
});

const headerContainer = document.querySelector('.header__container');
const nav = document.querySelector(".header__nav")

  window.addEventListener('scroll', () => {
    if (window.scrollY > 90) {
      headerContainer.classList.add('header__container_sticky');
      nav.classList.add('header__nav_sticky');
    } else {
      headerContainer.classList.remove('header__container_sticky');
      nav.classList.remove('header__nav_sticky');
    }
  });