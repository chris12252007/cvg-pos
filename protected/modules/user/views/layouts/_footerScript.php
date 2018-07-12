
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src='<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/fastclick/fastclick.min.js'></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/dist/js/app.min.js" type="text/javascript"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/dist/js/pages/dashboard2.js" type="text/javascript"></script>
<!--<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/dist/js/demo.js" type="text/javascript"></script>-->

<script>
    $(function () {
        $('.datepicker').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '1950:2050',
            dateFormat: 'yy-mm-dd'
        });
        $('.clockpicker').clockpicker({
            donetext: 'Done'
        });
//        $('.datetimepicker').datetimepicker({
//            format: 'Y-m-d H:m'
//        });
    });
</script>