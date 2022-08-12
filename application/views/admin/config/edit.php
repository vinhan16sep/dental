
<div class="content-wrapper" id="create-product-view">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cập nhật
            <small>
                liên hệ
            </small>
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
                                <div class="col-xs-12">
                                    <h4 class="box-title">Thông tin cơ bản</h4>
                                </div>
                                <div class="row">
                                    <span><?php echo $this->session->flashdata('message'); ?></span>
                                </div>
                                <div class="form-group col-xs-12">
                                    <div class="form-group col-xs-12">
                                        <label for="image">Hình ảnh đang sử dụng</label><br />
                                        <?php if ( isset($detail['image']) ): ?>
                                            <img src="<?php echo base_url('assets/upload/config/' . $detail['image']) ?>" width="450">
                                        <?php else: ?>
                                            Hiện chưa có hình ảnh
                                        <?php endif ?>
                                    </div>
                                </div>

                                <div class="form-group col-xs-12" style="padding-right: 0px;">
                                    <div class="form-group col-xs-12" style="padding-right: 0px;">
                                        <?php
                                            echo form_label('Hình ảnh (Dung lượng ảnh phải nhỏ hơn 1.2Mb)', 'image');
                                            echo form_error('image', '<div class="error">', '</div>');
                                            echo form_upload('image', set_value('image'), 'class="form-control"');
                                        ?>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group col-md-12" style="margin-bottom: 5px;">
                                    <?php
                                        echo form_label("Tiêu đề", 'title');
                                        echo form_error('title');
                                        echo form_input('title', isset($detail['title']) ? $detail['title'] : '', 'class="form-control" ');
                                    ?>
                                </div>
                                <div class="form-group col-md-12">
                                    <?php
                                    echo form_label('Giới thiệu', 'description');
                                    echo form_error('description', '<div class="error">', '</div>');
                                    echo form_textarea('description', isset($detail['description']) ? $detail['description'] : '', 'class="form-control" id="description"');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="col-xs-12">
                            <ul class="nav nav-tabs" role="tablist" id="nav-product">
                                <a class="btn btn-primary" id="go-back" onclick="history.back(-1);" >Go back</a>
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