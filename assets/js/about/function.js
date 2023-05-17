$(document).ready(function () {
    let swiperClient = new Swiper('#swiperClient', {
        slidesPerView: 4,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 3
            },
            1024: {
                slidesPerView: 4
            }
        },
        navigation: {
            nextEl: '#swiperClient .swiper-button-next',
            prevEl: '#swiperClient .swiper-button-prev'
        },
        pagination: {
            el: '#swiperClient .swiper-pagination'
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
        },
        pagination: {
            el: '#swiperFaq .swiper-pagination'
        }
    });

    $('.btn-get-faq-detail')
        .unbind()
        .on('click', function (e) {
            e.preventDefault();

            const $modal = $('#modalFaqDetail');

            $modal.modal('show');
        });
});
