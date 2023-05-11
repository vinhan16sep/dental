$(document).ready(function () {
    // new WOW({
    //     scrollContainer: 'body'
    // }).init();

    // WOW
    new WOW({
        scrollContainer: 'body'
    }).init();

    // new WOW().init();

    setTimeout(() => {
        $('#modalBanner').modal('show');
    }, 5000);

    let swiperCover = new Swiper('#swiperCover', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
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
            let href = $slide.find('a').attr('href');

            $('#swiperCover').parents('.section').find('.cover-content a.btn-lg').attr('href', href);
        }
    });

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
        slidesPerView: 5,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 5
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

                        $slide
                            .find('a')
                            .unbind()
                            .on('click', function (e) {
                                e.preventDefault();

                                getHighlightDetail(highlight.id);
                            });

                        $wrapper.find('.swiper-wrapper').append($slide);
                    }

                    $wrapper.find('.swiper-wrapper').append(`
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="circle">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>

                                        <h6 class="subtitle-md">
                                            Xem tất cả sản phẩm
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    `);

                    let swiperHighlight = new Swiper('#swiperHighlight', {
                        slidesPerView: 3,
                        spaceBetween: 32,
                        breakpoints: {
                            0: {
                                slidesPerView: 1
                            },
                            1024: {
                                slidesPerView: 3
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

function getHighlightDetail(id) {
    const $modal = $('#modalHighlightDetail');

    let url = `/homepage/getHighlightDetail`;

    url += `/${id}`;

    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        data: {
            _token: $('meta[name="csrf_token"]').attr('content')
        },
        success: (res) => {
            let detail = res[0].detail;

            $modal.find('img').attr('alt', detail.title);
            $modal.find('img').attr('src', detail.image);

            $modal.find('h3').text(detail.title);
            $modal.find('p.description').text(detail.description);
            $modal.find('.product-brand').text(detail.brand);
            $modal.find('.product-made-in').text(detail.made_in);
            $modal.find('.product-warranty').text(detail.warranty);
            $modal.find('.append-content').html(detail.content);

            $modal.find('a').attr('href', detail.url);

            $modal.modal('show');
        }
    });
}
