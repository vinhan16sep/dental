<!-- <div class="sub-header">
    <div class="sub-header-left">
        <p>
            Hotline: <a href="tel:+84903424205">0903.424.205</a>
        </p>
    </div>

    <div class="sub-header-right">
        <p>
            <i class="fas fa-map-marker"></i> Số 41 ngõ 38 Phương Mai - Đống Đa - Hà Nội
        </p>
    </div>
</div> -->

<header>
    <div class="container">
        <div class="header-brand">
            <a href="<?php echo base_url('/') ?>">
                <img src="<?php echo base_url('/assets/img/logo.svg') ?>" class="logo" alt="Logo Minh Dental">
            </a>
        </div>
    
        <div class="header-menu">
            <div class="menu-item">
                <a href="<?php echo base_url('/about/') ?>" class="<?php echo ($this->uri->segment(1) == 'about') ? 'active' : '' ?>">
                    Giới thiệu
                </a>
            </div>
    
            <div class="menu-item">
                <a href="<?php echo base_url('/product/') ?>" class="<?php echo (($this->uri->segment(1)) == 'product') ? 'active' : ''?>">
                    Sản phẩm
                </a>

                <div class="menu-wrapper">
                    <div class="row">
                        <?php foreach($product_category as $category): ?>
                            <div class="col-lg-4">
                                <a href="<?php echo base_url('/product/' . $category['slug']) ?>">		
                                    <div class="img-mask">
                                        <img src="https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZGVudGFsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Cover of category">
                                    </div>
                                    <h6>
                                        <?php echo $category['title'] ?>
                                    </h6>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
    
            <div class="menu-item">
                <a href="<?php echo base_url('/service/') ?>" class="<?php echo (($this->uri->segment(1)) == 'service') ? 'active' : ''?>">
                    Dịch vụ
                </a>
            </div>
    
            <div class="menu-item">
                <a href="<?php echo base_url('/partners/') ?>" class="<?php echo (($this->uri->segment(1)) == 'partners') ? 'active' : ''?>">
                    Đối tác
                </a>
            </div>
    
            <div class="menu-item">
                <a href="<?php echo base_url('/blogs/') ?>" class="<?php echo (($this->uri->segment(1)) == 'blogs') ? 'active' : ''?>">
                    Tin tức
                </a>
            </div>
    
            <div class="menu-item">
                <a href="<?php echo base_url('/contact/') ?>" class="<?php echo (($this->uri->segment(1)) == 'contact') ? 'active' : ''?>">
                    Liên hệ
                </a>
            </div>
        </div>
    
        <div class="header-search">
            <div class="dropdown">
                <button class="btn btn-lang" data-bs-toggle="dropdown" type="button">
                    VI
                </button>
    
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item btn-change-lang" data-lang="vi">
                        <img src="<?php echo base_url('assets/img/vi.png') ?>" alt="en"> Tiếng Việt
                    </a>
                    <a href="#" class="dropdown-item btn-change-lang" data-lang="en">
                        <img src="<?php echo base_url('assets/img/en.png') ?>" alt="en"> English
                    </a>
                </div>
            </div>
    
            <a href="tel:+84903424205" class="btn">
                <i class="fas fa-phone"></i>
            </a>
    
            <!-- <button class="btn btn-cart" id="btnCart" type="button">
                <i class="fas fa-shopping-cart"></i>
            </button> -->
    
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
    </div>
</header>