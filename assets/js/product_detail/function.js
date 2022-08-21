$(document).ready(function () {
    let swiperRelated = new Swiper('#swiperRelated', {
        slidesPerView: 'auto',
        spaceBetween: 24,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 'auto'
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
