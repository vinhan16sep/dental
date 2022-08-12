<style type="text/css">
    .box-body img{
        width: 100%;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chi tiết tin tức
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('admin/news') ?>"><i class="fa fa-dashboard"></i> Danh sách tin tức</a></li>
            <li class="active">Chi tiết tin tức</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Chi tiết: <span class="label label-success"><?= $detail['title'] ?></span></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="detail-image col-md-6">
                                <label>Ảnh đại diện</label>
                                <div class="row">
                                    <div class="item col-md-12">
                                        <div class="mask-lg">
                                            <?php if ( $detail['image'] ): ?>
                                                <img src="<?= base_url('assets/upload/news/' . $detail['slug'] . '/' . $detail['image'] ) ?>" alt="Image Detail" width=100%>    
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                <th>Tài khoản tạo bài viết</th>
                                                <td><?= $detail['created_by'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Thời gian tạo bài viết</th>
                                                <td><?= date('H:i:s / d-m-Y', strtotime($detail['created_at'])) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tài khoản cập nhật bài viết</th>
                                                <td><?= $detail['updated_by'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Thời gian cập nhật bài viết</th>
                                                <td><?= date('H:i:s / d-m-Y', strtotime($detail['updated_at'])) ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <div class="box box-info" style="box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.1)">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Giới thiệu</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <?= $detail['description'] ?>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <div class="box box-success" style="box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.1)">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Nội dung</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <?= $detail['body'] ?>
                                    </div>
                                    <!-- /.box-body -->
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
                    <div class="box-body">
                        <a href="<?= base_url('admin/news/edit/' . $detail['id']) ?>" class="btn btn-warning" role="button">Chỉnh sửa</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </section>
</div>