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

            let id = $(this).data('id');

            $.ajax({
                url: `/about/getFaqById/${id}`,
                method: 'GET',
                dataType: 'json',
                data: {
                    _token: $('meta[name="csrf_token"]').attr('content')
                },
                success: (res) => {
                    const $modal = $('#modalFaqDetail');

                    if (res && res.length > 0) {
                        $modal.find('.faq-question').text(res[0].faq[0].question);
                        $modal.find('.faq-answer').text(res[0].faq[0].answer);

                        $modal.modal('show');
                    }
                }
            });
        });
});
