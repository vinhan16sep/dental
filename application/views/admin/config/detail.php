<style type="text/css">
    .box-body img{
        width: 100%;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chi tiết
            <small>Thông tin chung</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('admin/doctor') ?>"><i class="fa fa-dashboard"></i> Danh sách Thông tin chung</a></li>
            <li class="active">Chi tiết Thông tin chung</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Chi tiết: Thông tin chung</span></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="detail-info col-md-12">
                                <div class="table-responsive">
                                    <label>Thông tin</label>
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Tiêu đề</th>
                                                <td style="text-transform: uppercase;"><?= $detail['title'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Mô tả</th>
                                                <td><?= $detail['description'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Hình ảnh</th>
                                                <td><img src="<?= base_url("assets/upload/config/").$detail['image'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <th>Tài khoản cập nhật</th>
                                                <td><?= $detail['updated_by'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Thời gian cập nhật</th>
                                                <td><?= date('H:i:s / d-m-Y', $detail['updated_at']) ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Edit Information</h3>
                    </div>
                    <div class="box-body">
                        <a href="<?= base_url('admin/config/edit') ?>" class="btn btn-warning" role="button">Chỉnh sửa</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </section>
</div>