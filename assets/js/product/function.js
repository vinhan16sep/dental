$(document).ready(function () {
    let swiperHighlight = new Swiper('#swiperHighlight', {
        slidesPerView: 3,
        spaceBetween: 32,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 3
            }
        },
        autoplay: {
            delay: 5000
        },
        navigation: {
            nextEl: '#swiperHighlight .swiper-button-next',
            prevEl: '#swiperHighlight .swiper-button-prev'
        },
        pagination: {
            el: '#swiperHighlight .swiper-pagination'
        }
    });

    $('[data-bs-toggle="tooltip"]').tooltip();
});
