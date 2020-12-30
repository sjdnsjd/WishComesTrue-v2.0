var swiper;
$(document).ready(function () {
  swiper = new Swiper('.swiper-container', {
    speed: 300,
    updateOnWindowResize: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    mousewheel: true,
    keyboard: true,
    autoplay: true,
    loop: true,
    // autoHeight: true,
    dynamicBullets: true,
  });
});
