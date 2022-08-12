<style type="text/css">
    .box-body img{
        width: 100%;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thông tin liên hệ
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('admin/doctor') ?>"><i class="fa fa-dashboard"></i> Thông tin liên hệ</a></li>
            <li class="active">Chi tiết liên hệ</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-9">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="detail-info col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Địa chỉ</th>
                                                <td><?= $detail['address'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Google map</th>
                                                <td><?= $detail['google_map'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Số điện thoại</th>
                                                <td><?= $detail['phone'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Fax</th>
                                                <td><?= $detail['fax'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td><?= $detail['email'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Link Facebook</th>
                                                <td><?= $detail['facebook'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Link Instagram</th>
                                                <td><?= $detail['instagram'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Link Linkedin</th>
                                                <td><?= $detail['linkedin'] ?></td>
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
                    <div class="box-body">
                        <a href="<?= base_url('admin/contact/edit') ?>" class="btn btn-warning" role="button">Chỉnh sửa</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </section>
</div>