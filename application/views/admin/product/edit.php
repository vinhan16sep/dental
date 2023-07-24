<style type="text/css">
    .bootstrap-tagsinput{
        width: 100%;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chỉnh sửa sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url('admin/product') ?>"><i class="fa fa-dashboard"></i> Danh sách sản phẩm</a></li>
            <li class="active">Chỉnh sửa sản phẩm</li>
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

                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <label for="image">Hình ảnh đang sử dụng</label><br />
                                <?php if ( $detail['image'] ): ?>
                                    <img src="<?php echo base_url('assets/upload/product/' . $detail['slug'] . '/' . $detail['image']) ?>" width="500">
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

                        <div class="form-group col-xs-12" style="padding-right: 0px;">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <label for="parent_id">Danh mục</label>
                                <?php echo form_error('parent_id', '<div class="error">', '</div>'); ?>
                                <select name="parent_id" class="form-control" id="parent_id">
                                    <option value="">Chọn danh mục</option>
                                    <?php if ( $category ): ?>
                                        <?php foreach ($category as $key => $value): ?>
                                            <option value="<?php echo $value['id'] ?>" <?php echo ($value['id'] == $detail['category_id'])? 'selected' : '' ?> ><?php echo $value['title'] ?></option>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12" style="padding-right: 0px;">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <label for="origin_id">Xuất xứ</label>
                                <?php echo form_error('origin_id', '<div class="error">', '</div>'); ?>
                                <select name="origin_id" class="form-control" id="origin_id">
                                    <option value="">Chọn xuất xứ</option>
                                    <?php if ( $origins ): ?>
                                        <?php foreach ($origins as $key => $value): ?>
                                            <option value="<?php echo $value['id'] ?>" <?php echo ($value['id'] == $detail['origin_id'])? 'selected' : '' ?> ><?php echo $value['title'] ?></option>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12" style="padding-right: 0px;">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <label for="brand_id">Thương hiệu</label>
                                <?php echo form_error('brand_id', '<div class="error">', '</div>'); ?>
                                <select name="brand_id" class="form-control" id="brand_id">
                                    <option value="">Chọn thương hiệu</option>
                                    <?php if ( $brands ): ?>
                                        <?php foreach ($brands as $key => $value): ?>
                                            <option value="<?php echo $value['id'] ?>" <?php echo ($value['id'] == $detail['brand_id'])? 'selected' : '' ?> ><?php echo $value['title'] ?></option>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12" style="padding-right: 0px;">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <?php
                                echo form_label('Tiêu đề', 'title');
                                echo form_error('title', '<div class="error">', '</div>');
                                echo form_input('title', set_value('title', $detail['title']), 'class="form-control" id="title"');
                                ?>
                            </div>
                        </div>

                        <div class="form-group col-xs-12" style="padding-right: 0px;">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <?php
                                echo form_label('Mã sản phẩm', 'code');
                                echo form_error('code', '<div class="error">', '</div>');
                                echo form_input('code', set_value('code', $detail['code']), 'class="form-control" id="code"');
                                ?>
                            </div>
                        </div>

                        <div class="form-group col-xs-12" style="padding-right: 0px;">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <?php
                                echo form_label('Giá sản phẩm', 'price');
                                echo form_error('price', '<div class="error">', '</div>');
                                echo form_input('price', set_value('price', $detail['price']), 'class="form-control" id="price"');
                                ?>
                            </div>
                        </div>

                        <div class="form-group col-xs-12" style="padding-right: 0px;">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <?php
                                echo form_label('Slug', 'slug');
                                echo form_error('slug', '<div class="error">', '</div>');
                                echo form_input('slug', set_value('slug', $detail['slug']), 'class="form-control" id="slug" readonly');
                                ?>
                            </div>
                        </div>

                        <div class="form-group col-md-2">
                            <?php
                            echo form_label('Đánh giá', 'rating');
                            echo form_error('rating', '<div class="error">', '</div>');
                            echo form_dropdown('rating', $master_rating, $detail['rating'], 'class="form-control" id="rating"');
                            ?>
                        </div>

                        <div class="form-group col-md-12">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <?php
                                    echo form_error('is_focus', '<div class="error">', '</div>');
                                    echo form_checkbox('is_focus', '1', $detail['is_focus'] ? TRUE : FALSE, 'id="is_focus" style="margin-right: 4px;"');
                                    echo form_label('Nổi bật', 'is_focus');
                                ?>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <?php
                                    echo form_error('is_sale', '<div class="error">', '</div>');
                                    echo form_checkbox('is_sale', '1', $detail['is_sale'] ? TRUE : FALSE, 'id="is_sale" style="margin-right: 4px;"');
                                    echo form_label('Flash sale', 'is_sale');
                                ?>
                            </div>
                        </div>

                        <div class="form-group col-xs-12" style="padding-right: 0px;">
                            <div class="form-group col-xs-12" style="padding-right: 0px;">
                                <?php
                                echo form_label('Bảo hành', 'warranty');
                                echo form_error('warranty', '<div class="error">', '</div>');
                                echo form_input('warranty', set_value('warranty', $detail['warranty']), 'class="form-control" id="warranty"');
                                ?>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo form_label('Giới thiệu', 'description');
                            echo form_error('description', '<div class="error">', '</div>');
                            echo form_textarea('description', $detail['description'], 'class="form-control" id="description"');
                            ?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo form_label('Nội dung', 'body');
                            echo form_error('body', '<div class="error">', '</div>');
                            echo form_textarea('body', $detail['body'], 'class="form-control tinymce-area" id="body"');
                            ?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo form_label('Trạng thái', 'is_active');
                            echo form_error('is_active', '<div class="error">', '</div>');
                            echo form_dropdown('is_active', array('Chưa kích hoạt', 'Kích hoạt'), $detail['is_active'], 'class="form-control" id="is_active"');
                            ?>
                        </div>
                        <div class="form-group col-xs-12">
                            <a href="javascript:history.back()" class="btn btn-default">Quay lại</a>
                            <?php echo form_submit('submit', 'Cập nhật', 'class="btn btn-primary pull-right margin-right-xs" '); ?>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

