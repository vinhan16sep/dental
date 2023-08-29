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
                        <?php foreach($product_category as  $key => $category): ?>
                            <div class="col-lg-4">
                                <a href="<?php echo base_url('/product/category/' . $category['slug']) ?>">		
                                    <div class="img-mask">
                                        <img src="<?php echo base_url('/assets/upload/product-category/' . $category['slug'] . '/' . $category['image']) ?>" alt="Dental">
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

            <div class="menu-item">
                <a class="btn btn-search" data-bs-toggle="collapse" data-bs-target="#searchCollapse" role="button">
                    <i class="fas fa-search"></i> <span>Tìm kiếm</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="tel:+84903424205" class="btn">
                    <i class="fas fa-phone"></i> Hotline
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
    
            
    
            <!-- <button class="btn btn-cart" id="btnCart" type="button">
                <i class="fas fa-shopping-cart"></i>
            </button> -->
    
            <div class="header-search-menu">
                <div class="search-collapse collapse" id="searchCollapse">
                    <div class="container">
                        <input type="search" class="form-control" name="searchKey" placeholder="Tìm kiếm..." value="<?php echo isset($s) ? $s : '' ?>">
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