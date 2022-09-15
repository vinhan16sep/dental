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
        },
        pagination: {
            el: '#swiperFlashSale .swiper-pagination'
        }
    });

    getHighlightByCategory();

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
        },
        pagination: {
            el: '#swiperBlogs .swiper-pagination'
        }
    });

    let swiperClient = new Swiper('#swiperClient', {
        slidesPerView: 'auto',
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 'auto'
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
    let url = `/homepage/getHighlightByCategory`;

    if (category) {
        url += `/${category}`;
    }

    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        data: {
            _token: $('meta[name="csrf_token"]').attr('content')
        },
        success: (res) => {
            if (res) {
                let highlights = res[0].highlights;

                const $wrapper = $('#swiperHighlight');
                $wrapper.find('.swiper-wrapper').empty();

                if (highlights.length > 0) {
                    for (let i = 0; i < highlights.length; i++) {
                        let highlight = highlights[i];

                        let $slide = $('.swiper-slide-highlight-prepare').clone().show();
                        $slide.removeClass('swiper-slide-highlight-prepare');

                        $slide.find('a').attr('href', highlight.url);
                        $slide.find('img').attr('src', highlight.image);
                        $slide.find('img').attr('alt', highlight.title);
                        $slide.find('.code').text(highlight.code);
                        $slide.find('.title').text(highlight.title);
                        $slide.find('.made-in').text(highlight.made_in);
                        $slide.find('.standard').text(highlight.standard);

                        $wrapper.find('.swiper-wrapper').append($slide);
                    }

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
                        },
                        pagination: {
                            el: '#swiperHighlight .swiper-pagination'
                        }
                    });
                }
            }
        },
        error: () => {}
    });

    if (!category) {
        category = 'all';
    }

    $('.section-highlight').find('ul').find('.get-highlight-by-category').removeClass('active');
    $('.section-highlight').find('ul').find(`.get-highlight-by-category[data-type="${category}"]`).addClass('active');
}
