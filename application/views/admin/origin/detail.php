<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chi tiết xuất xứ
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('admin/origin') ?>"><i class="fa fa-dashboard"></i> Danh sách xuất xứ</a></li>
            <li class="active">Chi tiết xuất xứ</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Chi tiết: <span class="label label-success"><?= $detail['title'] ?></span></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="detail-info col-md-6">
                                <div class="table-responsive">
                                    <label>Thông tin</label>
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Slug</th>
                                                <td><?= $detail['slug'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tài khoản tạo</th>
                                                <td><?= $detail['created_by'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Thời gian tạo</th>
                                                <td><?= date('Y-m-d H:i:s', $detail['created_at']) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tài khoản cập nhật</th>
                                                <td><?= $detail['updated_by'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Thời gian cập nhật</th>
                                                <td><?= date('Y-m-d H:i:s', $detail['updated_at']) ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="<?= base_url('admin/origin/edit/' . $detail['id']) ?>" class="btn btn-warning" role="button">Chỉnh sửa</a>
                                <br>
                                <br>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </section>
</div>