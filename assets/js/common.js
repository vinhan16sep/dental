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

            $(window).scrollTop(0);
        })
        .on('click', '.btn-change-lang', function (e) {
            e.preventDefault();

            let lang = $(this).data('lang');

            $(this).parents('.dropdown').find('.btn-lang').text(lang.toUpperCase());
        });

    $(window).on('scroll', function () {
        if ($(window).scrollTop() <= 70) {
            $('#btnScrollTop').removeClass('show');
        } else {
            $('#btnScrollTop').addClass('show');
        }

        if ($(window).scrollTop() <= 90) {
            $('.page-header header').removeClass('fixed');
            $('.page-header header .logo').attr('src', '/assets/img/logo.svg');
        } else {
            $('.page-header header').addClass('fixed');
            $('.page-header header .logo').attr('src', '/assets/img/logo_w.svg');
        }
    });
});
