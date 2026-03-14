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
