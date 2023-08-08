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

    $('.btn-expand-item')
        .unbind()
        .on('click', function (e) {
            e.preventDefault();

            if ($(this).find('i').hasClass('fa-minus')) {
                $(this).find('i').removeClass('fa-minus').addClass('fa-plus');
            } else {
                $(this).find('i').removeClass('fa-plus').addClass('fa-minus');
            }

            $(this).parent().siblings('.item-body').slideToggle();
        });

    $('.btn-filter-product')
        .unbind()
        .on('click', function (e) {
            e.preventDefault();

            let filter = $(this).data('filter');

            if (filter == 'category' || filter == 'origin' || filter == 'brand') {
                if (!$(this).hasClass('active')) {
                    $(`.btn-filter-product[data-filter="${filter}"]`).removeClass('active');
                    $(this).addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            } else {
                $(this).toggleClass('active');
            }

            getProducts(1);
        });

    getProducts();
});

let currentPage = 1;

function getProducts(page = currentPage) {
    const $wrapper = $('#appendProducts');
    $wrapper.empty();

    currentPage = page;

    let url = '/product/getProducts';

    let data = {
        _token: $('[name="csrf_token"]').attr('value'),
        limit: 15,
        start: (currentPage - 1) * 20,
        keyword: ''
    };

    let categoryId = false;
    let originId = false;
    let brandId = false;
    let isFocus = false;
    let isSale = false;

    if ($('[data-filter="category"].active').length > 0) {
        categoryId = $('[data-filter="category"].active').data('id');
    }

    if ($('[data-filter="origin"].active').length > 0) {
        originId = $('[data-filter="origin"].active').data('id');
    }

    if ($('[data-filter="brand"].active').length > 0) {
        brandId = $('[data-filter="brand"].active').data('id');
    }

    if ($('[data-filter="focus"].active').length > 0) {
        isFocus = true;
    }

    if ($('[data-filter="sale"].active').length > 0) {
        isSale = true;
    }

    if (categoryId) {
        data.categoryId = categoryId;
    }

    if (originId) {
        data.originId = originId;
    }

    if (brandId) {
        data.brandId = brandId;
    }

    if (isFocus) {
        data.isFocus = true;
    }

    if (isSale) {
        data.isSale = true;
    }

    $.ajax({
        url: url,
        method: 'GET',
        data: data,
        success: (res) => {
            if (res[0].products.length > 0) {
                $wrapper.empty();

                for (let i = 0; i < res[0].products.length; i++) {
                    let product = res[0].products[i];

                    let $item = $('.item-product-prepare').clone().show();
                    $item.removeClass('item-product-prepare');

                    $item.find('a:not([data-bs-toggle])').attr('href', `/product/detail/${product['slug']}`);
                    $item.find('img').attr('src', `/assets/upload/product/${product['slug']}/${product['image']}`);

                    if (Number(product['is_sale'])) {
                        $item.find('.overlay').append(`
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Campagin">
                                <i class="fas fa-bookmark"></i>
                            </a>
                        `);
                    } else {
                        $item.find('.overlay').append('<div></div>');
                    }

                    if (Number(product['is_focus'])) {
                        $item.find('.overlay').append(`
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sản phẩm nổi bật">
                                <i class="fas fa-star"></i>
                            </a>
                        `);
                    } else {
                        $item.find('.overlay').append('<div></div>');
                    }

                    $item.find('.code').text(product['code'] != '' ? product['code'] : 'MSP');
                    $item.find('.title').text(product['title']);

                    $item.find('.brand span').text(product['brand']);
                    $item.find('.origin span').text(product['origin']);

                    $item.find('.price span').text(product['price'] != '' ? product['price'] : 'Liên hệ');

                    $wrapper.append($item);
                }

                if (res[0].products.length >= 15) {
                    new Pagination('.pagination', {
                        current: currentPage,
                        total: res[0].total,
                        perPage: 15,
                        onClickItem: getProducts
                    });
                } else {
                    $('.pagination').removeClass('show');
                }
            } else {
                $wrapper.html(`
                    <p class="p-overline no-data">
                        Không có sản phẩm nào được tìm thấy!
                    </p>
                `);

                $('.pagination').removeClass('show');
            }
        },
        error: () => {}
    });
}
