<header>
    <div class="header-brand">
        <a href="<?php echo base_url('/') ?>">
            <img src="<?php echo base_url('/assets/img/logo.svg') ?>" alt="Logo Minh Dental">
        </a>
    </div>

    <div class="header-menu">
        <a href="<?php echo base_url('/') ?>">
            Trang chủ
        </a>
        <a href="<?php echo base_url('/about') ?>" class="<?php echo ($this->uri->segment(1) == 'about') ? 'active' : '' ?>">
            Giới thiệu
        </a>
        <a href="<?php echo base_url('/product') ?>" class="<?php echo (($this->uri->segment(1)) == 'product') ? 'active' : ''?>">
            Sản phẩm
        </a>
        <a href="<?php echo base_url('/service') ?>" class="<?php echo (($this->uri->segment(1)) == 'service') ? 'active' : ''?>">
            Dịch vụ
        </a>
        <a href="<?php echo base_url('/blogs') ?>" class="<?php echo (($this->uri->segment(1)) == 'blogs') ? 'active' : ''?>">
            Tin tức
        </a>
        <a href="<?php echo base_url('/contact') ?>" class="<?php echo (($this->uri->segment(1)) == 'contact') ? 'active' : ''?>">
            Liên hệ
        </a>
    </div>

    <div class="header-search">
        <button class="btn btn-search" type="button">
            <i class="fas fa-search"></i>
        </button>
    </div>

    <div class="header-expand">

    </div>
</header>