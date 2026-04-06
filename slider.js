document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.development-stages__slider', {
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
      nextEl: '.development-stages__arrow--next',
      prevEl: '.development-stages__arrow--prev',
    },
  });
});