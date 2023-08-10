$(document).ready(function () {
    let swipeCover = new Swiper('#swipeCover', {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 5000
        },
        navigation: {
            nextEl: '#swipeCover .swiper-button-next',
            prevEl: '#swipeCover .swiper-button-prev'
        },
        pagination: {
            el: '#swipeCover .swiper-pagination'
        }
    });

    let swiperRelated = new Swiper('#swiperRelated', {
        slidesPerView: 3,
        spaceBetween: 24,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 3
            }
        },
        navigation: {
            nextEl: '#swiperRelated .swiper-button-next',
            prevEl: '#swiperRelated .swiper-button-prev'
        },
        pagination: {
            el: '#swiperRelated .swiper-pagination'
        }
    });

    $('.btn-buy')
        .unbind()
        .on('click', function () {
            const $modal = $('#modalOrderProduct');

            $modal
                .find('.btn-confirm')
                .unbind()
                .on('click', function () {
                    let name = $modal.find('[name="Fullname"]').val();
                    let phone = $modal.find('[name="PhoneNumber"]').val();
                    let product = $modal.find('[name="Product"]').val();
                    let amount = Number($modal.find('[name="Amount"]').val());

                    if ($.trim(name).length == 0) {
                        $modal.find('[name="Fullname"]').siblings('.form-text').text('Thông tin bắt buộc!');
                        return;
                    }

                    $modal.find('[name="Fullname"]').siblings('.form-text').text('');

                    if ($.trim(phone).length == 0) {
                        $modal.find('[name="PhoneNumber"]').siblings('.form-text').text('Thông tin bắt buộc!');
                        return;
                    }

                    $modal.find('[name="PhoneNumber"]').siblings('.form-text').text('');

                    if (amount < 1) {
                        $modal.find('[name="Amount"]').val(1);
                    }
                });

            $modal.modal('show');
        });

    $('.btn-contact-us')
        .unbind()
        .on('click', function () {
            const $modal = $('#modalAdviseProduct');

            $modal
                .find('.btn-confirm')
                .unbind()
                .on('click', function () {
                    let name = $modal.find('[name="Fullname"]').val();
                    let phone = $modal.find('[name="PhoneNumber"]').val();
                    let product = $modal.find('[name="Product"]').val();

                    if ($.trim(name).length == 0) {
                        $modal.find('[name="Fullname"]').siblings('.form-text').text('Thông tin bắt buộc!');
                        return;
                    }

                    $modal.find('[name="Fullname"]').siblings('.form-text').text('');

                    if ($.trim(phone).length == 0) {
                        $modal.find('[name="PhoneNumber"]').siblings('.form-text').text('Thông tin bắt buộc!');
                        return;
                    }

                    $modal.find('[name="PhoneNumber"]').siblings('.form-text').text('');
                });

            $modal.modal('show');
        });
});
