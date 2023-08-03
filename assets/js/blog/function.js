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

    $('.btn-select-news-by-category')
        .unbind()
        .on('click', function (e) {
            e.preventDefault();

            $('.btn-select-news-by-category').removeClass('active');
            $(this).addClass('active');

            getBlogs(1);
        });

    getBlogs();
});

let currentPage = 1;

function getBlogs(page = currentPage) {
    const $wrapper = $('.list-blogs .row');
    $wrapper.empty();

    currentPage = page;

    let url = '/blogs/getBlogs';

    let data = {
        _token: $('[name="csrf_token"]').attr('value'),
        limit: 15,
        start: (currentPage - 1) * 20,
        keyword: ''
    };

    let categoryId = false;

    if ($('.btn-select-news-by-category.active').length > 0) {
        categoryId = $('.btn-select-news-by-category.active').data('id');
    }

    if (categoryId) {
        data.categoryId = categoryId;
    }

    $.ajax({
        url: url,
        method: 'GET',
        data: data,
        success: (res) => {
            if (res[0].news.length > 0) {
                $wrapper.empty();

                for (let i = 0; i < res[0].news.length; i++) {
                    let blog = res[0].news[i];

                    let $item = $('.item-news-prepare').clone().show();
                    $item.removeClass('item-news-prepare');

                    $item.find('a').attr('href', `/blogs/detail/${blog['slug']}`);
                    $item.find('img').attr('src', `/assets/upload/news/${blog['slug']}/${blog['image']}`);

                    $item.find('.news-title').text(blog['title']);
                    $item.find('.news-desc').text(blog['description']);

                    $wrapper.append($item);
                }

                if (res[0].news.length >= 15) {
                    new Pagination('.pagination', {
                        current: currentPage,
                        total: res[0].total,
                        perPage: 15,
                        onClickItem: getBlogs
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

function initIsotope() {
    $('.list-blogs').isotope({
        itemSelector: '.item',
        percentPosition: true,
        masonry: {
            columnWidth: '.item-sizer'
        }
    });

    $('.list-blogs')
        .imagesLoaded()
        .progress(function () {
            $('.list-blogs').isotope('layout');
        });
}
