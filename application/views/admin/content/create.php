<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm mới nội dung tĩnh 
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('admin/brand') ?>"><i class="fa fa-dashboard"></i> Danh sách nội dung tĩnh </a></li>
            <li class="active">Thêm mới nội dung tĩnh </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-default">
                    <div class="box-body">
                        <?php if ($this->session->flashdata('message_error')): ?>
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                                <?php echo $this->session->flashdata('message_error'); ?>
                            </div>
                        <?php endif ?>
                        <?php
                        echo form_open_multipart('', array('class' => 'form-horizontal'));
                        ?>
                        <div class="row">
                            <span><?php echo $this->session->flashdata('message'); ?></span>
                        </div>

                        <div class="form-group col-xs-12" style="padding-right: 0px;">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <label for="type">Loại</label>
                                <?php echo form_error('type', '<div class="error">', '</div>'); ?>
                                <select name="type" class="form-control" id="type">
                                    <option value="">Chọn Loại</option>
                                    <?php if ( $types ): ?>
                                        <?php foreach ($types as $key => $value): ?>
                                            <option value="<?php echo $key ?>" ><?php echo $value ?></option>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12" style="padding-right: 0px;">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <?php
                                echo form_label('Tiêu đề', 'title');
                                echo form_error('title');
                                echo form_input('title', set_value('title'), 'class="form-control" id="title"');
                                ?>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo form_label('Nội dung', 'content');
                            echo form_error('content', '<div class="error">', '</div>');
                            echo form_textarea('content', set_value('content'), 'class="form-control" id="content"');
                            ?>
                        </div>
                        
                        <div class="form-group col-xs-12">
                            <a href="javascript:history.back()" class="btn btn-default">Quay lại</a>
                            <?php echo form_submit('submit', 'Thêm mới', 'class="btn btn-primary pull-right margin-right-xs" '); ?>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

