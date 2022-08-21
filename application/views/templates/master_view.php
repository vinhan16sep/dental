<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf_token" value="<?php echo $this->security->get_csrf_token_name(); ?>">

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
                <div class="page-view">
                    <?php echo $the_view_content;?>
                </div>
            </div>

            <div class="page-footer">
                <?php $this->load->view('templates/public_parts/master_footer_view'); ?>
            </div>
        </div>

        <script src="<?php echo base_url('assets/plugins/jquery/jquery-3.6.0.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>

        <script src="<?php echo base_url('assets/js/common.min.js') ?>"></script>

        <?php if(count($the_view_js) > 0):?>
            <?php foreach($the_view_js as $js): ?>
                <?php echo '<script src="' . base_url($js) . '"></script>' ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>

