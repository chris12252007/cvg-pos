<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title><?php print Settings::model_getValue_byID(Settings::CONFIG_COMPANY_NAME)->value ?></title>
        <meta name="description" content="">
        <meta name="author" content="">	
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php print Settings::get_baseUrl(); ?>/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <link href="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <link href="<?php print Settings::get_baseUrl(); ?>/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php print Settings::get_baseUrl(); ?>/adminlte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" media="screen" href="<?php print Settings::get_baseUrl(); ?>/css/flashes.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php print Settings::get_baseUrl(); ?>/css/ajax-loader.css">
        <link rel="stylesheet" href="<?php print Settings::get_baseUrl(); ?>/css/icons.css" />
        <link rel="stylesheet" href="<?php print Settings::get_baseUrl(); ?>/smartadmin/js/alertify/css/alertify.css" />
        <link rel="stylesheet" href="<?php print Settings::get_baseUrl(); ?>/smartadmin/js/alertify/css/alertify.default.css" />
        <link rel="stylesheet" href="<?php print Settings::get_baseUrl(); ?>/smartadmin/js/alertify/css/alertify.core.css" />
        <link rel="stylesheet" href="<?php print Settings::get_baseUrl(); ?>/smartadmin/js/plugin/intl-tel-input-master/build/css/intlTelInput.css" />
        <link type="text/css" rel="stylesheet" href="<?php print Settings::get_baseUrl(); ?>/smartadmin/css/loadingOverlay/waitMe.css">
        <link rel="shortcut icon" href="<?php print Settings::get_baseUrl(); ?>/images/favicon.png" type="image/x-icon">
    </head>
    <body class="skin-blue">
        <div class="wrapper">

            <?php $this->renderPartial('/layouts/_header'); ?>
            <?php $this->renderPartial('/layouts/_left'); ?>
            <div class="content-wrapper">
                <section class="content-header">
                <?php $this->renderPartial('/layouts/_ribbon'); ?>
                    <!-- Main content -->
                    <section class="content">

                        <?php print $content; ?>
                    </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <?php $this->renderPartial('/layouts/_footer'); ?>

        </div><!-- ./wrapper -->

    </div><!-- ./wrapper -->

    <?php $this->renderPartial('/layouts/_footerScript'); ?>
</body>
</html>