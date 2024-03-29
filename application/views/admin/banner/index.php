<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách
            <small>
                Banner
            </small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php if ($this->session->flashdata('message_error')): ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    <?php echo $this->session->flashdata('message_error'); ?>
                </div>
            <?php endif ?>
            <?php if ($this->session->flashdata('message_success')): ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    <?php echo $this->session->flashdata('message_success'); ?>
                </div>
            <?php endif ?>
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash() ?>" id="csrf" />
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <div class="row" style="padding: 10px;">
                        <div class="col-md-6">
                            <a href="<?php echo base_url('admin/'.$controller.'/create') ?>" class="btn btn-primary" role="button">Thêm mới</a>
                        </div>
                        <div class="col-md-6">
                            <form action="<?php echo base_url('admin/'.$controller.'/index') ?>" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm ..." name="search" value="">
                                    <span class="input-group-btn">
                                        <input type="submit" class="btn btn-block btn-primary" value="Tìm kiếm">
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="table" class="table table_product">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Hình ảnh</th>
                                        <th>Url</th>
                                        <th>Trạng thái</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(!empty($result)): ?>
                                <?php foreach ($result as $key => $value): ?>

                                    <tr class="remove-<?= $value['id'] ?>">
                                            <td><?php echo $key+1 ?></td>
                                            <td>
                                                <div class="mask_sm">
                                                    <img src="<?= base_url('assets/upload/banner/' . $value['image']) ?>"  width=150px height=100px>
                                                </div>
                                            </td>
                                            <td>
                                                <?php echo $value['url'] ?>
                                            </td>
                                            <td class="is-active-<?= $value['id'] ?>">
                                                <?php
                                                    if ($value['is_active'] == 0) {
                                                        echo '<span class="label label-warning">Không sử dụng</span>';
                                                    }else{
                                                        echo '<span class="label label-success">Đang sử dụng</span>';
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/banner/detail/' . $value['id'] ) ?>" title="Xem chi tiết">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="<?= base_url('admin/banner/edit/' . $value['id'] ) ?>" style="color: #f0ad4e" title="Cập nhật">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="javascript:void(0)" class="btn-remove" data-id="<?= $value['id'] ?>" data-url="<?= base_url('admin/banner/remove' ) ?>" data-name="danh mục"  style="color: #d9534f" title="Xóa">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                    <?php if ($value['is_active'] == 0): ?>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="javascript:void(0)" class="btn-active" title="Sử dụng" data-id="<?= $value['id'] ?>" data-url="<?= base_url('admin/banner/active' ) ?>" style="color: #00a65a" >
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                    <?php endif; ?>
                                                    <?php if ($value['is_active'] == 1): ?>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="javascript:void(0)" class="btn-deactive" title="Tắt" data-id="<?= $value['id'] ?>" data-url="<?= base_url('admin/banner/deactive' ) ?>" style="color: #f0ad4e">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                    <?php endif; ?>
                                            </td>
                                        </tr>
                                <?php endforeach ?>
                                    <tr>
                                        <th>No.</th>
                                        <th>Hình ảnh</th>
                                        <th>Url</th>
                                        <th>Trạng thái</th>
                                        <th>Action</th>
                                    </tr>
                                <?php else: ?>
                                    <tr>
                                        Chưa có Banner
                                    </tr>
                                <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6 col-md-offset-5 page">
                            <?php echo (isset($page_links))? $page_links : ''; ?>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
