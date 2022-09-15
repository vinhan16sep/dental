<header>
    <div class="header-brand">
        <a href="<?php echo base_url('/') ?>">
            <img src="<?php echo base_url('/assets/img/logo.svg') ?>" alt="Logo Minh Dental">
        </a>
    </div>

    <div class="header-menu">
        <div class="menu-item">
            <a href="<?php echo base_url('/') ?>">
                Trang chủ
            </a>
        </div>

        <div class="menu-item">
            <a href="<?php echo base_url('/about') ?>" class="<?php echo ($this->uri->segment(1) == 'about') ? 'active' : '' ?>">
                Giới thiệu
            </a>
        </div>

        <div class="menu-item">
            <a href="<?php echo base_url('/product') ?>" class="<?php echo (($this->uri->segment(1)) == 'product') ? 'active' : ''?>">
                Sản phẩm
            </a>

            <div class="menu-item-content">
                <div class="container">
                    <div class="row">
                        <?php foreach($product_category as $category): ?>
                            <div class="col-lg-4">
                                <h6>
                                    <a href="<?php echo base_url('/product/' . $category['slug']) ?>">
                                        <?php echo $category['title'] ?>
                                    </a>
                                </h6>

                                <div class="ratio-wrapper ratio-wrapper-16-9">
                                    <div class="img-mask">
                                        <img src="<?php echo $category['image'] ?>" alt="<?php echo $category['title'] ?>">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item">
            <a href="<?php echo base_url('/service') ?>" class="<?php echo (($this->uri->segment(1)) == 'service') ? 'active' : ''?>">
                Dịch vụ
            </a>
        </div>

        <div class="menu-item">
            <a href="<?php echo base_url('/blogs') ?>" class="<?php echo (($this->uri->segment(1)) == 'blogs') ? 'active' : ''?>">
                Tin tức
            </a>
        </div>

        <div class="menu-item">
            <a href="<?php echo base_url('/contact') ?>" class="<?php echo (($this->uri->segment(1)) == 'contact') ? 'active' : ''?>">
                Liên hệ
            </a>
        </div>
    </div>

    <div class="header-search">
        <button class="btn btn-search" data-bs-toggle="collapse" data-bs-target="#searchCollapse" type="button">
            <i class="fas fa-search"></i>
        </button>

        <div class="header-search-menu">
            <div class="search-collapse collapse" id="searchCollapse">
                <div class="container">
                    <div class="input-group">
                        <select class="form-select" name="searchType">
                            <option value="0">Tất cả</option>
                            <option value="1">Ghế nha khoa - Máy nén</option>
                            <option value="2">Tay khoan nha khoa</option>
                            <option value="3">Thiết bị - Phụ tùng</option>
                            <option value="4">Laboratory</option>
                            <option value="5">Vật tư - Dụng cụ</option>
                        </select>

                        <input type="search" class="form-control" name="searchKey">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-expand">
        <button class="btn btn-expand-menu" type="button">
            <div class="line"></div>
        </button>
    </div>
</header>