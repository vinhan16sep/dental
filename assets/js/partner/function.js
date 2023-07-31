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

            const $wrapper = $('.partners-list .row');

            let id = $(this).data('id');
            let url = `/partners/getPartnerByOriginId/${id}`;

            $.ajax({
                url: url,
                method: 'GET',
                data: {
                    _token: $('[name="csrf_token"]').attr('value')
                },
                success: (res) => {
                    if (res[0].partners.length > 0) {
                        $wrapper.empty();

                        for (let i = 0; i < res[0].partners.length; i++) {
                            let partner = res[0].partners[i];

                            let $item = $('.item-partner-prepare').clone().show();
                            $item.removeClass('item-partner-prepare');

                            $item.find('a').attr('href', `/partner/detail/${partner['slug']}`);
                            $item.find('img').attr('src', `/assets/upload/partner/${partner['slug']}/${partner['image']}`);

                            $item.find('.partner-title').text(partner['title']);
                            $item.find('.partner-desc').text(partner['description']);

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
