document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.development-stages__slider', {
    slidesPerView: 3.2,
    spaceBetween: 20,
    breakpoints: {
      0: {
        slidesPerView: 1.15,
        centeredSlides: false,
      },
      771: {
        slidesPerView: 2.15,
        centeredSlides: false,
      },
      1271: {
        slidesPerView: 3.15,
        centeredSlides: false,
      },
    },
    navigation: {
      nextEl: '.development-stages__arrow--next',
      prevEl: '.development-stages__arrow--prev',
    },
  });
});
