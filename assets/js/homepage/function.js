$(document).ready(function () {
    let swiperCover = new Swiper('#swiperCover', {
        slidesPerView: 'auto',
        spaceBetween: 24,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            360: {
                slidesPerView: 'auto'
            },
            800: {
                slidesPerView: 'auto'
            },
            1024: {
                slidesPerView: 'auto'
            }
        },
        navigation: {
            nextEl: '#swiperCover .swiper-button-next',
            prevEl: '#swiperCover .swiper-button-prev'
        },
        pagination: {
            el: '#swiperCover .swiper-pagination'
        }
    });

    swiperCover.on('slideChange', (swiper) => {
        let index = swiper.realIndex;

        let $slide = $(`#swiperCover .swiper-slide[data-index="${index}"]`);

        if ($slide) {
            let title = $slide.data('title');

            $('#swiperCover').parents('.section').find('.slide-title').text(title);
        }
    });

    // WOW
    new WOW().init();

    let swiperFlashSale = new Swiper('#swiperFlashSale', {
        slidesPerView: 2,
        spaceBetween: 24,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            800: {
                slidesPerView: 2
            }
        },
        navigation: {
            nextEl: '#swiperFlashSale .swiper-button-next',
            prevEl: '#swiperFlashSale .swiper-button-prev'
        }
    });

    getHighlightByCategory();

    let swiperHighlight = new Swiper('#swiperHighlight', {
        slidesPerView: 'auto',
        spaceBetween: 24,
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
            nextEl: '#swiperHighlight .swiper-button-next',
            prevEl: '#swiperHighlight .swiper-button-prev'
        }
    });

    let swiperBlogs = new Swiper('#swiperBlogs', {
        slidesPerView: 3,
        spaceBetween: 24,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 3
            }
        },
        navigation: {
            nextEl: '#swiperBlogs .swiper-button-next',
            prevEl: '#swiperBlogs .swiper-button-prev'
        }
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

    $('.get-highlight-by-category')
        .unbind()
        .on('click', function () {
            let category = $(this).data('type');

            if (category != 'all') {
                getHighlightByCategory(category);
            } else {
                getHighlightByCategory();
            }
        });
});

function getHighlightByCategory(category = false) {
    const $wrapper = $('#swiperHighlight');
    // $wrapper.empty();

    // let url = `/homepage/getHighlightByCategory`;

    // if (category) {
    //     url += `/${category}`;
    // }

    // $.ajax({
    //     url: url,
    //     type: 'GET',
    //     dataType: 'json',
    //     data: {
    //         _token: $('meta[name="csrf_token"]').attr('content')
    //     },
    //     success: (res) => {
    //         console.log(res);
    //     },
    //     error: () => {}
    // });

    if (!category) {
        category = 'all';
    }

    $('.section-highlight').find('ul').find('.get-highlight-by-category').removeClass('active');
    $('.section-highlight').find('ul').find(`.get-highlight-by-category[data-type="${category}"]`).addClass('active');
}
