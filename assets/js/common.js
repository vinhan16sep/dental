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
        });
});
