<!--Dashboard 1-->
<!-- jQuery 3 -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/raphael/raphael.min.js"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/moment/min/moment.min.js"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/dist/js/pages/dashboard.js"></script>-->
<!--Dashboard 2-->
<!-- ChartJS -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/Chart.js/Chart.js"></script>

<!--Others-->
<!-- Select2 -->
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/adminlte/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="<?php print Settings::get_baseUrl(); ?>/smartadmin/js/alertify/alertify.min.js"></script>
 
<script>
   $(function () {
        $('.datepicker').datepicker({
            autoclose: true
        });
    });
</script>