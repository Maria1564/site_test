document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.development-stages__slider', {
    slidesPerView: 3,
    spaceBetween: 20,
    breakpoints: {
      0: {
        slidesPerView: 1,
        centeredSlides: false,
      },
      731: {
        slidesPerView: 2,
        centeredSlides: false,
      },
      1091: {
        slidesPerView: 3,
        centeredSlides: false,
      },
    },
    navigation: {
      nextEl: '.development-stages__arrow--next',
      prevEl: '.development-stages__arrow--prev',
    },
  });
});
