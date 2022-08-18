$(document).ready(function () {
    let swiperHighlight = new Swiper('#swiperHighlight', {
        slidesPerView: 4,
        spaceBetween: 32,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 4
            }
        },
        navigation: {
            nextEl: '#swiperHighlight .swiper-button-next',
            prevEl: '#swiperHighlight .swiper-button-prev'
        }
    });
});
