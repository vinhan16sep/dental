$(document).ready(function () {
    $('.list-images').isotope({
        itemSelector: '.item',
        percentPosition: true,
        masonry: {
            columnWidth: '.item-sizer'
        }
    });

    $('.list-images')
        .imagesLoaded()
        .progress(function () {
            $('.list-images').isotope('layout');
        });

    let swiperClient = new Swiper('#swiperClient', {
        slidesPerView: 'auto',
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 'auto'
            }
        },
        navigation: {
            nextEl: '#swiperClient .swiper-button-next',
            prevEl: '#swiperClient .swiper-button-prev'
        }
    });

    let swiperFaq = new Swiper('#swiperFaq', {
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
            nextEl: '#swiperFaq .swiper-button-next',
            prevEl: '#swiperFaq .swiper-button-prev'
        }
    });
});
