$(document).ready(function () {
    let swipeCover = new Swiper('#swipeCover', {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 5000
        },
        navigation: {
            nextEl: '#swipeCover .swiper-button-next',
            prevEl: '#swipeCover .swiper-button-prev'
        },
        pagination: {
            el: '#swipeCover .swiper-pagination'
        }
    });

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
