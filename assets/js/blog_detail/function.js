$(document).ready(function () {
    let swiperRelated = new Swiper('#swiperRelated', {
        slidesPerView: 3,
        spaceBetween: 24,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 3
            }
        },
        navigation: {
            nextEl: '#swiperRelated .swiper-button-next',
            prevEl: '#swiperRelated .swiper-button-prev'
        },
        pagination: {
            el: '#swiperRelated .swiper-pagination'
        }
    });
});
