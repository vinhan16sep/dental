<?php
if($this->ion_auth->logged_in()) {
?>
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo site_url('assets/admin/lib/dist/img/user.jpg') ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>
                        <?php 
                            if ($this->ion_auth->logged_in()) {
                                echo $this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name;
                            }
                        ?> 
                    </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MENU CHÍNH</li>
                <li class="<?php echo ($this->uri->segment(2) == 'dashboard')? 'active' : '' ?>">
                    <a href="<?php echo base_url('admin') ?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <!-- <li class="<?php echo ($this->uri->segment(2) == 'banner')? 'active' : '' ?>">
                    <a href="<?php echo base_url('admin/banner') ?>">
                        <i class="fa fa-inbox"></i> <span>Quản lý banner</span>
                    </a>
                </li> -->
                <li class="treeview <?php echo ($this->uri->segment(2) == 'about' )? 'active' : '' ?>" style="border-bottom: none;">
                    <a href="">
                        <i class="fa fa-bars"></i>
                        <span>Quản lý giới thiệu</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ( $this->uri->segment(2) == 'vision ' )? 'active' : '' ?>" >
                            <a href="<?php echo base_url('admin/about/vision') ?>"><i class="fa fa-leanpub" aria-hidden="true"></i> <span>Tầm nhìn</span></a>
                        </li>
                        <li class="<?php echo ( $this->uri->segment(2) == 'duty' )? 'active' : '' ?>" >
                            <a href="<?php echo base_url('admin/about/duty') ?>"><i class="fa fa-leanpub" aria-hidden="true"></i> <span>Sứ mệnh</span></a>
                        </li>
                        <li class="<?php echo ( $this->uri->segment(2) == 'value' )? 'active' : '' ?>" >
                            <a href="<?php echo base_url('admin/about/value') ?>"><i class="fa fa-leanpub" aria-hidden="true"></i> <span>Giá trị cốt lõi</span></a>
                        </li>
                    </ul>
                </li>
                <!-- Show slide Academy -->
                <li class="treeview <?php echo ($this->uri->segment(2) == 'product_category' || $this->uri->segment(2) == 'product' || $this->uri->segment(2) == 'origin' || $this->uri->segment(2) == 'brand' ) ? 'active' : '' ?>" style="border-bottom: none;">
                    <a href="">
                        <i class="fa fa-bars"></i>
                        <span>Quản lý sản phẩm</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ( $this->uri->segment(2) == 'product_category' )? 'active' : '' ?>" >
                            <a href="<?php echo base_url('admin/product_category') ?>"><i class="fa fa-calendar-o" aria-hidden="true"></i> <span>Danh mục</span></a>
                        </li>
                        <li class="<?php echo ( $this->uri->segment(2) == 'origin' )? 'active' : '' ?>" >
                            <a href="<?php echo base_url('admin/origin') ?>"><i class="fa fa-leanpub" aria-hidden="true"></i> <span>Xuất xứ</span></a>
                        </li>
                        <li class="<?php echo ( $this->uri->segment(2) == 'brand' )? 'active' : '' ?>" >
                            <a href="<?php echo base_url('admin/brand') ?>"><i class="fa fa-leanpub" aria-hidden="true"></i> <span>Thương hiệu</span></a>
                        </li>
                        <li class="<?php echo ( $this->uri->segment(2) == 'product' )? 'active' : '' ?>" >
                            <a href="<?php echo base_url('admin/product') ?>"><i class="fa fa-leanpub" aria-hidden="true"></i> <span>Sản phẩm</span></a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo ($this->uri->segment(2) == 'news')? 'active' : '' ?>">
                    <a href="<?php echo base_url('admin/news') ?>">
                        <i class="fa fa-newspaper-o"></i> <span>Quản lý tin tức</span>
                    </a>
                </li>
                <li class="<?php echo ($this->uri->segment(2) == 'service')? 'active' : '' ?>">
                    <a href="<?php echo base_url('admin/service') ?>">
                        <i class="fa fa-newspaper-o"></i> <span>Quản lý dịch vụ</span>
                    </a>
                </li>
                <li class="<?php echo ($this->uri->segment(2) == 'contact')? 'active' : '' ?>">
                    <a href="<?php echo base_url('admin/contact/detail') ?>">
                        <i class="fa fa-address-book" aria-hidden="true"></i> <span>Thông tin liên hệ</span>
                    </a>
                </li>
                <li class="<?php echo ($this->uri->segment(2) == 'message')? 'active' : '' ?>">
                    <a href="<?php echo base_url('admin/message') ?>">
                        <i class="fa fa-envelope" aria-hidden="true"></i> <span>Tin nhắn</span>
                    </a>
                </li>
                <li class="header">HỆ THỐNG</li>
                <li>
                    <a href="<?php echo base_url('admin/user/change_password') ?>">
                        <i class="fa fa-refresh" aria-hidden="true"></i> <span>Đổi Mật Khẩu</span>
                    </a>
                </li>
                <?php if ($this->ion_auth->is_admin()===TRUE): ?>
                    <li>
                        <a href="<?php echo base_url('admin/user/register') ?>">
                            <i class="fa fa-registered" aria-hidden="true"></i> <span>Tạo tài khoản</span>
                        </a>
                    </li>
                <?php endif ?>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
<?php } ?>



