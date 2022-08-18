$(document).ready(function () {
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
});
