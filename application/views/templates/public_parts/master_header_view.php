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
                        <?php 
                            $categories = [
                                0 => [
                                    'title' => 'Ghế nha khoa - Máy nén',
                                    'image' => 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
                                    'url' => '/product'
                                ],
                                1 => [
                                    'title' => 'Tay khoan nha khoa',
                                    'image' => 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
                                    'url' => '/product'
                                ],
                                2 => [
                                    'title' => 'Thiết bị - Phụ tùng',
                                    'image' => 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
                                    'url' => '/product'
                                ],
                                3 => [
                                    'title' => 'Laboratory',
                                    'image' => 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
                                    'url' => '/product'
                                ],
                                4 => [
                                    'title' => 'Vật tư - Dụng cụ',
                                    'image' => 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
                                    'url' => '/product'
                                ],
                            ];
                        ?>

                        <?php foreach($categories as $category): ?>
                            <div class="col-lg-4">
                                <h6>
                                    <a href="<?php echo $category['url'] ?>">
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