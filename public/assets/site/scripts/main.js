const swiperSlide = new Swiper('.swiper-1', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 600,

    // Autoplay
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

});

const swiperCategorias = new Swiper('.swiper-2', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 600,

    // Autoplay
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },

    slidesPerView: 3,
    spaceBetween: 30,

    breakpoints: {
        600: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        991: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        280: {
            slidesPerView: 1,
            spaceBetween: 20,
        }
      },

});

