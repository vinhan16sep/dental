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

        if ($('body').scrollTop() <= 90) {
            $('.page-header header').removeClass('fixed');
            $('.page-header header .logo').attr('src', '/assets/img/logo.svg');
        } else {
            $('.page-header header').addClass('fixed');
            $('.page-header header .logo').attr('src', '/assets/img/logo_w.svg');
        }
    });

    $('[name="searchKey"]')
        .unbind()
        .on('search', function () {
            value = $(this).val();

            window.location.href = `/product?s=${value}`;
        });
});

// GENERATE PAGINATION
class Pagination {
    constructor(element, options) {
        let defaultOptions = {
            current: 1,
            total: 10,
            perPage: 5,
            limitShowInput: 10,
            showInput: false,
            range: 5,
            onClickItem: false,
            extendParams: false
        };

        this.config = {
            ...defaultOptions,
            ...options
        };

        this.limit = Math.ceil(this.config.total / this.config.perPage);

        this.element = typeof element == 'object' ? $(element)[0] : element;

        this.render();
    }

    render() {
        const _this = this;

        if (_this.config.total > _this.config.perPage) {
            if (_this.limit >= _this.config.limitShowInput && _this.showInput) {
                $(_this.element).addClass('show-input');
            } else {
                $(_this.element).addClass('show');
            }
        } else {
            $(_this.element).removeClass('show-input');
            $(_this.element).removeClass('show');
        }

        $(_this.element).empty();

        let $list = $('<div class="pagination-list"></div>');

        let $aPrev = $(`
            <a href="#" class="pagination-item pagination-item-prev btn" role="button">
                Trước
            </a>
        `);

        $aPrev.unbind().on('click', function (e) {
            e.preventDefault();

            if (_this.config.onClickItem) {
                if (_this.config.extendParams) {
                    _this.config.onClickItem(_this.config.current - 1, _this.config.extendParams);
                } else {
                    _this.config.onClickItem(_this.config.current - 1);
                }
            }
        });

        if (_this.config.current > 1) {
            $list.append($aPrev);
        }

        _this.getPaginationItems($list);

        let $aNext = $(`
            <a href="#" class="pagination-item pagination-item-next btn" role="button">
                Sau
            </a>
        `);

        $aNext.unbind().on('click', function (e) {
            e.preventDefault();

            if (_this.config.onClickItem) {
                if (_this.config.extendParams) {
                    _this.config.onClickItem(Number(_this.config.current) + 1, _this.config.extendParams);
                } else {
                    _this.config.onClickItem(Number(_this.config.current) + 1);
                }
            }
        });

        if (_this.config.current < _this.limit) {
            $list.append($aNext);
        }

        $(_this.element).append($list);

        if (_this.limit >= _this.config.limitShowInput && _this.showInput) {
            let $input = $(`
                <div class="pagination-input">
                    <p class="p-sm">
                        ${lang['000200_192']}
                    </p>

                    <input type="number" class="form-control form-control-sm" min="1" max="${_this.limit}" value="${_this.config.current}">

                    <p class="p-sm">
                        <b>/${_this.limit}</b>
                    </p>
                </div>
            `);

            $input
                .find('.form-control')
                .unbind()
                .on('change', function () {
                    let value = $(this).val();
                    value = Number(value);

                    if (value < 1) {
                        value = 1;
                        $(this).val(1);
                    }

                    if (value > _this.limit) {
                        value = _this.limit;
                        $(this).val(_this.limit);
                    }

                    if (_this.config.onClickItem) {
                        if (_this.config.extendParams) {
                            _this.config.onClickItem(value, _this.config.extendParams);
                        } else {
                            _this.config.onClickItem(value);
                        }
                    }
                });

            $(_this.element).append($input);
        }
    }

    getPaginationItems($list) {
        const _this = this;

        let from = _this.config.current - 2;
        let to = _this.config.current + 2;

        let $a = $('<a href="#" class="pagination-item btn" role="button"></a>');

        if (_this.limit > _this.config.range) {
            if (from <= 1) {
                for (let i = 1; i <= to; i++) {
                    let $item = $a.clone();

                    $item.unbind().on('click', function (e) {
                        e.preventDefault();

                        if (_this.config.onClickItem) {
                            if (_this.config.extendParams) {
                                _this.config.onClickItem(i, _this.config.extendParams);
                            } else {
                                _this.config.onClickItem(i);
                            }
                        }
                    });

                    if (i == _this.config.current) {
                        $item.addClass('active');
                    }

                    $item.text(i);

                    $list.append($item);
                }

                let $disable = $a.clone();
                $disable.attr('disabled', true);
                $disable.addClass('disabled');
                $disable.text('...');

                $list.append($disable);

                let $itemLast = $a.clone();

                $itemLast.unbind().on('click', function (e) {
                    e.preventDefault();

                    if (_this.config.onClickItem) {
                        if (_this.config.extendParams) {
                            _this.config.onClickItem(_this.limit, _this.config.extendParams);
                        } else {
                            _this.config.onClickItem(_this.limit);
                        }
                    }
                });

                $itemLast.text(_this.limit);

                $list.append($itemLast);
            } else if (from > 1 && to < _this.limit) {
                let $itemFirst = $a.clone();
                $itemFirst.text(1);

                $itemFirst.unbind().on('click', function (e) {
                    e.preventDefault();

                    if (_this.config.onClickItem) {
                        if (_this.config.extendParams) {
                            _this.config.onClickItem(1, _this.config.extendParams);
                        } else {
                            _this.config.onClickItem(1);
                        }
                    }
                });

                $list.append($itemFirst);

                let $disable1 = $a.clone();
                $disable1.attr('disabled', true);
                $disable1.addClass('disabled');
                $disable1.text('...');

                $list.append($disable1);

                for (let i = from; i <= to; i++) {
                    let $item = $a.clone();

                    $item.unbind().on('click', function (e) {
                        e.preventDefault();

                        if (_this.config.onClickItem) {
                            if (_this.config.extendParams) {
                                _this.config.onClickItem(i, _this.config.extendParams);
                            } else {
                                _this.config.onClickItem(i);
                            }
                        }
                    });

                    if (i == _this.config.current) {
                        $item.addClass('active');
                    }

                    $item.text(i);

                    $list.append($item);
                }

                let $disable2 = $a.clone();
                $disable2.attr('disabled', true);
                $disable2.addClass('disabled');
                $disable2.text('...');

                $list.append($disable2);

                let $itemLast = $a.clone();
                $itemLast.text(_this.limit);

                $itemLast.unbind().on('click', function (e) {
                    e.preventDefault();

                    if (_this.config.onClickItem) {
                        if (_this.config.extendParams) {
                            _this.config.onClickItem(_this.limit, _this.config.extendParams);
                        } else {
                            _this.config.onClickItem(_this.limit);
                        }
                    }
                });

                $list.append($itemLast);
            } else if (to >= _this.limit) {
                let $itemFirst = $a.clone();

                $itemFirst.unbind().on('click', function (e) {
                    e.preventDefault();

                    if (_this.config.onClickItem) {
                        if (_this.config.extendParams) {
                            _this.config.onClickItem(1, _this.config.extendParams);
                        } else {
                            _this.config.onClickItem(1);
                        }
                    }
                });

                $itemFirst.text(1);

                $list.append($itemFirst);

                let $disable = $a.clone();
                $disable.attr('disabled', true);
                $disable.addClass('disabled');
                $disable.text('...');

                $list.append($disable);

                for (let i = from; i <= _this.limit; i++) {
                    let $item = $a.clone();

                    $item.unbind().on('click', function (e) {
                        e.preventDefault();

                        if (_this.config.onClickItem) {
                            if (_this.config.extendParams) {
                                _this.config.onClickItem(i, _this.config.extendParams);
                            } else {
                                _this.config.onClickItem(i);
                            }
                        }
                    });

                    if (i == _this.config.current) {
                        $item.addClass('active');
                    }

                    $item.text(i);

                    $list.append($item);
                }
            }
        } else {
            for (let i = 1; i <= _this.limit; i++) {
                let $item = $a.clone();

                $item.unbind().on('click', function (e) {
                    e.preventDefault();

                    if (_this.config.onClickItem) {
                        if (_this.config.extendParams) {
                            _this.config.onClickItem(i, _this.config.extendParams);
                        } else {
                            _this.config.onClickItem(i);
                        }
                    }
                });

                if (i == _this.config.current) {
                    $item.addClass('active');
                }

                $item.text(i);

                $list.append($item);
            }
        }
    }
}
