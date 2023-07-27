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

            const $wrapper = $('.products-list .row');

            let filter = $(this).data('filter');

            let url, id;

            switch (filter) {
                case 'origin':
                    id = $(this).data('id');
                    url = `/product/getProductByOriginId/${id}`;
                    break;
                case 'brand':
                    id = $(this).data('id');
                    url = `/product/getProductByBrandId/${id}`;
                    break;
                case 'focus':
                    url = '/product/getProductByOrigin';
                    break;
                case 'sale':
                    url = '/product/getProductBySale';
                    break;
            }

            $.ajax({
                url: url,
                method: 'GET',
                data: {
                    _token: $('[name="csrf_token"]').attr('value')
                },
                success: (res) => {
                    if (res[0].products.length > 0) {
                        $wrapper.empty();

                        for (let i = 0; i < res[0].products.length; i++) {
                            let product = res[0].products[i];

                            let $item = $('.item-product-prepare').clone().show();
                            $item.removeClass('item-product-prepare');

                            $item.find('a:not([data-bs-toggle])').attr('href', `/product/detail/${product['slug']}`);
                            $item.find('img').attr('src', `/assets/upload/product/${product['slug']}/${product['image']}`);

                            if (product['is_sale']) {
                                $item.find('.overlay').append(`
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Campagin">
                                        <i class="fas fa-bookmark"></i>
                                    </a>
                                `);
                            } else {
                                $item.find('.overlay').append('<div></div>');
                            }

                            if (product['is_focus']) {
                                $item.find('.overlay').append(`
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sản phẩm nổi bật">
                                        <i class="fas fa-star"></i>
                                    </a>
                                `);
                            } else {
                                $item.find('.overlay').append('<div></div>');
                            }

                            $item.find('.code').text(product['code']);
                            $item.find('.title').text(product['title']);

                            $item.find('.brand span').text(product['brand']);
                            $item.find('.origin span').text(product['origin']);

                            $item.find('.price span').text(product['price']);

                            $wrapper.append($item);
                        }
                    } else {
                        $wrapper.html(`
                            <p class="p-overline no-data">
                                Không có sản phẩm nào được tìm thấy!
                            </p>
                        `);
                    }
                },
                error: () => {}
            });
        });
});
