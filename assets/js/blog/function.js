$(document).ready(function () {
    initIsotope();

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

            const $wrapper = $('.list-blogs');

            let id = $(this).data('id');
            let url = `/blogs/getBlogsByCategory/${id}`;

            $.ajax({
                url: url,
                method: 'GET',
                data: {
                    _token: $('[name="csrf_token"]').attr('value')
                },
                success: (res) => {
                    if (res[0].news.length > 0) {
                        $wrapper.empty();

                        $wrapper.append('<div class="item-sizer"></div>');

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
        });
});

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
