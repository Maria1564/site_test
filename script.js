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

const headerContainer = document.querySelector(".header__container");
const nav = document.querySelector(".header__nav");

function updateHeaderStickyState() {
  const isSticky = window.scrollY > 140;
  headerContainer.classList.toggle("header__container_sticky", isSticky);
  nav.classList.toggle("header__nav_sticky", isSticky);
}

window.addEventListener("scroll", updateHeaderStickyState);
window.addEventListener("load", updateHeaderStickyState);
