$(document).ready(function () {
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

    $('.btn-select-partner-by-origin')
        .unbind()
        .on('click', function (e) {
            e.preventDefault();

            $('.btn-select-partner-by-origin').removeClass('active');
            $(this).addClass('active');

            getPartners(1);
        });

    getPartners();
});

let currentPage = 1;

function getPartners(page = currentPage) {
    const $wrapper = $('.partners-list .row');
    $wrapper.empty();

    currentPage = page;

    let url = '/partners/getPartners';

    let data = {
        _token: $('[name="csrf_token"]').attr('value'),
        limit: 15,
        start: (currentPage - 1) * 20,
        keyword: ''
    };

    let originId = false;

    if ($('.btn-select-partner-by-origin.active').length > 0) {
        originId = $('.btn-select-partner-by-origin.active').data('id');
    }

    if (originId) {
        data.originId = originId;
    }

    $.ajax({
        url: url,
        method: 'GET',
        data: data,
        success: (res) => {
            if (res[0].partners.length > 0) {
                $wrapper.empty();

                for (let i = 0; i < res[0].partners.length; i++) {
                    let partner = res[0].partners[i];

                    let $item = $('.item-partner-prepare').clone().show();
                    $item.removeClass('item-partner-prepare');

                    $item.find('a').attr('href', `/partners/detail/${partner['slug']}`);
                    $item.find('img').attr('src', `/assets/upload/partner/${partner['slug']}/${partner['image']}`);

                    $item.find('.partner-title').text(partner['title']);
                    $item.find('.partner-desc').text(partner['description']);

                    $wrapper.append($item);
                }

                if (res[0].partners.length >= 15) {
                    new Pagination('.pagination', {
                        current: currentPage,
                        total: res[0].total,
                        perPage: 15,
                        onClickItem: getPartners
                    });
                } else {
                    $('.pagination').removeClass('show');
                }
            } else {
                $wrapper.html(`
                    <p class="p-overline no-data">
                        Không có đối tác nào được tìm thấy!
                    </p>
                `);
            }
        },
        error: () => {}
    });
}
