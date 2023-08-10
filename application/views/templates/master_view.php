<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf_token" content="<?php echo $this->security->get_csrf_token_name(); ?>">

        <title><?php echo $the_view_title;?></title>

        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon">

        <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/plugins/fontawesome/css/all.min.css') ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/scss/css/min/style.min.css') ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/scss/pages/css/min/pages.min.css') ?>" rel="stylesheet">

        <?php if(count($the_view_css) > 0):?>
            <?php foreach($the_view_css as $css): ?>
                <?php echo '<link href="' . base_url($css) . '" rel="stylesheet">' ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </head>
    <body>
        <div class="page">
            <div class="page-header">
                <?php $this->load->view('templates/public_parts/master_header_view'); ?>
            </div>

            <div class="page-body">
                <div class="fixed-buttons fixed-center">
                    <a href="tel:+84903424205" class="btn btn-primary" role="button">
                        <i class="fas fa-headphones"></i>
                    </a>
                    <a href="tel:+84903424205" class="btn btn-primary" role="button">
                        <i class="fas fa-phone-volume"></i>
                    </a>
                    <a href="tel:+84903424205" class="btn btn-primary" role="button">
                        <i class="fas fa-file-pdf"></i>
                    </a>
                </div>

                <div class="fixed-buttons fixed-bottom">
                    <a href="#" class="btn btn-primary" id="btnScrollTop" role="button">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                </div>

                <div class="page-view">
                    <?php echo $the_view_content;?>
                </div>

                <div class="modal fade" id="modalReceiveNotification">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6>
                                    Đăng ký để nhận thông báo
                                </h6>

                                <button class="btn" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="modal-body">
                                <form action="">
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <input type="text" class="form-control" name="Name" placeholder="Họ tên">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" name="Email" placeholder="Email">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" name="PhoneNumber" placeholder="Số điện thoại">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" name="Position" placeholder="Vị trí">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" name="Company" placeholder="Đơn vị công tác">
                                        </div>
                                        <div class="buttons">
                                            <button class="btn btn-outline-primary" id="btnSubmit" type="button">
                                                Gửi <i class="fas fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-footer">
                <?php $this->load->view('templates/public_parts/master_footer_view'); ?>
            </div>
        </div>

        <script src="<?php echo base_url('assets/plugins/jquery/jquery-3.6.0.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

        <script src="<?php echo base_url('assets/js/common.min.js') ?>"></script>

        <?php if(count($the_view_js) > 0):?>
            <?php foreach($the_view_js as $js): ?>
                <?php echo '<script src="' . base_url($js) . '"></script>' ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>

