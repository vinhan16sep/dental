
<div class="content-wrapper" id="create-product-view">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cập nhật thông tin liên hệ
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <?php if ($this->session->flashdata('message_error')): ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                        <?php echo $this->session->flashdata('message_error'); ?>
                    </div>
                <?php endif ?>
                <?php
                    echo form_open_multipart('', array('class' => 'form-horizontal','id' => 'register-form'));
                ?>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <div class="box box-default">
                            <div class="box-body">
                                <div class="row">
                                    <span><?php echo $this->session->flashdata('message'); ?></span>
                                </div>
                                <div class="col-xs-12" style="margin-bottom: 5px;">
                                    <?php
                                        echo form_label("Địa chỉ", 'address');
                                        echo form_error('address');
                                        echo form_input('address', $detail['address'], 'class="form-control" ');
                                    ?>
                                </div>
                                <div class="col-xs-12" style="margin-bottom: 5px;">
                                    <?php
                                        echo form_label('Google map', 'google_map');
                                        echo form_error('google_map', '<div class="error">', '</div>');
                                        echo form_textarea('google_map', $detail['google_map'], 'class="form-control" id="google_map" style="height: 60px;"');
                                    ?>
                                </div>
                                <div class="col-xs-12" style="margin-bottom: 5px;">
                                    <?php
                                        echo form_label("Số điện thoại", 'phone');
                                        echo form_error('phone');
                                        echo form_input('phone', $detail['phone'], 'class="form-control" ');
                                    ?>
                                </div>
                                <div class="col-xs-12" style="margin-bottom: 5px;">
                                    <?php
                                        echo form_label("Fax", 'fax');
                                        echo form_error('fax');
                                        echo form_input('fax', $detail['fax'], 'class="form-control" ');
                                    ?>
                                </div>
                                <div class="col-xs-12" style="margin-bottom: 5px;">
                                    <?php
                                        echo form_label("Email", 'email');
                                        echo form_error('email');
                                        echo form_input('email', $detail['email'], 'class="form-control" ');
                                    ?>
                                </div>
                                <div class="col-xs-12" style="margin-bottom: 5px;">
                                    <?php
                                        echo form_label("Link Facebook", 'facebook');
                                        echo form_error('facebook');
                                        echo form_input('facebook', $detail['facebook'], 'class="form-control" ');
                                    ?>
                                </div>
                                <div class="col-xs-12" style="margin-bottom: 5px;">
                                    <?php
                                        echo form_label("Link Instagram", 'instagram');
                                        echo form_error('instagram');
                                        echo form_input('instagram', $detail['instagram'], 'class="form-control" ');
                                    ?>
                                </div>
                                <div class="col-xs-12" style="margin-bottom: 5px;">
                                    <?php
                                        echo form_label("Link Linkedin", 'linkedin');
                                        echo form_error('linkedin');
                                        echo form_input('linkedin', $detail['linkedin'], 'class="form-control" ');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="col-xs-12">
                            <ul class="nav nav-tabs" role="tablist" id="nav-product">
                                <a class="btn btn-primary" id="go-back" onclick="history.back(-1);" >Quay lại</a>
                                <input type="submit" name="submit_shared" id="submit-shared" value="OK" class="btn btn-primary" style="float: right;">
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </section>
</div>