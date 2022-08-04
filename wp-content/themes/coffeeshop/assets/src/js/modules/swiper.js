import Swiper from 'swiper/bundle';

const initSlider = () => {

  const swiperMenu = new Swiper(`.menu-slider`, {

    navigation: {
      nextEl: `.menu__button--next`,
      prevEl: `.menu__button--prev`,
    },

    pagination: {
      el: `.swiper-pagination`,
    },

    spaceBetween: 30,

    slidesPerView: 1,

    breakpoints: {
      768: {
        slidesPerView: 2,
      },

      1280: {
        slidesPerView: 3,
      },
    },
  });
};

export default initSlider;
