$(document).ready(function () {
    // new WOW({
    //     scrollContainer: 'body'
    // }).init();

    // WOW
    new WOW({
        scrollContainer: 'body'
    }).init();

    // new WOW().init();

    // setTimeout(() => {
    //     $('#modalBanner').modal('show');
    // }, 5000);

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
            768: {
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
            576: {
                slidesPerView: 3
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

    $('#filterHighlight')
        .unbind()
        .on('change', function () {
            let category = $(this).val();

            if (category != 'all') {
                getHighlightByCategory(category);
            } else {
                getHighlightByCategory();
            }
        });
});

function getHighlightByCategory(category = '') {
    let url = `/homepage/getHighlightByCategory`;

    let data = {
        _token: $('[name="csrf_token"]').attr('value'),
        category: category
    };

    $.ajax({
        url: url,
        type: 'GET',
        data: data,
        success: (res) => {
            if (res) {
                let highlights = res[0].highlights;

                const $wrapper = $('#swiperHighlight');
                $wrapper.find('.swiper-wrapper').empty();

                if (highlights.length > 0) {
                    for (let i = 0; i < highlights.length; i++) {
                        let product = highlights[i];

                        let $item = $('.swiper-slide-highlight-prepare').clone().show();
                        $item.removeClass('swiper-slide-highlight-prepare');

                        $item.find('a:not([data-bs-toggle])').attr('href', `/product/detail/${product['slug']}`);
                        $item.find('img').attr('src', `/assets/upload/product/${product['slug']}/${product['image']}`);

                        $item.find('.code').text(product['code'] != '' ? product['code'] : 'MSP');
                        $item.find('.title').text(product['title']);

                        $item.find('.brand span').text(product['brand']);
                        $item.find('.origin span').text(product['origin']);

                        $item.find('.price span').text(product['price'] != '' ? product['price'] : 'Liên hệ');

                        $wrapper.find('.swiper-wrapper').append($item);
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
                            768: {
                                slidesPerView: 2
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
                } else {
                    $wrapper.find('.swiper-wrapper').html(`
                        <p class="p-overline no-data">
                            Không có sản phẩm nào được tìm thấy!
                        </p>
                    `);
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
