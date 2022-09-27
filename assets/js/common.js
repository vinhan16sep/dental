$(document).ready(function () {
    $(document)
        .on('click', function (e) {
            if ($(e.target).parents('.header-menu').length == 0 && !$(e.target).hasClass('header-menu')) {
                $('.header-menu').removeClass('show');
                $('.btn-expand-menu').removeClass('active');
            }
        })
        .on('click', '.btn-expand-menu', function (e) {
            e.stopPropagation();

            $('.header-menu').toggleClass('show');
            $(this).toggleClass('active');
        })
        .on('click', '#btnScrollTop', function (e) {
            e.preventDefault();

            $('body').scrollTop(0);
        })
        .on('click', '.btn-change-lang', function (e) {
            e.preventDefault();

            let lang = $(this).data('lang');

            $(this).parents('.dropdown').find('.btn-lang').text(lang.toUpperCase());
        });

    $('body').on('scroll', function () {
        if ($('body').scrollTop() <= 70) {
            $('#btnScrollTop').removeClass('show');
        } else {
            $('#btnScrollTop').addClass('show');
        }
    });
});
